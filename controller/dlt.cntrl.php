

<?php
require  "../model/Admin.php";


if(isset($_GET['delete'])){
    echo $_GET['delete'];
    $delete = new Admin();
    
    $delete->deletPost($_GET['delete']);
    header('Location:/admin');
  }