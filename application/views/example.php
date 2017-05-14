<!DOCTYPE html>
<html lang="en">
<head>
  <title>MEGAPOTEK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>man/bootstrap.min.css">
  <script src="<?php echo base_url() ?>man/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>man/bootstrap.min.js"></script>
  <?php 
foreach($css_files as $file): ?>
  <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
  <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url() ?>index.php/examples/obat">MEGAPOTEK</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url() ?>index.php/examples/obat">Obat</a></li>
        <li><a href="<?php echo base_url() ?>index.php/examples/user">Pengguna</a></li>
        <li><a href="#">Transaksi</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container text-center">    
  <h3>Data Obat</h3><br>
  <?php echo $output; ?>
  <br>

<footer class="container-fluid text-center">
  <p>Copyright © 2017 Megapotek</p>
</footer>

</body>
</html>
