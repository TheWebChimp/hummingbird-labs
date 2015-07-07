<?php
	/**
	 * functions.inc.php
	 * Add extra functions in this file
	 */

	# Basic set-up ---------------------------------------------------------------------------------

	# Include styles
	$site->registerStyle('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css' );
	$site->registerStyle('google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,300,300italic|Oswald:400,300' );
	$site->registerStyle('reset', $site->baseUrl('/css/reset.css') );
	$site->registerStyle('chimplate', $site->baseUrl('/css/chimplate.css') );
	$site->registerStyle('sticky-footer', $site->baseUrl('/css/sticky-footer.css') );
	$site->registerStyle('mobile', $site->baseUrl('/css/mobile.css'), array('reset', 'chimplate', 'sticky-footer', 'google-fonts', 'font-awesome') );
	$site->registerStyle('desktop', $site->baseUrl('/css/desktop.css'), array('mobile') );
	$site->enqueueStyle('desktop');

	# Include scripts
	$site->registerScript('script', $site->baseUrl('/js/script.js'), array('jquery') );
	$site->enqueueScript('script');

	# Include extra files
	include $site->baseDir('/external/utilities.inc.php');
	include $site->baseDir('/external/ajax.inc.php');
	include $site->baseDir('/external/experiment.inc.php');

	# Meta tags
	$site->addMeta('UTF-8', '', 'charset');
	$site->addMeta('viewport', 'width=device-width, initial-scale=1');

	$site->addMeta('og:title', $site->getPageTitle(), 'property');
	$site->addMeta('og:site_name', $site->getSiteTitle(), 'property');
	$site->addMeta('og:description', $site->getSiteTitle(), 'property');
	$site->addMeta('og:image', $site->urlTo('/favicon.png'), 'property');
	$site->addMeta('og:type', 'website', 'property');
	$site->addMeta('og:url', $site->urlTo('/'), 'property');

	# Pages
	// $site->addPage('sample', 'sample-page');

	# Views
	include $site->baseDir('/external/view/experiments.view.php');

	# Controllers
	include $site->baseDir('/external/controller/experiments.controller.php');


?>