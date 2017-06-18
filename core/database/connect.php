<?php
$connect_error = 'Sorry, du wir haben gerade Connection Server Probleme.';
mysql_connect('localhost', 'kappadappa', '31a53b1c3c');
mysql_select_db('users');

// or die($connect_error); !!!FIXEN mysql_connect und mysql_select_db
?>