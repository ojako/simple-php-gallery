<?php
//measure page load time for testing purposes
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
//include page functions and variables/config
include("inc/functions.php");
?>
<!--
- Website by Jak of TinyPlastic.com
- Updated: 17/09/14
- Owned by Howard Hill
- CONTACT FOR COPYRIGHT DETAILS
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Howard Hill Photography</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  	<!-- Nivo Lightbox -->
  	<link rel="stylesheet" href="css/nivo-lightbox.css" type="text/css" />
  	<link rel="stylesheet" href="css/nivo-theme/default.css" type="text/css" />
    <!-- Slippry Slider -->
    <script src="js/slippry.min.js"></script>
    <link rel="stylesheet" href="css/slippry.min.css" />
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
    <!-- Custom Styles (06/06/14)-->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">HH Photo</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="gallery.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>