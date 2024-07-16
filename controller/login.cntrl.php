<?php

require "model/Admin.php";


if(isset($_POST['login'])){

     if( !empty($_POST['email']) ){  $email = $_POST['email'] ; }else{ $ok=0; $email_error= "Required Field"; }
     if( !empty($_POST['password']) ){  $password = $_POST['password'] ; }else{ $ok=0; $password_error= "Required Field"; }

     if($ok){
     
         $admin = new Admin();
         $result = $admin->login($email,$password);
        
         if($result['user_name']){
            $valid = time()+(86400+30);
            setcookie('user',$email,$valid,'/');
            header('Location:/home');
         }else{
           
            $password_error = 'Password and Email didn\'t Match';
         }
     }

}


//   setcookie('user','',time()-time()+1,'/');