<?php

session_start();

require "includes/functions.php";

if( isLoggedIn()){
   logout();
   header('Location: /login.php');
   exit;
}else
{
    header('Location:/login.php');
    exit;
}