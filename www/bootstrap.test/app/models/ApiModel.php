<?php

/* curl -d "test=12345" -X POST http://bootstrap.test/api/json */

/* 

curl -X POST http://bootstrap.test/api/json -H 'Content-Type: app/json' -d '{"login":"my_login","password":"my_password"}'
curl -X POST http://bootstrap.test/api/json -H 'Content-Type: app/json' -d '{"login":{"this":{"string":"[BME280_1#temp]","be":"JSON","data":{"one":1,"two":2,"bool":3}}}}'

*/

namespace app\models;

use app\core\Model;
use PDO;

/**
 * 
 */
class ApiModel extends Model {
	
	/* Запись в базу данных при включении от устройства */
	public function json() {

		$json = file_get_contents('php://input');

		$params = [
			'json' => $json,
		];
		
		debug($params);

		$sql = "UPDATE devStatus SET json = :json WHERE devStatus.devName = 0";


		$this->db->query($sql, $params);




		/*

		debug($params);

		*/

		// поиск записи устройства в БД
		/*if ($this->db->isColumnExist('devName', 'devStatus', $params['devName'])) {
			// обновление записи
			$sql = "UPDATE devStatus SET ip = :ip, mac = :mac, bssid = :bssid, sysLoad = :sysLoad, sendTime = :sendTime, upTime = :upTime, connectTime = :connectTime, isntp = :isntp WHERE devStatus.devName = :devName";			
			if (!$this->db->query($sql, $params)){

				$this->error = 'Ошибка обновления записи статуса устройства: '.$params['devName'].'';
				return false;
			}

		} else {
			// создание записи
			$sql = "INSERT INTO `devStatus`(devName, ip, mac, bssid, sysLoad, sendTime, upTime, connectTime, isntp) VALUES (:devName, :ip, :mac, :bssid, :sysLoad, :sendTime, :upTime, :connectTime, :isntp)";
			
			if (!$this->db->query($sql, $params)){
				$this->error = 'Ошибка создания записи статуса устройства: '.$params['devName'].'';
				return false;	
			}	
		}
		return true;*/
	}
}