<?php

namespace application\models;

use application\core\Model;
use PDO;

/**
 * 
 */
class AdminModel extends Model {

protected $tablePref = 'stat_';

public function administration() {
	// выбор полей для заполнения таблицы с пользователями
	$sql = 'SELECT id, full_name, login, email, auth_time, admin, creation_time, stat_table FROM `users`';
	$users = $this->db->rowAll($sql);
	
	// Проверка существования связанной таблицы данных с пользователем и удаление связи в случае отсутствия этой таблицы
	foreach ($users as $key => $value){
		$tableName = $this->tablePref.$value['login'];
		if (!$this->db->isTableExist($tableName)){
			if (!$this->db->updateColumn('users', 'stat_table', $value['id'], '')){
				$this->error = 'Ошибка отключения таблицы данных к пользователю';
				return false;
			}	
		} 
	}
	
	return $users;
}

/* Данные статуса устройства по ID либо всев сразу */
public function devStatus($params=[]) {
	if (!empty($params)){
		$sql = 'SELECT * FROM devStatus WHERE id = :id';
		$device	= $this->db->row($sql, $params);
		return $device;
	} else {

	$sql = 'SELECT * FROM `devStatus`';
	$devices = $this->db->rowAll($sql);
	foreach ($devices as $key => $value) {
		$devices[$key]['sendTime'] = clock($value['sendTime']);
		$devices[$key]['connectTime'] = clock($value['connectTime']);
		}	
	return $devices;	
	}	
}

public function userActivation($id) {
	if (!$this->db->isColumnExist('id', 'users', $id)) {
		$this->error = 'Пользователь не найден';
		return false;
	}
	$params = [ 'id' => $id ];

	$sql = 'SELECT login FROM users WHERE id = :id';
	$login = $this->db->column($sql, $params);
	$tableName = $this->tablePref.$login;
	
	if (!$this->createUserTable($tableName)) {
		
	}

	if (!$this->db->updateColumn('users', 'stat_table', $id, $tableName)){
		$this->error = 'Ошибка при обновлении данных привязанной таблицы данных пользователя';
		return false;	
	} 

	return true;
}

	/* Создание таблцы для пользователя*/
	public function createUserTable($tableName){
		// Проверяем существование таблицы
		if ($this->db->isTableExist($tableName)){
			$this->error = 'Таблица: '.$tableName.' уже существует';
			return false;	
		} else {
			//создаём персональную таблицу БД для пользователя.
	 		$sql = "CREATE TABLE ".$tableName." (
	 		`id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
	 		`temp0` SMALLINT NOT NULL , 
	 		`temp1` SMALLINT NOT NULL , 
			`temp2` SMALLINT NOT NULL , 
			`time` INT NOT NULL ,  
			PRIMARY KEY (`id`)) 
			ENGINE = MyISAM CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci";
			if (!$this->db->query($sql)){
				$this->error = 'Ошибка создания таблицы: '.$tableName;
				return false;
			}
			return true;
		}
	 }


	/* Отключение привязанной таблицы данных пользователя*/
	public function dellUser($id){
		if (!$this->db->isColumnExist('id', 'users', $id)) {
		$this->error = 'Пользователь не найден';
		return false;
		}

		if (!$this->db->updateColumn('users', 'stat_table', $id, '')){
			$this->error = 'Ошибка при обновлении данных привязанной таблицы данных пользователя';
			return false;
		}
		return true;
	}


	public function dev_activation($id) {
	if (!$this->db->isColumnExist('id', 'devStatus', $id)) {
		$this->error = 'Устройство не найдено';
		return false;
	}






	return true;
}
	
	

	public function getNews() {

		// code...
		$result = $this->db->row('SELECT temp0, temp1, temp2 FROM stat_1');
		return $result;
	}
}

