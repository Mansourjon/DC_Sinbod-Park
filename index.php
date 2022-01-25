
<?php
$_SESSION['page'] = "Воридшавӣ";
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
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Воридшавӣ</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"></p>
      <form autocomplete="off" action="pages/backend/login.php" method="post">
	  
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


           if(isset($_COOKIE['success']) || $_COOKIE['success']!='')
            
            {
        
        echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Огоҳӣ!</h5>'
                  
          .$_COOKIE['success'].
         
                '</div>';
        
 
           }
       ?>
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
          <div class="row">
              <div class="col-12">
                  <a href="pages\frontend\register.php"> <button type="submit" class="btn btn-success btn-block">Бақайдгирӣ</button></a>
              </div>
              
            <br></br>
            </div>

     
      <p class="mb-1" >
        <a href="/pages/frontend/forgot-password.php">Рамзро фаромӯш кардам?</a>
      </p>
    </div>
  </div>
</div>
</body>
</html>