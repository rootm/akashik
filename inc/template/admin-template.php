<h1>Akashik Settings</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php" >
	<?php settings_fields('theme-settings' );
		do_settings_sections( 'akashik-admin' );
	submit_button(); ?>
</form>