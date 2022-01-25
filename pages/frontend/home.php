<?php
$_SESSION['page'] = "Асосӣ";

include("header/header.php");
?>

  
  <div class="content-wrapper">
   
    
    <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Руйхати бемориҳо</h3>
              </div>
            
              <div class="card-body">
                <table id="table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Категория</th>
                    <th>Номи бемориҳо</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php

                    include('../backend/connect.php');


                    
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
