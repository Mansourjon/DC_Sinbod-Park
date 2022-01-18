<?php

        $_SESSION['page'] = "Бақайдгирӣ";
include("header.php");
?>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../index.php" class="h1"><b>Ташхиси тиббӣ</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Бақайдгирӣ/Регистратция</p>

      <form action="reg.php" method="post">
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


      <a href="../index.php" class="text-center">Ман аз қайд гузаштаам!</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php
include("footer.php")
?>