<?
	$judul = array("1" => "DIRENCANAKAN", "3" => "SEDANG DILAKSANAKAN", "4" => "TELAH TEREALISASI","5" => "TIDAK DILAKSANAKAN");
   $judul = $judul[$status];
?>
<?php
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
	
	$nama_file= "Laporan Cetak ". $judul ." Per RW ". $rw ." ".date('Y').".xls";
?>

<?php
	header("Content-type: application/octet-stream");
	header('Content-Disposition: attachment; filename="' . $nama_file . '"');
	header("Pragma: no-cache");
	header("Expires: 0");
?>
<h2 align="center"> PEMERINTAH KOTA CIMAHI	<br />					
KECAMATAN CIMAHI SELATAN	<br />						
KELURAHAN LEUWIGAJAH		<br />					
Jl. Sadarmanah No. 11 RT.01 RW.05 Telp/Fax 022-6672995 Cimahi 40532						
  </h2>
  <hr>
  <br />	
  <br />	
  
 <h3 align="center"> DATA KEGIATAN DAN PEMBANGUNAN YANG TELAH <?php echo $judul ?> TAHUN ANGGARAN <?php echo date('Y')?></h3>					

<table border="1" style="border-top:3px solid #004D66; border-bottom:3px solid #004D66;" >
	<tr style="background-color:#004D66;color: #fff ; border:1px solid #eee ; align:center;">
		<th>No</th>
		<th>Kegiatan</th>
		<th>Alamat</th>
		<th>Rt</th>
		<th>Rw</th>
		<th>Panjang</th>
		<th>Lebar</th>
		<th>Ketersediaan Lahan</th>
		<th>Sumber Data</th>
		<th>Tahun Usulan</th>
		<th>Anggaran</th>
		<th>Keterangan</th>
	</tr>	
	<?php
		$no = 1;
		//artesis
		$jum = count(@$artesis);
		if ($jum > 0) {
			foreach ($artesis as $row) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td>Artesis</td>
				<td><?php echo $row->alamat ?></td>
				<td><?php echo $row->rt ?></td>
				<td><?php echo $row->rw ?></td>
				<td><?php echo isset($row->panjang) ? $row->panjang : '-';  ?></td>
				<td><?php echo isset($row->lebar) ? $row->lebar : '-';  ?></td>
				<td><?php echo $row->ketersediaan_lahan ?></td>
				<td><?php echo $row->sumber_data ?></td>
				<td><?php echo $row->tahun_usulan ?></td>
				<td><?php echo $row->anggaran ?></td>
				<td><?php echo $row->ket ?></td>  
			</tr>
			<?php
			} //end foreach
		} // end if
	?> 
	
	<?php
		$no = $no;
		//drainase
		$jum = count(@$drainase);
		if ($jum > 0) {
			foreach ($drainase as $row) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td>Drainase</td>
				<td><?php echo $row->alamat ?></td>
				<td><?php echo $row->rt ?></td>
				<td><?php echo $row->rw ?></td>
				<td><?php echo isset($row->panjang) ? $row->panjang : '-';  ?></td>
				<td><?php echo isset($row->lebar) ? $row->lebar : '-';  ?></td>
				<td><?php echo $row->ketersediaan_lahan ?></td>
				<td><?php echo $row->sumber_data ?></td>
				<td><?php echo $row->tahun_usulan ?></td>
				<td><?php echo $row->anggaran ?></td>
				<td><?php echo $row->ket ?></td>  
			</tr>
			<?php
			} //end foreach
		} // end if
	?>
	
	<?php
		$no = $no;
		//jalan
		$jum = count(@$jalan);
		if ($jum > 0) {
			foreach ($jalan as $row) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td>Jalan</td>
				<td><?php echo $row->alamat ?></td>
				<td><?php echo $row->rt ?></td>
				<td><?php echo $row->rw ?></td>
				<td><?php echo isset($row->panjang) ? $row->panjang : '-';  ?></td>
				<td><?php echo isset($row->lebar) ? $row->lebar : '-';  ?></td>
				<td><?php echo $row->ketersediaan_lahan ?></td>
				<td><?php echo $row->sumber_data ?></td>
				<td><?php echo $row->tahun_usulan ?></td>
				<td><?php echo $row->anggaran ?></td>
				<td><?php echo $row->ket ?></td>  
			</tr>
			<?php
			} //end foreach
		} // end if
	?>
	
	<?php
		$no = $no;
		//kirmir
		$jum = count(@$kirmir);
		if ($jum > 0) {
			foreach ($kirmir as $row) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td>Kirmir</td>
				<td><?php echo $row->alamat ?></td>
				<td><?php echo $row->rt ?></td>
				<td><?php echo $row->rw ?></td>
				<td><?php echo isset($row->panjang) ? $row->panjang : '-';  ?></td>
				<td><?php echo isset($row->lebar) ? $row->lebar : '-';  ?></td>
				<td><?php echo $row->ketersediaan_lahan ?></td>
				<td><?php echo $row->sumber_data ?></td>
				<td><?php echo $row->tahun_usulan ?></td>
				<td><?php echo $row->anggaran ?></td>
				<td><?php echo $row->ket ?></td>  
			</tr>
			<?php
			} //end foreach
		} // end if
	?>
	
	
	
	<?php
		$no = $no;
		//mck
		$jum = count(@$mck);
		if ($jum > 0) {
			foreach ($mck as $row) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td>MCK</td>
				<td><?php echo $row->alamat ?></td>
				<td><?php echo $row->rt ?></td>
				<td><?php echo $row->rw ?></td>
				<td><?php echo isset($row->panjang) ? $row->panjang : '-';  ?></td>
				<td><?php echo isset($row->lebar) ? $row->lebar : '-';  ?></td>
				<td><?php echo $row->ketersediaan_lahan ?></td>
				<td><?php echo $row->sumber_data ?></td>
				<td><?php echo $row->tahun_usulan ?></td>
				<td><?php echo $row->anggaran ?></td>
				<td><?php echo $row->ket ?></td>  
			</tr>
			<?php
			} //end foreach
		} // end if
	?>
	
	<?php
		$no = $no;
		//septictank
		$jum = count(@$septictank);
		if ($jum > 0) {
			foreach ($septictank as $row) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td>Septictank</td>
				<td><?php echo $row->alamat ?></td>
				<td><?php echo $row->rt ?></td>
				<td><?php echo $row->rw ?></td>
				<td><?php echo isset($row->panjang) ? $row->panjang : '-';  ?></td>
				<td><?php echo isset($row->lebar) ? $row->lebar : '-';  ?></td>
				<td><?php echo $row->ketersediaan_lahan ?></td>
				<td><?php echo $row->sumber_data ?></td>
				<td><?php echo $row->tahun_usulan ?></td>
				<td><?php echo $row->anggaran ?></td>
				<td><?php echo $row->ket ?></td>  
			</tr>
			<?php
			} //end foreach
		} // end if
	?>
	
	<?php
		$no = $no;
		//septictank_komunal
		$jum = count(@$septictank_komunal);
		if ($jum > 0) {
			foreach ($septictank_komunal as $row) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td>Septictank Komunal</td>
				<td><?php echo $row->alamat ?></td>
				<td><?php echo $row->rt ?></td>
				<td><?php echo $row->rw ?></td>
				<td><?php echo isset($row->panjang) ? $row->panjang : '-';  ?></td>
				<td><?php echo isset($row->lebar) ? $row->lebar : '-';  ?></td>
				<td><?php echo $row->ketersediaan_lahan ?></td>
				<td><?php echo $row->sumber_data ?></td>
				<td><?php echo $row->tahun_usulan ?></td>
				<td><?php echo $row->anggaran ?></td>
				<td><?php echo $row->ket ?></td>  
			</tr>
			<?php
			} //end foreach
		} // end if
	?>
	<?php
		$no = $no;
		//sumur_dangkal
		$jum = count(@$sumur_dangkal);
		if ($jum > 0) {
			foreach ($sumur_dangkal as $row) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td>Sumur Dangkal</td>
				<td><?php echo $row->alamat ?></td>
				<td><?php echo $row->rt ?></td>
				<td><?php echo $row->rw ?></td>
				<td><?php echo isset($row->panjang) ? $row->panjang : '-';  ?></td>
				<td><?php echo isset($row->lebar) ? $row->lebar : '-';  ?></td>
				<td><?php echo $row->ketersediaan_lahan ?></td>
				<td><?php echo $row->sumber_data ?></td>
				<td><?php echo $row->tahun_usulan ?></td>
				<td><?php echo $row->anggaran ?></td>
				<td><?php echo $row->ket ?></td>  
			</tr>
			<?php
			} //end foreach
		} // end if
	?>
	
	<?php
		$no = $no;
		//sumur_resapan
		$jum = count(@$sumur_resapan);
		if ($jum > 0) {
			foreach ($sumur_resapan as $row) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td>Sumur Resapan</td>
				<td><?php echo $row->alamat ?></td>
				<td><?php echo $row->rt ?></td>
				<td><?php echo $row->rw ?></td>
				<td><?php echo isset($row->panjang) ? $row->panjang : '-';  ?></td>
				<td><?php echo isset($row->lebar) ? $row->lebar : '-';  ?></td>
				<td><?php echo $row->ketersediaan_lahan ?></td>
				<td><?php echo $row->sumber_data ?></td>
				<td><?php echo $row->tahun_usulan ?></td>
				<td><?php echo $row->anggaran ?></td>
				<td><?php echo $row->ket ?></td>  
			</tr>
			<?php
			} //end foreach
		} // end if
	?>
</table>
