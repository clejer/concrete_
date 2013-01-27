<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Maquette</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
	<link href="themes/bootstrap/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Wendy+One' rel='stylesheet' type='text/css'>
    <link href="themes/bootstrap/assets/css/main.css" rel="stylesheet">
 
    <style>    
	 h1,h2,h3,h4 { 
		font-family: 'Wendy One', sans-serif;
	  }
      footer {
      	margin-top: 1em;
      	padding-top: 0.5em;
      	border-top: solid 2px #ddd;
      }
    </style>
  
  <link href="<?php echo $this->getThemePath();?>/assets/css/bootstrap-responsive.css" rel="stylesheet">

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
              <li class="active"><<?php $a=new Area('menu'); 
								$a->display($c);?></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">