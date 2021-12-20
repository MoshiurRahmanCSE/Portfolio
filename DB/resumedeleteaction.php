<?php
    session_start();
    include_once("../DB/connect.php");
    // define variables and set to empty values
    $rId  = $reNameBn = $rTitle = $rStartyear = $rEndyears = $rname = $rdetails = "";

    if (isset($_POST['submit'])){
        $rId  = $_POST['id'];
        $rHead = $_POST['rHead'];
        $rTitle = $_POST['rTitle'];
        $rStartyear = $_POST['rStartyear'];
        $rEndyears = $_POST['rEndyears'];
        $rname = $_POST['rname'];
        $rdetails = $_POST['rdetails'];

        //MySQLi Procedural
        // Delete Query
        $sql = "DELETE FROM resumedb WHERE rId = $rId";

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