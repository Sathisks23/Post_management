<?php

  require "partials/navbar.php";
  require 'controller/home.cntrl.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <h3><?php echo $current_category; ?></h3>
    
    <div class="container">



    <?php foreach($firstPagePosts as $post): ?>


    <div class="wrapper">
        <small> <?php echo $post['date'];?></small>
             
             <div class="title"><h1><?php echo $post['title'];?><?php echo $post['c_id'];?></h1></div>
                <img class='img-fluid' src='data:image/jpeg;base64,<?php echo base64_encode($post['file']) ?>'>
    
             <div class="description"><p> <?php echo $post['description'] ?> </p></div>
    
     </div>

  <?php  endforeach; ?>
        

    </div>

    <div class="pagenation">
        <?php foreach($Categories as $id):?>
           <a href="../controller/pagenation.cntrl.php?id=<?php echo $id['c_id'] ?>"><?php echo $id['c_id']?></a>
           <?php endforeach;?>
    </div>

</body>
</html>