<div class="item active">
  <div class="row box-product"> 
    <?php
    $sql = mysql_query("SELECT * FROM os_produk ORDER BY id DESC LIMIT 4") or die ("Gagal Menampilkan Produk Karena : ".mysql_error());
    while($data=mysql_fetch_array($sql)){ ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="product-block">
        <div class="image">
          <div class="product-label product-new">
            <span>NEW</span>
          </div>
          <a class="img" href="?halaman=produk&id=<?php echo $data['id']; ?>"><img alt="<?php echo $data['nama_produk']; ?>" src="os-media/img/<?php echo $data['gambar']; ?>" title="<?php echo $data['nama_produk']; ?>"></a>
        </div>
        <div class="product-meta">
          <div class="name">
            <a href="?halaman=produk&id=<?php echo $data['id']; ?>"><?php echo $data['nama_produk']; ?></a>
          </div>
          <div class="big-price">
            <span class="price-new">
              <span class="sym">Rp. </span>
              <?php echo $data['harga']; ?>
            </span>
          </div>
          <div class="big-btns">
            <a class="btn btn-default btn-view pull-left" href="?halaman=produk&id=<?php echo $data['id']; ?>">Lihat</a>
            <a class="btn btn-default btn-addtocart pull-right" href="keranjang.php?aksi=tambah&id=<?php echo $data['id']; ?>">Beli</a>
          </div>
          <div class="small-price">
            <span class="price-new">
              <span class="sym">Rp. </span>
              <?php echo $data['harga']; ?>
            </span>
          </div>
          <div class="rating">
            <?php
            for ($i=0; $i < $data['bintang']; $i++) { 
              echo '<i class="fa fa-star"></i>';
            }
            ?>
          </div>
          <div class="small-btns">
            <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="" data-original-title="Bagikan" onclick="window.open(<?php echo "'"; ?>https://twitter.com/intent/tweet?url=<?php urltoko(); ?>?halaman=produk&id=<?php echo $data['id']; echo "'"; ?>)"> <i class="fa fa-retweet fa-fw"></i> </button>
            <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="" data-original-title="Suka" onclick="window.open(<?php echo "'"; ?>https://www.facebook.com/sharer/sharer.php?u=<?php urltoko(); ?>?halaman=produk&id=<?php echo $data['id']; echo "'"; ?>)"> <i class="fa fa-heart fa-fw"></i> </button>
            <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="" data-original-title="Beli" onclick="location.href=<?php echo "'"; urltoko(); ?>keranjang.php?aksi=tambah&id=<?php echo $data['id']; echo "'"; ?>"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
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
    $sql = mysql_query("SELECT * FROM os_produk ORDER BY id ASC LIMIT 4") or die ("Gagal Menampilkan Produk Karena : ".mysql_error());
    while($data=mysql_fetch_array($sql)){ ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="product-block">
        <div class="image">
          <div class="product-label product-new">
            <span>NEW</span>
          </div>
          <a class="img" href="?halaman=produk&id=<?php echo $data['id']; ?>"><img alt="<?php echo $data['nama_produk']; ?>" src="os-media/img/<?php echo $data['gambar']; ?>" title="<?php echo $data['nama_produk']; ?>"></a>
        </div>
        <div class="product-meta">
          <div class="name">
            <a href="?halaman=produk&id=<?php echo $data['id']; ?>"><?php echo $data['nama_produk']; ?></a>
          </div>
          <div class="big-price">
            <span class="price-new">
              <span class="sym">Rp. </span>
              <?php echo $data['harga']; ?>
            </span>
          </div>
          <div class="big-btns">
            <a class="btn btn-default btn-view pull-left" href="?halaman=produk&id=<?php echo $data['id']; ?>">Lihat</a>
            <a class="btn btn-default btn-addtocart pull-right" href="keranjang.php?aksi=tambah&id=<?php echo $data['id']; ?>">Beli</a>
          </div>
          <div class="small-price">
            <span class="price-new">
              <span class="sym">Rp. </span>
              <?php echo $data['harga']; ?>
            </span>
          </div>
          <div class="rating">
            <?php
            for ($i=0; $i < $data['bintang']; $i++) { 
              echo '<i class="fa fa-star"></i>';
            }
            ?>
          </div>
          <div class="small-btns">
            <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="" data-original-title="Bagikan" onclick="window.open(<?php echo "'"; ?>https://twitter.com/intent/tweet?url=<?php urltoko(); ?>?halaman=produk&id=<?php echo $data['id']; echo "'"; ?>)"> <i class="fa fa-retweet fa-fw"></i> </button>
            <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="" data-original-title="Suka" onclick="window.open(<?php echo "'"; ?>https://www.facebook.com/sharer/sharer.php?u=<?php urltoko(); ?>?halaman=produk&id=<?php echo $data['id']; echo "'"; ?>)"> <i class="fa fa-heart fa-fw"></i> </button>
            <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="" data-original-title="Beli" onclick="location.href=<?php echo "'"; urltoko(); ?>keranjang.php?aksi=tambah&id=<?php echo $data['id']; echo "'"; ?>"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
          </div>
        </div>
        <div class="meta-back"></div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>