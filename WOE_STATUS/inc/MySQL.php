<?php

	$SERVER_IP		= "178.128.188.26";
	$SERVER_USER	= "ixro";
	$SERVER_PASS	= "Welcome2Bay";
	$SERVER_DB		= "ixro";

 # Conexão
	 $MySQL =  new mysqli($SERVER_IP, $SERVER_USER, $SERVER_PASS) or die('Unable to connect to database: ' . mysql_error());
	 # Escolhendo o banco de dados
	 $MySQL->select_db($SERVER_DB) or die('Could not select database');
	 
	 if ($MySQL->connect_error) {
                die("Connection failed: " . $MySQL->connect_error);
     } 


?>