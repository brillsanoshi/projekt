<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="iso-8859-2" />
<title>Polski JOPS</title>
</head>
<body LEFTMARGIN=150 TOPMARGIN=50 MARGINWIDTH=200 MARGINHEIGHT=100>
<?php

session_start();

if (isset($_SESSION['user_id']) and isset($_SESSION['login']))

{

echo "Jestes zalogowany jako: ";

echo $_SESSION['login'];

echo "<br>";

echo ("<a href=\"logout.php\">Wyloguj</a>");

}

else

{

echo "Nie jestes zalogowany"; 
 
echo "<br>";

echo ("<a href=\"login.php\">Zaloguj</a>");

echo "<br>";

echo ("<a href=\"register.php\">Rejestracja</a>");

}
?>

</body>
</html>