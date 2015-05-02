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
									<li><a href="<?php echo base_url() . 'admin/umkm_managements/gotoForm/add'; ?>"><i class="icon-plus"></i> Add Data</a></li>
								</ul>
                                <span class="hidden-sm wht-color">Data UMKM </span>
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
													<th>RT</th>
													<th>RW</th>
													<th>Kelurahan</th>
													<th>Kecamatan</th>
													<th>Kota</th>
													<th>NBS</th>
													<th>Klasifikasi Perusahaan</th>
													<th>Nama Perusahaan</th>
													<th>Alamat Perusahaan</th>
													<th>Kegiatan Utama</th>
													<th>Jenis Usaha</th>
													<th>JK Pengusaha</th>
													<th>Kota Tempat Lahir Pengusaha</th>
													<th>Prov Tempat Lahir Pengusaha</th>
													<th>Bentuk Badan Hukum</th>
													<th>Tahun Mulai Operasi</th>
													<th>Gabung Paguyuban</th>
													<th>Bermitra</th>
													<th>Bentuk Kemitraan</th>
													<th>Pembinaan Pemerintah</th>
													<th>Pemberi Pembinaan</th>
													<th>Eksport</th>
													<th>Persentase Eksport</th>
													<th>Import</th>
													<th>Persentase Import</th>
                                                    <th>Aksi</th>
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
															<td><?php echo $row->nbs ?></td>
															<td><?php echo $row->klasifikasi_perusahaan ?></td>
															<td><?php echo $row->nama_perusahaan ?></td>
															<td><?php echo $row->alamat_perusahaan ?></td>
															<td><?php echo $row->kegiatan_utama ?></td>
															<td><?php echo $row->jenis_usaha ?></td>
															<td><?php echo $row->jk_pengusaha ?></td>
															<td><?php echo $row->kota_tempat_lahir_pengusaha ?></td>
															<td><?php echo $row->prov_tempat_lahir_pengusaha ?></td>
															<td><?php echo $row->bentuk_badan_hukum ?></td>									                                                            
															<td><?php echo $row->tahun_mulai_operasi ?></td>									                                                            
															<td><?php echo $row->gabung_paguyuban ?></td>									                                                            
															<td><?php echo $row->bermitra ?></td>									                                                            
															<td><?php echo $row->bentuk_kemitraan ?></td>									                                                            
															<td><?php echo $row->pembinaan_pemerintah ?></td>									                                                            
															<td><?php echo $row->pemberi_pembinaan ?></td>									                                                            
															<td><?php echo $row->eksport ?></td>                                                             
															<td><?php echo $row->persentase_eksport ?></td>                                                             
															<td><?php echo $row->import ?></td>                                                             
															<td><?php echo $row->persentase_import ?></td> 
															<td>
                                                                <a href="<?php echo base_url() . 'admin/umkm_managements/gotoForm/edit/' . $row->id_umkm ?>"><button class = "btn btn-primary" title="Edit"><i class = "icon-pencil"></i></button></a>
                                                                <a href="<?php echo base_url() . 'admin/umkm_managements/delete/' . $row->id_umkm ?>" onclick="return confirm('Are you sure want to delete this?');"><button class = "btn btn-danger" title="Delete"><i class = "icon-trash "></i></button></a>
                                                            </td>

                                                        </tr>
													<?php
													} //end foreach
												} // end if
												?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
													<th>RT</th>
													<th>RW</th>
													<th>Kelurahan</th>
													<th>Kecamatan</th>
													<th>Kota</th>
													<th>NBS</th>
													<th>Klasifikasi Perusahaan</th>
													<th>Nama Perusahaan</th>
													<th>Alamat Perusahaan</th>
													<th>Kegiatan Utama</th>
													<th>Jenis Usaha</th>
													<th>JK Pengusaha</th>
													<th>Kota Tempat Lahir Pengusaha</th>
													<th>Prov Tempat Lahir Pengusaha</th>
													<th>Bentuk Badan Hukum</th>
													<th>Tahun Mulai Operasi</th>
													<th>Gabung Paguyuban</th>
													<th>Bermitra</th>
													<th>Bentuk Kemitraan</th>
													<th>Pembinaan Pemerintah</th>
													<th>Pemberi Pembinaan</th>
													<th>Eksport</th>
													<th>Persentase Eksport</th>
													<th>Import</th>
													<th>Persentase Import</th>
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