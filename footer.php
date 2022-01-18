<!-- Awal Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 footer-item">
                <br><br><br>
                <img src="../compro_dhk/assets/images/logocomp.png" style="width:150px;height:100px;">
            </div>
            <div class="col-md-3 footer-item">
                <h4><?php echo $lang['ourservices']?></h4>
                <ul class="menu-list">
                    <li><a href="construction.php"><?php echo $lang['construction']?></a></li>
                    <li><a href="electrical.php"><?php echo $lang['electrical']?></a></li>
                    <li><a href="reparation.php"><?php echo $lang['reparation']?></a></li>
                    <!-- <li><a href="#"><?php echo $lang['commerce']?></a></li> -->
                </ul>
            </div>
            <div class="col-md-3 footer-item">
                <h4><?php echo $lang['navigation']?></h4>
                <ul class="menu-list">
                    <li><a href="index.php"><?php echo $lang['home']?></a></li>
                    <li><a href="clients.php"><?php echo $lang['clients']?></a></li>
                    <li><a href="contact.php"><?php echo $lang['contactus']?></a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-item">
                <h4><?php echo $lang['contactus']?></h4>
                <ul class="menu-list">
                    <li class="fa fa-home"></li><a class="menu-list"><br> Jl. Lumbu Permai 4 No. 94, Kelurahan Bojong Rawalumbu, Kecamatan Rawalumbu, Kota Bekasi</a><br><br>
                    <li class="fa fa-phone"></li><a class="menu-list"><br>CS 1&ensp; : 0813-1929-1400 <br>CS 2&ensp;: 0812-1934-4313</a><br><br>
                    <li class="fa fa-envelope"></li><a class="menu-list">delapanhijaukorundum@gmail.com</a>
                </ul>
                <ul class="social-icons">
                    <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    <a href="index.php">2021 | Delapan Hijau Korundum</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Footer -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/accordions.js"></script>

<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>