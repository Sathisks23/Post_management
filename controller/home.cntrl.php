<?php
  

  require "model/Admin.php";

  
 $c_id=1;


 

  $posts = new  Admin();

// Retrive ordered by Category
  $firstPagePosts =  $posts -> getAllPost($c_id);
  $current_category = $firstPagePosts[0]['category_name'] ;

  $categories = new  Admin();
  $Categories = $posts->getAllCategory();






?>
