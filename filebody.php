

<?php

// Halaman utama (Home)
if ($_GET[module]=='home'){
	echo"<section class='content'>
		<div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>list tournament</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role='form'>
              <div class='box-body'>
			  <div class='table-responsive'>
				<table id='tabledata' class='table table-bordered'>
					<thead>
						<tr>
							<th>
								No
							</th>
							
							<th>
								nama tournament
							</th>
							<th>
							game 
							</th>
							<th>
							sponsor 
							</th>
							<th>
							hadiah tournament
							</th>
							<th>
							tanggal
							</th>
							
							
						</tr>
					</thead>
					<tbody>";
					$no=1;
						$sqlproduk=mysqli_query($koneksi,  "SELECT tournament_list.id_tournament,
						tournament_list.nama_tournament,
						tournament_list.id_game,
						sponsor.nama_sponsor as sponsor,
						tournament_list.hadiah_tournament,
						tournament_list.jam_tournament,
						tournament_list.jam_tournament,
						tournament_list.tgl_tournament,
						game.nama_game,
						game.images_game
			
						FROM `tournament_list`, `game`, sponsor WHERE tournament_list.id_game=game.id_game and tournament_list.id_sponsor=sponsor.id_sponsor");
								while($dtproduk=mysqli_fetch_array($sqlproduk)){
									
								echo"
						<tr>
							<td>
								$no
							</td>
							
							<td>
								$dtproduk[nama_tournament] 
							</td>
							<td>
								$dtproduk[nama_game] 
							</td>
							<td>
								$dtproduk[sponsor] 
							</td>
							<td>
								$dtproduk[hadiah_tournament]
							</td>
							<td>
								$dtproduk[tgl_tournament]
							</td>
							
						</tr>";
						$no++;
						}
						
						echo"
					</tbody>
				</table>
				</div>
              </div>
              <!-- /.box-body -->

              <div class='box-footer'>
						<a href='Newtournament.html' class='btn btn-primary btn-sm'><i class='fa  fa-plus'></i> Tambah Data</a>		
					</div>
            </form>
          </div>
          <!-- /.box -->
		</section>";
            
}	

elseif ($_GET[module]=='team'){
	echo"<section class='content'>
		<div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>list Team</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role='form'>
              <div class='box-body'>
			  <div class='table-responsive'>
				<table id='tabledata' class='table table-bordered'>
					<thead>
						<tr>
							<th>
								No
							</th>
							<th>
								images 
							</th>
							<th>
								nama team
							</th>
							<th>
								game 
							</th>
							
							<th>
								create by 
							</th>
						</tr>
					</thead>
					<tbody>";
					$no=1;
						$sqlproduk=mysqli_query($koneksi,  "SELECT game.id_game,
                        team.nama_team,
                        team.images_team,
                        user.nama_user,
                        game.nama_game,
                        game.images_game
                        FROM `team`, `game`, `user` WHERE team.id_game=game.id_game and  team.id_user=user.id_user");
								while($dtproduk=mysqli_fetch_array($sqlproduk)){
									
								echo"
						<tr>
							<td>
								$no
							</td>
							<td>
								$dtproduk[images_team] 
							</td>
							<td>
								$dtproduk[nama_team] 
							</td>
							<td>
								$dtproduk[nama_game] 
							</td>
							<td>
								$dtproduk[nama_user] 
							</td>
							
							
						</tr>";
						$no++;
						}
						
						echo"
					</tbody>
				</table>
				</div>
              </div>
              <!-- /.box-body -->

              <div class='box-footer'>
						<a href='Newtournament.html' class='btn btn-primary btn-sm'><i class='fa  fa-plus'></i> Tambah Data</a>		
					</div>
            </form>
          </div>
          <!-- /.box -->
		</section>";
            
            
}

elseif ($_GET[module]=='user'){
	echo"<section class='content'>
		<div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>list user</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role='form'>
              <div class='box-body'>
			  <div class='table-responsive'>
				<table id='tabledata' class='table table-bordered'>
					<thead>
						<tr>
							<th>
								No
							</th>
							<th>
								nama user
							</th>
							<th>
								email 
							</th>
							
							
						</tr>
					</thead>
					<tbody>";
					$no=1;
						$sqlproduk=mysqli_query($koneksi,  "SELECT * 
                        FROM user");
								while($dtproduk=mysqli_fetch_array($sqlproduk)){
									
								echo"
						<tr>
							<td>
								$no
							</td>
							<td>
								$dtproduk[nama_user] 
							</td>
							<td>
								$dtproduk[email] 
							</td>
							
							
							
						</tr>";
						$no++;
						}
						
						echo"
					</tbody>
				</table>
				</div>
              </div>
              <!-- /.box-body -->

              <div class='box-footer'>
						<a href='Newtournament.html' class='btn btn-primary btn-sm'><i class='fa  fa-plus'></i> Tambah Data</a>		
					</div>
            </form>
          </div>
          <!-- /.box -->
		</section>";
            
            
}


elseif ($_GET[module]=='game'){
	echo"<section class='content'>
		<div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>list user</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role='form'>
              <div class='box-body'>
			  <div class='table-responsive'>
				<table id='tabledata' class='table table-bordered'>
					<thead>
						<tr>
							<th>
								id game
							</th>
							<th>
								nama game
							</th>
							<th>
								images 
							</th>
							
							
						</tr>
					</thead>
					<tbody>";
					$no=1;
						$sqlproduk=mysqli_query($koneksi,  "SELECT * 
                        FROM game");
								while($dtproduk=mysqli_fetch_array($sqlproduk)){
									
								echo"
						<tr>
							<td>
							$dtproduk[id_game] 
							</td>
							<td>
								$dtproduk[nama_game] 
							</td>
							<td>
							<img src='$dtproduk[images_game] ' width='80px' />
						
								
							</td>
							
							
							
						</tr>";
						$no++;
						}
						
						echo"
					</tbody>
				</table>
				</div>
              </div>
              <!-- /.box-body -->

              <div class='box-footer'>
						<a href='Newtournament.html' class='btn btn-primary btn-sm'><i class='fa  fa-plus'></i> Tambah Data</a>		
					</div>
            </form>
          </div>
          <!-- /.box -->
		</section>";
            
            
}

elseif ($_GET[module]=='service'){
	echo"<section class='content'>
		<div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Data Service</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role='form'>
              <div class='box-body'>
			  <div class='table-responsive'>
				<table id='tabledata' class='table table-bordered'>
					<thead>
						<tr>
							<th>
								No
							</th>
							
							<th>
								Nama service
							</th>
							<th>
								Tipe Priode
							</th>
							<th>
								Harga
							</th>
						</tr>
					</thead>
					<tbody>";
					$no=1;
						$sqlproduk=mysqli_query($koneksi,  "SELECT * FROM `m_services`");
								while($dtproduk=mysqli_fetch_array($sqlproduk)){
									
								echo"
						<tr>
							<td>
								$no
							</td>
							<td>
								$dtproduk[s_category]
							</td>
							<td>
								$dtproduk[s_periodType]
							</td>
							<td>
								$dtproduk[s_price] 
							</td>
							
							
						</tr>";
						$no++;
						}
						
						echo"
					</tbody>
				</table>
				</div>
              </div>
              <!-- /.box-body -->

              <div class='box-footer'>
						<a href='Newproduk.html' class='btn btn-primary btn-sm'><i class='fa  fa-plus'></i> Tambah Data</a>		
					</div>
            </form>
          </div>
          <!-- /.box -->
		</section>";
            
}


elseif ($_GET[module]=='customer'){
	echo"<section class='content'>
		<div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Data Pembeli</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role='form'>
              <div class='box-body'>
			  <div class='table-responsive'>
				<table id='tabledata' class='table table-bordered'>
					<thead>
						<tr>
							<th>
								No
							</th>
							
							<th>
								Nama
							</th>
							<th>
								Gender
							</th>
							<th>
								Telpon
							</th>
							<th>
								Email
							</th>
							<th>
								Alamat
							</th>
							
							
						</tr>
					</thead>
					<tbody>";
					$no=1;
						$sqlproduk=mysqli_query($koneksi,  "SELECT * FROM `m_customer`");
								while($dtproduk=mysqli_fetch_array($sqlproduk)){
									
								echo"
						<tr>
							<td>
								$no
							</td>
							
							<td>
								$dtproduk[c_firstname] $dtproduk[c_middlename] $dtproduk[c_lastname] 
							</td>
							<td>
								$dtproduk[c_gender] 
							</td>
							<td>
								$dtproduk[c_phone]
							</td>
							<td>
								$dtproduk[c_email]
							</td>
							<td>
								$dtproduk[c_address]
							</td>
							
						</tr>";
						$no++;
						}
						
						echo"
					</tbody>
				</table>
				</div>
              </div>
              <!-- /.box-body -->

              <div class='box-footer'>
						<a href='#' class='btn btn-primary btn-sm'><i class='fa  fa-plus'></i> Tambah Data</a>		
					</div>
            </form>
          </div>
          <!-- /.box -->
		</section>";
            
}


elseif ($_GET[module]=='keuangan'){
	
	 echo"
		<section class='content'>
		<div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Data Transaksilm</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role='form'>
              <div class='box-body'>
			  	<a href='Newtransaksi.html' class='btn btn-primary btn-sm'><i class='fa  fa-plus'></i> Tambah Transaksi</a>	
			  <table id='tablekeuangan' class='table table-bordered table-striped'>
					<thead>
						<tr>
							<th>
							</th>
						</tr>
					</thead>
					<tbody>";
					$no=1;
						$sqluang=mysqli_query($koneksi,  "SELECT * FROM keuangan_hs order by id_keuangan DESC ");
								while($dtuang=mysqli_fetch_array($sqluang)){
										$debit =$dtuang[debet_keuangan]*$dtuang[jumlah];
										$debit_rp =format_rupiah($debit);
										$ttldebit   = $ttldebit  + $debit;
										$ttldebit_rp =format_rupiah($ttldebit);
										$kredit = $dtuang[kredit_keuangan]*$dtuang[jumlah];
										$kredit_rp=format_rupiah($kredit);
										$ttlkredit   = $ttlkredit  + $kredit;
										$ttlkredit_rp =format_rupiah($ttlkredit);
										$income = $dtuang[untung_hijab]*$dtuang[jumlah];
										$income_rp=format_rupiah($income);
										$ttlincome    = $ttlincome   + $income;
										$ttlincome_rp =format_rupiah($ttlincome);
										
										$unpiutang = $dtuang[untung_blm_bayar]*$dtuang[jumlah];
										$unpiutang_rp =format_rupiah($unpiutang);
										$unttlpiutang   = $unttlpiutang   + $unpiutang;
										$unttlpiutang_rp=format_rupiah($unttlpiutang);
										
										
										$piutang = $dtuang[blm_bayar]*$dtuang[jumlah];
										$piutang_rp =format_rupiah($piutang);
										$ttlpiutang   = $ttlpiutang   + $piutang;
										$ttlpiutang_rp=format_rupiah($ttlpiutang);
							
										if($dtuang['metode_bayar']==1){
												$dtmetnm='BCA';
											}elseif($dtuang['metode_bayar']==2){
												$dtmetnm='MANDIRI';
											}elseif($dtuang['metode_bayar']==3){
												$dtmetnm='JENIUS';
											}else{
												$dtmetnm='BUKOPIN';
											}
											
											
											
											if($dtuang['kategori_uang']==1){
												$dtkatnm='Jual Hijab';
											}elseif($dtuang['kategori_uang']==2){
												$dtkatnm='Beli Hijab';
											}elseif($dtuang['kategori_uang']==3){
												$dtkatnm='Bonus Hijab';
											}elseif($dtuang['kategori_uang']==4){
												$dtkatnm='Operasional';
											}elseif($dtuang['kategori_uang']==5){
												$dtkatnm='Tambah Modal';
											}else{
												$dtkatnm='Gaji';
												
											}							
									 
								echo"
						<tr>
							<td>
								<div class='col-xs-6' class='pull-left'>
									$dtmetnm 
								</div>
								<div class='col-xs-6'  class='pull-right'>
									<span class='pull-right'>$dtkatnm</span>
								</div>
								<div class='col-xs-12'>
								<hr/>
								</div>
								<div class='col-xs-12' align='center'>
									<h3>$dtuang[pic]</h3>
								</div>
								<div class='col-xs-12' align='center'>
									$dtuang[jumlah] X $dtuang[keterangan_keuangan] 
								</div>
								<div class='col-xs-12'>
								<hr/>
								</div>
								<div class='col-xs-6' class='pull-left'>
									M
								</div>
								<div class='col-xs-6'  class='pull-right'>
									Rp.$debit_rp,-
								</div>
								<div class='col-xs-6' class='pull-left'>
									K
								</div>
								<div class='col-xs-6'  class='pull-right'>
									<span class='pull-right'>Rp.$kredit_rp,-</span>
								</div>
								<div class='col-xs-6' class='pull-left'>
									U
								</div>
								<div class='col-xs-6'  class='pull-right'>
									Rp.$income_rp,-
								</div>
								<div class='col-xs-6' class='pull-left'>
									UP
								</div>
								<div class='col-xs-6'  class='pull-right'>
									<span class='pull-right'>Rp.$unpiutang_rp,-</span>
								</div>
								<div class='col-xs-6' class='pull-left'>
									P
								</div>
								<div class='col-xs-6'  class='pull-right'>
									<span class='pull-right'>Rp.$piutang_rp,-</span>
								</div>
								<div class='col-xs-12'>
								<hr/>
								</div>
								<div class='col-xs-7'  class='pull-left'>
									$dtuang[tgl_transaksi]|$dtuang[jam_transaksi]
								</div>
								<div class='col-xs-5' >
									<span class='pull-right'>
									<a href='Edittransaksi-$dtuang[id_keuangan].html' class='btn btn-primary btn-sm' ><i class='fa fa-pencil'></i></a>
								
									<a href='Viewdelete-$dtuang[id_keuangan].html' class='btn btn-danger btn-sm' ><i class='fa fa-trash-o'></i></a>
									</span>
								</div>
							</td>
							
						</tr>";
						$no++;
						}
						
						echo"
						
					</tbody>
					<tfoot>
						<tr>
							<th >
							<div class='row no-gutters'>
								<div class='col-xs-6' class='pull-left no-gutters'>
								Masuk
								</div>
								<div class='col-xs-6'  class='pull-right no-gutters'>
									Rp$ttldebit_rp,-
								</div>
								<div class='col-xs-12 no-gutters'>
								<hr/>
								</div>
								<div class='col-xs-6' class='pull-left no-gutters'>
								Keluar
								</div>
								<div class='col-xs-6'  class='pull-right no-gutters'>
									<span class='pull-right'>Rp$ttlkredit_rp,-</span>
								</div>
								<div class='col-xs-12 no-gutters'>
								<hr/>
								</div>
								<div class='col-xs-6' class='pull-left no-gutters'>
								Untung
								</div>
								<div class='col-xs-6'  class='pull-right no-gutters'>
									Rp$ttlincome_rp,-
								</div>
								<div class='col-xs-12'>
								<hr/>
								</div>
								<div class='col-xs-6' class='pull-left no-gutters'>
								Piutang
								</div>
								<div class='col-xs-6'  class='pull-right no-gutters'>
									<span class='pull-right'>Rp$ttlpiutang_rp,-</span>
								</div>
							</div>
							</th>
						  
						</tr>
						</tfoot>
				</table>
              </div>
              <!-- /.box-body -->

              <div class='box-footer'>
			<a href='Newtransaksi.html' class='btn btn-primary btn-sm'><i class='fa  fa-plus'></i> Tambah Transaksi</a>		
		</div>
            </form>
          </div>
          <!-- /.box -->
		</section>";
}
elseif ($_GET[module]=='produkshazfa'){
	
	 echo"<section class='content'>
		<div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Data Produk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role='form'>
              <div class='box-body'>
			  <div class='table-responsive'>
				<table id='tabledata' class='table table-bordered'>
					<thead>
						<tr>
							<th>
								No
							</th>
							
							<th>
								Nama Produk
							</th>
							<th>
								Stok
							</th>
							<th>
								Harga
							</th>
							<th>
								Tanggal
							</th>
							
							
						</tr>
					</thead>
					<tbody>";
					$no=1;
						$sqlproduk=mysqli_query($koneksi,  "SELECT * FROM `m_product`");
								while($dtproduk=mysqli_fetch_array($sqlproduk)){
									 $harganew =$dtproduk[p_price];
									
								echo"
						<tr>
							<td>
								$no
							</td>
							
							<td>
								$dtproduk[p_name] ( $dtproduk[p_merk] )
							</td>
							<td>
								$dtproduk[p_stok]
							</td>
							<td>
								$harganew
							</td>
							<td>
								$dtproduk[p_updated_date]
							</td>
							
						</tr>";
						$no++;
						}
						
						echo"
					</tbody>
				</table>
				</div>
              </div>
              <!-- /.box-body -->

              <div class='box-footer'>
						<a href='Newproduk.html' class='btn btn-primary btn-sm'><i class='fa  fa-plus'></i> Tambah Produk</a>		
					</div>
            </form>
          </div>
          <!-- /.box -->
		</section>";
	
}
elseif ($_GET[module]=='newtournament'){
				if($_POST['upload']){
					
					
					
				
					$game	= $_POST['game'];
					$turnament	= $_POST['turnament'];
					$hadiah = $_POST['hadiah']; 
					$sponsor = $_POST['sponsor']; 
					$tgl = $_POST['tgl']; 
					$jam = $_POST['jam']; 
					
					
				
					
					$in = mysqli_query($koneksi,"INSERT INTO tournament_list
								(nama_tournament,
							id_game,
							id_sponsor,
							hadiah_tournament,
							jam_tournament,
							tgl_tournament) 
					VALUES('$turnament',
						'$game',
						'$sponsor',
						'$hadiah',
						'$jam',
						'$tgl'
						)");
			
						if(!$in){
								
						echo "<script> alert('Gagal  simpan');window.location='Newtournament.html'</script>"; 
							
						}else{ 
							echo "<script> alert('Berhasil simpan');window.location='Newtournament.html'</script>"; 
						}
					}
	echo"<section class='content'>
			<div class='box box-primary'>
				<div class='box-header with-border'>
				<h3 class='box-title'>Tambah Tournament</h3>
				</div>
				<form action='' method='post' enctype='multipart/form-data'>
					<div class='box-body'>
						
						<div class='col-md-12'>
						</div>
						<div class='col-md-12'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Nama Tournament</label>
							  <input type='text' class='form-control' name='turnament' placeholder='Nama Tournament ' value='$dtproduk[linkbukalapak]'>
							</div>
						</div>
						<div class='col-md-12'>
							<div class='form-group'>
								<label for='exampleInputPassword1'>Game Tournament</label>
								<select class='form-control' name='game' >";
														$sqlkat=mysqli_query($koneksi, "SELECT * FROM game");
														while($dtsqlkat=mysqli_fetch_array($sqlkat)){
														echo "<option value='$dtsqlkat[id_game]'>$dtsqlkat[nama_game]</option>";
														
														}
														echo "
								</select>
				  			</div>
						
						</div>
						<div class='col-md-12'>
							<div class='form-group'>
								<label for='exampleInputPassword1'>Nama Sponsor</label>
								<select class='form-control' name='sponsor' >";
														$sqlkat=mysqli_query($koneksi, "SELECT * FROM sponsor");
														while($dtsqlkat=mysqli_fetch_array($sqlkat)){
														echo "<option value='$dtsqlkat[id_sponsor]'>$dtsqlkat[nama_sponsor]</option>";
														
														}
														echo "
								</select>
				  			</div>
						
						</div>
						<div class='col-md-12'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Total Hadiah</label>
							  <input type='text' class='form-control' name='hadiah' placeholder='Total Hadiah' value=''>
							</div>
						</div>
						<div class='col-md-12'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Tanggal</label>
							  <input type='text' class='form-control' name='tgl' placeholder='yyyy-mm-dd' value=''>
							</div>
						</div>
						<div class='col-md-12'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Jam</label>
							  <input type='text' class='form-control' name='jam' placeholder='HH-MM-dd' value=''>
							</div>
						</div>
					  <!-- /.box-body -->
					<div class='box-footer'>
						<input type='submit' name='upload' class='btn btn-primary btn-sm' value='Simpan' />
					</div>
				</form>
			</div>
        </section>";
}


elseif ($_GET[module]=='newtransaksi'){
	if($_POST['upload']){
					$allowed_ext	= array('png', 'PNG', 'jpg', 'JPG');
					$file_name		= $_FILES['file']['name'];
					$file_ext		= strtolower(end(explode('.', $file_name)));
					$file_size		= $_FILES['file']['size'];
					$file_tmp		= $_FILES['file']['tmp_name'];
					
					
					$nama1	= $_POST['nama1'];
					$nama2	= $_POST['nama2'];
					$harga	= $_POST['harga'];
					$diskon	= $_POST['diskon'];
					$stok	= $_POST['stok'];
					$berat	= $_POST['berat'];
					$linktk	= $_POST['linktk'];
					$linkbl	= $_POST['linkbl'];
					$kategori	= $_POST['kategori'];
					$deskripsi	= $_POST['deskripsi'];
					
					
					
					$namagambar1	= $nama1.' '.$nama2.$tgl_sekarang.$jam_sekarang_gmbr;
					$namagambar2	= $nama1.' '.$nama2.$tgl_sekarang.$jam_sekarang_gmbr.'.png';
					
					
									$in = mysqli_query($koneksi,"INSERT INTO produkonly_hs
											(id_produkonly,
										   nama_brand,
										   id_kategori,
										   nama_produk_1,
										   nama_produk_2,
										   deskripsi,
										   beratonly,
										   tgl_masuk,
										   gambar,
										   status_produk) 
								VALUES('$idprodukonli',
									   'SHAZFA',
									   '$kategori',
									   '$nama1',
									   '$nama2',
									   '$deskripsi',
									   '$berat',
									   '$tgl_sekarang',
									   '$namagambar1',
									   'active')");
									
									if(!$in){
											
									   echo "<script> alert('Gagal in');window.location='Newcustomer.html'</script>"; 
										
									}else{ 
										 echo "<script> alert('berhasil');window.location='Newproduk.html'</script>"; 
								
									}
			}
			
	echo"<section class='content'>
			<div class='box box-primary'>
				<div class='box-header with-border'>
				<h3 class='box-title'>Tambah Produk</h3>
				</div>
				<form action='' method='post' enctype='multipart/form-data'>
					<div class='box-body'>
						
						<div class='col-md-4'>
							<div class='form-group'>
							  <label for='exampleInputEmail1'>Customer Code</label>
							   <input type='text' class='form-control' name='data1'   placeholder='Masukan Nama 1' value='$dtproduk[nama_produk_1]'> 
							</div>
						</div>
						<div class='col-md-4'>
							 <div class='form-group'>
							  <label for='exampleInputEmail1'>Nama Depan</label>
							  <input type='text' class='form-control' name='data2' placeholder='Masukan Nama 2' value='$dtproduk[nama_produk_2]'>
							</div>
						</div>
						<div class='col-md-4'>
							 <div class='form-group'>
							  <label for='exampleInputEmail1'>Nama Tengah</label>
							  <input type='text' class='form-control' name='data3' placeholder='Masukan Nama 2' value='$dtproduk[nama_produk_2]'>
							</div>
						</div>
						<div class='col-md-4'>
							 <div class='form-group'>
							  <label for='exampleInputEmail1'>Nama Belakang</label>
							  <input type='text' class='form-control' name='data4' placeholder='Masukan Nama 2' value='$dtproduk[nama_produk_2]'>
							</div>
						</div>
						<div class='col-md-4'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Gender</label>
							  <input type='number' class='form-control' name='harga' placeholder='Masukan Harga' value='$dtproduk[harga]'>
							</div>
						</div>
						<div class='col-md-2'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Di</label>
							  <input type='number' class='form-control' name='diskon' placeholder='Masukan Diskon' value='$dtproduk[diskon]'>
							</div>
						</div>	
						<div class='col-md-2'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Stok</label>
							  <input type='number' class='form-control' name='stok' placeholder='Masukan Stok' value='$dtproduk[stok]'>
							</div>
						</div>
						<div class='col-md-2'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Berat</label>
							  <input type='text' class='form-control' name='berat' placeholder='Masukan Berat' value='$dtproduk[beratonly]'>
							</div>
						</div>
						<div class='col-md-2'>
						<div class='form-group'>
								  <label for='exampleInputPassword1'>Kategori</label>
									<select class='form-control' name='kategori' >";
															$sqlkat=mysqli_query($koneksi, "SELECT * FROM kategori_hs ORDER BY nama_kategori");
															while($dtsqlkat=mysqli_fetch_array($sqlkat)){
															echo "<option value='$dtsqlkat[id_kategori]'>$dtsqlkat[nama_kategori]</option>";
															
															}
															echo "
									</select>
							</div>
						</div>
						<div class='col-md-12'>
						</div>
						<div class='col-md-12'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Link Tokopedia</label>
							  <input type='text' class='form-control' name='linktk' placeholder='Link Tokped' value='$dtproduk[linktokopedia]'>
							</div>
						</div>
						<div class='col-md-12'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Link Bukalapak</label>
							  <input type='text' class='form-control' name='linkbl' placeholder='link BL' value='$dtproduk[linkbukalapak]'>
							</div>
						</div>
						<div class='col-md-12'>
							 
							<div class='form-group'>
								<label for='exampleInputPassword1'>Deskripsi</label>
							 
							   <textarea class='form-control' name='deskripsi' placeholder='Place some text here' rows='4'>$dtproduk[deskripsi]</textarea>
							</div>
						
						</div>
					  <!-- /.box-body -->
					<div class='box-footer'>
						<input type='submit' name='upload' class='btn btn-primary btn-sm' value='Simpan' />
					</div>
				</form>
			</div>
        </section>";
}




elseif ($_GET[module]=='newtransaksi'){
	if($_POST['upload']){
					
					
					$keterangan	= $_POST['keterangan'];
					$pic	= $_POST['pic'];
					$kategori	= $_POST['kategori'];
					$jumlah	= $_POST['jumlah'];
					$debit	= $_POST['debit'];
					$kredit	= $_POST['kredit'];
					$profit	= $_POST['profit'];
					$piutang	= $_POST['piutang'];
					$metode	= $_POST['metode'];
					$untungpiut=$_POST['profitpiutang'];
					
	$save = mysqli_query($koneksi,"INSERT INTO keuangan_hs
							(keterangan_keuangan,
						   pic,
						   kategori_uang,
						   jumlah,
						   debet_keuangan,
						   kredit_keuangan,
						   untung_hijab,
						   untung_blm_bayar,
						   blm_bayar,
						   metode_bayar,
						   tgl_transaksi,
						   jam_transaksi) 
				VALUES('$keterangan',
						'$pic',
						'$kategori',
						'$jumlah',
						'$debit',
						'$kredit',
						'$profit',
						'$untungpiut',
						'$piutang',
						'$metode',
						'$tgl_sekarang',
						'$jam_sekarang')");
					
					if(!$save){
							
					   echo "<script> alert('Gagal Simpan');window.location='Keuangan.html'</script>"; 
					}else{ 
						echo "<script> alert('Berhasil');window.location='Keuangan.html'</script>";
					}	
								
			}else{
				
			}
			
	echo"<section class='content'>
			<div class='box box-primary'>
				<div class='box-header with-border'>
				<h3 class='box-title'>Tambah Produk</h3>
				</div>
				<form action='' method='post' enctype='multipart/form-data'>
					<div class='box-body'>
						
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputEmail1'>Keterangan</label>
							  <input type='text' class='form-control' name='keterangan'   placeholder='' value='$dtproduk[nama_produk_1]'> 
							</div>
						</div>
						<div class='col-md-6'>
							 <div class='form-group'>
							  <label for='exampleInputEmail1'>PIC</label>
							  <input type='text' class='form-control' name='pic' placeholder='' value='$dtproduk[nama_produk_2]'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Kategori Transaksi</label>
												<select class='form-control' name='kategori'>
													<option value='0' selected>Pilih Kategori</option>
													<option value='1' >Jual Hijab</option>
													<option value='2' >Beli Hijab</option>
													<option value='3' >Bonus Hijab</option>
													<option value='4' >Operasional</option>
													<option value='5' >Tambah Modal</option>
													<option value='6' >Gaji</option>
												</select>
							  </div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Jumlah</label>
							  <input type='number' class='form-control' name='jumlah' placeholder='' value='0'>
							</div>
						</div>	
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Uang Masuk</label>
							  <input type='number' class='form-control' name='debit' placeholder='' value='0'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Uang Keluar</label>
							   <input type='number' class='form-control' name='kredit' placeholder='' value='0'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Untung</label>
							   <input type='number' class='form-control' name='profit' placeholder='' value='0'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Untung Piutang</label>
							   <input type='number' class='form-control' name='profitpiutang' placeholder='' value='0'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Piutang</label>
							   <input type='number' class='form-control' name='piutang' placeholder='' value='0'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
									<label for='exampleInputPassword1'>Metode Bayar</label>
									<select class='form-control' name='metode' >
										<option value='0' selected>Pilih Metode</option>
										<option value='1' >BCA</option>
										<option value='2' >MANDIRI</option>
										<option value='3' >JENIUS</option>
										<option value='4' >BUKOPIN</option>
										
									</select>
							  </div>
						</div>
						<div class='col-md-12'>
						</div>
						
					  <!-- /.box-body -->
					<div class='box-footer'>
						<input type='submit' name='upload' class='btn btn-primary btn-sm' value='Simpan' />
					</div>
				</form>
			</div>
        </section>";
}


elseif ($_GET[module]=='edittransaksi'){
	
	$idkeuangan=$_GET['id'];
	$sqluang=mysqli_query($koneksi,  "SELECT * FROM keuangan_hs where id_keuangan='$idkeuangan' ");
	$dtuang=mysqli_fetch_array($sqluang);
	
	
	
	if($dtuang['metode_bayar']==1){
		$dtmetnm='BCA';
	}elseif($dtuang['metode_bayar']==2){
		$dtmetnm='MANDIRI';
	}elseif($dtuang['metode_bayar']==3){
		$dtmetnm='JENIUS';
	}else{
		$dtmetnm='BUKOPIN';
	}
	
	
	
	if($dtuang['kategori_uang']==1){
		$dtkatnm='Jual Hijab';
	}elseif($dtuang['kategori_uang']==2){
		$dtkatnm='Beli Hijab';
	}elseif($dtuang['kategori_uang']==3){
		$dtkatnm='Bonus Hijab';
	}elseif($dtuang['kategori_uang']==4){
		$dtkatnm='Operasional';
	}elseif($dtuang['kategori_uang']==5){
		$dtkatnm='Tambah Modal';
	}else{
		$dtkatnm='Gaji';
		
	}
	
	if($_POST['upload']){
					
					$iduang	= $_POST['idkeuangan'];
					$keterangan	= $_POST['keterangan'];
					$pic	= $_POST['pic'];
					$kategori	= $_POST['kategori'];
					$jumlah	= $_POST['jumlah'];
					$debit	= $_POST['debit'];
					$kredit	= $_POST['kredit'];
					$profit	= $_POST['profit'];
					$piutang	= $_POST['piutang'];
					$metode	= $_POST['metode'];
					$untungpiut=$_POST['profitpiutang'];
					
							$save = mysqli_query($koneksi,"UPDATE keuangan_hs
							SET 
							keterangan_keuangan='$keterangan',
							pic='$pic',
							kategori_uang='$kategori',
							jumlah='$jumlah',
							debet_keuangan='$debit',
							kredit_keuangan='$kredit',
							untung_hijab='$profit',
							untung_blm_bayar='$untungpiut',
							blm_bayar='$piutang',
							metode_bayar='$metode',
							tgl_transaksi='$tgl_sekarang',
							jam_transaksi='$jam_sekarang'
							where id_keuangan='$iduang'");
							
							
					
					if(!$save){
							
					   echo "<script> alert('Gagal Simpan');window.location='Keuangan.html'</script>"; 
					}else{ 
						echo "<script> alert('Berhasil');window.location='Keuangan.html'</script>";
					}	
								
			}else{
				
			}
			
	echo"<section class='content'>
			<div class='box box-primary'>
				<div class='box-header with-border'>
				<h3 class='box-title'>Edit Transaksi</h3>
				</div>
				<form action='' method='post' enctype='multipart/form-data'>
					<div class='box-body'>
						
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputEmail1'>Keterangan</label>
							  <input type='text' class='form-control' name='keterangan'  value='$dtuang[keterangan_keuangan]'> 
							   <input type='hidden' class='form-control' name='idkeuangan'    value='$idkeuangan'> 
							</div>
						</div>
						<div class='col-md-6'>
							 <div class='form-group'>
							  <label for='exampleInputEmail1'>PIC</label>
							  <input type='text' class='form-control' name='pic' value='$dtuang[pic]'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Kategori Transaksi</label>
												<select class='form-control' name='kategori'>
													<option value='$dtuang[kategori_uang]' selected>$dtkatnm</option>
													<option value='1' >Jual Hijab</option>
													<option value='2' >Beli Hijab</option>
													<option value='3' >Bonus Hijab</option>
													<option value='4' >Operasional</option>
													<option value='5' >Tambah Modal</option>
													<option value='6' >Gaji</option>
												</select>
							  </div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Jumlah</label>
							  <input type='number' class='form-control' name='jumlah' value='$dtuang[jumlah]'>
							</div>
						</div>	
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Uang Masuk</label>
							  <input type='number' class='form-control' name='debit'  value='$dtuang[debet_keuangan]'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Uang Keluar</label>
							   <input type='number' class='form-control' name='kredit'  value='$dtuang[kredit_keuangan]'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Untung</label>
							   <input type='number' class='form-control' name='profit'  value='$dtuang[untung_hijab]'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Untung Piutang</label>
							   <input type='number' class='form-control' name='profitpiutang' value='$dtuang[untung_blm_bayar]'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Piutang</label>
							   <input type='number' class='form-control' name='piutang' value='$dtuang[blm_bayar]'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class='form-group'>
									<label for='exampleInputPassword1'>Metode Bayar</label>
									<select class='form-control' name='metode' >
										<option value='$dtuang[metode_bayar]' selected>$dtmetnm</option>
										<option value='1' >BCA</option>
										<option value='2' >MANDIRI</option>
										<option value='3' >JENIUS</option>
										<option value='4' >BUKOPIN</option>
										
									</select>
							  </div>
						</div>
						<div class='col-md-12'>
						</div>
						
					  <!-- /.box-body -->
					<div class='box-footer'>
						<input type='submit' name='upload' class='btn btn-primary btn-sm' value='Simpan' />
					</div>
				</form>
			</div>
        </section>";
}

elseif ($_GET[module]=='viewupdelete'){
	
	$idkeuangan=$_GET['id'];
	$sqluang=mysqli_query($koneksi,  "SELECT * FROM keuangan_hs where id_keuangan='$idkeuangan' ");
	$dtuang=mysqli_fetch_array($sqluang);
	
	
	
	if($dtuang['metode_bayar']==1){
		$dtmetnm='BCA';
	}elseif($dtuang['metode_bayar']==2){
		$dtmetnm='MANDIRI';
	}elseif($dtuang['metode_bayar']==3){
		$dtmetnm='JENIUS';
	}else{
		$dtmetnm='BUKOPIN';
	}
	
	
	
	if($dtuang['kategori_uang']==1){
		$dtkatnm='Jual Hijab';
	}elseif($dtuang['kategori_uang']==2){
		$dtkatnm='Beli Hijab';
	}elseif($dtuang['kategori_uang']==3){
		$dtkatnm='Bonus Hijab';
	}elseif($dtuang['kategori_uang']==4){
		$dtkatnm='Operasional';
	}elseif($dtuang['kategori_uang']==5){
		$dtkatnm='Tambah Modal';
	}else{
		$dtkatnm='Gaji';
		
	}
	
	
			
	echo"<section class='content'>
			<div class='box box-danger'>
				<div class='box-header with-border'>
				<h3 class='box-title'>Hapus Transaksi</h3>
				</div>
				<form action='' method='post' enctype='multipart/form-data'>
					<div class='box-body'>
						<div class='col-md-12' align='center'>
							<h2><span >Yakin Mau Hapus</span></h2>
						</div>
						<div class='col-md-12' align='center'>
							<div class='form-group'>
							  <label for='exampleInputEmail1'>$dtuang[keterangan_keuangan]</label><br>
							  <label for='exampleInputEmail1'>$dtuang[pic]</label><br>
							   <label for='exampleInputEmail1'>$dtuang[tgl_transaksi]</label><br>
							</div>
						</div>
						
						<div class='box-footer'>
						<a href='Deletetr-$idkeuangan.html' class='btn btn-danger btn-sm btn-block'>HAPUS</a>
						
					</div>
				</form>
			</div>
        </section>";
}
elseif ($_GET[module]=='deletetransaksi'){
	$idkeuangan=$_GET['id'];
	
	$result=mysqli_query ($koneksi, "DELETE FROM keuangan_hs WHERE id_keuangan='$idkeuangan'")or die (mysqli_error());
											if(!$result){
												echo "<script> alert('Gagal Hapus');window.location='Keuangan.html'</script>"; 
											}else{
											echo "<script> alert('Berhasil Hapus');window.location='Keuangan.html'</script>"; 
					
											}
}											

elseif ($_GET[module]=='katalogproduk'){
	
	 echo"<section class='content'>
		<div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Data Katalog</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role='form'>
              <div class='box-body'>
			  <div class='table-responsive'>
				<table id='tabledata' class='table table-bordered'>
					<thead>
						<tr>
							<th>
								No
							</th>
							
							<th>
								Katalog
							</th>
							<th>
								Group 
							</th>
							
							
						</tr>
					</thead>
					<tbody>";
					$no=1;
						$sqlproduk=mysqli_query($koneksi,  "SELECT * FROM kategori_hs,group_hs
									WHERE
									 kategori_hs.id_group=group_hs.id_group
									");
								while($dtproduk=mysqli_fetch_array($sqlproduk)){
									
								echo"
						<tr>
							<td>
								$no
							</td>
							<td>
								$dtproduk[nama_kategori]
							</td>
							<td>
								$dtproduk[nama_group]
							</td>
							
						</tr>";
						$no++;
						}
						
						echo"
					</tbody>
				</table>
				</div>
              </div>
              <!-- /.box-body -->

             <div class='box-footer'>
						<a href='Newkatalog.html' class='btn btn-primary btn-sm'><i class='fa  fa-plus'></i> Tambah Katalog</a>		
					</div>
            </form>
          </div>
          <!-- /.box -->
		</section>";
}

elseif ($_GET[module]=='newkatalogproduk'){
	
	
		if($_POST['upload']){
					
					
					$nama	= $_POST['nama'];
					$group	= $_POST['group'];
					
					
					
					$in = mysqli_query($koneksi,"INSERT INTO kategori_hs
											(nama_kategori,
										   id_group) 
								VALUES('$nama',
									   '$group')");
									
									if($in){
										$divdstatus='berhasil';
										echo "<script> alert('Berhasil');window.location='Katalog.html'</script>";
									}else{
										$divdstatus='gagal';
									}	
								
				}else{
									
				}
								
								
							

	
	echo"<section class='content'>
			<div class='box box-primary'>
				<div class='box-header with-border'>
				<h3 class='box-title'>Tambah Katalog</h3>
				</div>
				<form action='' method='post' enctype='multipart/form-data'>
					<div class='box-body'>
						<div class='col-md-12 col-sm-12 col-xs-12'>
							<div class='form-group'>
								<label for='exampleInputEmail1'>Nama Katalog</label>
								<input type='text' class='form-control' name='nama'   placeholder='Masukan Nama'  required> 
							</div>
						</div>
						<div class='col-md-12 col-sm-12 col-xs-12'>
							<div class='form-group'>
								  <label for='exampleInputPassword1'>Group</label>
									<select class='form-control' name='group' >";
															$sqlkat=mysqli_query($koneksi, "SELECT * FROM group_hs ORDER BY nama_group");
															while($dtsqlkat=mysqli_fetch_array($sqlkat)){
															echo "<option value='$dtsqlkat[id_group]'>$dtsqlkat[nama_group]</option>";
															
															}
															echo "
									</select>
							</div>
						</div>
							
						<div class='col-md-12 col-sm-12 col-xs-12'>
						<input type='submit' name='upload' class='btn btn-primary btn-sm' value='Simpan' />
						</div>
					  <!-- /.box-body -->
					<div class='box-footer'>
						
					</div>
				</form>
			</div>
			
        </section>";
}



elseif ($_GET[module]=='groupproduk'){
	
	 echo"<section class='content'>
		<div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Data Group</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role='form'>
              <div class='box-body'>
			  <div class='table-responsive'>
				<table id='tabledata' class='table table-bordered'>
					<thead>
						<tr>
							<th>
								No
							</th>
							
							<th>
								Group
							</th>
							<th>
								Keterangan
							</th>
						</tr>
					</thead>
					<tbody>";
					$no=1;
						$sqlproduk=mysqli_query($koneksi,  "SELECT * FROM group_hs
									");
								while($dtproduk=mysqli_fetch_array($sqlproduk)){
									
								echo"
						<tr>
							<td>
								$no
							</td>
							<td>
								$dtproduk[nama_group]
							</td>
							<td>
								$dtproduk[keterangan_group]
							</td>
							
						</tr>";
						$no++;
						}
						
						echo"
					</tbody>
				</table>
				</div>
              </div>
              <!-- /.box-body -->

              <div class='box-footer'>
              </div>
            </form>
          </div>
          <!-- /.box -->
		</section>";
}

elseif ($_GET[module]=='editproduk'){
	
	$idproduk=$_GET['id'];
	
	if($_POST['upload']){
		
			$allowed_ext	= array('png', 'PNG', 'jpg', 'JPG');
			$file_name		= $_FILES['file']['name'];
			$file_ext		= strtolower(end(explode('.', $file_name)));
			$file_size		= $_FILES['file']['size'];
			$file_tmp		= $_FILES['file']['tmp_name'];
			
					
	
			$idproduk1=$_POST['idproduk'];
			$idprodukonly=$_POST['idprodukonly'];
			$nama1=$_POST['nama1'];
			$nama2=$_POST['nama2'];
			$harga=$_POST['harga'];
			$diskon=$_POST['diskon'];
			$stok=$_POST['stok'];
			$berat=$_POST['berat'];
			$linktk=$_POST['linktk'];
			$linkbl=$_POST['linkbl'];
			$deskripsi=$_POST['deskripsi'];
			
			$namagambar1	= $nama1.' '.$nama2.$tgl_sekarang.$jam_sekarang_gmbr;
			$namagambar2	= $nama1.' '.$nama2.$tgl_sekarang.$jam_sekarang_gmbr.'.png';
			
			if(in_array($file_ext, $allowed_ext) === true){
						if($file_size < 2044070){
								
								$lokasi = '../media/product/'.$namagambar2;
									move_uploaded_file($file_tmp, $lokasi);
						
			
									$update=mysqli_query($koneksi, "UPDATE produkonly_hs
																SET nama_produk_1='$nama1', 
																nama_produk_2='$nama2', 
																beratonly='$berat',
																deskripsi='$deskripsi',
																gambar='$namagambar1'
																WHERE 
																id_produkonly='$idprodukonly'");
									if(!$update){
										echo "<script> alert('Gagal update data');window.location='Editprd-$idproduk1.html'</script>";
								
										
									}else{
										$update1=mysqli_query($koneksi, "UPDATE produk_hs
																SET harga='$harga', 
																harga='$harga',
																stok='$stok',
																diskon='$diskon',
																linktokopedia='$linktk',
																linkbukalapak='$linkbl'
																WHERE 
																id_produk='$idproduk1'");
										if(!$update1){
										echo "<script> alert('Gagal update data2');window.location='Editprd-$idproduk1.html'</script>";
										}else{
											echo "<script> alert('berhasil');window.location='Editprd-$idproduk1.html'</script>";
										
										}
									}
						}else{
									echo "Ukuran File Max 2mb";
									$datatmpil2='Ukuran File Max 2mb';
								}
								
								
							
					}else{
						$datatmpil1='Gagal ext';
					echo "Gagal ext";
					}
		}else{
			
		}
	
				$sqlproduk=mysqli_query($koneksi,  "SELECT * FROM produkonly_hs,produk_hs,kategori_hs 
									WHERE
									produkonly_hs.id_produkonly=produk_hs.id_produkonly
									and produkonly_hs.id_kategori=kategori_hs.id_kategori
									and id_produk='$idproduk'
									");
				$dtproduk=mysqli_fetch_array($sqlproduk);
				 $harganew = format_rupiah($dtproduk[harga]);
				 $disc     = ($dtproduk[diskon]/100)*$dtproduk[harga];
				 $hargadisc= number_format(($dtproduk[harga]-$disc),0,',','.');	
				 
				 
		
	echo"<section class='content'>
			<div class='box box-primary'>
				<div class='box-header with-border'>
				<h3 class='box-title'>Edit Produk</h3>
				</div>
				<form action='' method='post' enctype='multipart/form-data'>
					<div class='box-body'>
						<div class='col-md-4' align='center'>
							<div class='form-group'>
								<img src='../media/product/$dtproduk[gambar].png' width='120px' />
							</div>
							<input type='file' name='file' required />
						</div>
						<div class='col-md-4'>
							<div class='form-group'>
							  <label for='exampleInputEmail1'>Nama Produk 1</label>
							  <input type='hidden' class='form-control' name='idproduk'   placeholder='Masukan Nama 1' value='$idproduk'> 
							  <input type='hidden' class='form-control' name='idprodukonly'   placeholder='Masukan Nama 1' value='$dtproduk[id_produkonly]'> 
							  <input type='text' class='form-control' name='nama1'   placeholder='Masukan Nama 1' value='$dtproduk[nama_produk_1]'> 
							</div>
						</div>
						<div class='col-md-4'>
							 <div class='form-group'>
							  <label for='exampleInputEmail1'>Nama Produk 2</label>
							  <input type='text' class='form-control' name='nama2' placeholder='Masukan Nama 2' value='$dtproduk[nama_produk_2]'>
							</div>
						</div>
						
						<div class='col-md-2'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Harga</label>
							  <input type='number' class='form-control' name='harga' placeholder='Masukan Harga' value='$dtproduk[harga]'>
							</div>
						</div>
						<div class='col-md-2'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Diskon</label>
							  <input type='number' class='form-control' name='diskon' placeholder='Masukan Diskon' value='$dtproduk[diskon]'>
							</div>
						</div>	
						<div class='col-md-2'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Stok</label>
							  <input type='number' class='form-control' name='stok' placeholder='Masukan Stok' value='$dtproduk[stok]'>
							</div>
						</div>
						<div class='col-md-2'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Berat</label>
							  <input type='text' class='form-control' name='berat' placeholder='Masukan Berat' value='$dtproduk[beratonly]'>
							</div>
						</div>
						<div class='col-md-12'>
						</div>
						<div class='col-md-12'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Link Tokopedia</label>
							  <input type='text' class='form-control' name='linktk' placeholder='Link Tokped' value='$dtproduk[linktokopedia]'>
							</div>
						</div>
						<div class='col-md-12'>
							<div class='form-group'>
							  <label for='exampleInputPassword1'>Link Bukalapak</label>
							  <input type='text' class='form-control' name='linkbl' placeholder='link BL' value='$dtproduk[linkbukalapak]'>
							</div>
						</div>
						<div class='col-md-12'>
							 
							<div class='form-group'>
								<label for='exampleInputPassword1'>Deskripsi</label>
							 
							   <textarea class='form-control' name='deskripsi' placeholder='Place some text here' rows='4'>$dtproduk[deskripsi]</textarea>
							</div>
						
						</div>
					  <!-- /.box-body -->
					<div class='box-footer'>
						<div class='col-md-12'>
						
						<input type='submit' name='upload' class='btn btn-primary btn-sm' value='Simpan' />
						</div>
					</div>
				</form>
			</div>
        </section>";
				 
}	
elseif ($_GET[module]=='ordermasuk'){
	echo"
	<section class='content'>
		<div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'>Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role='form'>
              <div class='box-body'>
			  <div class='table-responsive'>
				<table id='tabledata' class='table table-bordered'>
					<thead>
						<tr>
							<th>
								No
							</th>
							<th>
								Id Transaksi
							</th>
							<th>
								Nama Customer
							</th>
							<th>
								Nama Service
							</th>
							<th>
								Nama Produk
							</th>
							<th>
								Harga Service
							</th>
							<th>
								Harga Produk
							</th>
							<th>
								Tanggal
							</th>
							
						</tr>
					</thead>
					<tbody>";
					$no=1;
						$sqlproduk=mysqli_query($koneksi,  "SELECT * FROM tr_payment as pay LEFT JOIN tr_detail_service as detsrv ON pay.transaction_id = detsrv.transaction_id LEFT JOIN m_services as msrv ON detsrv.service_id = msrv.service_id LEFT JOIN tr_detail_product as detprd ON pay.transaction_id = detprd.transaction_id LEFT JOIN m_product as mprd ON detprd.product_id = mprd.product_id LEFT JOIN m_customer as custs ON pay.customer_id = custs.customer_id LEFT JOIN m_employee as emps ON pay.employee_id = emps.employee_id LEFT JOIN m_branch as branch ON pay.branch_id = emps.branch_id GROUP BY transaction_code");
								while($dtproduk=mysqli_fetch_array($sqlproduk)){
									 
								echo"
						<tr>
							<td>
								$no
							</td>
							<td>
								$dtproduk[transaction_code]
							</td>
							
							<td>
								$dtproduk[c_fistname] $dtproduk[c_midlename] $dtproduk[c_lastname]
							</td>
							<td>
								$dtproduk[s_category]
							</td>
							<td>
								$dtproduk[p_name]
							</td>
							<td>
								$dtproduk[s_price]
							</td>
							<td>
								$dtproduk[p_price]
							</td>
							<td>
							$dtproduk[t_date]
							</td>
						</tr>";
						$no++;
						}
						
						echo"
					</tbody>
				</table>
				</div>
              </div>
              <!-- /.box-body -->

              <div class='box-footer'>
              </div>
            </form>
          </div>
          <!-- /.box -->
		</section>";
	
}

elseif ($_GET[module]=='simpaneditproduk'){
		$idproduk=$_POST['idproduk'];
		$idprodukonly=$_POST['idprodukonly'];
		$nama1=$_POST['nama1'];
		$nama2=$_POST['nama2'];
		$harga=$_POST['harga'];
		$diskon=$_POST['diskon'];
		$stok=$_POST['stok'];
		$berat=$_POST['berat'];
		$linktk=$_POST['linktk'];
		$linkbl=$_POST['linkbl'];
		$deskripsi=$_POST['deskripsi'];
		
		$update=mysqli_query($koneksi, "UPDATE produkonly_hs
									SET nama_produk_1='$nama1', 
									nama_produk_2='$nama2', 
									beratonly='$berat',
									deskripsi='$deskripsi'
									WHERE 
									id_produkonly='$idprodukonly'");
		if(!$update){
			echo "<script> alert('Gagal update data');window.location='Editprd-$idproduk.html'</script>";
	
			
		}else{
			$update1=mysqli_query($koneksi, "UPDATE produk_hs
									SET harga='$harga', 
									harga='$harga',
									stok='$stok',
									diskon='$diskon',
									linktokopedia='$linktk',
									linkbukalapak='$linkbl'
									WHERE 
									id_produk='$idproduk'");
			if(!$update1){
			echo "<script> alert('Gagal update data2');window.location='Editprd-$idproduk.html'</script>";
			}else{
				echo "<script> alert('berhasil');window.location='Editprd-$idproduk.html'</script>";
			
			}
		}
			
	
}


?>
