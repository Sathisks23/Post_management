

<?php


require "model/Admin.php";

if(isset($_POST['create'])){
    $category = $_POST['category'];
    $title  = $_POST['title'];
    $desc = $_POST['description'];
    $pimage = $_FILES['file']['tmp_name'];
    $imageContent = file_get_contents($pimage);

     $post = new Admin();
     $post->createPost($category, $title, $desc ,$imageContent);
      if($post){
        require "../view/createPost.php";
        header('Location:/home?status=10');
      }else{
        header('Location:/home?status=0');

      }
}else if(isset($_POST['update'])){

    $id = $_POST['p_id'];
    
    $category = $_POST['category'];
    $title  = $_POST['title'];
    $desc = $_POST['description'];
    $pimage = $_FILES['file']['tmp_name'];
    $imageContent = file_get_contents($pimage);

     $post = new Admin();
     $post->editPost($category,$title,$desc,$imageContent,$id);
     
     header('Location:/admin');
}

?>