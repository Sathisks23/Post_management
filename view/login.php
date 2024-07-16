

<?php

$email=$email_error=$password=$password_error='';
$ok=1;

require "controller/login.cntrl.php";
require "partials/navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <div class="container">
     
     <div class="form">

           <form action="" method="POST">
            <div class="input">
                <input type="text" name='email' placeholder='Email'>
                <?php echo $email_error;?>
            </div>

            <div class="input">
                <input type="text" name='password'  placeholder='Password'>
                <?php echo $password_error;?>

            </div>

            <div class="submitbtn">
               <input type="submit" name='login' value='Login'>
            </div>

           </form>
     </div>
       
     </div>
    
</body>
</html>