<?php 
session_start(); 
include "../db/db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: ../pages/signup.php?error=Логін обо'язковий&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: ../pages/signup.php?error=Пароль обо'язковий&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: ../pages/signup.php?error=Підтвердження паролю обо'язкове&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: ../pages/signup.php?error=Ім'я обо'язкове&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: ../pages/signup.php?error=Підтвердіть пароль&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../pages/signup.php?error=Це ім'я вже зайнято&$user_data");
	        exit();
		} else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: ../pages/signup.php?success=Ваш акаунт створено успішно");
	         exit();
           } else {
	           	header("Location: ../pages/signup.php?error=Невідома помилка&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: ../pages/signup.php");
	exit();
}