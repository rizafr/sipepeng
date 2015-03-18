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
                                <ul class="nav nav-tabs pull-right">
                                    <li><a href="<?php echo base_url() . 'admin/drainase_managements/gotoFormAdd'; ?>"><i class="icon-plus"></i> Add Data</a></li>
                                </ul>
								<? $judul = array("1"=>"Awal", "2"=>"Verifikasi" , "3"=>"Sedang Dilaksanakan" , "4"=>"Sudah Dilaksanakan" , "5"=>"Tidak Dilaksanakan");
									$judul= $judul[$status];
								?>
                                <span class="hidden-sm wht-color">Data Drainase <? echo $judul;?> </span>
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
                                                    <th>Sumber Data</th>
                                                    <th>Tahun Usulan</th>
                                                    <th>Keterangan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
												$no=1; 
												
												$jum=count(@$drainase_list);												
												if($jum >0){
													foreach ($drainase_list as $row) { ?>
														<tr>
															<td><?php echo $no++?></td>
															<td><?php echo $row->rt ?></td>
															<td><?php echo $row->rw ?></td>
															<td><?php echo $row->alamat ?></td>
															<td><?php echo $row->sumber_data ?></td>
															<td><?php echo $row->tahun_usulan ?></td>
															<td><?php echo $row->ket ?></td>                                                      
															<td>
															<? 
															if($status=='1'){
															?>
																<a href="<?php echo base_url() . 'admin/drainase_managements/view/' . $row->id_drainase ?>"><button class = "btn btn-warning" data-toggle="tooltip" title="Verifikasi" data-placemen="bottom"><i class = "icon-ok-sign"></i></button></a>
															<? }
															if($status=='2'){
															?>
																<a href="<?php echo base_url() . 'admin/drainase_managements/view/' . $row->id_drainase ?>"><button class = "btn btn-warning" data-toggle="tooltip" title="Progress" data-placemen="bottom"><i class = "icon-ok-sign"></i></button></a>
															<? }
															if($status=='3'){
															?>
																<a href="<?php echo base_url() . 'admin/drainase_managements/view/' . $row->id_drainase ?>"><button class = "btn btn-warning" data-toggle="tooltip" title="Sudah Dilaksanakan" data-placemen="bottom"><i class = "icon-ok-sign"></i></button></a>
															<? }
															if($status=='4'){
															?>
																<a href="<?php echo base_url() . 'admin/drainase_managements/view/' . $row->id_drainase ?>"><button class = "btn btn-warning" data-toggle="tooltip" title="Sudah Selesai" data-placemen="bottom"><i class = "icon-ok-sign"></i></button></a>
															<? }?>		
																
															<a href="<?php echo base_url() . 'admin/drainase_managements/view/' . $row->id_drainase ?>"><button class = "btn btn-info" data-toggle="tooltip" title="View" data-placemen="bottom"><i class = "icon-eye-open"></i></button></a>
															<a href="<?php echo base_url() . 'admin/drainase_managements/edit/' . $row->id_drainase ?>"><button class = "btn btn-success" title="Edit"><i class = "icon-pencil"></i></button></a>
															<a href="<?php echo base_url() . 'admin/drainase_managements/delete/' . $row->id_drainase ?>" onclick="return confirm('Are you sure want to delete this?');"><button class = "btn btn-danger" title="Delete"><i class = "icon-trash "></i></button></a>
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
                                                    <th>Sumber Data</th>
                                                    <th>Tahun Usulan</th>
                                                    <th>Keterangan</th>
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