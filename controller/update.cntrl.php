
<?php

require "../model/Admin.php";


$title=$desc=$id='';

if(isset($_GET['edit'])){

    $btn = "<input type='submit' name='update' value='Update'>";
     $admin = new Admin();
    $post= $admin->getOnePost($_GET['edit']);
     $title = $post['title'];
     $desc = $post['description'];
     $id = $post['p_id'];
    
}


?>