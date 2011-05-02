<?
define('DB_HOST','localhost');
define('DB_USER','root'); 
define('DB_PASS','aa'); 
define('DB_DB','test');

$connect = mysql_connect(DB_HOST, DB_USER, DB_PASS)
or die('Nie uda³o po³¹czyc siê z baz¹ danych. '.mysql_error());

mysql_select_db(DB_DB,$connect)
?>
