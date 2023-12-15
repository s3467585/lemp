<?php

namespace application\models;

use application\core\Model;
use PDO;

/**
 * 
 */
class AdminModel extends Model {


public function administration() {

	$sql = 'SELECT id, full_name, login, email, auth_time, admin, creation_time, stat_table FROM `users`';
	$users = $this->db->rowAll($sql);
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

public function user_activation($id) {
	if (!$this->db->isColumnExist('id', 'users', $id)) {
		$this->error = 'Пользоветль не найден';
		return false;
	}
	$params = [
		'id' => $id,
	];

	$sql = 'SELECT login FROM users WHERE id = :id';
	$login = $this->db->column($sql, $params);
	$tableName = 'stat_'.$login;
	
	if (!$this->createUserTable($tableName)) {
		$this->error = 'Ошибка создания таблицы потзователя';
		return false;
	}

	$sql = "UPDATE `users` SET `stat_table` = :stat_table WHERE `users`.`id` = :id";
	if (!$this->updateColumn($sql, $id, $tableName)){
		$this->error = 'Ошибка записи имени таблицы потльзователя';
		return false;	
	}

	return true;
}

/* Создание таблцы для пользователя*/
	public function createUserTable($tableName){
		// Проверяем существование таблицы
		if (!$this->isTableExist($tableName)){
			return false;
		}
		//создаём персональную таблицу БД для пользователя.
	 	$sql = "CREATE TABLE ".$tableName." (
	 		`id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
	 		`temp0` SMALLINT NOT NULL , 
	 		`temp1` SMALLINT NOT NULL , 
			`temp2` SMALLINT NOT NULL , 
			`time` INT NOT NULL ,  
			PRIMARY KEY (`id`)) 
			ENGINE = MyISAM CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci";
		$this->db->query($sql);
		return true;
	 }

	/* Проверка существования таблицы */
	public function isTableExist($tableName){
		
		$sql = "SHOW TABLES LIKE '".$tableName."'";

		if ($this->db->rowAll($sql)){
			$this->error = 'Таблица уже сущеструет';
			return false;	
		}
		return true;
	}

	/* Обновление значения поля*/
	public function updateColumn($sql,$id, $column) {
		$params = [
			'id' => $id,
			'stat_table' => $column,
		];
		$this->db->query($sql, $params);
		return true;
	}

	



	public function deluser(){

		$sql = "SHOW TABLES LIKE 'stat_11'";
		if ($this->db->rowAll($sql)){
			echo('OK');				
		} else {
			echo('NO');
		}
		
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

