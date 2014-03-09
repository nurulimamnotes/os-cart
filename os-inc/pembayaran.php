<div class="row clearfix f-space10"></div>
<div class="container"> 
  <div class="row">
    <div class="col-md-12 box-block"> 
      <div class="box-content">
        <div class="single-product"> 

          <div class="product-details col-md-12 col-sm-12 col-xs-12">
            <div class="page-title">
              <h2>Pembayaran & Pengiriman Pesanan Anda</h2>
            </div>
          </div>
<div class="row clearfix f-space10"></div>
<form method="POST" action="keranjang.php?aksi=beli">
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12 main-column box-block"> 
      <div class="box-content checkout-op">
        <div class="panel-group" id="checkout-options"> 
          <div class="panel panel-default">
            <div class="panel-heading closed" data-parent="#checkout-options" data-target="#op1" data-toggle="collapse">
              <h4 class="panel-title"> <a href="#a"> <span class="fa fa-map-marker"></span> &nbsp; Data Lengkap Pelanggan </a><span class="op-number">01</span> </h4>
            </div>
            <div class="panel-collapse in" id="op1" style="height: auto;">
              <div class="panel-body">
                <div class="row co-row">
                    <div class="col-md-6 col-xs-12">
                      <div class="box-content form-box">
                        <h4>Informasi Pribadi Anda</h4>
                        <input type="text" value="" name="nama_pemesan" placeholder="Nama Lengkap *" class="input4">
                        <input type="text" value="" name="hp_pemesan" placeholder="No Handphone *" class="input4">
                        <input type="text" value="" name="alamat_pemesan" placeholder="Alamat Lengkap *" class="input4">
                        <input type="text" value="" name="kota" placeholder="Kota *" class="input4">
                      </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                      <div class="box-content form-box">
                        <h4>Alamat Lengkap</h4>
                        <input type="text" value="" name="pos" placeholder="Kode Pos *" class="input4">
                        <input type="text" value="" name="provinsi" placeholder="Provinsi *" class="input4">
                        <input type="text" value="" name="negara" placeholder="Negara *" class="input4">
                      <a href="#" class="btn medium color3 pull-right" data-parent="#checkout-options" data-target="#op2" data-toggle="collapse">Lanjutkan</a>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading closed collapsed" data-parent="#checkout-options" data-target="#op2" data-toggle="collapse">
              <h4 class="panel-title"> <a href="#a"> <span class="fa fa-truck"></span> Metode Pengiriman </a><span class="op-number">02</span> </h4>
            </div>
            <div class="panel-collapse collapse" id="op2" style="height: 0px;">
              <div class="panel-body">
                <div class="row co-row">
                  <div class="col-md-12 col-xs-12">
                    <div class="box-content form-box">
                      <h4>Silahkan pilih metode pengiriman untuk produk yang anda pesan saat ini.</h4>
                      <label class="radio" for="radio1">
                        <input type="radio" value="Kirim Langsung Ditempat" id="cod" data-toggle="radio" name="shippingmethod" checked="checked" class="pull-left" onClick="metKirim();">
                        <span class="pull-left color1 provider">Kirim Langsung Ditempat</span> - <span class="color2 price">Gratis</span><br>
                        <em>Khusus untuk daerah Serang, Cilegon &amp; sekitarnya.</em> </label>
                      <label class="radio" for="radio2">
                        <input type="radio" value="JNE REG" id="jne" data-toggle="radio" name="shippingmethod" class="pull-left" onClick="metKirim();">
                        <span class="pull-left color1 provider">JNE REG</span> - <span class="color2 price">Rp. 9.000</span><br>
                        <em>Harga diatas untuk berat 1kg pengiriman dari Jakarta.</em> </label>
                      <label class="radio" for="radio3">
                        <input type="radio" value="TIKI REG" id="tiki" data-toggle="radio" name="shippingmethod" class="pull-left" onClick="metKirim();">
                        <span class="pull-left color1 provider">TIKI REG</span> - <span class="color2 price">Rp. 9.000</span><br>
                        <em>Harga diatas untuk berat 1kg pengiriman dari Jakarta.</em> </label>
                      <a href="#" class="btn medium color3 pull-right" data-parent="#checkout-options" data-target="#op3" data-toggle="collapse">Lanjutkan</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading closed collapsed" data-parent="#checkout-options" data-target="#op3" data-toggle="collapse">
              <h4 class="panel-title"> <a href="#a"> <span class="fa fa-money"></span> Metode Pembayaran </a><span class="op-number">03</span> </h4>
            </div>
            <div class="panel-collapse collapse" id="op3" style="height: 0px;">
              <div class="panel-body">
                <div class="row co-row"> 
                  <div class="col-md-12 col-xs-12">
                    <div class="box-content form-box">
                      <h4>Silahkan pilih metode pembayaran untuk produk yang anda pesan saat ini.</h4>
                      <label class="radio" for="radio4">
                        <input type="radio" value="Bank BCA" id="radio4" data-toggle="radio" name="paymentmethod" checked="checked" class="pull-left">
                        <span class="pull-left color1 provider">Transfer Bank BCA</span><br>
                        <em>Lakukan pembayaran ke No.Rek 110200120 A/N Nurul Imam dengan menyertakan Nomor Order ID. Pengiriman akan segera dilakukan setelah kami konfirmasi pembayarannya.</em> </label>
                      <label class="radio" for="radio5">
                        <input type="radio" value="Bank Mandiri" id="radio5" data-toggle="radio" name="paymentmethod" class="pull-left">
                        <span class="pull-left color1 provider">Transfer Bank Mandiri</span><br>
                        <em>Lakukan pembayaran ke No.Rek 110200120 A/N Nurul Imam dengan menyertakan Nomor Order ID. Pengiriman akan segera dilakukan setelah kami konfirmasi pembayarannya.</em> </label>
                      <label class="radio" for="radio6">
                        <input type="radio" value="Bayar Ditempat" id="radio6" data-toggle="radio" name="paymentmethod" class="pull-left">
                        <span class="pull-left color1 provider">Bayar Ditempat</span><br>
                        <em>Metode pembayaran ini hanya berlaku didaerah Serang &amp; Cilegon. Anda dapat membayar ketika barang sudah kami kirimkan langsung ke tempat anda.</em> </label>
                      <textarea name="catatanbyr" id="comments" cols="10" rows="8" class="input4" placeholder="Isi keterangan tentang pembayaran anda disini..."></textarea>
                      <a href="#" class="btn medium color3 pull-right" data-parent="#checkout-options" data-target="#op4" data-toggle="collapse">Lanjutkan</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading closed" data-parent="#checkout-options" data-target="#op4" data-toggle="collapse">
              <h4 class="panel-title"> <a href="#a"> <span class="fa fa-check"></span> Konfirmasi Pemesanan </a><span class="op-number">04</span> </h4>
            </div>
            <div class="panel-collapse collapse" id="op4" style="height: auto;">
              <div class="panel-body">
                <div class="row co-row">
                  <div class="col-md-12 col-xs-12">
                    <div class="box-content form-box">
                      <h4>Mohon Cek Produk Yang Anda Pesan.</h4>
                      <div class="row clearfix f-space10"></div>
                              <?php
        $total_price = 0;
        $id_sesi = session_id();
        $no = 1;
        $sql = mysql_query("SELECT * FROM os_keranjang, os_produk WHERE id_sesi='$id_sesi' AND os_keranjang.id_produk=os_produk.id");
        $hitung = mysql_num_rows($sql);
        if ($hitung < 1){
          echo"<script>window.alert('Cart is Empty....');
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
                    <div class="price"> <span class="price-new"><span class="sym">Rp. </span>'; echo $data['harga']; echo'</span></div></div>
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
                    <div class="price"> <span class="t-price"><span class="sym">Rp. &nbsp; </span>'; $sub = $data['harga']*$data['banyak_barang']; $total_price += $sub; echo $sub; echo'</span></div>
                  </div>
                </div>
              </div>
              <div class="col-md-1 col-sm-2 col-xs-3 p-wr">
                <div class="product-attrb-wr">
                  <div class="product-attrb">
                    <div class="remove"> <a href="keranjang.php?aksi=hapus&id_keranjang='; echo $data['id_keranjang']; echo '" class="color2" data-toggle="tooltip" data-original-title="Remove"><i class="fa fa-trash-o fa-fw color2"></i></a> </div>
                  </div>
                </div>
              </div>
            </div>';
          }
        }
      ?>
            <div class="col-md-12 col-sm-12 col-xs-12 cart-box-wr pull-right">
              <div class="box-content">
                <div class="cart-box-tm">
                  <div class="tm1">Sub-Total</div>
                  <div class="tm2"><?php echo $total_price; ?></div>
                </div>
                <div class="clearfix f-space10"></div>
                <div class="cart-box-tm">
                  <div class="tm1">Ongkos Kirim </div>
                  <div class="tm2" id="demo">9.000/kg</div>
                </div>
                <div class="clearfix f-space10"></div>
                <div class="cart-box-tm">
                  <div class="tm3 bgcolor2">Total </div>
                  <div class="tm4 bgcolor2"><?php $tot = $total_price; echo $tot; ?></div>
                </div>
                <div class="clearfix f-space10"></div>
              </div>
            </div> 
                      <textarea name="catatanbrg" id="comments" rows="9" class="input3" placeholder="Isi keterangan tentang barang yang anda pesan disini..."></textarea>
                      <div class="clearfix f-space20"></div>
                      <button class="btn medium color1 pull-right">Kirim</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'widget-bawah.php'; ?>