<?php

	# Include required files
	include $site->baseDir('/data/norm-user/external/norm.php');
	include $site->baseDir('/data/norm-user/external/crood.php');

	include $site->baseDir('/data/norm-user/lib/PasswordHash.php');
	include $site->baseDir('/data/norm-user/lib/Random.php');

	include $site->baseDir('/data/norm-user/external/model/user.model.php');
	include $site->baseDir('/data/norm-user/external/controller/user.controller.php');

	# Restore user session (check for Users module first)
	if ( class_exists('Users') ) {
		Users::init();
		Users::checkLogin();
		$site->user = Users::getCurrentUser();
	} else {
		$site->user = null;
	}

	$this->chainController('UserController');

	# Start session
	session_start();

?>