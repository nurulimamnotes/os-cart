<?php
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
  } else {
    include 'os-inc/menu.php'; 
  }
?>

<?php 
	$url = $_GET['halaman'];
	if($url == 'produk') {
		require_once "os-inc/produk.php";
	} elseif ($url == 'cart') {
		require_once "include/cart.php";
	} elseif ($url == 'order') {
		require_once "include/order.php";
	} elseif ($url == 'promo') {
		require_once "include/promo_member.php";
	} elseif ($url == 'tentang_kami') {
		require_once "include/tentang_kami.php";
	} elseif ($url == 'bantuan') {
		require_once "include/bantuan.php";
	} elseif ($url == 'syarat_dan_ketentuan') {
		require_once "include/syarat_dan_ketentuan.php";
  } elseif ($url == 'hubungi_kami') {
    require_once "include/hubungi_kami.php";
  } elseif ($url == 'semua_produk') {
    require_once "include/semua.php";
  } elseif ($url == 'pengantar') {
    require_once "include/pengantar.php";
  } elseif ($url == 'status') {
    require_once "include/status.php";
  } elseif ($url == 'efek') {
    require_once "include/efek.php";
  } elseif ($url == 'kontrak') {
    require_once "include/kontrak.php";
  } elseif ($url == 'pengiriman') {
    require_once "include/pengiriman.php";
  } elseif ($url == 'pembatalan') {
    require_once "include/pembatalan.php";
  } elseif ($url == 'pembatalan_pembeli') {
    require_once "include/pembatalan_pembeli.php";
  } elseif ($url == 'barang_rusak') {
    require_once "include/barang_rusak.php";
  } elseif ($url == 'kupon') {
    require_once "include/kupon.php";
  } elseif ($url == 'tanggung_jawab') {
    require_once "include/tanggung_jawab.php";
  } elseif ($url == 'terimakasih') {
    require_once "include/terimakasih.php";
	} else {
    // Menampilkan Halaman Utama
		require_once "os-inc/beranda.php";
	} 
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