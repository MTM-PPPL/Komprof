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
                    <h1><?php echo $lang['services']?></h1>
                    <span><?php echo $lang['reparation']?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Banner -->

    <!-- Awal Menu Reparation -->
    <div class="more-info about-info">
        <div class="container">
            <div class="more-info-content">
                <div class="right-content">
                    <h2><em><?php echo $lang['reparation']?></em></h2>
                    <h5>1. <?php echo $lang['title_rep1']?></h5>
                    <br>
                    <p><?php echo $lang['desc_rep1']?></p>

                    <br>

                    <h5>2. <?php echo $lang['title_rep2']?></h5>
                    <br>
                    <p><?php echo $lang['desc_rep2']?></p>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Menu Reparation -->

<?php
include "footer.php";
?>

</body>