<?php
    session_start();
    include_once("connect.php");

    //define variables and set to empty values
    $id = $firstName = $lastName = $dateOfBirth = $website = $degree = $phone = $email = $city = $image = $details = $location = $map = $facebook_icons = $instagram_icons = $twitter_icons = $skype_icons = $password = "";

    //Registration Form Submit
    if(isset($_POST['register'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = md5($_POST['password']); //Password encrypted
        // $password1 = $_POST['password1'];

        //register insert sql
        $sql = "INSERT INTO biodb(firstName, lastName, email, password) VALUES ('$firstName','$lastName','$email','$password')";
        $result = mysqli_query($conn,$sql);
        if (mysqli_query($conn,$sql)) {
            echo "New record created successfully";
            header("Location: ../Dashboard/login.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        if(is_array($rows1)){
			// $result = mysqli_fetch_assoc($res);
			$_SESSION['email'] = $row['email'];
			$_SESSION['password'] = $row['password'];
		}
    }
    if(isset($_SESSION["email"])){
        header('location: /Portfolio/Dashboard/login.php');
    }
?>