<?php
	 $server = 'localhost';
	 $username = 'root';
	 $password = '1234567890';
	 $dbname = 'database';

	 $connect = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);

	 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
