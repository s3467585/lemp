<?php

namespace application\controllers;

/*Контролер страницы Пользователя*/

use application\core\Controller;

class UserController extends Controller {

	public function loginAction() {

		if (!empty($_POST)) {                               

			$this->view->massage('TEST', 'ТЕКСТ ОШИБКИ');
		}

		$this->view->render('SovHome авторизация пользователя') ;

	}

	public function registerAction () {

		if (!empty($_POST)) {

			$this->view->massage('TEST', 'ТЕКСТ ОШИБКИ');
		}
		
		$this->view->render('SovHome регистрация пользователя') ;

	}

}
