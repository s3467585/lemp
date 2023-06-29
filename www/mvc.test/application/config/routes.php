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

	// AdminController

	'sup/login' => [
			'controller' => 'admin',
			'action' => 'login',
		],

	'sup/logout' => [
			'controller' => 'admin',
			'action' => 'logout',
		],

	// UserController

	'login' => [
			'controller' => 'user',
			'action' => 'login',
		],

	'register' => [
			'controller' => 'user',
			'action' => 'register',
		],

	'upage' => [
			'controller' => 'user',
			'action' => 'upage',
		],


];
