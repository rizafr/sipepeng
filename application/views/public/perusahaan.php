<?php $this->load->view('public/templates/header'); ?> 
<body class="homepage">
	<?php $this->load->view('public/templates/menu'); ?> 
	<section id="peraturan">
        <div class="container">
			
            <div class="get-started center wow fadeInDown">
                <h2>Data Perusahaan</h2>
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
									<th>Rt</th>
									<th>Rw</th>
									<th>Kelurahan</th>
									<th>Kecamatan</th>
									<th>Kota</th>
									<th>Klasifikasi Perusahaan</th>
									<th>Kegiatan Utama</th>
									<th>Jenis Usaha</th>
									<th>Bentuk Badan Hukum</th>
									<th>Gabung Paguyuban</th>
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
											<td><?php echo $row->rt ?></td>
											<td><?php echo $row->rw ?></td>
											<td><?php echo $row->kelurahan ?></td>
											<td><?php echo $row->kecamatan ?></td>
											<td><?php echo $row->kota ?></td>
											<td><?php echo $row->klasifikasi_perusahaan ?></td>                                                             
											<td><?php echo $row->kegiatan_utama ?></td>                                                             
											<td><?php echo $row->jenis_usaha ?></td>                                                             
											<td><?php echo $row->bentuk_badan_hukum ?></td>                                                             
											<td><?php echo $row->gabung_paguyuban ?></td>                                                             
											
										</tr>
										<?php
										} //end foreach
									} // end if
								?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Rt</th>
									<th>Rw</th>
									<th>Kelurahan</th>
									<th>Kecamatan</th>
									<th>Kota</th>
									<th>Klasifikasi Perusahaan</th>
									<th>Kegiatan Utama</th>
									<th>Jenis Usaha</th>
									<th>Bentuk Badan Hukum</th>
									<th>Gabung Paguyuban</th>
								</tr>
							</tfoot>
						</table>
					</section>
				</div>
				
				
			</div><!--/.container-->
		</section><!--/#feature-->
	
	<?php $this->load->view('public/templates/footer'); ?> 
