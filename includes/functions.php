<?php

function connectToDB(){
  return new PDO('mysql:host=devkinsta_db;dbname=Simple_Store',
  'root',
  'cD4FYhCb9HPk9bc0');
};

function isLoggedIn(){
    //if the user log in return true
    //if the user not log in return false
    return isset( $_SESSION['user']);
};

function logOut(){
    //delete the user session data so the user log out
   unset($_SESSION['user']);
};