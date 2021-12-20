<?php
    include_once("connect.php");
    // define variables and set to empty values
    $rHead = $rTitle = $rStartyear = $rEndyears = $rname = $rdetails = "";

    if (isset($_POST['submit'])){
        $rHead = $_POST['rHead'];
        $rTitle = $_POST['rTitle'];
        $rStartyear = $_POST['rStartyear'];
        $rEndyears = $_POST['rEndyears'];
        $rname = $_POST['rname'];
        $rdetails = $_POST['rdetails'];
       
        //MySQLi Procedural
        // Insert Query
        $sql = "INSERT INTO resumedb (rHead, rTitle, rStartyear, rEndyears, rname, rdetails) VALUES ('".$rHead."','".$rTitle."','".$rStartyear."','".$rEndyears."','".$rname."','".$rdetails."')";
        // echo $sql;die();
        if (mysqli_query($conn,$sql)) {
          echo "New record created successfully";
          header("Location:  ../Dashboard/resumelist.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        // echo $sql; die();
      }
?>