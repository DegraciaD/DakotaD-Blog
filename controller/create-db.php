<?php

require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);

if ($connection->connect_error) {
    die("<P>Error: " . $connection->connect_error . "</P>");
}

$exists = $connection->select_db($database);

if(!$exists) {
    $query = $connection->query("CREATE DATABASE $database");

    if($query) {
       echo"<P>Successfully created  database: " . $database . "</P>";
    }
} 
else {
   echo "<P>Database already exists.</P>";
}

$query = $connection->query ("CREATE TABLE posts("
        . "id int (11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");

if($query){
    echo "<P>Succesfully create table : posts</P>";
}
else{
    echo "<P>$connection->error</P>";
}
$connection->close();

