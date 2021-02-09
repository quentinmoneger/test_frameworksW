<?php

namespace Controller;

use \W\Controller\Controller;
use W\Security\AuthentificationModel;
use W\Model\UsersModel;

class DefaultController extends Controller
{

	/**
	 * Page de register
	 */	
	public function register()
	{

        if (!empty($_POST)) {

			$safe = array_map('trim', array_map('strip_tags', $_POST));

			$username = $safe['username'];
			
			$email = $safe['email'];

			$password = (new AuthentificationModel)->hashPassword($safe['password']);

			$users = [ 'username' => $username, 'email' => $email, 'password' => $password, 'role' => json_encode('ROLE_USER') ];

			(new UsersModel)->insert($users);

		}
		
		return $this->render('default/register');
	}
		/**
	 * Page login par défaut
	 */
	public function login()
	{

		if (!empty($_POST)) {

			$safe = array_map('trim', array_map('strip_tags', $_POST));

			$username = $safe['username'];

			$user_id = (new AuthentificationModel)->isValidLoginInfo($username, $safe['password']);

			if( $user_id){



				$user_array = (new UsersModel)->find($user_id);

				(new AuthentificationModel)->LogUserIn($user_array);

			}
		}

		

		return $this->render('default/login');
	}

		/**
	 * Page de logOut
	 */
	public function logout()
	{
		(new AuthentificationModel)->LogUserOut();

		return $this->redirectToRoute('default_login');
	}


	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		return $this->render('default/home');
	}


		/**
	 * Page de contact
	 */
	public function contact()
	{
		return $this->render('contact/index');
	}

}