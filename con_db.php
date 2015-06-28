<?
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="ghj";
$mysql_db="zvit";
$con = new mysqli($mysql_host,$mysql_user,$mysql_pass);
$con->query("CREATE DATABASE IF NOT EXISTS $mysql_db CHARACTER SET utf8 COLLATE utf8_general_ci");
$con->select_db($mysql_db);
$con->query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
?>
