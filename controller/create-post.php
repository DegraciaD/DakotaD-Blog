<?php
require_once(__DIR__ . "/../model/config.php");

$connection = new mysqli($host, $username, $password, $database);


$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

echo "<p>Title: $title</p> ";
echo "<p>Post: $post</p> ";

$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = 'title', post =  '$post'");

 if($query){
     echo "<p>Successfully insert post: $title</p>";
 }
 else{
     echo "<p>" .$_SESSION["connection"]->error ."</p>";
 }
 

?>

<embed src="she know.mp3" autostart="true" loop="true"
width="2" height="0">
</embed>



