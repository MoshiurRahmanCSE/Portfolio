<?php
    include_once("connect.php");
    // define variables and set to empty values
    $cId = $clientName = $projectURL = $projectDate = $image = $shortDesc = $decription = $sql = "";

    if (isset($_POST['submit'])){      
        $cId = $_POST['categoryid'];
        $clientName = $_POST['clientName'];
        $projectURL = $_POST['projectURL'];
        $projectDate = $_POST['projectDate'];
        $shortDesc = $_POST['shortDesc'];
        $decription = $_POST['decription'];

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
        //MySQLi Procedural
        // Insert Query
        $sql = "INSERT INTO categorydetails (cId, clientName, projectURL, projectDate, image, shortDesc, decription) VALUES ('$cId','".$clientName."','".$projectURL."','".$projectDate."','".$file_name."','".$shortDesc."','".$decription."')";
        if (mysqli_query($conn,$sql)) {
          echo "New record created successfully";
          header("Location:  ../Dashboard/catlist.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        //echo $sql; die();
      }
?>