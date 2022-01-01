<?php
    include_once("../DB/connect.php");
    // define variables and set to empty values
    $rId  = $rHead = $rTitle = $rStartyear = $rEndyears = $rname = $rdetails = "";

    if (isset($_POST['submit'])){
        $rId  = $_POST['id'];
        $rHead = $_POST['rHead'];
        $rTitle = $_POST['rTitle'];
        $rStartyear = $_POST['rStartyear'];
        $rEndyears = $_POST['rEndyears'];
        $rname = $_POST['rname'];
        $rdetails = $_POST['rdetails'];

        //MySQLi Procedural
        // Update Query
        $sql = "UPDATE resumedb
        SET rHead = '".$rHead."',
        rTitle = '".$rTitle."',
        rStartyear = '".$rStartyear."',
        rEndyears = '".$rEndyears."',
        rname = '".$rname."',
        rdetails = '$rdetails'
        WHERE rId  = '$rId'";

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