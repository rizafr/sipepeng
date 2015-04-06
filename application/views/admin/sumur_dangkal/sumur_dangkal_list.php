<?php $this->load->view('admin/templates/header'); ?>
<link href="<?php echo base_url(); ?>assets/admin/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/admin/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/admin/css/table-responsive.css" rel="stylesheet" />
<body>
	
    <section id="container" >
        <!--header start-->
        <?php $this->load->view('admin/templates/top-nav'); ?>
        <!--header end-->
        <!--sidebar start-->
		<?php $this->load->view('admin/templates/menu_admin'); ?>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading tab-bg-dark-navy-blue tab-right ">
								<?php if($status=='1') {?>
									<ul class="nav nav-tabs pull-right">
										<li><a href="<?php echo base_url() . 'admin/sumur_dangkal_managements/gotoForm/add'; ?>"><i class="icon-plus"></i> Add Data</a></li>
									</ul>
									<?
									}
									
									$judul = array("1"=>"Awal", "2"=>"Verifikasi" , "3"=>"Sedang Dilaksanakan" , "4"=>"Sudah Dilaksanakan" , "5"=>"Tidak Dilaksanakan");
									$judul= $judul[$status];
								?>
                                <span class="hidden-sm wht-color">Data Sumur Dangkal <? echo $judul;?> </span>
							</header>
                            <div class="panel-body">
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
                                                    <th>status</th>
                                                    <th>Aksi</th>
												</tr>
											</thead>
                                            <tbody>
                                                <?php 
													$no=1; 
													
													$jum=count(@$sumur_dangkal_list);												
													if($jum >0){
														foreach ($sumur_dangkal_list as $row) { ?>
														<tr>
															<td><?php echo $no++?></td>
															<td><?php echo $row->rt ?></td>
															<td><?php echo $row->rw ?></td>
															<td><?php echo $row->alamat ?></td>
															<td><?php echo $row->ketersediaan_lahan ?></td>
															<td><?php echo $row->sumber_data ?></td>
															<td><?php echo $row->tahun_usulan ?></td>
															<td><?php echo $row->ket ?></td>                                                             
															<td><? 
																if($status=='1'){
																?>
																<span class="label label-default">Belum Diverifikasi</span>
																<? }
																if($status=='2'){
																?>
																<span class="label label-primary">Belum Dilaksanakan</span><? }
																if($status=='3'){
																?>
																<span class="label label-success">Belum Selesai</span><? }
																if($status=='4'){
																?>
																<span class="label label-info">Sudah dilaksanakan</span>
															<? }?></td>                                                             
															<td>
																<? 
																	if($status=='1'){
																	?>
																	<a href="<?php echo base_url() . 'admin/sumur_dangkal_managements/update_status_data_awal/' . $row->id_sumur_dangkal ?>"><button class = "btn btn-warning" data-toggle="tooltip" title="Verifikasi" data-placemen="bottom"><i class = "icon-ok-sign"></i></button></a>
																	<? }
																	if($status=='2'){
																	?>
																	<a href="<?php echo base_url() . 'admin/sumur_dangkal_managements/update_status_verifikasi/' . $row->id_sumur_dangkal ?>"><button class = "btn btn-warning" data-toggle="tooltip" title="Progress" data-placemen="bottom"><i class = "icon-ok-sign"></i></button></a>
																	<? }
																	if($status=='3'){
																	?>
																	<a href="<?php echo base_url() . 'admin/sumur_dangkal_managements/update_status_sedang_dilaksanakan/' . $row->id_sumur_dangkal ?>"><button class = "btn btn-warning" data-toggle="tooltip" title="Sudah Dilaksanakan" data-placemen="bottom"><i class = "icon-ok-sign"></i></button></a>
																	<? }
																	?>		
																
																<a href="<?php echo base_url() . 'admin/sumur_dangkal_managements/view/' . $row->id_sumur_dangkal ?>"><button class = "btn btn-info" data-toggle="tooltip" title="View" data-placemen="bottom"><i class = "icon-eye-open"></i></button></a>
																<a href="<?php echo base_url() . 'admin/sumur_dangkal_managements/gotoForm/edit/' . $row->id_sumur_dangkal ?>"><button class = "btn btn-success" title="Edit"><i class = "icon-pencil"></i></button></a>
																<a href="<?php echo base_url() . 'admin/sumur_dangkal_managements/delete/' . $row->id_sumur_dangkal.'/'.$status ?>" onclick="return confirm('Are you sure want to delete this?');"><button class = "btn btn-danger" title="Delete"><i class = "icon-trash "></i></button></a>
															</td>
															
														</tr>
														<?php } //end foreach
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
                                                    <th>status</th>
                                                    <th>Aksi</th>
												</tr>
											</tfoot>
										</table>
									</section>
								</div>
							</div>
						</section>
					</div>
				</div>
                <!-- page end-->
			</section>
		</section>
        <!--main content end-->
	<?php $this->load->view('admin/templates/footer'); ?>		