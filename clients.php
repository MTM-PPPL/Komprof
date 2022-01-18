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
                    <h1><?php echo $lang['clients']?></h1>
                    <span><?php echo $lang['ourclients']?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="team" style="margin: 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><em><?php echo $lang['ourclients']?></em></h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-item">
                        <img src="assets/images/indonesia-power.jpg" alt="">
                        <div class="down-content">
                            <h4>Indonesia Power</h4>
                            <span><?php echo $lang['desc_client1']?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-item">
                        <img src="assets/images/pjb-services.jpg" alt="">
                        <div class="down-content">
                            <h4>PJB Services</h4>
                            <span><?php echo $lang['desc_client2']?></span>
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