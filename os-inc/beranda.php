<div class="row clearfix f-space30"></div>

<div class="container">
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-column box-block">

      <div class="box-heading">
        <span>Produk Unggulan</span>
      </div>

      <div class="box-content">
        <div class="box-products slide" id="produk1">

          <div class="carousel-controls">
            <a class="carousel-control left" data-slide="prev" href="#produk1"> <i class="fa fa-angle-left fa-fw"></i> </a>
            <a class="carousel-control right" data-slide="next" href="#produk1"> <i class="fa fa-angle-right fa-fw"></i> </a>
          </div>

          <div class="carousel-inner">
            <div class="item active">
              <div class="row box-product">

<?php
$sql = mysql_query("SELECT * FROM os_produk ORDER BY id DESC LIMIT 3") or die ("Gagal Menampilkan Produk Karena : ".mysql_error());
while($data=mysql_fetch_array($sql)){ ?>
                <!-- Product -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="product-block">

                    <!-- Gambar -->
                    <div class="image">
                    <div class="product-label product-hot">
                      <span>TOP</span>
                    </div>
                      <a class="img" href="?halaman=produk&id=<?php echo $data['id']; ?>"><img alt="<?php echo $data['nama_produk']; ?>" src="os-media/img/<?php echo $data['gambar']; ?>" title="<?php echo $data['nama_produk']; ?>"></a>
                    </div>

                    <div class="product-meta">
                      <!-- Nama Produk -->
                      <div class="name">
                        <a href="?v=produk&id=<?php echo $data['id']; ?>"><?php echo $data['nama_produk']; ?></a>
                      </div>

                      <!-- Harga Besar -->
                      <div class="big-price">
                        <span class="price-new">
                          <span class="sym">Rp. </span>
                          <?php echo $data['harga']; ?>
                        </span>
                      </div>

                      <!-- Tombol -->
                      <div class="big-btns">
                        <a class="btn btn-default btn-view pull-left" href="#">Lihat</a>
                        <a class="btn btn-default btn-addtocart pull-right" href="#">Beli</a>
                      </div>

                      <!-- Harga Kecil -->
                      <div class="small-price">
                        <span class="price-new">
                          <span class="sym">Rp. </span>
                          <?php echo $data['harga']; ?>
                        </span>
                      </div>

                      <!-- Bintang -->
                      <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>

                      <!-- Bagikan -->
                      <div class="small-btns">
                        <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="Bagikan"> <i class="fa fa-retweet fa-fw"></i> </button>
                        <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="Suka"> <i class="fa fa-heart fa-fw"></i> </button>
                        <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="Beli"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                      </div>

                    </div>

                    <div class="meta-back"></div>
                  </div>
                </div>
<?php } ?>
              </div>
            </div>

            <div class="item">
              <div class="row box-product"> 

<?php
$sql = mysql_query("SELECT * FROM os_produk ORDER BY id ASC LIMIT 3") or die ("Gagal Menampilkan Produk Karena : ".mysql_error());
while($data=mysql_fetch_array($sql)){ ?>
                <!-- Product -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="product-block">

                    <!-- Gambar -->
                    <div class="image">
                    <div class="product-label product-hot">
                      <span>TOP</span>
                    </div>
                      <a class="img" href="?v=produk&id=<?php echo $data['id']; ?>"><img alt="<?php echo $data['nama_produk']; ?>" src="os-media/img/<?php echo $data['gambar']; ?>" title="<?php echo $data['nama_produk']; ?>"></a>
                    </div>

                    <div class="product-meta">
                      <!-- Nama Produk -->
                      <div class="name">
                        <a href="?v=produk&id=<?php echo $data['id']; ?>"><?php echo $data['nama_produk']; ?></a>
                      </div>

                      <!-- Harga Besar -->
                      <div class="big-price">
                        <span class="price-new">
                          <span class="sym">Rp. </span>
                          <?php echo $data['harga']; ?>
                        </span>
                      </div>

                      <!-- Tombol -->
                      <div class="big-btns">
                        <a class="btn btn-default btn-view pull-left" href="#">Lihat</a>
                        <a class="btn btn-default btn-addtocart pull-right" href="#">Beli</a>
                      </div>

                      <!-- Harga Kecil -->
                      <div class="small-price">
                        <span class="price-new">
                          <span class="sym">Rp. </span>
                          <?php echo $data['harga']; ?>
                        </span>
                      </div>

                      <!-- Bintang -->
                      <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                      </div>

                      <!-- Bagikan -->
                      <div class="small-btns">
                        <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="Bagikan"> <i class="fa fa-retweet fa-fw"></i> </button>
                        <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="Suka"> <i class="fa fa-heart fa-fw"></i> </button>
                        <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="Beli"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                      </div>

                    </div>

                    <div class="meta-back"></div>
                  </div>
                </div>
<?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include 'widget-promo.php'; ?>
          </div>
        </div>
        <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#productc2"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#productc2"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
        <div class="nav-bg"></div>
      </div>
    </div>
  </div>
</div>

<div class="row clearfix f-space30"></div>

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column box-block">

      <div class="box-heading">
        <span>Produk Terbaru</span>
      </div>

      <div class="box-content">
        <div class="box-products slide" id="productc3">

          <div class="carousel-controls">
            <a class="carousel-control left" data-slide="prev" href="#productc3"> <i class="fa fa-angle-left fa-fw"></i> </a>
            <a class="carousel-control right" data-slide="next" href="#productc3"> <i class="fa fa-angle-right fa-fw"></i> </a>
          </div>

          <div class="carousel-inner">
                <?php include 'terbaru.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Widget -->
<div class="row clearfix f-space30"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
      <div class="rec-banner blue">
        <div class="banner"> <i class="fa fa-thumbs-up"></i>
          <h3>Garansi</h3>
          <p>Garansi 100% Uang Kembali*</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
      <div class="rec-banner red">
        <div class="banner"> <i class="fa fa-tags"></i>
          <h3>Kreatif</h3>
          <p>Desain Kaos Dijamin 100% Unik</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
      <div class="rec-banner orange">
        <div class="banner"> <i class="fa fa-headphones"></i>
          <h3>Dukungan</h3>
          <p>Dukungan penuh 24 jam untuk pelanggan</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
      <div class="rec-banner lightblue">
        <div class="banner"> <i class="fa fa-female"></i>
          <h3>Diskon Gila</h3>
          <p>Diskon hingga 50% spesial lebaran</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
      <div class="rec-banner darkblue">
        <div class="banner"> <i class="fa fa-gift"></i>
          <h3>Hadiah Menarik</h3>
          <p>Setiap pembelian diatas Rp. 500.000</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
      <div class="rec-banner black">
        <div class="banner"> <i class="fa fa-truck"></i>
          <h3>Kirim Gratis</h3>
          <p>Gratis pengiriman ke seluruh Indonesia*</p>
        </div>
      </div>
    </div>
  </div>
</div>