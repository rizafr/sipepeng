<?php $this->load->view('public/templates/header'); ?> 
<body class="homepage">
	<?php $this->load->view('public/templates/menu'); ?> 
	<section id="peraturan">
        <div class="container">
			
            <div class="get-started center wow fadeInDown">
                <h2>DATA HASIL PEMBANGUNAN SUMUR RESAPAN		 <BR />										
					KELURAHAN LEUWIGAJAH			<BR />									
					KECAMATAN CIMAHI SELATAN												
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
									<th>Rt</th>
									<th>Rw</th>
									<th>Alamat</th>
									<th>Lahan</th>
									<th>Sumber Data</th>
									<th>Tahun Usulan</th>
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
											<td><?php echo $no++?></td>
											<td><?php echo $row->rt ?></td>
											<td><?php echo $row->rw ?></td>
											<td><?php echo $row->alamat ?></td>
											<td><?php echo $row->ketersediaan_lahan ?></td>
											<td><?php echo $row->sumber_data ?></td>
											<td><?php echo $row->tahun_usulan ?></td>
											<td><?php echo $row->ket ?></td>                                                
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
									<th>Alamat</th>
									<th>Lahan</th>
									<th>Sumber Data</th>
									<th>Tahun Usulan</th>
									<th>Keterangan</th>
								</tr>
							</tfoot>
						</table>
					</section>
				</div>
				
				
			</div><!--/.container-->
		</section><!--/#feature-->
		
		<?php $this->load->view('public/templates/footer'); ?> 
				