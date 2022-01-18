<?php



if ($_COOKIE['email']=="") {
             echo "Ҳатман емайл ворид карда шавад !!!<br>";
             echo '<a href="forgot-password.php">Ба қафо</a>';
             exit();
           }

            $email_user = $_COOKIE['email'];


if ($_POST['password_user']==""){
    echo "<h1>Рамз муайян карда нашудааст!!!</h1><br>";
    echo '<a href="recover-password.php">Ба қафо</a>';
    exit();
}else{
    $password_user= md5($_POST['password_user']);
}

if ($_POST['password_user_confirm']=="") {
    echo "<h1>Рамзро тасдиқ кунед!!!</h1><br>";
    echo '<a href="recover-password.php">Ба қафо</a>';
    exit();
}else{
    $password_user_confirm= md5($_POST['password_user_confirm']);
}
if($password_user != $password_user_confirm){
    echo "<h1>Рамзи такрорӣ бо рамзи аввала дуруст наомад!!!</h1><br>";
    echo '<a href="recover-password.php">Ба қафо</a>';
    exit();
}

$conn= @mysqli_connect('localhost', 'root', '', 'itashkhis') or die('Ошибка соединения с БД');
if(!$conn) die(mysqli_connect_error());

mysqli_set_charset($conn, "utf8") or die('Не установлена кодировка');



$password="SELECT * FROM users WHERE users.password= '$password_user' and users.email= '$email_user'" ;
//echo $password;
$res_password = mysqli_query($conn,$password);

if(mysqli_num_rows($res_password)>0){
    echo "<h1>Ин рамз бо рамзи пешина монанд аст!!!</h1><br>";
    echo '<a href="recover-password.php">Ба қафо</a>';
    exit();
}

//$update = "INSERT INTO users (email,login,password) VALUES ('$email_user','$login_user','$password_user')";
$update = "UPDATE users SET password='$password_user' WHERE email='$email_user'";
// echo $update;
// echo $insert;
$res_update_user = mysqli_query($conn, $update);

header("Location: ../index.php");

?>
