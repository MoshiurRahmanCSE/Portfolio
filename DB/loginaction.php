<?php 
    session_start();
    include_once("../DB/connect.php");


	//Password dycrypted
    
    if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		
		
		$query = "SELECT * FROM biodb WHERE email = '$email' && password = '$password'";
		$res = mysqli_query($conn, $query);
		$rows1 = mysqli_num_rows($res);

		if($rows1){
			$result = mysqli_fetch_assoc($res);
			$_SESSION['email'] = $email;
			include('Portfolio/Dashboard/login.php');
			header('location: /Portfolio/Dashboard/index.php');
			
			// if($email){
			// 	echo "Login Successfully";
			// }else{
			// 	echo "Invalid  Email";
			// }
		}else{
			echo "Login Failed";
		}
	}else{
		echo "Error";
		header('location: /Portfolio/Dashboard/login.php');
	}

?>