<?php
// Pengaturan Script Untuk Front End
include "os-inc/sesi-belanja.php";
include "os-inc/header.php";
?>
    <meta content="<?php desktoko(); ?>" name="description">
    <meta content="<?php namatoko(); ?>" name="author">
    <title><?php namatoko(); ?></title>
</head>
<body>
<!-- Logo & Menu -->
<?php 
  $url = $_GET['halaman'];
  if($url == 'produk') {
    include 'os-inc/menu-single.php'; 
  } elseif ($url == 'tentang-kami.html') {
    include 'os-inc/menu-single.php'; 
  } elseif ($url == 'keranjang') {
    include 'os-inc/menu-single.php'; 
  } elseif ($url == 'pembayaran') {
    include 'os-inc/menu-single.php'; 
  } elseif ($url == 'hubungi-kami.html') {
    include 'os-inc/menu-single.php'; 
  } elseif ($url == 'bantuan.html') {
    include 'os-inc/menu-single.php'; 
  } else {
    include 'os-inc/menu.php'; 
  }
?>
<!-- Konfigurasi URL -->
<?php
include 'os-inc/url.php';
?>
<!-- footer -->
<?php include 'os-inc/footer.php'; ?>

<script type="text/javascript">
(function($) {
  "use strict";
 $('#menuMega').menu3d();
                $('#iview').iView({
                    pauseTime: 10000,
                    pauseOnHover: true,
                    directionNavHoverOpacity: 0.6,
                    timer: "360Bar",
                    timerBg: '#2da5da',
                    timerColor: '#fff',
                    timerOpacity: 0.9,
                    timerDiameter: 20,
                    timerPadding: 1,
          touchNav: true,
                    timerStroke: 2,
                    timerBarStrokeColor: '#fff'
                });
        
                $('.quickbox').carousel({
                    interval: 10000
                });
               $('#monthly-deals').carousel({
                    interval: 3000
                });
                $('#productc2').carousel({
                    interval: 4000
                });
                $('#tweets').carousel({
                    interval: 5000
                });
})(jQuery);
</script>
</body>
</html>