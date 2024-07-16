<?php

  require "partials/navbar.php";

  $btn = "<input type='submit' name='create' value='Create'>";

  require "../controller/update.cntrl.php";

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
     
     <div class="form"  >

           <form action="../controller/createPost.cntrl.php" method="POST"  enctype="multipart/form-data">

           <div class="form-group p-3">
            <label for="category">Select a category </label>
                <select  name="category" class='form-control' id="category" required >
                    <option value=1>World</option>
                    <option value=2>India</option>
                    <option value=3>Food</option>
                    <option value=4>Travel</option>
                </select>
                
            </div>


            <div class="input">
                <label for="title">Title</label>
                <input type="text" id='title' name='title' value="<?php echo $title; ?>" required>
               
            </div>

            <div class="input">
                 <label for="description">Description</label>
                
                <textarea name="description" id="description" required> <?php echo $desc; ?></textarea>
            </div>

            <div class="input">
               
              <label for="file">Select a file</label>
               <input type="file" name='file' required id='file'>
            </div>

            <div class="submitbtn">
               <?php echo $btn; ?>
               <input type="text" name='p_id'  value=<?php echo $id; ?> hidden>
            </div>

           </form>
     </div>
       
     </div>
    
    
</body>
</html>