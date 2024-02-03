<?php
 
require "DBConnect.php"; 

 class CURD extends DBConnect{

    public function setNotes($data, $tablename){
        if(isset($data['title']) && isset($data['description'])){
            $title =  htmlspecialchars(stripslashes($data['title']));
            $descp =  htmlspecialchars(stripslashes($data['description']));
            $date = date('Y-m-d H:i:s');
            $qry = "INSERT INTO $tablename (title, description, date) VALUES ('$title','$descp', '$date')";
            var_dump($qry);
            $data = mysqli_query($this->connect(), $qry);

            header("Location:index.php");
            

           
        }
    }

    // Read For Curd

    public function getNotes($tablename){
        $query = "SELECT * FROM $tablename";

        $data = mysqli_query($this->connect(), $query) or die(mysqli_error($this->connect()));
         if(mysqli_num_rows($data) > 0){
           return $data;
         }

       
    }

    // Read By Id

    public function getNotesById($tablename, $id){
        $query = "SELECT * FROM $tablename WHERE id = '$id'";

        $data = mysqli_query($this->connect(), $query) or die(mysqli_error($this->connect()));
        
         if(mysqli_num_rows($data) > 0){
           return $data;
         }

       
    }

    // Update 
    public function updateNotes( $tablename, $id, $data){
        if(isset($data['title']) && isset($data['description'])){
            $title =  htmlspecialchars(stripslashes($data['title']));
            $descp =  htmlspecialchars(stripslashes($data['description']));
            $date = date('Y-m-d H:i:s');
           
            $qry = "UPDATE $tablename SET title = '$title', description = '$descp', date = '$date' WHERE id = '$id'";
           
            $data = mysqli_query($this->connect(), $qry);

            header("Location:index.php?message=successfully");
            

           
        }
    }


    // Public function Delete
    public function removeNotes($id, $tablename){
       

        $query = "DELETE FROM $tablename WHERE id=$id";
       
        $data = mysqli_query($this->connect(), $query);
        if($data){
            echo "Data Deleted Successfully";
        }
        header("Location:index.php");
    }

 }

 $db =  new CURD("localhost", "root", "root", "note");
 $db->connect();
 