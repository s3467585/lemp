<?php

namespace application\controllers;

/*Контролер страницы Пользователя*/

use application\core\Controller;

class UserController extends Controller {

	public function loginAction() {										// Авторизация пользователя

		if (!empty($_POST)) {											// Проверка POST запроса
			if (!$this->model->loginValidate($_POST)) {					// Проветка запроса в моделе
				$this->view->message('error', $this->model->error);		// Вывод ошибки сформированной моделью
			}                       

			$this->view->message('SUCCESS', 'Авторизация прошла успешно');
		}

		$this->view->render('UserPage');

	}

	public function registerAction () {

		if (!empty($_POST)) {

			$this->view->massage('STATUS: TEST', 'ТЕКСТ ОШИБКИ');
		}
		
		$this->view->render('SovHome регистрация пользователя') ;

	}

	public function upageAction () {
		$this->view->render('User Page');
	}

}
