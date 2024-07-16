<?php

$URL = $_SERVER['REQUEST_URI'];

switch($URL){
    case "/":
        require "view/home.php";
        break;
    case "/admin":
        require "view/admin.php";
        break;
    case "/home":
        require "view/home.php";
        break;
    case "/home?status=10":
        require "view/home.php";
        break;
    case "/login":
        require "view/login.php";
        break;
        case "/create":
            require "view/createPost.php";
            break;

}