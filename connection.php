<?php
	$servername = "localhost";
    $username = "root";
    $password = "";


    //Create connection
    $dbhandel = mysql_connect($servername, $username, $password);
    
    $dbSelect = mysql_select_db("FLookWear") or die("Unable to connect to the database");
    echo "Database is connected";