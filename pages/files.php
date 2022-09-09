<?php
    $base = '../';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Files</title>

  <!-- Google Font: Source Sans Pro -->
  <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">-->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href=<?php echo $base."plugins/fontawesome-free/css/all.min.css" ?>>
  <!-- JQuery Datatables -->
  <link rel="stylesheet" href=<?php echo $base."plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" ?>>
  <link rel="stylesheet" href=<?php echo $base."plugins/datatables-responsive/css/responsive.bootstrap4.min.css" ?>>
  <link rel="stylesheet" href=<?php echo $base."plugins/datatables-buttons/css/buttons.bootstrap4.min.css" ?>>
  <link rel="stylesheet" href=<?php echo $base."plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css"?>>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href=<?php echo $base."plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css"?>>
  <!-- Toastr -->
  <link rel="stylesheet" href=<?php echo $base."plugins/toastr/toastr.min.css"?>>
  <!-- Theme style -->
  <link rel="stylesheet" href=<?php echo $base."dist/css/adminlte.min.css"?>>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php
    include_once '../fragments/navbar.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
    include_once '../fragments/sidebar.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-12">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped" id="files">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Extesion</th>
                            <th>Complete</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name">File Name</label>
            <input type="text" name="name" id="fileName" class="form-control">
          </div>
          <input type="hidden" name="fileId" id="fileId">
          <div class="form-group">
            <label for="extension">Extension</label>
            <select name="extension" id="fileExtension" class="form-control" required>
              <?php
                require_once $base.'core/Connection.php';

                $db = new DatabaseConnection();

                $res = $db->blankect_query('file_extensions', '*');
                foreach($res as $r){
                  echo '<option value="'.$r['ID'].'">'.$r['extension'].'</option>';
                }
              ?>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="saveFile(files)">Save</button>
      </div>
    </div>
  </div>
</div>


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src=<?php echo $base."plugins/jquery/jquery.min.js"?>></script>
<!-- Bootstrap 4 -->
<script src=<?php echo $base."plugins/bootstrap/js/bootstrap.bundle.min.js"?>></script>
<!-- jQuery DataTable-->
<script src=<?php echo $base."plugins/datatables/jquery.dataTables.min.js"?>></script>
<script src=<?php echo $base."plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"?>></script>
<script src=<?php echo $base."plugins/datatables-responsive/js/dataTables.responsive.min.js"?>></script>
<script src=<?php echo $base."plugins/datatables-responsive/js/responsive.bootstrap4.min.js"?>></script>
<script src=<?php echo $base."plugins/datatables-buttons/js/dataTables.buttons.min.js"?>></script>
<script src=<?php echo $base."plugins/datatables-buttons/js/buttons.bootstrap4.min.js"?>></script>
<script src=<?php echo $base."plugins/datatables-buttons/js/buttons.html5.min.js"?>></script>
<script src=<?php echo $base."plugins/datatables-buttons/js/buttons.print.min.js"?>></script>
<script src=<?php echo $base."plugins/datatables-buttons/js/buttons.colVis.min.js"?>></script>
<!-- AdminLTE App -->
<script src=<?php echo $base."dist/js/adminlte.min.js" ?>></script>
<!-- SweetAlert2 -->
<script src=<?php echo $base."plugins/sweetalert2/sweetalert2.min.js"?>></script>
<!-- Toastr -->
<script src=<?php echo $base."plugins/toastr/toastr.min.js"?>></script>
<!-- Data table files -->
<script src=<?php echo $base."dist/js/files.js" ?>></script>
</body>
</html>


