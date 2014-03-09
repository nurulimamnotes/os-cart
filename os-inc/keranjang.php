<div class="row clearfix f-space10"></div>
<div class="container"> 
  <div class="row">
    <div class="col-md-12 box-block"> 
      <div class="box-content">
        <div class="single-product"> 
          <div class="product-details col-md-12 col-sm-12 col-xs-12">
            <div class="page-title">
              <h2>Keranjang Belanjaan Anda</h2>
            </div>
          </div>
          <div class="row clearfix f-space10"></div>
          <div class="row">
            <?php
            $total_price = 0;
            $id_sesi = session_id();
            $no = 1;
            $sql = mysql_query("SELECT * FROM os_keranjang, os_produk WHERE id_sesi='$id_sesi' AND os_keranjang.id_produk=os_produk.id");
            $hitung = mysql_num_rows($sql);
            if ($hitung < 1){
              echo"<script>window.alert('Keranjang Anda Kosong !');
                  window.location=('index.php')</script>";
              }
            else {
              while($data=mysql_fetch_array($sql)){
                echo'
                <div class="product">
                  <div class="col-md-2 col-sm-3 hidden-xs p-wr">
                    <div class="product-attrb-wr">
                      <div class="product-attrb">
                        <div class="image"> <a class="img" href="?halaman=produk&id='; echo $data['id']; echo '"><img alt="'; echo $data['nama_produk']; echo '" src="os-media/img/'; echo $data['gambar']; echo '" title="'; echo $data['nama_produk']; echo '"></a> </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-7 col-xs-9 p-wr">
                    <div class="product-attrb-wr">
                      <div class="product-meta">
                        <div class="name">
                          <h3><a href="?halaman=produk&id='; echo $data['id']; echo '">'; echo $data['nama_produk']; echo'</a></h3>
                        </div>
                        <div class="price">
                        <span class="price-new"><span class="sym">Rp. </span>'; echo $data['harga']; echo'</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 hidden-sm hidden-xs p-wr">
                    <div class="product-attrb-wr">
                      <div class="product-attrb">
                        <div class="att"> <span>Warna :</span> <a href="#a" data-toggle="tooltip" title="" class="color bg-'; echo strtolower($data['warna']); echo '" data-original-title="'; echo $data['warna']; echo '"></a> </div>
                        <div class="att"> <span>Ukuran :</span> <span class="size">'; echo $data['ukuran']; echo'</span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 hidden-sm hidden-xs p-wr">
                    <div class="product-attrb-wr">
                      <div class="product-attrb">
                      <form method="POST" action="keranjang.php?aksi=edit">
                        <div class="qtyinput">
                          <div class="quantity-inp">
                            <input type="hidden" name="id_keranjang" value="'; echo $data['id_keranjang']; echo '">
                            <input type="text" class="quantity-input" name="p_quantity" value="'; echo $data['banyak_barang']; echo '">
                            <div class="quantity-txt minusbtn"><a href="#a" class="qty qtyminus"><i class="fa fa-minus fa-fw"></i></a></div>
                            <div class="quantity-txt plusbtn"><a href="#a" class="qty qtyplus"><i class="fa fa-plus fa-fw"></i></a></div>
                          </div>
                        </div><br />
                        <button class="btn small color3">Edit Order</button>
                      </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 hidden-sm hidden-xs p-wr">
                    <div class="product-attrb-wr">
                      <div class="product-attrb">
                        <div class="price"> <span class="t-price"><span class="sym">Rp. &nbsp; </span>'; $sub = $data['harga']*$data['banyak_barang']; $total_price += $sub; echo $sub; echo'</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-1 col-sm-2 col-xs-3 p-wr">
                    <div class="product-attrb-wr">
                      <div class="product-attrb">
                        <div class="remove"> <a href="keranjang.php?aksi=hapus&id_keranjang='; echo $data['id_keranjang']; echo '" class="color2" data-toggle="tooltip" data-original-title="Hapus"><i class="fa fa-trash-o fa-fw color2"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>';
                }
              }
            ?>
          </div>
          <div class="row clearfix f-space10"></div>
          <div class="row"> 
            <div class="col-md-4  col-sm-4 col-xs-12 cart-box-wr">
            </div>
            <div class="col-md-4  col-sm-4 col-xs-12 cart-box-wr">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 cart-box-wr">
              <div class="box-content">
                <div class="cart-box-tm">
                  <div class="tm1">Sub-Total</div>
                  <div class="tm2"><?php echo $total_price; ?></div>
                </div>
                <div class="clearfix f-space10"></div>
                <div class="cart-box-tm">
                  <div class="tm1">Ongkos Kirim </div>
                  <div class="tm2">9.000/kg</div>
                </div>
                <div class="clearfix f-space10"></div>
                <div class="cart-box-tm">
                  <div class="tm3 bgcolor2">Total </div>
                  <div class="tm4 bgcolor2"><?php $tot = $total_price; echo $tot; ?></div>
                </div>
                <div class="clearfix f-space10"></div>
                <a href="index.php"><button class="btn large color3 pull-left">Belanja Lagi</button></a>
                <a href="?halaman=pembayaran"><button class="btn large color1 pull-right">Beli Sekarang !</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'widget-bawah.php'; ?>