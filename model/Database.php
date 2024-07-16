<?php

 class Database{
    private $host = 'localhost';
    private $db = 'post_management';
    private $username = "dckap";
    private $password = "Dckap2023Ecommerce";
    public   $connect;

    function __construct(){
         $dsn = "mysql:host=".$this->host.";dbname=".$this->db;
         try{
             
            $this->connect = new PDO($dsn,$this->username,$this->password);
            
         }catch(PDOException $e){
            echo "Error!".$e;
         }
    }
    
 }

