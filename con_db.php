<?php
$con = new mysqli("localhost","root","ghj");
$con->query("CREATE DATABASE IF NOT EXISTS zvit CHARACTER SET utf8 COLLATE utf8_general_ci");
$con->select_db("zvit");
$con->query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
?>
