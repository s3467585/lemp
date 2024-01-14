<?php 

namespace app\controllers;

/*Контролер страницы пользователя*/

use app\core\Controller;
use app\lib\Database;

class MainController extends Controller {

	public function indexAction() {	
		
		if (isset($_SESSION['autorize'])) {
			$this->view->redirect('/upage');
		} else {
			unset($_SESSION['admin']);
			$this->view->redirect('/signin');
		}

		//$this->view->render('Главная страница');
	}

	public function aboutAction() {		
		$this->view->render('О проекте');
	}

	public function contactAction() {		
		$this->view->render('Контакты');
	}

	public function mailAction() {
		if (!empty($_POST)) {

			if (!$this->len($_POST['password'], 2, 20)) {
				$this->view->message('error', 'Имя должно содержать от 2 до 20 символов');
				return false;
			} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$this->view->message('error', 'E-mail указан не верно');
				return false;
			} 
		 	$this->view->message('saccess', 'Ваше сообщение успешно отправлено.');
	 	}		
	 	$this->view->render('Обратная связь');
	}

	
	/* обработка события на странице авторизации */
	public function signinAction() {
		/*if (isset($_SESSION['autorize'])) {
			$this->view->message('error', 'Вы уже вторизованы как '.$_SESSION['autorize']['login']);
			return false;
		}*/

		if (!empty($_POST)) {

			if (!$this->signinValidate($_POST)) {
				$this->view->message('error', $this->error);
				return false;
			}

			if (!$this->model->signin($_POST['login'])) {
				$this->view->message('error', $this->model->error);
				return false;
		 	}
		 	//$this->view->message('saccess', 'Авторизация прошла успешно.');
		 	
		 	if (isset($_SESSION['admin'])){

				$this->view->location('sup/administration');		 		
		 	} 

		 	if (isset($_SESSION['autorize'])){
				$this->view->location('upage');	
		 	} 	 	
	 	}	

		$this->view->render('Авторизация');
	}
	
	

	/* Обработка события на старнице регистрации*/	
	public function signupAction() {
		if (!empty($_POST)) {

			// валидация полей
			if (!$this->signupValidate($_POST)) {
				$this->view->message('error', $this->error);
				return false;
			} 

			//  
			if ($this->model->signin($_POST['login'])) {

				if (isset($_SESSION['admin'])){
					$this->view->location('sup/administration');		 		
		 		} 

		 		if (isset($_SESSION['autorize'])){
					$this->view->location('upage');	
		 		} 	 
				return false;
		 	}

			if (!$this->model->signup($_POST)) {
				$this->view->message('error', $this->model->error);
				return false;
		 	} 
			//$this->view->message('saccess', 'Регистрация прошла успешно.');

			$this->view->location('upage');		 	
		}

		$this->view->render('Регистарция');
	}



}