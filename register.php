<?php

require('conn.php');

if (isset($_POST['konto']) and isset($_POST['password']) and isset($_POST['password2']))

{

if ($_POST['password']==$_POST['password2'])

  {

   $konto =  mysql_real_escape_string (trim($_POST['konto']));      

   $password = sha1(mysql_real_escape_string (trim($_POST['password']))); 

   $ile =mysql_query("SELECT * FROM `user` WHERE login = '$konto'");

   $ile = mysql_num_rows($ile);

   if ($ile==0)   {

   $zapytanie="INSERT INTO user (login,password) VALUES('$konto','$password')";

   mysql_query($zapytanie) or die("Wyst¹pi³ b³¹d" );

      echo('Konto '.$konto.' zostalo utworzone');

     

   }

   else

   {

   echo("Taki uzytkownik juz istnieje. Kliknij wstecz aby zarejestrowac sie ponownie");

   }

  }

  else echo ("Podane hasla nie zgadzaja sie");

}

else{

?>

<html>

<body>

<h1>Dodaj nowego uzytkow

nika</h1>

<form action="register.php" method="post">

<strong>Nazwa konta:</strong><input name="konto" type="text" value="" /><br>

<strong>Haslo:</strong><input name="password" type="password" value="" /><br>

<strong>Powtorz haslo:</strong><input name="password2" type="password" value="" /><br>

<input type="submit" value="Zarejestruj" />

</form>

</body>

</html>

<?php

}

 

?>