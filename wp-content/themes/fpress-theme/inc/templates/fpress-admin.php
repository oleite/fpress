<h1>Sunset Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields('fpress-settings-group'); ?>
	<?php do_settings_sections('fpress_admin'); ?>
	<?php submit_button(); ?>
</form>