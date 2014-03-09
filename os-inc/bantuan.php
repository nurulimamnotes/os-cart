<?php
  $idp = "bantuan";
  $sql = mysql_query("SELECT * FROM os_halaman WHERE link = '$idp'") or die ("Query gagal karena : ".mysql_error());
  while($data=mysql_fetch_array($sql)){ ?>
<div class="row clearfix f-space10"></div>
<div class="container"> 
  <div class="row">
    <div class="col-md-12 box-block"> 
      <div class="box-content">
        <div class="single-product"> 
          <div class="product-details col-md-12 col-sm-12 col-xs-12">
            <div class="title">
              <h1><?php echo $data['judul']; ?></h1>
            </div>
            <div class="row"> 
              <div class="short-info-wr col-md-12 col-sm-12 col-xs-12">
                <div class="short-info">
                  <p class="short-info-p"><?php echo $data['artikel']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row clearfix f-space10"></div>
    <div class="col-md-12 box-block">
      <div class="box-heading">
        <span>Produk Terbaru</span>
      </div>
      <div class="box-content">
        <div class="box-products slide" id="productc3">
          <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#productc3"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#productc3"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
          <div class="carousel-inner"> 
                <?php include 'terbaru.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>