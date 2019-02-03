<?php
session_start();

$dbhost="localhost";
$dbname="stumbldb";
$dbuser="yoon";
$dbpass="yoon2001";

mysql_connect($dbhost,$dbuser,$dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
?>