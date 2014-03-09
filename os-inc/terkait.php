            <div class="item active">
              <div class="row box-product"> 
<?php
$sql = mysql_query("SELECT * FROM os_produk ORDER BY id DESC LIMIT 4") or die ("Gagal Menampilkan Produk Karena : ".mysql_error());
while($data=mysql_fetch_array($sql)){ ?>
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">

                    <!-- Gambar -->
                    <div class="image">
                    <div class="product-label product-new">
                      <span>NEW</span>
                    </div>
                      <a class="img" href="?halaman=produk&id=<?php echo $data['id']; ?>"><img alt="<?php echo $data['nama_produk']; ?>" src="os-media/img/<?php echo $data['gambar']; ?>" title="<?php echo $data['nama_produk']; ?>"></a>
                    </div>

                    <div class="product-meta">
                      <!-- Nama Produk -->
                      <div class="name">
                        <a href="?halaman=produk&id=<?php echo $data['id']; ?>"><?php echo $data['nama_produk']; ?></a>
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
            <div class="item">
              <div class="row box-product">
<?php
$sql = mysql_query("SELECT * FROM os_produk ORDER BY id DESC LIMIT 4") or die ("Gagal Menampilkan Produk Karena : ".mysql_error());
while($data=mysql_fetch_array($sql)){ ?>
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">

                    <!-- Gambar -->
                    <div class="image">
                    <div class="product-label product-new">
                      <span>NEW</span>
                    </div>
                      <a class="img" href="?halaman=produk&id=<?php echo $data['id']; ?>"><img alt="<?php echo $data['nama_produk']; ?>" src="os-media/img/<?php echo $data['gambar']; ?>" title="<?php echo $data['nama_produk']; ?>"></a>
                    </div>

                    <div class="product-meta">
                      <!-- Nama Produk -->
                      <div class="name">
                        <a href="?halaman=produk&id=<?php echo $data['id']; ?>"><?php echo $data['nama_produk']; ?></a>
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