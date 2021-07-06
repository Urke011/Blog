<?php

 class Post extends QueryBilder{

    public $postStatus = NULL;
   public function insertPost(){
     $title = $_POST['post_title'];
     $description = $_POST['post_descrption'];
     $user_id = $_SESSION['loggedUser']->id;
     $date = date('d-m-Y');

      $sql = "INSERT INTO posts VALUES (NULL, ?,?,?,?)";
      $query = $this->db->prepare($sql);
      $query->execute([$title,$description,$user_id,$date]);

      if($query){
        $this->postStatus = true;
      }else {
        $this->postStatus = flase;
      }
   }
   public function delete($id){
      $sql = "DELETE FROM posts WHERE id = ?";
      $query=$this->db->prepare($sql);
      $query->execute([$id]);
   }

 }
 ?>
