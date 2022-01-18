<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="assets/images/logocomp.png" rel="shortcut icon">
    <title>PT. Delapan Hijau Korundum</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

    <!-- mulai atas header -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- akhir atas header -->

    <!-- Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <ul class="left-info">
                        <li title="English Languange"><a href="index.php?lang=eng"><img src="assets/images/ENG.png" width="25" height="18"/> ENG</a></li>
                        <li title="Bahasa Indonesia"><a href="index.php?lang=idn"><img src="assets/images/IDN.png" width="25" height="18"/></i> IDN</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="right-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logocomp.png" width="90" height="50" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><?php echo $lang['home']?></a>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $lang['aboutus']?></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="visimisi.php"><?php echo $lang['visimisi']?></a>
                                <a class="dropdown-item" href="historycomp.php"><?php echo $lang['historycomp']?></a>
                                <a class="dropdown-item" href="certifcomp.php"><?php echo $lang['certifcomp']?></a>
                                <a class="dropdown-item" href="certifengin.php"><?php echo $lang['certifengin']?></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $lang['services']?></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="construction.php"><?php echo $lang['construction']?></a>
                                <a class="dropdown-item" href="electrical.php"><?php echo $lang['electrical']?></a>
                                <a class="dropdown-item" href="reparation.php"><?php echo $lang['reparation']?></a>
                                <a class="dropdown-item disabled" href="testimonials.html"><?php echo $lang['commerce']?></a>
                            </div>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clients.php"><?php echo $lang['clients']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php"><?php echo $lang['contactus']?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>