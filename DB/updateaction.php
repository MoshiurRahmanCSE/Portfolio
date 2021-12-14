<?php
    session_start();
    include_once("connect.php");

    //define variables and set to empty values
    $id = $firstName = $lastName = $dateOfBirth = $website = $degree = $phone = $email = $city = $image = $details = $location = $map = $facebook_icons = $instagram_icons = $twitter_icons = $skype_icons = $password = ""; $imgUpload=0;

    //Registration Form Submit
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $website = $_POST['website'];
        $degree = $_POST['degree'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $details = $_POST['details'];
        $location = $_POST['location'];
        $map = $_POST['map'];
        $facebook_icons = $_POST['facebook_icons'];
        $instagram_icons = $_POST['instagram_icons'];
        $twitter_icons = $_POST['twitter_icons'];
        $skype_icons = $_POST['skype_icons'];
        $password = $_POST['password'];

        // Image upload and save file
        if(isset($_FILES['image'])){
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
    
            //Image upload and set in folder
            if(move_uploaded_file($file_tmp,"../photos/"  .$file_name)){
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
        $sql = "UPDATE biodb
        SET firstName = '".$firstName."',
        lastName = '".$lastName."',
        dateOfBirth = '".$dateOfBirth."',
        website = '".$website."',
        degree = '".$degree."',
        phone = '".$phone."',
        email = '".$email."',
        city = '".$city."',
        details = '".$details."',
        location = '".$location."',
        map = '".$map."',
        facebook_icons = '".$facebook_icons."',
        instagram_icons = '".$instagram_icons."',
        twitter_icons = '".$twitter_icons."',
        skype_icons = '".$facebook_icons."',";
        if($imgUpload==0){$sql .= "image='".$file_name."',";}
        $sql .="email = '".$email."'
        WHERE id = '$id'";

        
        if (mysqli_query($conn, $sql)) {
            echo "New record updated successfully";
            header("Location: ../Dashboard/index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        // echo $sql; die();
    }
?>