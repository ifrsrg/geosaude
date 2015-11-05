<?php

session_start();


$login = isset($_POST["user"]) ? addslashes(trim($_POST["user"])) : FALSE; 
$senha = isset($_POST["pword"]) ? md5(trim($_POST["pword"])) : FALSE;

echo $login;
echo "<br>";
echo $senha;