<?php

$link = mysql_connect('localhost', 'root', 'mariadb123');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db('Project_1', $link) or die('Could not select database.');


?>
