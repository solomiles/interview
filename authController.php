<?php  
 
    session_start();  

    class authController 
    {  
            
        public function __construct(){

            require_once 'config.php';
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);

            if(!$conn)// testing the connection  
            {  
                die ("Cannot connect to the database");  
            }  
            // die("connected");
            $this->db = $conn;  
        }

        public function registerUser($name, $email, $role, $track_id, $password){  
           
                
                $password = md5($password);  
                $query = mysqli_query($this->db,"INSERT INTO users(name, email, role, track_id, password) VALUES ('$name', '$email', '$role','$track_id', '$password')");  
                
                return $query;  
               
        }  
        public function Login($email, $password){  
            $password = md5($password);
            // die($password);
            $result = mysqli_query($this->db,"SELECT * FROM users WHERE email = '$email' AND password = '$password'");               
            $user_data = $result->fetch_array(MYSQLI_ASSOC);
              
            if ($user_data){
            //   print_r($user_data);exit();
                $_SESSION['login'] = true;  
                $_SESSION['id'] = $user_data['id'];  
                $_SESSION['name'] = $user_data['name'];
                $_SESSION['email'] = $user_data['email'];
                $_SESSION['role'] = $user_data['role'];
                $_SESSION['track_id'] = $user_data['track_id'];  
                 return true;
            }  else {
                return false;
            }
             
        }  
        public function ifUserExist($email){  
            $query = mysqli_query($this->db,"SELECT * FROM users WHERE email = '".$email."'");  
            $row = $query->fetch_array(MYSQLI_ASSOC);  
            if($row!=0){  
                return true;  
            } else {  
                return false;  
            }  
        }  
        public function getMentors(){
            $track_id = $_SESSION['track_id'];
            $user_id = $_SESSION['id'];
            $query = mysqli_query($this->db,"SELECT * FROM users WHERE track_id = '$track_id' AND role = '1' ");
            $results = $query->fetch_all(MYSQLI_ASSOC);
        //     foreach($results as $result => $val){
        //         echo($val['name'].'<br>');
            
        //     // exit;
        // }
            return $results;
        }
        
    } 
     
    
?>