 <?php
    $username = $password =  '';
    if (isset($_POST['login'])) {
        $error = [];
        // check variable existance using isset function
        if (isset($_POST['username']) && !empty($_POST['username'])) {
            $username = $_POST['username'];
        } else {
            $error['username'] =  'Enter username';
        }
        // check variable existance using isset function
        if (isset($_POST['password']) && !empty($_POST['password'])) {
            $password =  $_POST['password'];
        } else {
            $error['password'] =  'Enter password';
        }
    }
    ?>
 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <title>Login</title>
 </head>

 <body>
     <h1>Login Form</h1>
     <form action="#" method="post">
         <label for="username">Username</label>
         <input type="text" placeholder="Enter username" id="username" name="username" value="<?php echo $username ?>">
         <?php echo (isset($error['username']) ? $error['username'] : ''); ?>
         <br />
         <label for="Password">Password</label>
         <input type="Password" placeholder="Enter Password" id="Password" name="password" value="<?php echo $password ?>">
         <?php echo (isset($error['password']) ? $error['password'] : ''); ?>
         <br />
         <input type="submit" name="login" value="Login">
     </form>
 </body>

 </html>