<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'codephp';

$myconn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($myconn->connect_errno) {
        printf("Connect failed: %s\n", $myconn->connect_error9);
        exit();
    }