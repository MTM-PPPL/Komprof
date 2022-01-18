<?php
include "header.php";
include "contact_wa.php";
?>

<body>
    <!-- Page Content -->
    <!-- Mulai Banner -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $lang['aboutus']?></h1>
                    <span><?php echo $lang['certifengin']?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="team" style="margin: 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><em><?php echo $lang['certifengin']?></em></h2>
                        <span><?php echo $lang['certifengin']?></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-item">
                        <img src="assets/images/certifengin4.jpg" alt="">
                        <div class="down-content">
                            <h4>Fulan</h4>
                            <span><?php echo $lang['position1'] ?></span>
                            <p><?php echo $lang['desc3'] ?></p>

                            <p>
                                <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-item">
                        <img src="assets/images/certifengin5.jpg" alt="">
                        <div class="down-content">
                            <h4>Fulan</h4>
                            <span><?php echo $lang['position2'] ?></span>
                            <p><?php echo $lang['desc3'] ?></p>
                            <p>
                                <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-item">
                        <img src="assets/images/certifengin6.jpg" alt="">
                        <div class="down-content">
                            <h4>Fulan</h4>
                            <span><?php echo $lang['position3'] ?></span>
                            <p><?php echo $lang['desc3'] ?></p>
                            <p>
                                <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Banner -->

<?php
include "footer.php";
?>

</body>