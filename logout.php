<?

session_start();

 

session_unset();

session_destroy();

echo "Zostales Wylogowany";

 
?>
<?

sleep(3);

header('Location:index.php');

?>