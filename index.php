<?php

session_start();

if (isset($_SESSION['user_id']) and isset($_SESSION['login']))

{

echo "Jestes zalogowany jako: ";

echo $_SESSION['login'];

}

else

{

echo "Nie jestes zalogowany";

 

}