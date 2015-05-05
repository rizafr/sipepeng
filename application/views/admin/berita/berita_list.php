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
									<li><a href="<?php echo base_url() . 'admin/berita_managements/gotoForm/add'; ?>"><i class="icon-plus"></i> Add Data</a></li>
								</ul>
                                <span class="hidden-sm wht-color">Data Berita</span>
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
													<th>Judul</th>
													<th>Berita</th>
													<th>Tanggal Berita</th>
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
                                                            <td><?php echo $row->judul_berita ?></td> 
															<td><?php echo $row->isi_berita ?></td>
															<td><?php echo $row->tgl_berita ?></td>
															<td>
                                                                <a href="<?php echo base_url() . 'admin/berita_managements/gotoForm/edit/' . $row->id_berita ?>"><button class = "btn btn-primary" title="Edit"><i class = "icon-pencil"></i></button></a>
                                                                <a href="<?php echo base_url() . 'admin/berita_managements/delete/' . $row->id_berita ?>" onclick="return confirm('Are you sure want to delete this?');"><button class = "btn btn-danger" title="Delete"><i class = "icon-trash "></i></button></a>
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
													<th>Judul</th>
													<th>Berita</th>
													<th>Tanggal Berita</th>
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