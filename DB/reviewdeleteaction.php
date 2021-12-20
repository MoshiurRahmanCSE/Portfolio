<?php
    session_start();
    include_once("../DB/connect.php");

    // define variables and set to empty values
    $reId = $reNameBn = $reDesignation = $reComment = $image = "";
    //
    if (isset($_POST['submit'])){
        //echo 'test';die();
        $reId  = $_POST['id'];
        $reNameBn = $_POST['reNameBn'];
        $reDesignation = $_POST['reDesignation'];
        $reComment = $_POST['reComment'];

        $image = $_FILES['image'];

        // Image upload and save file
        if(isset($_FILES['image'])){
          $file_name = $_FILES['image']['name'];
          $file_size = $_FILES['image']['size'];
          $file_tmp = $_FILES['image']['tmp_name'];
          $file_type = $_FILES['image']['type'];
    
          //Image upload and set in folder
          if(move_uploaded_file($file_tmp,"../photos/category/"  . $file_name)){
            echo "Successfully Uploaded.";
          }else{
            echo  "Could not upload the file.";
          }
        }
        // Delete Query  
        $sql = "DELETE FROM reviewdb WHERE reId = $reId ";
        // echo $sql; die();

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: reviewlist.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      }
?>