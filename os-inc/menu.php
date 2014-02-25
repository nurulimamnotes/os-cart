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

      <div class="visible-xs f-space20"></div>
        <div class="quick-message hidden-xs" style="margin-right:17px">
          <div class="quick-box">
            <div class="quick-slide"><span class="title">Bantuan</span>
              <div class="quickbox slide" id="quickbox">
                <div class="carousel-inner">
                  <div class="item active"> <a href="#a"> <i class="fa fa-envelope fa-fw"></i> &nbsp; Kirim Pesan</a> </div>
                  <div class="item"> <a href="#a"> <i class="fa fa-question-circle fa-fw"></i> &nbsp; Panduan Belanja</a> </div>
                  <div class="item"> <a href="#a"> <i class="fa fa-phone fa-fw"></i> &nbsp; +62 819 678 048</a> </div>
                </div>
              </div>
              <a class="left carousel-control" data-slide="prev" href="#quickbox"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="right carousel-control" data-slide="next" href="#quickbox"> <i class="fa fa-angle-right fa-fw"></i> </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="f-space20"></div>

  <!-- Menu Navigasi -->
  <div class="container">
    <div class="row clearfix">
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 menu-col">
        <div class="menu-heading"><span><i class="fa fa-bars"></i> Menu </span></div>
        <!-- Menu Vertikal -->
        <div class="menu3dmega vertical" id="menuMega">
          <ul>
            <!-- Menu Untuk Pengguna Mobile -->
            <li class="visible-xs"> <a href="';urltoko(); echo '"> <i class="fa fa-home"></i> <span>Beranda</span> <i class="fa fa-angle-right"></i></a>
              <div class="dropdown-menu flyout-menu"> 
                <ul>
                  <li> <a href="#a"><span>Semua Produk</span> <i class="fa fa-caret-right"></i> </a>
                    <ul class="dropdown-menu sub flyout-menu">
                      <li><a href="category-list.html">Produk Terbaru</a></li>
                      <li><a href="product.html">Produk Terlaris</a> </li>
                      <li><a href="category-grid.html">Kategori</a></li>
                    </ul>
                  </li>
                  <li><a href="blog.html">Panduan Belanja</a></li>
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
                  <li><a href="about.html">Tentang Kami</a></li>
                  <li><a href="contact.html">Hubungi Kami</a></li>
                </ul>
              </div>
            </li>
            <li class="hidden-xs"> <a href="?modul=produk"> <i class="fa fa-files-o"></i> <span>Halaman</span> <i class="fa fa-angle-right"></i> </a>
              <div class="dropdown-menu flyout-menu"> 
                <ul>
                  <li><a href="category-list.html">Semua Produk</a></li>
                  <li><a href="category-grid.html">Produk Terbaru</a></li>
                  <li><a href="blog-single.html">Produk Terlaris</a></li>
                  <li><a href="blog.html">Produk Promo</a></li>
                  <li><a href="product.html">Panduan Belanja</a> </li>
                  <li><a href="checkout.html">Syarat &amp; Ketentuan</a></li>
                  <li><a href="about.html">Tentang Kami</a></li>
                  <li><a href="contact.html">Hubungi Kami</a></li>
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
            <li> <a href="about.html"> <i class="fa fa-info-circle fa-fw"></i> <span class="hidden-sm">Tentang Kami</span></a> </li>
            <li> <a href="blog.html"> <i class="fa fa-bullhorn fa-fw"></i> <span class="hidden-sm">Bantuan</span></a> </li>
            <li> <a href="contact.html"> <i class="fa fa-pencil-square-o fa-fw"></i> <span class="hidden-sm ">Hubungi Kami</span></a> </li>
            <li class="dropdown"> <a href="cart.html"> <i class="fa fa-shopping-cart fa-fw"></i> <span class="hidden-sm"> 5 item | Rp. 75.000</span></a></li>
          </ul>
        </div>
        
        <div class="clearfix" style="margin-top: 42px"></div>

    <div class="col-md-12" style="margin-left: 15px">
      <div class="box-heading"><span>Produk Terlaris</span></div>
      <div class="box-content">
        <div class="box-products slide" id="productc1">
          
          <div class="carousel-inner">
            <div class="item active">
              <div class="row box-product"> ';
?>
<?php
$sql = mysql_query("SELECT * FROM os_produk ORDER BY id DESC LIMIT 3") or die ("Gagal Menampilkan Produk Karena : ".mysql_error());
while($data=mysql_fetch_array($sql)){ ?>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-sale"><span>SALE</span></div>
                      <a class="img" href="product.html"><img alt="<?php echo $data['nama_produk']; ?>" src="os-media/img/<?php echo $data['gambar']; ?>" title="<?php echo $data['nama_produk']; ?>"></a> </div>
                      <div class="product-meta">
                        <div class="name"><a href="product.html"><?php echo $data['nama_produk']; ?></a>
                        </div>
                        <div class="big-price">
                          <span class="price-new"><span class="sym">Rp. </span><?php echo $data['harga']; ?></span>
                        </div>
                        <div class="big-btns">
                        <a class="btn btn-default btn-view pull-left" href="#">Lihat</a> <a class="btn btn-default btn-addtocart pull-right" href="#">Beli</a>
                        </div>
                        <div class="small-price">
                          <span class="price-new"><span class="sym">Rp. </span><?php echo $data['harga']; ?></span> </div>
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i>
                        </div>
                      <div class="small-btns">
                        <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="" data-original-title="Bagikan"> <i class="fa fa-retweet fa-fw"></i> </button>
                        <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="" data-original-title="Suka"> <i class="fa fa-heart fa-fw"></i> </button>
                        <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="" data-original-title="Beli"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                      </div>

                    </div>
                    <div class="meta-back"></div>
                  </div>
                </div>

<?php } ?>
<?php
echo '
          </div>
        </div>
      </div>
    </div>
  </div>
</header>';
?>