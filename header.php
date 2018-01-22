<?php
session_start();
if(!isset($_SESSION['nama'])){
    ?>
    <script>
        window.open("login.php", "_self")
    </script>
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TMS - PT. Satya Ragam Trukpress</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="vendor/bootstrap.min.css"> -->
    <link rel="stylesheet" href="vendor/jquery-ui.css">
    <script src="vendor/jquery-1.9.1.js"></script>
    <script src="vendor/jquery-ui.js"></script>
</head>
<body>
    <div class="header">
      <h1><i>Truck Management System</i></h1>
      <h5>PT. Satya Ragam Trukpress</h5>
    </div>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <!-- <li><a href="#">Link</a></li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MASTER <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="data_supir.php">DATA SUPIR</a></li>
                <li><a href="data_truck.php">DATA TRUK</a></li>
                <li><a href="data_rute.php">DATA RUTE</a></li>
                <li><a href="data_ujs.php">DATA UJS</a></li>
                <li><a href="data_customer.php">DATA CUSTOMER</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRANSAKSI <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="sales_order.php">SALES ORDERS</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LAPORAN <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="laporan_so.php">SALES ORDERS</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
