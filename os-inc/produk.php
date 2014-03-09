<?php
  $idp = $_GET['id'];
  $sql = mysql_query("SELECT * FROM os_produk WHERE id = '$idp'") or die ("Query gagal karena : ".mysql_error());
  while($data=mysql_fetch_array($sql)){ ?>
<div class="row clearfix f-space10"></div>
<div class="container"> 
  <div class="row">
    <div class="col-md-12 box-block"> 
      <div class="box-content">
        <div class="single-product"> 
          <div class="images col-md-6 col-sm-12 col-xs-12">
            <div class="row">
              <div class="big-image col-md-12 col-sm-12 col-xs-12">
                <img id="product-image" src="os-media/img/<?php echo $data['gambar']; ?>" data-zoom-image="os-media/img/<?php echo $data['gambar']; ?>" alt="<?php echo $data['nama_produk']; ?>">
              </div>
            </div>
          </div>

          <div class="product-details col-md-6 col-sm-12 col-xs-12">
            <div class="title">
              <h1><?php echo $data['nama_produk']; ?></h1>
              <div class="rating">
                <?php
                for ($i=0; $i < $data['bintang']; $i++) { 
                  echo '<i class="fa fa-star"></i>';
                }
                ?>
              </div>
            </div>

            <div class="row"> 
              <div class="short-info-wr col-md-12 col-sm-12 col-xs-12">
                <div class="short-info">
                  <div class="product-attr-text">
                    No Produk : <span><?php echo $data['id']; ?></span>
                  </div>
                  <div class="product-attr-text">
                    Kategori : <span>
                    <?php
                      $sql = mysql_query("SELECT * FROM os_produk WHERE id = '$idp'");
                      $data=mysql_fetch_array($sql);
                      $kategori = mysql_query("SELECT * FROM os_kategori WHERE id = '".$data['id_kategori']."'");
                      $lht = mysql_fetch_array($kategori);
                        echo"$lht[kategori]";
                    ?>
                  </span>
                  </div>
                  <div class="product-attr-text">
                    Ketersediaan : <span><?php echo $data['stok']; ?></span>
                  </div>
                  <p class="short-info-p"><?php echo $data['deskripsi']; ?></p>
                </div>
              </div>
            </div>
<form action="keranjang.php?aksi=tambahkan" method="POST">
                        <input type="hidden" name="idku" value="<?php echo $data['id']; ?>">
            <div class="row">
              <div class="short-info-opt-wr col-md-12 col-sm-12 col-xs-12">
                <div class="short-info-opt">
                  <div class="att-row">
                    <div class="qty-wr">
                      <div class="qty-text hidden-xs">Qty :</div>
                    <div class="qtyinput">
                      <div class="quantity-inp">
                        <input type="text" class="quantity-input" name="p_quantity" value="1">
                        <div class="quantity-txt minusbtn"><a href="#a" class="qty qtyminus"><i class="fa fa-minus fa-fw"></i></a></div>
                        <div class="quantity-txt plusbtn"><a href="#a" class="qty qtyplus"><i class="fa fa-plus fa-fw"></i></a></div>
                      </div>
                    </div>
                    </div>
                    <div class="color-wr">
                      <div class="color-options">
                        <ul class="pull-left">
                          <li class="input-prepend dropdown" data-select="true"> <a class="add-on dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a"> <span class="dropdown-display">Warna</span> <i class="fa fa-sort fa-fw"></i> </a> 
                            <input class="dropdown-field" type="hidden" name="warna" value="">
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#a" data-value="Black" class="border-black">Hitam</a></li>
                              <li><a href="#a" data-value="Green" class="border-green">Hijau</a></li>
                              <li><a href="#a" data-value="Blue" class="border-blue">Biru</a></li>
                              <li><a href="#a" data-value="Orange" class="border-orange">Orange</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="size-wr">
                      <div class="size-options">
                        <ul class="pull-left">
                          <li class="input-prepend dropdown" data-select="true"> <a class="add-on dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a"> <span class="dropdown-display">Ukuran</span> <i class="fa fa-sort fa-fw"></i> </a> 
                            <input class="dropdown-field" type="hidden" name="ukuran" value="">
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#a" data-value="S">S</a></li>
                              <li><a href="#a" data-value="M">M</a></li>
                              <li><a href="#a" data-value="L">L</a></li>
                              <li><a href="#a" data-value="XL">XL</a></li>
                              <li><a href="#a" data-value="XXL">XXL</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="price-wr col-md-4 col-sm-4 col-xs-12">
                <div class="big-price">
                  <span class="price-new"><span class="sym">Rp. </span><?php echo $data['harga']; ?></span>
                </div>
              </div>
              <div class="product-btns-wr col-md-8 col-sm-8 col-xs-12">
                <div class="product-btns">
                  <div class="product-big-btns">
                    <button class="btn btn-addtocart"> <i class="fa fa-shopping-cart fa-fw"></i> Beli </button>
                    <button class="btn btn-compare" data-toggle="tooltip" title="" data-original-title="Bagikan"> <i class="fa fa-retweet fa-fw"></i> </button>
                    <button class="btn btn-wishlist" data-toggle="tooltip" title="" data-original-title="Suka"> <i class="fa fa-heart fa-fw"></i> </button>
                    <button class="btn btn-sendtofriend" data-toggle="tooltip" title="" data-original-title="Kirim Pesan"> <i class="fa fa-envelope fa-fw"></i> </button>
                  </div>
                </div>
              </div>
            </div>
</form>
          </div>
          
          <!-- end: product details --> 
          
        </div>
        
        <!-- end: single product --> 
        
      </div>
      
      <!-- end: box content --> 
      
    </div>
  </div>
  <!-- end:row --> 
</div>

<div class="row clearfix f-space30"></div>


<div class="container"> 
  <!-- row -->
  <div class="row"> 
    <!-- tabs -->
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-column box-block product-details-tabs"> 
      
      <!-- Details Info/Reviews/Tags --> 
      <!-- Nav tabs -->
      <ul class="nav nav-tabs blog-tabs nav-justified">
        <li class="active"><a href="#details-info" data-toggle="tab"><i class="fa  fa-th-list fa-fw"></i> Info Produk</a></li>
        <li><a href="#reviews" data-toggle="tab"><i class="fa fa-comments fa-fw"></i> Testimoni</a></li>
        <li> <a href="#tags" data-toggle="tab"><i class="fa fa-tags fa-fw"></i> Label </a> </li>
        <li><a href="#custom-tab" data-toggle="tab"><i class="fa fa-video-camera fa-fw"></i> Lainnya</a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="details-info">
          <p><?php echo $data['detail']; ?></p>
        </div>
        <div class="tab-pane" id="reviews">
          <div class="heading"> <span><strong>Beberapa Testimoni untuk Produk "<?php echo $data['nama_produk']; ?>"</strong></span>
          </div>
          <div class="review">
<?php
$testimoni = mysql_query("SELECT * FROM os_testimoni WHERE id_testimoni = '".$data['id']."'");
  while($testiku=mysql_fetch_array($testimoni)){ ?>
          <br />
            <div class="review-info">
              <div class="name"><i class="fa fa-comment-o fa-flip-horizontal fa-fw"></i> <?php echo"$testiku[nama]"; ?></div>
              <div class="rating"><?php echo"$testiku[waktu]"; ?></div>
            </div>
            <div class="text"><?php echo"$testiku[testimoni]"; ?></div>
<?php } ?>
          </div>
          <div class="write-reivew" id="#write-review">
            <h3>Tulis Testimoni</h3>
            <div class="fr-border"></div>
            
            <!-- Form -->
            <form action="os-inc/proses-testimoni.php" id="review_form" method="post">
              <div class="row">
                <div class="col-md-4 col-xs-12"> <a name="wr"> </a>
                  <input type="hidden" id="id" name="id_testimoni" value="<?php echo $data['id']; ?>" />
                  <input type="hidden" name="waktu" value="<?php echo date('d - F - Y'); ?>" />
                  <input type="text" id="name" name="nama" placeholder="Nama">
                  <input type="text" id="email" name="email" placeholder="E-mail">
                </div>
                <div class="col-md-8 col-xs-12">
                  <textarea id="review" name="testimoniku" placeholder="Testimoni Anda" rows="8"></textarea>
                </div>
              </div>
              <button class="btn normal color1 pull-right">Kirim</button>
            </form>
            <!-- end: Form --> 
          </div>
        </div>
        <div class="tab-pane" id="tags">
          <div class="tags"> <a href="#a">
                    <?php
                      $kategori = mysql_query("SELECT * FROM os_kategori WHERE id = '".$data['id_kategori']."'");
                      $lht = mysql_fetch_array($kategori);
                        echo"$lht[kategori]";
                    ?></a> <a href="#a">
                    <?php
                      $penanda = mysql_query("SELECT * FROM os_penanda WHERE id = '".$data['id_penanda']."'");
                      $lht = mysql_fetch_array($penanda);
                        echo"$lht[nama_penanda]";
                    ?></a></div>
        </div>
        <div class="tab-pane" id="custom-tab">

        </div>
      </div>
      <!-- end: Tab panes --> 
      <!-- end: Details Info/Reviews/Tags -->
      <div class="clearfix f-space30"></div>
    </div>
    <!-- end: tabs --> 
    
    <!-- sidebar -->
<?php include 'widget-promo.php'; ?>            <!-- end: item --> 
          </div>
        </div>
        <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#productc2"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#productc2"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
        <div class="nav-bg"></div>
      </div>
      <div class="clearfix f-space30"></div>
    </div>
    
    <!-- end: sidebar --> 
    
  </div>
  <!-- row --> 
</div>





<div class="row clearfix f-space30"></div>

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column box-block">
      <div class="box-heading"><span>Produk Yang Berhubungan</span></div>
      <div class="box-content">
        <div class="box-products slide" id="productc3">
          <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#productc3"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#productc3"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
          <div class="carousel-inner"> 
                <?php include 'terkait.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row clearfix f-space30"></div>


<?php } ?>