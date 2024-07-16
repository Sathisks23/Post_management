 <?php
 
 require "Database.php";
 class Admin {

    private $db;

    function __construct(){
        $this->db = (new Database())->connect;
    }

    function login($email,$pwd){

        $sql = "SELECT * FROM Users WHERE email = ? AND password = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$email,$pwd]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        // return $stmt->fetch();
    }

    function getAllCategory(){
         $sql = "SELECT  * FROM Categories";
         $stmt = $this->db->query($sql);
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getAllPost($category='1'){

         $sql  = "SELECT Categories.c_id,p_id,category_name,title,description,date,file 
                 FROM Posts 
                INNER JOIN Categories on Posts.c_id = Categories.c_id WHERE Categories.c_id=?";
          $stmt = $this->db->prepare($sql);
           $stmt->execute([$category]);
          return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    

    function getOnePost($id){
        $sql = "SELECT * FROM Posts WHERE p_id = ?";
        $stmt =  $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function createPost($category,$title,$desc,$file){
       $sql = "INSERT INTO Posts(c_id,title,description,file) values(?,?,?,?)";
       $stmt = $this->db->prepare($sql);
       try{
           $stmt->execute([$category,$title,$desc,$file]);
           return 10;
       }catch(Execption $e){
             return 0;
       }
    }

    function editPost($cid,$title,$desc,$file,$id){
        $sql = "UPDATE Posts set c_id=?, title = ? ,description=? ,file= ? WHERE p_id=? ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$cid,$title,$desc,$file,$id]);
    }

    function deletPost($id){
        $sql = "DELETE FROM Posts WHERE p_id = ?";
        $stmt=$this->db->prepare($sql);
       
         $stmt->execute([$id]);
        
    }

  function updatePost(){

  }

 }