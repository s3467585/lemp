<?php 

namespace app\controllers;

/*Контролер страницы Администратора*/

use app\core\Controller;
use app\lib\Database;


class AdminController extends Controller {

	public function __construct($route){
		parent::__construct($route);
		$this->view->layout = 'admin';
	}



	public function signinAction() {
						
		if (isset($_SESSION['admin'])) {
			$this->view->location('/sup/administration');
			return true;
		}	

		if (!empty($_POST)) {
			
			if (!$this->signinValidate($_POST)) {
				$this->view->message('error', $this->error);
				return false;
			}
			
			if (!$this->model->signin($_POST['login'])) {
				$this->view->message('error', $this->model->error);
				return false;
		 	}

		 	if (isset($_SESSION['autorize'])) {
		 		$this->view->location('upage');	
		 	}

		 	if (isset($_SESSION['admin'])) {
		 		$this->view->location('/sup/administration');	
		 	}
		 	//$this->view->message('saccess', 'Авторизация прошла успешно.');	
		 }


		$this->view->render('Вход');
	}



	public function administrationAction() {

		//$users = $this->model->administration();
		$vars = [
			'users' => $this->model->administration(),
		];

		$this->view->render('Пользователи', $vars);

	}
	
	public function usersAction() {

		//$users = $this->model->administration();
		$vars = [
			'users' => $this->model->users(),
		];

		$this->view->render('Пользователи', $vars);

	}

	public function devicesAction() {
		$var = [
			'devices' => $this->model->devStatus(),
			'binding' => $this->model->binding(),
		];
		//debug ($var);
		$this->view->render('Устройства', $var);
	}




	public function addUserAction() {		
		$this->view->render('Добавить пользователя');
	}

	public function editUserAction() {		
		$this->view->render('Редактировать пользователя');
	}

	/* Активаця таблиц пользователя */
	public function user_activationAction() {	
		if (!$this->model->user_activation($this->route['id'])){
			$this->view->message('error', $this->model->error);
			return false;
		}
		
		$this->view->location('/sup/users', 'success', 'Привязки таблицы данных к пользователю выполнена успешно');
	}

	/* Снятие привязки таблиц пользователя */
	public function dell_userAction() {	
		if (!$this->model->dell_user($this->route['id'])){
			$this->view->message('error', $this->model->error);
			return false;
		}

		$this->view->location('/sup/users', 'success', 'Отключение привязанной таблицы данных пользователя выполнено успешно');
	}



	public function logoutAction() {		
		unset($_SESSION['admin']);
		//$this->view->redirect('/sup/signin');
		$this->view->redirect('/signin');
	}


	/* Активаця таблиц пользователя */
	public function dev_activationAction() {	

		/*if (!$this->model->dev_activation($this->route['id'])){
			$this->view->message('error', $this->model->error);
			return false;
		}*/

		$var = [
			'device' => $this->model->devStatus($this->route['id'])[0],
		];

		//debug($var);

		$this->view->render('Привязка устройства', $var);		
	}






}