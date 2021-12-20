<?php
    session_start();
    include_once("../DB/connect.php");
    // define variables and set to empty values
    $reId = $reNameBn = $reDesignation = $reComment = $image = ""; $imgUpload=0;

    if (isset($_POST['submit'])){
        $reId = $_POST['id'];
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
          if(move_uploaded_file($file_tmp,"../photos/review/"  .$file_name)){
                echo "Successfully Uploaded.";
                $imgUpload=0;
            }else{
                echo  "Could not upload the file.";
                $imgUpload=1;
            }
            // echo $sql; die();
        }


        //MySQLi Procedural
        // Update Query
        $sql = "UPDATE reviewdb
        SET reNameBn = '".$reNameBn."',
        reDesignation = '".$reDesignation."',
        reComment = '".$reComment."',";
        if($imgUpload==0){$sql .= "image='".$file_name."',";}
        $sql .="reNameBn = '".$reNameBn."'
        WHERE reId = '$reId'";

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