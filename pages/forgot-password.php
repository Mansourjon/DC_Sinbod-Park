<?php

        $_SESSION['page'] = "Барқароркунии рамз";
include("header.php");
?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Ташхиси тиббӣ</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Шумо рамзро фаромӯш кардед? Мехоҳед рамзро иваз намоед.</p>  
      <form action="forgot.php" method="post">
        <div class="input-group mb-3">
          <input type="email"  name="email_user" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Фиристодан</button>
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
