<?php

	class ConsoleController extends Controller {

		public $view;

		function init() {
			//
		}

		function indexAction() {
			global $site;
			$request = $site->mvc->getRequest();
			switch ($request->type) {
				case 'get':
					$site->enqueueStyle('console');
					$site->enqueueScript('console');
					$this->view->render('pages/index-page');
					break;
				case 'post':
					$code = $request->post('code');
					$code = preg_replace('/^\s*\<\?php/', '', $code);
					$code = preg_replace('/\?\>\s*$/', '', $code);
					eval($code);
					break;
			}
		}

		function showAction($id) {
			global $site;
			$site->enqueueStyle('console');
			$site->enqueueScript('console');
			$this->view->render('pages/index-page');
		}

	}

?>