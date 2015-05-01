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
                                <?
								   $judul = array("1" => "Perencanaan", "3" => "Pelaksanaan", "4" => "Hasil");
								   $judul = $judul[$status];
								   $rw = isset($rw) ? $rw : '';
                                ?>
                                <span class="hidden-sm wht-color">Laporan <? echo $judul ." ".$kegiatan ." RW ".$rw; ?> </span>
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
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;

                                                $jum = count(@$hasil);
                                                if ($jum > 0) {
                                                    foreach ($hasil as $row) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
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
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Rt</th>
                                                    <th>Rw</th>
													 <th>Panjang</th>
                                                    <th>Lebar</th>
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
								<div class="form-group">
                                        <div class="col-lg-10">    
											
										<?php $rw = (empty($rw)) ? '0' : $rw; ?>
											<button type="button" class="btn btn-info " onclick="history.go(-1);"><i class=" icon-chevron-sign-left"></i> Batal</button>
                                            <a href="<?php echo base_url('admin/laporan_managements/cetak'); echo "/".$rw."/".$kegiatan."/".$status ?>" ><button type=submit class="btn btn-warning"><i class=" icon-print"></i> Cetak</button></a>
										  </div>
                                    </div><!--end control-group-->
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
<?php $this->load->view('admin/templates/footer'); ?>		