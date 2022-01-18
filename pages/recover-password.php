<?php

        $_SESSION['page'] = "Ивази рамз";
include("header.php");
?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../index.php" class="h1"><b>Ташхиси тиббӣ</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Рамзи навро ворид намоед!</p>
      <form action="recover.php" method="post">
        <div class="input-group mb-3">
          <input type="password" name="password_user" class="form-control" placeholder="Рамзи нав">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_user_confirm" class="form-control" placeholder="Тасдиқи рамзи нав">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Сабти рамзи нав</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="../index.php">Воридшавӣ</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
