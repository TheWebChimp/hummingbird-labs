<?php

	class UserController extends Controller {

		public $view;

		function init() {
			//
		}

		function indexAction() {
			$this->view->render('pages/index-page');
		}

		function showAction($id) {
			$this->view->render('pages/index-page');
		}

		function dashboardAction($id) {
			global $site;
			if (! $site->user ) {
				$site->redirectTo( $site->urlTo('/experiments/norm-user/sign-in') );
				exit;
			}
			$this->view->render('pages/dashboard-page');
		}

		function signOutAction() {
			global $site;
			Users::logout();
			$site->redirectTo( $site->urlTo('/experiments/norm-user') );
		}

		function signInAction() {
			global $site;
			$request = $site->mvc->getRequest();
			switch ($request->type) {
				case 'get':
					if ($site->user) {
						$site->redirectTo( $site->urlTo('/experiments/norm-user/dashboard') );
						exit;
					}
					$this->view->render('pages/sign-in-page');
					break;
				case 'post':
					$error = '';
					$user = $request->post('user');
					$pass = $request->post('pass');
					if ( Users::login($user, $pass) ) {
						// Profit
					} else {
						$error = 'The user/password combination is not valid.';
					}
					$site->redirectTo( $site->urlTo($error ? "/experiments/norm-user/sign-in?error={$error}" : "/experiments/norm-user/dashboard") );
					break;
			}
		}

		function signUpAction() {
			global $site;
			$request = $site->mvc->getRequest();
			switch ($request->type) {
				case 'get':
					if ($site->user) {
						$site->redirectTo( $site->urlTo('/experiments/norm-user/dashboard') );
						exit;
					}
					$this->view->render('pages/sign-up-page');
					break;
				case 'post':
					$error = false;
					$user = $request->post('user');
					$email = $request->post('email');
					$pass = $request->post('pass');
					$confirm = $request->post('confirm');
					if (! $email) {
						$error = 'Please enter a valid email';
					} else {
						if (!$pass || $pass != $confirm) {
							$error = 'Please make sure both passwords match';
						} else {
							if ( Users::getByLogin($email) ) {
								$error = 'The specified email is already in use';
							} else {
								$user = new User();
								$user->login = $email;
								$user->email = $email;
								$user->password = $pass;
								$user->nicename = $email;
								if (! $user->save() ) {
									$error = 'An error has ocurred';
								}
							}
						}
					}
					$site->redirectTo( $site->urlTo($error ? "/experiments/norm-user/sign-up?error={$error}" : "/experiments/norm-user/sign-in") );
					break;
			}
		}

		function resetAction() {
			global $site;
			$request = $site->mvc->getRequest();
			switch ($request->type) {
				case 'get':
					if ($site->user) {
						$site->redirectTo( $site->urlTo('/experiments/norm-user/dashboard') );
						exit;
					}
					$this->view->render('pages/reset-page');
					break;
				case 'post':
					$error = '';
					$login = $request->post('user');
					$pass = $request->post('pass');
					$confirm = $request->post('confirm');
					//
					$user = Users::getByLogin($login);
					if ( $user ) {
						// Profit
						if ($pass && $pass == $confirm) {
							$user->password = $pass;
							$user->save();
						} else {
							$error = 'Please make sure both passwords match';
						}
					} else {
						$error = 'The specified user is not valid.';
					}
					$site->redirectTo( $site->urlTo($error ? "/experiments/norm-user/reset?error={$error}" : "/experiments/norm-user/dashboard") );
					break;
			}
		}

	}

?>