<?php

	class ExperimentsController extends Controller {

		protected $view;

		function init() {
			$this->view = new ExperimentsView();
		}

		function indexAction() {
			$this->view->render('index-page');
		}

		function showAction($id) {
			global $site;
			# Check if the experiment is valid
			if ( file_exists( $site->baseDir("/data/{$id}") ) ) {
				# We've got a valid one, re-base pages/parts folder and include the experiment
				$this->view->setBaseDir( $site->baseDir("/data/{$id}") );
				include $site->baseDir("/data/{$id}/experiment.php");
			} else {
				# Not a valid experiment
				$site->errorMessage("The specified experiment does not exist.");
			}
		}

		function chainController($controllerClass) {
			global $site;
			$request = $site->mvc->getRequest();
			$params = get_item($request->parts, 2, 'index');
			$params = explode('/', $params);
			$action = get_item($params, 0, 'index');
			$id = get_item($params, 1, 0);
			if ( class_exists($controllerClass) ) {
				$controller = new $controllerClass;
				$method = "{$action}Action";
				$method = str_replace(' ', '', ucwords(str_replace('-', ' ', $method)));
				$method[0] = strtolower( $method[0] );
				if ( method_exists($controller, $method) ) {
					$controller->view = $this->view;
					$controller->$method($id);
				} else {
					$site->errorMessage("The specified action does not exist in the controller.");
				}
			} else {
				$site->errorMessage("The specified controller does not exist.");
			}
		}

	}

?>