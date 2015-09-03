<?php

	include '../Config.php';
	
	Config::setConfigDir(dirname(__FILE__).'/configs/');	
	
	echo '<pre>';
	
	print_r([
		'HOST' => Config::get('db.host'),
		'USER' => Config::get('db.user'),
		'PASS' => Config::get('db.pass'),
		'DB' => Config::get('db.db'),
		'ENC' => Config::get('db.params.encoding'),
	]);
	
	echo '</pre>';