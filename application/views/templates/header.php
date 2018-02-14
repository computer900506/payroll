<!DOCTYPE html>
<html>
<head>
	<title>Payroll Theme</title>

  <!-- Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- CSS Style -->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url('plugins/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php  echo base_url('css/my.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url('css/dropzone.css'); ?>">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- JavaScript -->
	<script type="text/javascript" src="<?php  echo base_url('js/jquery-3.3.1.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php  echo base_url('plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php  echo base_url('js/masonry.pkgd.min.js'); ?>"></script>
  <script type="text/javascript" src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php  echo base_url('js/dropzone.js'); ?>"></script>
  <script type="text/javascript" src="<?php  echo base_url('js/my.js'); ?>"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php  echo site_url('home/index'); ?>">MY PAYROLL</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <?php if ($this->session->has_userdata('user')): ?>
          <li>
            <a href="<?php  echo site_url('user/logout'); ?>">
              <span class="glyphicon glyphicon-log-out"></span> Logout
            </a>
          </li>
        <?php else: ?>
          <li>
            <a href="<?php echo site_url('user/login'); ?>">
              <span class="glyphicon glyphicon-log-in"></span> Login
            </a>
          </li>
          <li>
            <a href="<?php  echo site_url('user/signup'); ?>">
              <span class="glyphicon glyphicon-user"></span> Sign Up
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

  <div class="header_container">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-7">
          <div class="logo">
            <a href="<?php echo site_url('home/index'); ?>">
              <img src="<?php echo base_url('images/logo.png'); ?>" alt="Payroll Theme">
            </a>
          </div>
        </div>
        <div class="col-md-4 col-sm-5">
          <div class="call-us">
            <p>Call Us - 1912678323</p>
          </div>
        </div>
      </div>
    </div> 
  </div>

  <div class="menu-container">
    <div class="container">
      <div class="mainmenu">
        <ul class="menu-menu nav navbar-nav">
          <li class="menu-item"><a href="<?php echo site_url('home/index'); ?>">Home</a></li>
          <li class="menu-item"><a href="<?php echo site_url('home/check'); ?>">Checks</a></li>
          <li class="menu-item"><a href="<?php echo site_url('home/employee'); ?>">Employees</a></li>
          <li class="menu-item"><a href="<?php echo site_url('home/form'); ?>">Forms</a></li>
          <li class="menu-item"><a href="">Reports</a></li>
          <li class="menu-item"><a href="">Company</a></li>
        </ul>
        <div class="search-container">
          <form class="form-search" action="">
            <input type="text" placeholder="Search.." name="search">
            <button type="btn"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>