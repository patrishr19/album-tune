<?php
	define('DB_NAME', 'albumtune');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');

	global $db;
    $db = new PDO(
            "mysql:host=" .DB_HOST. ";dbname=" .DB_NAME,DB_USER,DB_PASSWORD,
            array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            )
          );
?>