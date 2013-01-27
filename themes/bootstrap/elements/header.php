<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Maquette</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
	<link href="themes/bootstrap/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="themes/bootstrap/assets/css/main.css" rel="stylesheet">
   <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
    <style>    
      footer {
      	margin-top: 1em;
      	padding-top: 0.5em;
      	border-top: solid 2px #ddd;
      }
    </style>
  <!--  <link href="assets/css/bootstrap-min.css" rel="stylesheet"> -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php Loader::element('header_required'); ?>
  </head>

  <body>

    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">