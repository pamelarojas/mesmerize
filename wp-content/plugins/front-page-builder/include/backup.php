<?php

class fpb_backup_restore_options {

	function fpb_backup_restore_options() {
		add_action('admin_menu', array(&$this, 'admin_menu'));
	}
	function admin_menu() {
		// add_submenu_page($parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function);
		$page = add_submenu_page('tools.php', 'Backup Front Page Builder Options', 'Backup Front Page Builder Options', 'manage_options', 'fpb-backup-options', array(&$this, 'options_page'));

		// add_theme_page($page_title, $menu_title, $capability, $menu_slug, $function);
		// $page = add_theme_page('Backup Front Page Builder Options', 'Backup Front Page Builder Options', 'manage_options', 'fpb-backup-options', array(&$this, 'options_page'));

		add_action("load-{$page}", array(&$this, 'import_export'));
	}
	function import_export() {
		if (isset($_GET['action']) && ($_GET['action'] == 'download')) {
			header("Cache-Control: public, must-revalidate");
			header("Pragma: hack");
			header("Content-Type: text/plain");
			header('Content-Disposition: attachment; filename="front-page-builder-options-'.date("dMy").'.dat"');
			echo serialize($this->_get_options());
			die();
		}
		if (isset($_POST['upload']) && check_admin_referer('fpb_restoreOptions', 'fpb_restoreOptions')) {
			if ($_FILES["file"]["error"] > 0) {
				// error
			} else {
				$options = unserialize(file_get_contents($_FILES["file"]["tmp_name"]));
				if ($options) {
					foreach ($options as $option) {
						update_option($option->option_name, unserialize($option->option_value));
					}
				}
			}
			wp_redirect(admin_url('tools.php?page=fpb-backup-options'));
			exit;
		}
	}
	function options_page() { ?>

		<div class="wrap">
			<h2><?php esc_html_e( 'Backup/Restore Front Page Builder Options', 'front-page-builder' ); ?></h2>
			<form action="" method="POST" enctype="multipart/form-data">
				<style>#backup-options td { display: block; margin-bottom: 20px; }</style>
				<table id="backup-options">
					<tr>
						<td>
							<h3><?php esc_html_e( 'Backup/Export', 'front-page-builder' ); ?></h3>
							<p><?php esc_html_e( 'Here are the stored settings:', 'front-page-builder' ); ?></p>
							<p><textarea class="widefat code" rows="20" cols="120" onclick="this.select()"><?php echo serialize($this->_get_options()); ?></textarea></p>
							<p><a href="?page=fpb-backup-options&action=download" class="button-secondary"><?php esc_html_e( 'Download as file', 'front-page-builder' ); ?></a></p>
						</td>
						<td>
							<h3><?php esc_html_e( 'Restore/Import', 'front-page-builder' ); ?></h3>
							<p><label class="description" for="upload"><?php esc_html_e( 'Restore a previous backup', 'front-page-builder' ); ?></label></p>
							<p><input type="file" name="file" /> <input type="submit" name="upload" id="upload" class="button-primary" value="Upload file" /></p>
							<?php if (function_exists('wp_nonce_field')) wp_nonce_field('fpb_restoreOptions', 'fpb_restoreOptions'); ?>
						</td>
					</tr>
				</table>
			</form>
		</div>

	<?php }
	function _display_options() {
		$options = unserialize($this->_get_options());
	}
	function _get_options() {
		global $wpdb;
		return $wpdb->get_results("SELECT option_name, option_value FROM {$wpdb->options} WHERE option_name = 'front_page_builder_options'"); 
	}
}
new fpb_backup_restore_options();