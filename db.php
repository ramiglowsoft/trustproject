<?php
 

$db = mysql_connect('localhost','root','');
if(!$db)
{
die('Could not connect:'.mysql_error());
}

mysql_select_db("lovetrust") or die(mysql_error());




?>