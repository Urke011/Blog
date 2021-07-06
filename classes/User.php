

<?php

    class User extends QueryBilder{

        public $register_results = NULL;
        public $loggedUser = NULL;
        public $errorArray = array();
        public function userRegister(){
        $name = FormSanitize::sanitizeFormString($_POST['register_name']);
        //$name = $_POST['register_name'];
        //$email = $_POST['register_email'];
        $email = FormSanitize::sanitazeFormEmail($_POST['register_email']);
        $password = FormSanitize::sanitizeFormPassword($_POST['register_password']);
        //$password = $_POST['register_password'];
          $this->validateUser($name,$email,$password);
          if(empty($this->errorArray)){

             $password = hash("md5",$password);

              $query = $this->db->prepare("INSERT INTO users(name, email, password) VALUES (:name,:email,:password)");
              $query->bindParam(":name",$name);
              $query->bindParam(":email",$email);
              $query->bindParam(":password",$password);
              $query->execute();

          }else {
            echo "register is faild";
          }

        /*$sql="INSERT INTO users VALUES (NULL,?,?,?)";
        $query=$this->db->prepare($sql);
        $query->execute([$name,$email,$password]);

        */
        if($query){
          $this->register_results = true;
        }
      }
      public function validateUser($name,$email,$password){
          $this->validateFirstName($name);
          $this->validateEmail($email);
          $this->validatePassword($password);

      }
      private function validateFirstName($name){
        if(strlen($name) > 25 || strlen($name)<2){
            array_push($this->errorArray, Constants::$firstNameCharacters);
        }
      }
      private function validateEmail($email){
        if(strlen($email) > 35 || strlen($email)<2){
        array_push($this->errorArray, Constants::$emailCharacters);
        }
      }
      private function validatePassword($password){

        if(strlen($password) > 25 || strlen($password)<2){
            //$password = hash("md5",$password); why?
        array_push($this->errorArray, Constants::$passwordCharacters);
        }
      }
      public function getError($error){
        if(in_array($error,$this->errorArray)){
            return "<span class='errorMessage'>$error</span>";
        }
      }

        public function userLogin(){

          $email = $_POST['login_email'];
          $password = $_POST['login_password'];

          $sql ="SELECT * FROM users WHERE email = ? AND password = ?";
          $query = $this->db->prepare($sql);
          $query->execute([$email, $password]);
          $loggedUser=$query->fetch(PDO::FETCH_OBJ);

          if($loggedUser != NULL){
            $_SESSION['loggedUser']=$loggedUser;//ako se uspesno loguje
            $this->loggedUser=$loggedUser;//onda je to ovo
          }
        }
        public function getUserId($id){

          $sql ="SELECT * FROM users WHERE id = ?";
          $query=$this->db->prepare($sql);
          $query->execute([$id]);
          $userId = $query->fetch(PDO::FETCH_OBJ);
          return $userId;
        }
      }



 ?>
