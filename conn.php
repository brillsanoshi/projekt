<?
define('DB_HOST','localhost');
define('DB_USER','root'); 
define('DB_PASS','aa'); 
define('DB_DB','test');

$connect = mysql_connect(DB_HOST, DB_USER, DB_PASS)
or die('Nie uda�o po��czyc si� z baz� danych. '.mysql_error());

mysql_select_db(DB_DB,$connect)
?>
