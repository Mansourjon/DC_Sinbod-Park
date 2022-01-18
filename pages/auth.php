<?php



if($_POST['login_user']==""){
    echo "<h1>Логин муайян карда нашудааст!!!</h1><br>";
    echo '<a href="../index.php">Ба қафо</a>';
    exit();
}else{
    $login = $_POST['login_user'];
    //echo $login;
}




if($_POST['password_user']==""){
    echo "<h1>Рамз муайян карда нашудааст!!!</h1><br>";
    echo '<a href="../index.php">Ба қафо</a>';
    exit();
}else{
    $password = $_POST['password_user'];
    //echo $password;
}



$password_hash = hash('md5', $password);
// echo $password_hash;





$conn= @mysqli_connect('localhost', 'root', '', 'itashkhis') or die('Хатоги ҳангоми пайвастшави ба БМ');
if(!$conn) die(mysqli_connect_error());
mysqli_set_charset($conn, "utf8") or die('кодировка номаълум');



$sql = "SELECT*FROM users WHERE  login='$login' and password='$password_hash'";

//echo $sql;
$result = mysqli_query($conn, $sql);
// if($result) die('хатоги');
// else echo 'хатоги';
//echo mysqli_error($conn);


if(mysqli_num_rows($result)>0){
     $result = mysqli_fetch_row($result);
     setcookie('fullname',$result[1],time()+300);
     //echo $_COOKIE['fullname'];
	header("Location: user-menu.php");    
   // echo $_SESSION['fullname'];
    // $_SESSION['surname_user'] = $result[2];
    // $_SESSION['email_user'] = $result[3];
    // $_SESSION['login_user'] = $result[4];
    // $_SESSION['password_user'] = $password_hash;
}
else{
	echo '<h1>Парол ва ё логин хато аст!!!</h1><br>';
	echo '<a href="../index.php">Ба қафо</a>';
}



?>
