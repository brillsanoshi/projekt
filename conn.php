<?
define('DB_HOST','localhost');
define('DB_USER','projekt4'); 
define('DB_PASS','test100'); 
define('DB_DB','projekt4');

$connect = mysql_connect(DB_HOST, DB_USER, DB_PASS)
or die('Nie uda�o po��czyc si� z baz� danych. '.mysql_error());

mysql_select_db(DB_DB,$connect)
?>
