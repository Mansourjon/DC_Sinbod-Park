<?php

if(!isset($_POST['fullname_user']) || $_POST['fullname_user'] == ""){
    echo "<h1>Ному насаб муайян карда нашудааст!!!</h1><br>";
    echo '<a href="register.php">Ба қафо</a>';
    exit();
}else{
    $fullname_user = $_POST['fullname_user'];
}

if ($_POST['email_user']==""){
echo "<h1>Почтаи электронӣ муайян карда нашудааст!!!</h1><br>";
echo '<a href="register.php">Ба қафо</a>';
   exit();
}else{
 $email_user = $_POST['email_user'];
}
if ($_POST['login_user']==""){
    echo "<h1>Логин муайян карда нашудааст!!!</h1><br>";
    echo '<a href="register.php">Ба қафо</a>';
    exit();
}else{
    $login_user= $_POST['login_user'];
}

if ($_POST['password_user']==""){
    echo "<h1>Рамз муайян карда нашудааст!!!</h1><br>";
    echo '<a href="register.php">Ба қафо</a>';
    exit();
}else{
    $password_user= md5($_POST['password_user']);
}

if ($_POST['password_user_confirm']=="") {
    echo "<h1>Рамзро тасдиқ кунед!!!</h1><br>";
    echo '<a href="register.php">Ба қафо</a>';
    exit();
}else{
    $password_user_confirm= md5($_POST['password_user_confirm']);
}
if($password_user != $password_user_confirm){
    echo "<h1>Рамзи такрорӣ бо рамзи аввала дуруст наомад!!!</h1><br>";
    echo '<a href="register.php">Ба қафо</a>';
    exit();
}




$conn= @mysqli_connect('localhost', 'root', '', 'itashkhis') or die('Ошибка соединения с БД');
if(!$conn) die(mysqli_connect_error());

mysqli_set_charset($conn, "utf8") or die('Не установлена кодировка');



$login="SELECT * FROM users WHERE users.login= '$login_user'";

$res_login = mysqli_query($conn,$login);

if(mysqli_num_rows($res_login)>0){
	echo "<h1>Чунин логин аллакай ҳаст!!!</h1><br>";
    echo '<a href="register.php">Ба қафо</a>';
    exit();
}

$insert_user = "INSERT INTO users (fullname,email,login,password) VALUES ('$fullname_user','$email_user','$login_user','$password_user')";


// echo $insert;
$res_insert_user = mysqli_query($conn, $insert_user);

// $id="SELECT id FROM users WHERE users.login= '$login_user'";

// $res_id = mysqli_query($conn,$id);

// if(mysqli_num_rows($res_id)>0){
// $result = mysqli_fetch_row($res_id);

// $insert_patient = "INSERT INTO patients (id_user,fullname) VALUES ('$result[0]','$fullname_user')";

// //echo $insert2;
// $res_insert_patient = mysqli_query($conn, $insert_patient);
// }
//echo $_SESSION['id_user'];
if($res_insert_user) {
	header("Location: ../index.php");
}
else echo 'Error';
echo mysqli_error($conn);

?>