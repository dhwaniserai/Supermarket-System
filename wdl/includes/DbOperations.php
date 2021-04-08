<?php
// first name last name country subject
    class DbOperations {
        private $con;
         function __construct(){
             require_once dirname(__FILE__).'/DbConnect.php';
             $db = new DbConnect();
             $this->con = $db->connect(); 
         }
         /* CRUD C=Create*/
        public function createQuery($fname,$lname,$country,$subject){
            $query = "INSERT INTO `ContactUs`  VALUES ('$fname', '$lname', '$country', '$subject')";
            
                
            if($this->con->query($query)) {
                return 1;
            }
            else{
                echo "Error creating database: " . $this->con->error;

                return 2;
            }
                    
        }
            
    }
?>
