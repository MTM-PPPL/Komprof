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
                    <span><?php echo $lang['historycomp']?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Banner -->

    <!-- Awal History Company -->
    <div class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <div class="right-content">
                                    <h2><em><?php echo $lang['historycomp']?></em></h2>
                                    <p><?php echo $lang['desc_historycomp']?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-image">
                                    <img src="assets/images/about-1-570x350.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br>
    <!-- Akhir History Company -->

<?php
include "footer.php";
?>

</body>