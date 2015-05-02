<?php $this->load->view('public/templates/header'); ?> 
<body class="homepage">
	<?php $this->load->view('public/templates/menu'); ?> 
	<section id="peraturan">
        <div class="container">
            <div class="get-started center wow fadeInDown">
                <h2>DATA PEMILIK RUMAH KOS DI WILAYAH KOTA CIMAHI		 <BR />										
					KELURAHAN LEUWIGAJAH			<BR />									
					KECAMATAN CIMAHI SELATAN TAHUN 2015												
				</h2>
			</div>
			<div class="get-started wow fadeInDown">
				<div class="adv-table">
					<?php
						$message = $this->session->flashdata('message');
						echo $message == '' ? '' : '<p id="message">' . $message . '</p>';
					?>
					<section id="unseen">
						<table  class="display table table-bordered table-striped table-condensed" id="example">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Pemilik</th>
									<th>Alamat Pemilik</th>
									<th>Rw</th>
									<th>Jumlah Kamar</th>
									<th>Jumlah Orang per Kamar</th>
									<th>Harga Sewa</th>
									<th>Keterangan</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no = 1;
									
									$jum = count(@$data_list);
									if ($jum > 0) {
										foreach ($data_list as $row) {
										?>
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $row->nama_pemilik ?></td> 
											<td><?php echo $row->alamat_pemilik ?></td>
											<td><?php echo $row->rw ?></td>
											<td><?php echo $row->jml_kamar ?></td>									                                                            
											<td><?php echo $row->jml_orang_perkamar ?></td>  
											<td><?php echo $row->harga_sewa?></td>
											<td><?php echo $row->ket?></td>
											
										</tr>
										<?php
										} //end foreach
									} // end if
								?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Nama Pemilik</th>
									<th>Alamat Pemilik</th>
									<th>Rw</th>
									<th>Jumlah Kamar</th>
									<th>Jumlah Orang per Kamar</th>
									<th>Harga Sewa</th>
									<th>Keterangan</th>
								</tr>
							</tfoot>
						</table>
					</section>
				</div>
				
				
			</div><!--/.container-->
		</section><!--/#feature-->
		
		<?php $this->load->view('public/templates/footer'); ?> 
		