<?php
isset($_COOKIE['fullname']) ? $_SESSION['page'] = "Асосӣ" :
  header('Location: ../index.php');


include("header.php");
?>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="user-menu.php" class="nav-link">Асосӣ</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Ташхис</a>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Бемориҳои инсон</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="../../dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-no ne d-md-inline">

            <?php
           if ($_COOKIE['fullname']=="") {
             echo "string";
           }
            echo $_COOKIE['fullname'];
            ?>
          </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

            <p><?php
            
            echo $_COOKIE['fullname'];
            
            ?>
              
              <small></small>
            </p>
          </li>
          <!-- Menu Body -->
          
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Саҳифаи шаҳсӣ</a>
            <a href="../index.php" class="btn btn-default btn-flat float-right">
              Баромад</a>
          </li>
        </ul>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="user-menu.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Ташхиси тиббӣ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Бемориҳои инсон
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Категория
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>беморӣ</p>
                    </a>
                  </li>
            </ul>
             </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Ташхис
                
              </p>
            </a>
            </li> -->
            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    



    </section>

    <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Руйхати бемориҳо</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Категория</th>
                    <th>Номи бемориҳо</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php

                    $conn= @mysqli_connect('localhost', 'root', '', 'itashkhis') or die('Хатоги ҳангоми пайвастшави ба БМ');
                    if(!$conn) die(mysqli_connect_error());
                    mysqli_set_charset($conn, "utf8") or die('кодировка номаълум');


                    $select="SELECT c.`name` as cat,b.`name` FROM bolezn_category AS c,bolezn  AS b WHERE c.`id`=b.`id_category` limit 10";
                    //echo $select;
                    $result = mysqli_query($conn, $select);


                    if(mysqli_num_rows($result)>0){

                    while ($row=$result->fetch_assoc()) {
                    echo "<tr>
                    <td>{$row['cat']}</td>
                    <td>{$row['name']}</td>
                  </tr>";
                    }
                    $result->close();
                    $conn->close();
                  }

                    

                  
                    ?>
                 
                  
          
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    
    <strong>Copyright &copy; 2022 <a href="#">Ташхиси тиббӣ</a>.</strong> Ҳамаи ҳуқуқҳо ҳифз карда шудааст.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
