<?php
    include_once("connect.php");
    // define variables and set to empty values
    $sId = $sName = $sdetails = $image = ""; $imgUpload = 0;

    if (isset($_POST['submit'])){      
        $sId = $_POST['id'];
        $sName = $_POST['sName'];
        $sdetails = $_POST['sdetails'];

        // Image upload and save file
        if(isset($_FILES['image'])){
          $file_name = $_FILES['image']['name'];
          $file_size = $_FILES['image']['size'];
          $file_tmp = $_FILES['image']['tmp_name'];
          $file_type = $_FILES['image']['type'];
    
          //Image upload and set in folder
          if(move_uploaded_file($file_tmp,"../photos/service/"  . $file_name)){
            echo "Successfully Uploaded.";
            $imgUpload=0;
          }else{
            echo  "Could not upload the file.";
            $imgUpload=1;
          }
        }

        //MySQLi Procedural
        // Insert Query
        $sql = "INSERT INTO servicedb (sId, sName, sdetails, image) VALUES ('$sId','".$sName."','".$sdetails."','".$file_name."')";
        // Update Query
        $sql = "UPDATE servicedb
        SET sName = '".$sName."',
        sdetails = '".$sdetails."',";
        if($imgUpload==0){$sql .= "image='".$file_name."',";}
        $sql .="sName = '".$sName."'
        WHERE sId = '$sId'";
        
        if (mysqli_query($conn,$sql)) {
          echo "New record created successfully";
          header("Location:  ../Dashboard/servicelist.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        //echo $sql; die();
      }
?>