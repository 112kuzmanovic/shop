<?php 
class User extends QueryBuilder {
    public $register_result = NULL;
    public $userExist = NULL;
    public $loggedUser = NULL;


    public function registerUser(){
        $name = $_POST['register_name'];
        $surname = $_POST['register_surname'];
        $email = $_POST['register_email'];
        $password = $_POST['register_password'];
        $address = $_POST['register_address'];


        $sql1 = "SELECT * FROM korisnik WHERE email=?";
        $query1 = $this->db->prepare($sql1);
        $query1->execute([$email]);
        $result = $query1->fetch(PDO::FETCH_OBJ);
        
        if($result==false){
            $sql = "INSERT INTO korisnik VALUES (NULL,?,?,?,?,?)";
            $query = $this->db->prepare($sql);
            $query->execute([$name,$surname,$email,$password,$address]);
            $this->register_result = true;
        }else{
            $this->userExist = true;   

        }
        
    } 

    public function logUser(){
        $email=$_POST['login_email'];
        $password = $_POST['login_password'];

        $sql = "SELECT * FROM korisnik WHERE email=? AND password=?";
        $query = $this->db->prepare($sql);
        $query->execute([$email,$password]);
        $loggedUser = $query->fetch(PDO::FETCH_OBJ);

        if($loggedUser){
            $_SESSION['loggedUser']=$loggedUser;
            $this->loggedUser = $loggedUser;
            
        }
    }

    public function narudzba($id,$korisnik){
        $sql = "INSERT INTO narudzba VALUES (NULL,?,?)";
        $query = $this->db->prepare($sql);
        $query->execute([$id,$korisnik]);
        if($query){
            $_SESSION['proizvod']=null;
            header('Location: index.php');
        }

    }
        
    }
?>