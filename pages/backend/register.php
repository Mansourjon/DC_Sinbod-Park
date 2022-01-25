<?php

if(!isset($_POST['fullname_user']) || $_POST['fullname_user'] == ""){


     setcookie('warning','<p>Ному насаб муайян карда нашудааст!</p>',time()+5,'/');
    header("Location: ../frontend/register.php"); 

    exit();
}else{
    $fullname_user = $_POST['fullname_user'];
}

if ($_POST['email_user']==""){
 setcookie('warning','<p>email муайян карда нашудааст!</p>',time()+5,'/');
header("Location: ../frontend/register.php"); 
   exit();
}else{
 $email_user = $_POST['email_user'];
}
if ($_POST['login_user']==""){
    setcookie('warning','<p>Логин муайян карда нашудааст!</p>',time()+5,'/');
    header("Location: ../frontend/register.php");    
    exit();
}else{
    $login_user= $_POST['login_user'];
}

if ($_POST['password_user']==""){
     setcookie('warning','<p>Рамз муайян карда нашудааст!</p>',time()+5,'/');
    header("Location: ../frontend/register.php"); 
    exit();
}else{
    $password_user= md5($_POST['password_user']);
}

if ($_POST['password_user_confirm']=="") {
     setcookie('warning','<p>Рамзро тасдиқ кунед!!!</p>',time()+5,'/');
   
    header("Location: ../frontend/register.php"); 
    exit();
}else{
    $password_user_confirm= md5($_POST['password_user_confirm']);
}
if($password_user != $password_user_confirm){
     setcookie('warning','<p>Рамзи такрорӣ бо рамзи аввала дуруст наомад!</p>',time()+5,'/');
  
    header("Location: ../frontend/register.php"); 
    exit();
}



include('connect.php');


$login="SELECT * FROM users WHERE users.login= '$login_user'";

$res_login = mysqli_query($conn,$login);

if(mysqli_num_rows($res_login)>0){

setcookie('warning','<p>Чунин логин аллакай ҳаст!!!</p>',time()+5,'/');
  
    header("Location: ../backend/register.php"); 
    exit();
}       

$insert_user = "INSERT INTO users (fullname,email,login,password) VALUES ('$fullname_user','$email_user','$login_user','$password_user')";


$res_insert_user = mysqli_query($conn, $insert_user);


if($res_insert_user) {
setcookie('success','<p>Истифодабарандаи нав сохта шуд!</p>',time()+5,'/');


	header("Location: ../../index.php");
}
else echo 'Error';
echo mysqli_error($conn);

?>