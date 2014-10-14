<?php
/**
 * Created by PhpStorm.
 * User: Dean Cole
 * Date: 14/10/2014
 * Time: 16:04
 */

$host = "localhost";
$user = "root";
$pass = "password";
$db = "acixcms";

mysql_connect($host,$user,$pass)or die(mysql_error());
mysql_select_db($db)or die(mysql_error());

?>