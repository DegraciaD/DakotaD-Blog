<?php
require_once(__DIR__ . "/../model/config.php");
 ?>
<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">

<form>
    <div>
        <label for="email">Email: </label>
        <input type="text" name="email"/>
    </div>
    
    <div>
        <label for="username">Username: </label> 
        <input type="text" name="username"/>
    </div>
    <label for="password">Password: </label> 
        <input type="text" name="password"/>
    <div>
        <button type="submit">submit</button> 
    </div>
</form>

