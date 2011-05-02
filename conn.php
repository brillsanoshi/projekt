<?
define('DB_HOST','mysql2.yoyo.pl');
define('DB_USER','db1178590'); 
define('DB_PASS','flash0'); 
define('DB_DB','db1178590');

$connect = mysql_connect(DB_HOST, DB_USER, DB_PASS)
or die('Nie uda³o po³¹czyc siê z baz¹ danych. '.mysql_error());

mysql_select_db(DB_DB,$connect)
?>
