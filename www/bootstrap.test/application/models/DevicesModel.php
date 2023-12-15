<?php

namespace application\models;

use application\core\Model;
use PDO;

/**
 * 
 */
class DevicesModel extends Model {
	
	/* Запись в базу данных при включении от устройства */
	public function devstatus() {
		$params = [
			'devName' 		=> $_POST['devName'],
			'ip' 			=> $_POST['ip'],
			'mac' 			=> $_POST['mac'],
			'bssid' 		=> $_POST['bssid'],
			'sysLoad' 		=> $_POST['sysLoad'],
			'sendTime' 		=> time(),
			'upTime' 		=> $_POST['upTime'],
			'connectTime' 	=> $_POST['connectTime'],
			'isntp'			=> $_POST['isntp'],
		];

		//debug($params);

		// поиск записи устройства в БД
		if ($this->db->isColumnExist('devName', 'devStatus', $params['devName'])) {
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
		return true;
	}



	/* Запись в базу данных парамеров полученых от устройства */
	public function post($params) {

		$totalColimn = $this->db->colunmCount('stat_22', 'time');

		if ($totalColimn >= 15) {

			$sql = "DELETE FROM `stat_22` ORDER BY `id` ASC LIMIT 1";
			$this->db->query($sql);
		}

		$sql = "INSERT INTO `stat_22`(temp0, temp1, temp2, time) VALUES (:temp, :hum, :pres, :time)";
		
		$this->db->query($sql, $params);
	}

}

