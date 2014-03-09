<?php
echo '
<header> 
  <div class="f-space20"></div>
  <!-- Logo and Bantuan -->
  <div class="container">
    <div class="row clearfix">

      <div class="col-lg-3 col-xs-12">
        <div class="logo">
          <a href="';urltoko(); echo '" title="';namatoko(); echo '">
            ';namatoko(); echo '</a>
        </div>
      </div>
    </div>
  </div>
  <div class="f-space20"></div>
  <!-- Menu Navigasi -->
  <div class="container">
    <div class="row clearfix"><div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 menu-col">
      <div class="menu-heading menuHeadingdropdown"> <span> <i class="fa fa-bars"></i> Menu <i class="fa fa-angle-down"></i></span> </div>
      <div class="menu3dmega vertical menuMegasub responsive skin-blue-dark" id="menuMega"><div class="menuToggle">Menu <span style="float: right;">☰</span></div>
        <!-- Menu Untuk Pengguna Mobile -->
        <ul>
          <li class="visible-xs"> <a href="';urltoko(); echo '"> <i class="fa fa-home"></i> <span>Beranda</span> <i class="fa fa-angle-right"></i></a>
            <div class="dropdown-menu flyout-menu"> 
              <ul>
                <li> <a href="';urltoko(); echo '?halaman=produk.html"><span>Semua Produk</span> <i class="fa fa-caret-right"></i> </a>
                  <ul class="dropdown-menu sub flyout-menu">
                    <li><a href="';urltoko(); echo '?halaman=produk-terbaru.html">Produk Terbaru</a></li>
                    <li><a href="';urltoko(); echo '?halaman=produk-terlaris.html">Produk Terlaris</a> </li>
                    <li><a href="';urltoko(); echo '?halaman=kategori.html">Kategori</a></li>
                  </ul>
                </li>
                <li><a href="';urltoko(); echo '?halaman=bantuan.html">Panduan Belanja</a></li>
                <li> <a href="#a"><span>Akun</span> <i class="fa fa-caret-right"></i> </a>
                  <ul class="dropdown-menu sub flyout-menu">
                    <li><a href="#a">Daftar</a></li>
                    <li><a href="#a">Masuk</a></li>
                    <li><a href="#a">Profil</a></li>
                    <li><a href="cart.html">Keranjang</a></li>
                    <li><a href="checkout.html">Pembayaran</a></li>
                    <li><a href="cart.html">Keranjang Belanja</a></li>
                    <li><a href="checkout.html">Pembayaran</a></li>
                  </ul>
                </li>
                <li><a href="';urltoko(); echo '?halaman=tentang-kami.html">Tentang Kami</a></li>
                <li><a href="';urltoko(); echo '?halaman=hubungi-kami.html">Hubungi Kami</a></li>
              </ul>
            </div>
          </li>
          <li class="hidden-xs"> <a href="?modul=produk"> <i class="fa fa-files-o"></i> <span>Halaman</span> <i class="fa fa-angle-right"></i> </a>
            <div class="dropdown-menu flyout-menu"> 
              <ul>
                <li><a href="';urltoko(); echo '?halaman=produk-terbaru.html">Produk Terbaru</a></li>
                <li><a href="';urltoko(); echo '?halaman=produk-terlaris.html">Produk Terlaris</a> </li>
                <li><a href="';urltoko(); echo '?halaman=kategori.html">Kategori</a></li>
                <li><a href="';urltoko(); echo '?halaman=promo.html">Produk Promo</a></li>
                <li><a href="';urltoko(); echo '?halaman=bantuan.html">Panduan Belanja</a> </li>
                <li><a href="';urltoko(); echo '?halaman=syarat-ketentuan.html">Syarat &amp; Ketentuan</a></li>
                <li><a href="';urltoko(); echo '?halaman=tentang-kami.html">Tentang Kami</a></li>
                <li><a href="';urltoko(); echo '?halaman=hubungi-kami.html">Hubungi Kami</a></li>
              </ul>
            </div>
          </li>
          <li> <a href="?modul=kategori"> <i class="fa fa-heart-o"></i> <span>Kaos Romantis</span></a></li>
          <li> <a href="#a"> <i class="fa fa-html5"></i> <span>Kaos Web Designers</span></a></li>
          <li> <a href="#a"> <i class="fa fa-code"></i> <span>Kaos Programmer</span></a></li>
          <li> <a href="#a"> <i class="fa fa-linux"></i> <span>Kaos Linux</span></a> </li>
          <li> <a href="#a"> <i class="fa fa-android"></i> <span>Kaos Android</span></a> </li>
          <li> <a href="#a"> <i class="fa fa-apple"></i> <span>Kaos Mac OS X</span></a> </li>
          <li> <a href="#a"> <i class="fa fa-windows"></i> <span>Kaos Windows</span></a> </li>
        </ul>
      </div> 
    </div>
      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 menu-col-2"> 
        <!-- Menu Untuk Komputer Lapotop & Tablet -->
        <div class="menu-links hidden-xs">
          <ul class="nav nav-pills nav-justified">
            <li> <a href="';urltoko(); echo '"> <i class="fa fa-home fa-fw"></i> <span class="hidden-sm">Beranda</span></a> </li>
            <li> <a href="';urltoko(); echo '?halaman=tentang-kami.html"> <i class="fa fa-info-circle fa-fw"></i> <span class="hidden-sm">Tentang Kami</span></a> </li>
            <li> <a href="';urltoko(); echo '?halaman=bantuan.html"> <i class="fa fa-bullhorn fa-fw"></i> <span class="hidden-sm">Bantuan</span></a> </li>
            <li> <a href="';urltoko(); echo '?halaman=hubungi-kami.html"> <i class="fa fa-pencil-square-o fa-fw"></i> <span class="hidden-sm ">Hubungi Kami</span></a> </li>
            <li class="dropdown"> <a href="cart.html"> <i class="fa fa-shopping-cart fa-fw"></i> <span class="hidden-sm"> 5 item | Rp. 75.000</span></a></li>
          </ul>
        </div>
        
        <div class="clearfix"></div>

  </div>

</header>

  <div class="row clearfix"></div>

  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="breadcrumb"> <a href="index.html"> <i class="fa fa-home fa-fw"></i> Home </a> <i class="fa fa-angle-right fa-fw"></i> <a href="about.html"> About us </a> </div>


      <div class="visible-xs f-space20"></div>
        <div class="quick-message hidden-xs">
          <div class="quick-box">
            <div class="quick-slide"><span class="title">Bantuan</span>
              <div class="quickbox slide" id="quickbox">
                <div class="carousel-inner">
                  <div class="item active"> <a href="';urltoko(); echo '?halaman=hubungi-kami.html"> <i class="fa fa-envelope fa-fw"></i> &nbsp; Kirim Pesan</a> </div>
                  <div class="item"> <a href="';urltoko(); echo '?halaman=bantuan.html"> <i class="fa fa-question-circle fa-fw"></i> &nbsp; Panduan Belanja</a> </div>
                  <div class="item"> <a href="#phone"> <i class="fa fa-phone fa-fw"></i> &nbsp; +62 819 678 048</a> </div>
                </div>
              </div>
              <a class="left carousel-control" data-slide="prev" href="#quickbox"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="right carousel-control" data-slide="next" href="#quickbox"> <i class="fa fa-angle-right fa-fw"></i> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>'
?>