<?php
session_start();
ob_start();

mysql_connect("localhost", "root", "root");
mysql_select_db("cart");
?>