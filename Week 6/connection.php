<?php

    //Set up the database access credentials

    $hostname = 'localhost';

    $username = 'root'; 

    $password = ''; 

    $databaseName = 'phpmysql - web dev'; //the name of the db you are using on phpMyAdmin

    $connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");

?>