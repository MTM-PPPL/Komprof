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
                    <h1><?php echo $lang['contactus']?></h1>
                    <span><?php echo $lang['desc_conwitus']?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Banner -->

    <!-- Mulai Item -->
    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <h4><?php echo $lang['phone']?></h4>
                        <p><?php echo $lang['phone_desc']?></p>
                        <a href="https://api.whatsapp.com/send?phone=6281384590048&amp;" target="_blank">CS 1&ensp; : 0813-1929-1400</a><br>
                        <a href="https://api.whatsapp.com/send?phone=6281219344313&amp;" target="_blank">CS 2&ensp;: 0812-1934-4313</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <p><?php echo $lang['email_desc']?></p>
                        <a href="mailto:delapanhijaukorundum@gmail.com" target="_blank">delapanhijaukorundum@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h4><?php echo $lang['location']?></h4>
                        <p>JL. Lumbu Permai 4 No. 94 RT. 001 RW. 026
                            Bojong Rawalumbu, Rawalumbu
                            Kota Bekasi Jawa Barat</p>
                        <a href="https://goo.gl/maps/T2yfZDbEpJS4wfXo7" target="_blank"><?php echo $lang['lihatgm']?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Item -->

    <div id="map">
        <!-- Cara mengganti titik lokasi maps
	1. Buka Google Maps
	2. Klik location point mu saat ini
	3. Klik "Share" dan pilih tab "Embed map"
	4. Copy URL dan paste itu pada bagian src="" di bawah ini
-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8633771567247!2d106.99635551476948!3d-6.281685295453452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698de4e7cee275%3A0xb242a5b227d83438!2sLumbu%20Permai%204%20No.94%2C%20RT.001%2FRW.026%2C%20Bojong%20Rawalumbu%2C%20Kec.%20Rawalumbu%2C%20Kota%20Bks%2C%20Jawa%20Barat%2017116!5e0!3m2!1sid!2sid!4v1635229410309!5m2!1sid!2sid" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

<?php
include "footer.php"
?>

</body>