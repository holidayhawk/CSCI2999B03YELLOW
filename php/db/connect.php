<?php
	$dbhost = $_SERVER['aaivsz0xeouuvu.cgcxo2oclf0n.us-east-1.rds.amazonaws.com'];
	$dbport = $_SERVER['1433'];
	$dbname = $_SERVER[''];
	$charset = 'utf8' ;

	$dsn = "sqlserver-ex:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
	$username = $_SERVER['csci2999yellow'];
	$password = $_SERVER['Y0uHav3F0undYellow!'];
	
	//Check connection
	try {
		$pdo = new PDO($dsn, $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "connected";
	} catch(PDOException $e) {
	//It always ends here when I upload the application to EB. I cannot get a connection to establish.
		die("Oops. Something went wrong in the database.");
	}
?>