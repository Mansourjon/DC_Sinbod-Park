<?php
        $_SESSION['page'] = "Бақайдгирӣ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>| <?php echo $_SESSION['page']; ?></title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Бақайдгирӣ</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"></p>

      <form autocomplete="off" action="../backend/register.php" method="post">
           
		   <?php 
           if(isset($_COOKIE['warning']) || $_COOKIE['warning']!='')
            
            {
        
        echo '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Огоҳӣ!</h5>'
                  
          .$_COOKIE['warning'].
         
                '</div>';
        
 
           }
       if(isset($_COOKIE['danger']) || $_COOKIE['danger']!='')
            
            {
        
        echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Огоҳӣ!</h5>'
                  
          .$_COOKIE['danger'].
         
                '</div>';
        
 
           }
        
       ?>
		   
        <div class="input-group mb-3">
       
          <input name="fullname_user" type="text" class="form-control" placeholder="Ному насаб">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input name="email_user" type="email" class="form-control" placeholder="Почтаи электронӣ">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="login_user" class="form-control" placeholder="Логин">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password_user" type="password" class="form-control" placeholder="Рамз">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password_user_confirm" type="password" class="form-control" placeholder="Тасдиқи рамз">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">  
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Бақайдгирӣ</button>
          </div>
           <br></br>
          <!-- /.col -->
        </div>
      </form>


      <a href="../../index.php" class="text-center">Ман аз қайд гузаштаам!</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php
include("header/footer.php")
?>