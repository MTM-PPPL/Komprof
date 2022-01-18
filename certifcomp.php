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
                    <h1><?php echo $lang['aboutus'] ?></h1>
                    <span><?php echo $lang['certifcomp'] ?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Banner -->

    <!-- Awal Certification Company -->
    <div class="more-info about-info">
        <div class="container">
            <div class="more-info-content">
                <div class="right-content">
                    <h2><em><?php echo $lang['certifcomp'] ?></em></h2>
                    <h5><?php echo $lang['nib'] ?></h5>
                    <br>
                    <span><?php echo $lang['num_nib'] ?></span>

                    <br>
                    <h5><?php echo $lang['npwp'] ?></h5>
                    <br>
                    <span><?php echo $lang['num_npwp'] ?></span>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Certification Company -->

    <?php
    include "footer.php";
    ?>

</body>