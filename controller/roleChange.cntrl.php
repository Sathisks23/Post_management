<?php


if(isset($_GET['user'])){
  setcookie('user','',time()-time()+1,'/');
  header('Location:/home');
}


?>