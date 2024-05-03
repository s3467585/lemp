<?php

namespace app\models;

use app\core\Model;
use PDO;

/**
 * 
 */
class DevicesModel extends Model {
	
	/* Запись в базу данных о статусе устройства */
	public function devStatus() {

		$params = [
				'devName' 		=> $_POST['devName'],
				'ip' 			=> $_POST['ip'],
				'mac' 			=> $_POST['mac'],
				'bssid' 		=> $_POST['bssid'],
				'sysLoad' 		=> $_POST['sysLoad'],
				'sendTime' 		=> time(),
				'upTime' 		=> $_POST['upTime'] / 1000,
				'isntp'			=> $_POST['isntp'],
				'vcc'			=> $_POST ['vcc']
			];

		$sql = '';

	
		//db($params);
		//db($this->db->isColumnExist('devName', 'devStatus', $params['devName']));

		// поиск имени устройства в БД
		if ($this->db->isColumnExist('devName', 'devStatus', $params['devName'])) {
			
			// обновление записи
			if ($_POST['connect'] = 1) {

				$params ['connectTime'] = time();

				$sql = "UPDATE devStatus SET ip = :ip, mac = :mac, bssid = :bssid, sysLoad = :sysLoad, sendTime = :sendTime, upTime = :upTime, connectTime = :connectTime, isntp = :isntp, vcc = :vcc WHERE devStatus.devName = :devName";

			} else {

				$sql = "UPDATE devStatus SET ip = :ip, mac = :mac, bssid = :bssid, sysLoad = :sysLoad, sendTime = :sendTime, upTime = :upTime, isntp = :isntp, vcc = :vcc WHERE devStatus.devName = :devName";

			}	
		
			if (!$this->db->query($sql, $params)){
				$this->error = 'Ошибка обновления записи статуса устройства: '.$params['devName'].'';
				return false;
			}

		} else {
			
			// создание записи
			$sql = "INSERT INTO `devStatus`(devName, ip, mac, bssid, sysLoad, sendTime, upTime, connectTime, isntp, vcc) VALUES (:devName, :ip, :mac, :bssid, :sysLoad, :sendTime, :upTime, :connectTime, :isntp, :vcc)";
			
			if (!$this->db->query($sql, $params)){
				$this->error = 'Ошибка создания записи статуса устройства: '.$params['devName'].'';
				return false;	
			}	
		}
		return true;
	}



	/* Запись в базу данных парамеров полученых от устройства */
	public function devParams() {

		$devName = [
			'devName' 		=> $_POST['devName'],
		];

		$params = [
			'devName' 		=> $_POST['devName'],
			'json'			=> $_POST['json'],
			'sendTime'		=> time(),
		];

		//d($params);

		/* Получаем пользователя которому принадлежит устройство */
		$sql = "SELECT user FROM binding WHERE devName = :devName";
		$user = $this->db->column($sql, $devName);
		
		$tableName = $this->tablPrefix.$user;
		
		if($user){

			// запрашиваем количесво записей в таблице
			//$totalColimn = $this->db->colunmCount($tableName, 'id');

			$sql = "SELECT COUNT(id) FROM ".$tableName." WHERE devname = :devName";
		
			$totalColimn = $this->db->column($sql, $devName);
			

			//d($totalColimn);

			// Удаление последней записи при привышении заданного количества
			if ($totalColimn >= 15) {

				$sql = "DELETE FROM ".$tableName." WHERE devname = :devName ORDER BY `id` ASC LIMIT 1";
				$this->db->query($sql, $devName);
			}

			/* если устройство привязано к пользователю */
			$sql = "INSERT INTO ".$tableName." (devName, json, sendTime) VALUES (:devName, :json, :sendTime)";
			
			if (!$this->db->query($sql, $params)){
				
				$this->error = 'Ошибка записи параметров устройства: '.$params['devName'].'';
				return false;	
			}

		} else {

			$this->error = 'Ошибка, пользователь не привязан к  устройству: '.$params['devName'].'';
			return false;
		}

		return true;
	}

}

