    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 box-block sidebar">
      <div class="box-heading">
        <span>Promo</span>
      </div>

      <div class="box-content">
        <div class="box-products slide carousel-fade" id="productc2">

          <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#productc2"></li>
            <li class="" data-slide-to="1" data-target="#productc2"></li>
            <li class="" data-slide-to="2" data-target="#productc2"></li>
          </ol>

          <div class="carousel-inner">

<?php
$sql = mysql_query("SELECT * FROM os_produk ORDER BY id DESC LIMIT 1") or die ("Gagal Menampilkan Produk Karena : ".mysql_error());
while($data=mysql_fetch_array($sql)){ ?>
            <div class="item active">
              <div class="product-block">

                <div class="image">
                  <div class="product-label product-sale">
                    <span>SALE</span>
                  </div>
                  <a class="img" href="#"><img alt="<?php echo $data['nama_produk']; ?>" src="os-media/img/<?php echo $data['gambar']; ?>" title="<?php echo $data['nama_produk']; ?>"></a>
                </div>

                <div class="product-meta">
                  <div class="name">
                    <a href="product.html"><?php echo $data['nama_produk']; ?></a>
                  </div>
                  <div class="big-price">
                    <span class="price-new"><span class="sym">Rp. </span><?php echo $data['harga']; ?></span>
                  </div>
                  <div class="big-btns">
                    <a class="btn btn-default btn-view pull-left" href="#">Lihat</a>
                    <a class="btn btn-default btn-addtocart pull-right" href="#">Beli</a>
                  </div>
                </div>

                <div class="meta-back"></div>
              </div>
            </div>
<?php } ?>
<?php
$sql = mysql_query("SELECT * FROM os_produk ORDER BY id ASC LIMIT 2") or die ("Gagal Menampilkan Produk Karena : ".mysql_error());
while($data=mysql_fetch_array($sql)){ ?>
            <div class="item">
              <div class="product-block">

                <div class="image">
                  <div class="product-label product-sale">
                    <span>SALE</span>
                  </div>
                  <a class="img" href="product.html"><img alt="<?php echo $data['nama_produk']; ?>" src="os-media/img/<?php echo $data['gambar']; ?>" title="<?php echo $data['nama_produk']; ?>"></a>
                </div>

                <div class="product-meta">
                  <div class="name">
                    <a href="product.html"><?php echo $data['nama_produk']; ?></a>
                  </div>

                  <div class="big-price">
                    <span class="price-new"><span class="sym">Rp. </span><?php echo $data['harga']; ?></span>
                  </div>

                  <div class="big-btns">
                    <a class="btn btn-default btn-view pull-left" href="#">Lihat</a>
                    <a class="btn btn-default btn-addtocart pull-right" href="#">Beli</a>
                  </div>
                </div>

                <div class="meta-back"></div>
              </div>
            </div>
<?php } ?>