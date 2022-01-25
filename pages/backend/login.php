<?php

if($_POST['login_user']=="")
	{
		setcookie('warning','<p>Логин муайян карда нашудааст!</p>',time()+5,'/');
		header("Location: ../../index.php");  
		exit();
	}
else
	{
    $login = $_POST['login_user'];
	}
	
if($_POST['password_user']=="")
	{
		setcookie('warning','<p>Рамз муайян карда нашудааст!</p>',time()+5,'/');
		header("Location: ../../index.php");  
		exit();
	}
else
	{
    $password = $_POST['password_user'];
	}

$password_hash = hash('md5', $password);

include('connect.php');
$sql = "SELECT*FROM users WHERE  login='$login' and password='$password_hash'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
     $result = mysqli_fetch_row($result);
     setcookie('fullname',$result[1],time()+300,'/');
     
	header("Location: ../frontend/home.php");    
   
}
else{
	setcookie('danger','<p>Парол ва ё логин хато аст!</p>',time()+5,'/');
		header("Location: ../../index.php");  
		exit();
}



?>
