<?php
    include_once("connect.php");
    // define variables and set to empty values
    $reNameBn = $reDesignation = $reComment = $image = "";

    if (isset($_POST['submit'])){      
        $reNameBn = $_POST['reNameBn'];
        $reDesignation = $_POST['reDesignation'];
        $reComment = $_POST['reComment'];

        // Image upload and save file
        if(isset($_FILES['image'])){
          $file_name = $_FILES['image']['name'];
          $file_size = $_FILES['image']['size'];
          $file_tmp = $_FILES['image']['tmp_name'];
          $file_type = $_FILES['image']['type'];
    
          //Image upload and set in folder
          if(move_uploaded_file($file_tmp,"../photos/review/"  . $file_name)){
            echo "Successfully Uploaded.";
          }else{
            echo  "Could not upload the file.";
          }
        }        
        //MySQLi Procedural
        // Insert Query
        $sql = "INSERT INTO reviewdb (reNameBn, reDesignation, reComment, image) VALUES ('".$reNameBn."','".$reDesignation."','".$reComment."','".$file_name."')";
        // echo $sql;die();
        if (mysqli_query($conn,$sql)) {
          echo "New record created successfully";
          header("Location:  ../Dashboard/reviewlist.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        // echo $sql; die();
      }
?>