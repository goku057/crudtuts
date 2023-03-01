<?php

	// Defining Constants
	define( 'HOST', 'localhost' );
	define( 'DB', 'bank' );
	define( 'USER', 'root' );
	define( 'PASS', '' );
    
    $connect = mysqli_connect(HOST,USER, PASS, DB) or die("Cannnot connect to database");
?>