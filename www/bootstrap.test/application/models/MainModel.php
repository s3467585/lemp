<?php

namespace application\models;

use application\core\Model;
use PDO;

/**
 * 
 */
class MainModel extends Model {
	
	/*  Обработка формы обратной связи */
	public function mailValidate($post) {
		
		return true;
	}
	
	

	
	/*  Обработка формы регистрация пользователя */
	public function signup($post) {
		
		// заносим значения в масив для подготовки запроса 
		$params = [
			'full_name' => $post['full_name'],
			'login' => $post['login'],
			'email' => $post['email'],
			'password' => password_hash($post['password'], PASSWORD_DEFAULT),
			'creation_time' => time(), //date('Y-m-d H-i-s'),
		];
		
		$param = ['login' => $post['login']];
		
		/* проверка наличия указанного логина и пароля на авторизацию*/
		if (!$this->signin($param )) {

			/* проверка наличия укаханного логина в базе данных */
			$count = $this->db->rowCount('users', 'login', $param);
			if ($count['num'] > 0 ) {
				$this->error = 'Пльзователь '.$params['login'].' уже существует';
				return false;
			
			} else {
			
			$this->createUser($params);
			$this->signin($param);
			return true;
			}
		} 
			$this->error = 'Пользователь уже существует, вы авторизованы';
			return true;
	}
		
		
	

	public function getNews() {

		// code...
		$result = $this->db->row('SELECT temp0, temp1, temp2 FROM stat_1');
		return $result;
	}
}

