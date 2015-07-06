<?php
	/**
	 * config.inc.php
	 * Here's where you configure your Hummingbird instance
	 */

	# Set the active profile
	define( 'PROFILE', 'development' );

	/**
	 * Site settings
	 * @var array 	Array with configuration options
	 */
	$settings = array(
		'development' => array(
			# Global settings
			'site_url' => 'http://localhost/webchimp/github/hummingbird-labs',
			# Database settings
			'db_driver' => 'mysql',
			'db_host' => 'localhost',
			'db_user' => 'root',
			'db_pass' => '',
			'db_name' => 'hummingbird-labs',
			'db_file' => ABSPATH . '/include/schema.sqlite',
			# Plugins
			'plugins' => array(
				'mvc'
			)
		),
		'testing' => array(
			# Global settings
			'site_url' => 'http://dev.yoursite.com',
			# Database settings
			'db_driver' => 'none',
			'db_host' => '',
			'db_user' => '',
			'db_pass' => '',
			'db_name' => '',
			'db_file' => ABSPATH . '/include/schema.sqlite',
			# Plugins
			'plugins' => array(
				'mvc'
			)
		),
		'production' => array(
			# Global settings
			'site_url' => 'http://yoursite.com',
			# Database settings
			'db_driver' => 'none',
			'db_host' => '',
			'db_user' => '',
			'db_pass' => '',
			'db_name' => '',
			'db_file' => ABSPATH . '/include/schema.sqlite',
			# Plugins
			'plugins' => array(
				'mvc'
			)
		),
		'shared' => array(
			# General
			'site_name' => 'Hummingbird Labs',
			# Security settings
			'pass_salt' => '}tlq.`e[HR5Jw-K".HNMKbx"R~9-5;|ywd,gax?m[}j:lIpW:b(WSV3]bRT`5tOJ',
			'token_salt' => ']![!:KBew27rIoXV#dzFdpeF8U{=-Q--k]Nx2%3sjW7,J@Th+I$8R.NJyScMQ`;0'
		)
	);
?>