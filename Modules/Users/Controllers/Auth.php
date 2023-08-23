<?php

namespace Modules\Users\Controllers;

use Modules\_base\Controller as BaseController;
use Modules\Users\Models\Index as ModelUsers;
use Modules\Users\Models\Sessions as Sessions;
use System\Session as SessionHelper;
use System\Database\Connection;

class Auth extends BaseController{
	protected ModelUsers $mUsers;
	protected Sessions $mSessions;
	protected Connection $db;


	public function __construct(){
		parent::__construct();
		$this->mUsers = ModelUsers::getInstance();
		$this->mSessions = Sessions::getInstance();
		$this->db = Connection::getInstance();
	}

	public function login(){
		$this->title = 'Login';
		$error = false;

		if($this->env['server']['REQUEST_METHOD'] == 'POST'){
			$login = trim($this->env['post']['login']);
			$password = trim($this->env['post']['password']);

			$user = $this->mUsers->getByLogin($login);

			if($user === null || !password_verify($password, $user['password'])){
				$error = true;
			}
			else{
				$fields = [
					'id_user' => $user['id_user'],
					'token' => $this->mSessions->generateToken()
				];

				$this->mSessions->add($fields); // try-catch to token duplicates
				setcookie('token', $fields['token'], time() + 3600 * 24 * 30, BASE_URL);
				SessionHelper::set('token', $fields['token']);
				header("Location: " . BASE_URL);
				exit();
			}
		}

		$this->content .=  $this->view->render('Users/Views/v_login.twig', [
			'error' => $error
		]);
	}

	public function logout(){
		SessionHelper::slice('token');
    	setcookie('token', '', time() - 3600 * 24 , BASE_URL);
    	header('Location:' . BASE_URL);
    	exit();
	}

	public function reg(){
		$this->title = 'Registration';
		$error = '';
		echo "reg";
		if($this->env['server']['REQUEST_METHOD'] == 'POST'){
			$login = trim($this->env['post']['login']);
			$password1 = trim($this->env['post']['password1']);
			$password2 = trim($this->env['post']['password2']);
			$name = trim($this->env['post']['name']);

			$user = $this->mUsers->getByLogin($login);

			if($login === '' || $password1 === '' || $password2 === '' || $name === ''){
				$error = "Не все поля заполнены!";
			}
			elseif(mb_strlen($login, 'UTF8') < 2){
				$error = 'Логин должен быть более 2-х символов';
			}
			elseif ($password1 !== $password2) {
				$error =  "Пароли в обоих полях должны соответствовать!";
			}
			elseif ($user !== null) {
				$error =  "Пользователь с таким логином уже зарегистрирован!";
			}
			else{
				$pass = password_hash($password1, PASSWORD_DEFAULT);
				$fields = [
					'login' => $login,
					'password' => $pass,
					'name' => $name,		
				];
				$this->mUsers->add($fields);
				$id = $this->db->lastInsertId();

				$sessionfields = [
					'id_user' => $id,
					'token' => $this->mSessions->generateToken()
				];

				$this->mSessions->add($sessionfields); // try-catch to token duplicates
				setcookie('token', $sessionfields['token'], time() + 3600 * 24 * 30, BASE_URL);
				SessionHelper::set('token', $sessionfields['token']);
				header("Location: " . BASE_URL);
				exit();
			}
		}

		$this->content .=  $this->view->render('Users/Views/v_reg.twig', [
			'error' => $error
		]);
		
	}


}