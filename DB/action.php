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
        $sqlCheck = "SELECT * FROM biodb WHERE Email = '$email' ";
        $result = mysqli_query($conn,$sql);
        $result1 = mysqli_query($conn,$sqlCheck);
        if (mysqli_query($conn,$sqlCheck)) {
            if(mysqli_num_rows($result1) > 0){
                while($row = mysqli_fetch_array($result1)){
                    if($row['email']){
                        // echo "Email Available";
                        header("Location:  ../Dashboard/index.php");
                    }
                    else{
                        echo "Email is not available";
                    }
                }
            }
		}
    }
?>