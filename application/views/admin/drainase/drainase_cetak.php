<?php
	
	header("Expires: Mon, 26 Jul 2001 05:00:00 GMT");
	
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	
	header("Cache-Control: no-store, no-cache, must-revalidate");
	
	header("Cache-Control: post-check=0, pre-check=0", false);
	
	header("Pragma: no-cache");
	
	header("Cache-control: private");
	
	header("Content-Type: application/vnd.ms-word; name='word'");
	
	header("Content-disposition: attachment; filename=SURAT USULAN DRAINASE.doc");
	
	
	//Format Tanggal Berbahasa Indonesia 

	// Array Hari
	$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat', 'Sabtu','Minggu');
	$hari = $array_hari[date('N')];

	//Format Tanggal 
	$tanggal = date ('j');

	//Array Bulan 
	$array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember'); 
	$bulan = $array_bulan[date('n')];
	 
	//Format Tahun 
	$tahun = date('Y');
	
?>
<?php echo $map['js']; ?>
<html>
    <head>
        <meta charset="utf-8">
	</head>
	<body>
		<p style="text-align: center;"><strong>PEMERINTAH KOTA CIMAHI</strong></p>
		<p style="text-align: center;"><strong>KECAMATAN CIMAHI SELATAN</strong></p>
		<p style="text-align: center;"><strong>KELURAHAN LEUWIGAJAH</strong></p>
		<p style="text-align: center;">Jl. Sadarmanah No.11 RT.01 RW.05 Telp/Fax. 022-6672995 Cimahi 40532</p>
		<hr>
		
		<table>
			<tbody>
				<tr>
					<td> Nomor     : 621  /     /Kel <br />	
						Sifat      : Penting <br />	
						Lampiran   : - <br />							
						Perihal    : <strong>Permohonan Perbaikan </strong>						
					                 <strong>  <?php echo isset($drainase_list['alamat']) ? $drainase_list['alamat'] : '-'; ?></strong>
					</td>
					<td colspan="2" width="294">
						<table style="height: 284px;" width="355">
							<tbody>
								<tr>
									<td>       
										Leuwigajah,  <?php echo $tanggal ." ". $bulan ." ". $tahun;  ?> <br />	
										Kepada ; <br />										
										Yth.  Kepala Dinas Pekerjaan Umum <br />										 
										Kota Cimahi <br />										
										di <br />										
										Cimahi
										</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		
		<br />
		<p>
			Menindaklanjuti harapan dan keinginan warga sehubungan dengan rusaknya <?php echo isset($drainase_list['alamat']) ? $drainase_list['alamat'] : '-'; ?> RT.<?php echo isset($drainase_list['rt']) ? $drainase_list['rt'] : '-'; ?> RW.<?php echo isset($drainase_list['rw']) ? $drainase_list['rw'] : '-'; ?> Kelurahan Leuwigajah Kecamatan Cimahi Selatan Kota Cimahi, rusaknya jalan ini disebabkan oleh drainase air sepanjang Jalan Haurngambang yang tidak bisa menampung aliran air terutama saat terjadi hujan dan semakin banyaknya kendaraan-kendaraan yang melewati jalan sadarmanah, sehingga dengan rusak dan berlubangnya jalan tersebut menimbulkan kemacetan dan sering terjadi kecelakaan kendaraan roda dua.
			
			Dengan diterimanya surat ini kami sangat berharap bahwa Bapak dapat memberikan respon positif kepada warga kami khususnya untuk sarana <?php echo isset($drainase_list['alamat']) ? $drainase_list['alamat'] : '-'; ?> Kelurahan Leuwigajah Kecamatan Cimahi Selatan Kota Cimahi sehingga perbaikan Jalan Haurngambang segera terealisasi.
			
			Demikian agar menjadi maklum, atas bantuannya diucapkan terima kasih.
			
		</p>
		<p>
			  <?php echo $map['html']; ?>
		</p>
		 
                                                  
		<table>
			<tbody>
				<tr>
					<td width="341"></td>
				</tr>
				<tr>
					<td></td>
					<td width="288">
						<table style="height: 313px;" width="367">
							<tbody>
						<tr>
							<td>
								<p style="text-align: center;"><strong>LURAH LEUWIGAJAH</strong></p>
								<p style="text-align: center;">Sekretaris,</p>
								<p style="text-align: center;"><strong><span style="text-decoration: underline;">AGUS ANWAR, S.Sos</span></strong></p>								
								<p style="text-align: center;">   NIP. 19590916198101 1004</p>
							</td>
						</tr>
					</tbody>
					</table>
					</td>
				</tr>
			</tbody>
		</table>
		&nbsp;
		
		Tembusan :
		<ul>
			<li>Camat Cimahi Selatan.</li>
		</ul>
		<br />
		<br />
		<br />
		<br />
		<p>
			DOKUMENTASI KERUSAKAN <?php echo isset($drainase_list['alamat']) ? $drainase_list['alamat'] : '-'; ?>  RT.<?php echo isset($drainase_list['rt']) ? $drainase_list['rt'] : '-'; ?> RW.<?php echo isset($drainase_list['rw']) ? $drainase_list['rw'] : '-'; ?>
			KELURAHAN LEUWIGAJAH.
		</p>
		<p>
			 <?
				$foto = isset($drainase_list['foto']) ? $drainase_list['foto'] : 'NULL';
				if ($foto === NULL) {
					$foto = 'noimage.jpg';
				} else {
					$foto = $foto;
				}


				$dokumen = isset($drainase_list['dokumen']) ? $drainase_list['dokumen'] : 'NULL';
				if ($dokumen === NULL) {
					$dokumen = 'noimage.jpg';
				} else {
					$dokumen = $dokumen;
				}
				?>
					<img src="<?php echo base_url(); ?>assets/upload/foto/<?php echo $foto ?>"  height="100px" width="100px">
				
		</p>
	</body>
</html>