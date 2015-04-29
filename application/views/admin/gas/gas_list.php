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
									<li><a href="<?php echo base_url() . 'admin/gas_managements/gotoForm/add'; ?>"><i class="icon-plus"></i> Add Data</a></li>
								</ul>
                                <span class="hidden-sm wht-color">Data Pangkalan Gas LPG </span>
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
													<th>Nama Pemilik</th>
													<th>Rt</th>
													<th>Rw</th>
													<th>Alamat</th>
													<th>Kelurahan</th>
													<th>No Telepon</th>
													<th>SP Agen</th>
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
                                                            <td><?php echo $row->nama_pemilik ?></td> 
															<td><?php echo $row->rt ?></td>
															<td><?php echo $row->rw ?></td>
															<td><?php echo $row->alamat ?></td>
															<td><?php echo $row->kelurahan ?></td>									                                                            
															<td><?php echo $row->telp ?></td>                                                             
															<td><?php echo $row->sp_agen?></td>
															<td>
                                                                <a href="<?php echo base_url() . 'admin/gas_managements/gotoForm/edit/' . $row->id_gas ?>"><button class = "btn btn-primary" title="Edit"><i class = "icon-pencil"></i></button></a>
                                                                <a href="<?php echo base_url() . 'admin/gas_managements/delete/' . $row->id_gas ?>" onclick="return confirm('Are you sure want to delete this?');"><button class = "btn btn-danger" title="Delete"><i class = "icon-trash "></i></button></a>
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
                                                    <th>Rt</th>
                                                    <th>Rw</th>
                                                    <th>Alamat</th>
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