<?php
  require_once(__DIR__ . "/../model/Database.php");
  session_start();

  $path = "/DakotaD-Blog/";
  
  $host = "localhost";
  $username  = "root";
  $password = "root";
  $database = "blog_db";
  
  if(!isset($_SESSION["connection"])){
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
  }
  ?>
