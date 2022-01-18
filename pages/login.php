
<?php
$_SESSION['page'] = "Воридшавӣ";

include("header.php");
?>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Ташхиси тиббӣ</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Воридшавӣ/Авторизиция</p>
      <form action="pages/auth.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="login_user" placeholder="Логин">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_user" placeholder="Рамз">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">  
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Воридшавӣ</button>
          </div>
          <br></br>
        </div>
      </form>
      <form action="pages/register.php" method="post">
        
          <div class="row">
              <div class="col-12">
                   <button type="submit" class="btn btn-success btn-block">Бақайдгирӣ</button>
              </div>
              
            <br></br>
            </div>

          </form>
     


      <p class="mb-1" >
        <a href="/pages/forgot-password.php">Рамзро фаромӯш кардам?</a>
      </p>
      

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<?php
include("footer.php")
?>