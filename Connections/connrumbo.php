<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connrumbo = "127.0.0.1";
$database_connrumbo = "rumbo";
$username_connrumbo = "root";
$password_connrumbo = "";
$connrumbo = mysql_pconnect($hostname_connrumbo, $username_connrumbo, $password_connrumbo) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES 'utf8'");
?>