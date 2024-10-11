<?php

return [

	// MainController

	'' => [
			'controller' => 'main',
			'action' => 'index',
		],

	'about' => [
			'controller' => 'main',
			'action' => 'about',
		],

	'contact' => [
			'controller' => 'main',
			'action' => 'contact',
		],

	'mail' => [
			'controller' => 'main',
			'action' => 'mail',
		],

	'signin' => [
			'controller' => 'main',
			'action' => 'signin',
		],

	'signup' => [
			'controller' => 'main',
			'action' => 'signup',
		],

	// AdminController

	'sup' => [
			'controller' => 'admin',
			'action' => 'signin',
		],		

	'sup/signin' => [
			'controller' => 'admin',
			'action' => 'signin',
		],

	'sup/administration' => [
			'controller' => 'admin',
			'action' => 'administration',
		],
	'sup/users' => [
			'controller' => 'admin',
			'action' => 'users',
		],

	'sup/devices' => [
			'controller' => 'admin',
			'action' => 'devices',
		],

	'sup/adduser' => [
			'controller' => 'admin',
			'action' => 'addUser',
		],

	'sup/edituser' => [
			'controller' => 'admin',
			'action' => 'editUser',
		],

	'sup/user_activation/{id:\d+}' => [
			'controller' => 'admin',
			'action' => 'user_activation',
		],
		
	'sup/dell_user/{id:\d+}' => [
			'controller' => 'admin',
			'action' => 'dell_user',
		],

	'sup/dev_activation/{id:\d+}' => [
			'controller' => 'admin',
			'action' => 'dev_activation',
		],

	'sup/dev_del/{id:\d+}' => [
			'controller' => 'admin',
			'action' => 'dev_del',
		],

	'sup/logout' => [
			'controller' => 'admin',
			'action' => 'logout',
		],

	
	// UserController

	'upage' => [
			'controller' => 'user',
			'action' => 'upage',
		],

	'logout' => [
			'controller' => 'user',
			'action' => 'logout',
		],
	'usertings' => [
			'controller' => 'user',
			'action' => 'usettings',
		],



	// DevicesController

	'devices' => [
			'controller' => 'devices',
			'action' => 'post',
		],
	'devices/devstatus' => [
				'controller' => 'devices',
				'action' => 'devstatus',
			],
	'devices/params' => [
		'controller' => 'devices',
		'action' => 'params',
	],






	'test' => [
			'controller' => 'test',
			'action' => 'test',
		],








	// APIController

	'api/json' => [
			'controller' => 'api',
			'action' => 'json',
		],


];
