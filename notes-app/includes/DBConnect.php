<?php 
class DBConnect{
        private $localhost;
        private $username;
        private $password;
        private $db;

        // Constructor 
        public function __construct($localhost, $username, $password, $db){
            $this->localhost = $localhost;
            $this->username = $username;
            $this->password = $password;
            $this->db = $db;
        }

        // Connect to the database
          
        public function connect(){
            $data = mysqli_connect($this->localhost, $this->username, $this->password, $this->db);
            if ($data -> connect_errno) {
                   echo "Failed to connect to MySQL: " . $data -> connect_error;
                exit();
              }

              return $data;
            
        }

          // Create for Crud

       

      

       

            
            
           


        }

  
        // Instance


