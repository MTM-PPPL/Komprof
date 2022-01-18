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
                    <span><?php echo $lang['visimisi']?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Banner -->

    <!-- Awal Visi Misi -->
    <div class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <div class="right-content">
                                    <h2><em><?php echo $lang['ourvision']?></em></h2>
                                    <p><?php echo $lang['desc_vision']?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-image">
                                    <img src="assets/images/visi.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <div class="right-content">
                                    <h2><em><?php echo $lang['ourmission']?></em></h2>
                                    <p><?php echo $lang['desc_mission']?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-image">
                                    <img src="assets/images/misi.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br>
    <!-- Akhir Visi Misi -->

<?php
include "footer.php"
?>

</body>