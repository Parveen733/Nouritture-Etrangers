<?php
/* Database connection settings */
$host = 'localhost:3306';
$user = 'mast01g6tu';
$pass = 'QWR8we8T';
$db = 'bddmast01';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
