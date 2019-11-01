<?php

	return [
		'database' => [

			'name' => 'mytodo',

			'username' => 'root',

			'password' => 'Cafea43@',

			'connection' => 'mysql:host=127.0.0.1',

			'options' => [
				//throws exception
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				//PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
			]

		]
	];

