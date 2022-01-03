<?php
    session_start();
    include_once("../DB/connect.php");

    //define variables and set to empty values
    $cId = $clientName = $projectURL = $projectDate = $image = $shortDesc = ""; $imgUpload = 0;

    //Registration Form Submit
    if(isset($_POST['submit'])){
        $cdId = $_POST['id'];
        $clientName = $_POST['clientName'];
        $projectURL = $_POST['projectURL'];
        $projectDate = $_POST['projectDate'];
        $shortDesc = $_POST['shortDesc'];
        // $description = $_POST['description'];

        // Image upload and save file
        if(isset($_FILES['image'])){
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
    
            //Image upload and set in folder
            if(move_uploaded_file($file_tmp,"../photos/category/"  .$file_name)){
                echo "Successfully Uploaded.";
                $imgUpload=0;
            }else{
                echo  "Could not upload the file.";
                $imgUpload=1;
            }
        }

        //MySQLi Procedural
        // Update Query
        $sql = "UPDATE categorydetails
        SET clientName = '".$clientName."',
        projectURL = '".$projectURL."',
        projectDate = '".$projectDate."',
        shortDesc = '".$shortDesc."',";
        if($imgUpload==0){$sql .= "image='".$file_name."',";}
        $sql .="clientName = '".$clientName."'
        WHERE cdId = '$cdId'";
        // echo $sql; die();

        
        if (mysqli_query($conn, $sql)) {
            //echo $sql; die();
            echo "New record updated successfully";
            header("Location: ../Dashboard/catlist.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        // echo $sql; die();
    }
?>