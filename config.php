<?php 


return [
	'database' => [
		'name' => 'ogpokedex',
		'username' => 'root',
		'password' => 'root',
		'connection' => 'mysql:host=localhost',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
			]

];