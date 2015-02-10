<?php
require_once(__DIR__ . "/../model/config.php");
 ?>


<embed src="flo.xspf" autostart="true" loop="true"
width="2" height="0">
</embed>

<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title"/>
    </div>
    
    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
    
    <div>
        <button>Kingdom Hearts is the best game</button>
    </div>

        
</form>

