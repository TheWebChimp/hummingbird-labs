<?php

	$site->registerStyle('codemirror', $site->baseUrl('/data/console/css/codemirror.css') );
	$site->registerStyle('codemirror.monokai', $site->baseUrl('/data/console/css/codemirror.monokai.css'), array('codemirror') );
	$site->registerStyle('console', $site->baseUrl('/data/console/css/console.css'), array('reset', 'chimplate', 'google-fonts', 'font-awesome', 'codemirror.monokai') );

	$site->registerScript('codemirror', $site->baseUrl('/data/console/js/codemirror.min.js') );
	$site->registerScript('console', $site->baseUrl('/data/console/js/console.js'), array('jquery', 'codemirror', 'jquery.form') );

	include $site->baseDir('/data/console/external/controller/console.controller.php');

	$this->chainController('ConsoleController');

?>