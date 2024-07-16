
<?php
if($_COOKIE['user']){
    if($createBtn){
        $createBtn  = "<a class='adminbtn' href='/create' >Create Post</a>";
    }
    $admin = "<a class='adminbtn' href='/admin' >Admin page</a>";
    $user = "<a class='adminbtn' href='/controller/roleChange.cntrl.php?user=1' >switch User</a>";
       
}else{
    $admin = "<a  calss='loginbtn' href='/login' >Login</a>";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='/view/css/home.css' rel='stylesheet'>
</head>
<body>
    
     <navbar>
        <a href="/home">Post Management</a>
        <div class="nav">
        <?php echo $admin  ?>
        <?php echo $user  ?>
        <?php echo $createBtn ?>
        </div>

     </navbar>

   
</body>
</html>