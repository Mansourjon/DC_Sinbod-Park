<?php


if ($_POST['email_user']==""){
echo "<h1>Почтаи электронӣ муайян карда нашудааст!!!</h1><br>";
echo '<a href="forgot-password.php">Ба қафо</a>';
   exit();
}else{
 $email_user = $_POST['email_user'];
}


$conn= @mysqli_connect('localhost', 'root', '', 'itashkhis') or die('Ошибка соединения с БД');
if(!$conn) die(mysqli_connect_error());

mysqli_set_charset($conn, "utf8") or die('Не установлена кодировка');

$email="SELECT * FROM users WHERE users.email= '$email_user'";

$res_email = mysqli_query($conn,$email);

if(mysqli_num_rows($res_email)==0){
	echo "<h1>Чунин емайл мавҷуд  нест!!!</h1><br>";
    echo '<a href="forgot-password.php">Ба қафо</a>';
    exit();

}else
	 $result = mysqli_fetch_row($res_email);
	 setcookie('email',$result[2],time()+300);
	header("Location: recover-password.php");


?>