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
								<span class="hidden-sm wht-color">Laporan Keseluruhan </span>
							</header>
                            <div class="panel-body">
                                <div class="adv-table">                                    
                                    <section id="unseen">
                                        <table  class="display table table-bordered table-striped table-condensed" id="example">
                                            <thead>
                                                <tr>
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
											</thead>
                                            <tbody>
                                                <?php
													$no = 1;
													//artesis
													$jum = count(@$artesis_awal);
													if ($jum > 0) {
														foreach ($artesis_awal as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Artesis Perencanaan</td>
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
													//artesis_dilaksanakan
													$jum = count(@$artesis_dilaksanakan);
													if ($jum > 0) {
														foreach ($artesis_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Artesis Terealisasi</td>
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
													//artesis_tidak_dilaksanakan
													$jum = count(@$artesis_tidak_dilaksanakan);
													if ($jum > 0) {
														foreach ($artesis_tidak_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Artesis Tidak Dilaksanakan</td>
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
													//drainase_awal
													$jum = count(@$drainase_awal);
													if ($jum > 0) {
														foreach ($drainase_awal as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Drainase Perencanaan</td>
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
													//drainase_dilaksanakan
													$jum = count(@$drainase_dilaksanakan);
													if ($jum > 0) {
														foreach ($drainase_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Drainase Terealisasi</td>
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
													//drainase_tidak_dilaksanakan
													$jum = count(@$drainase_tidak_dilaksanakan);
													if ($jum > 0) {
														foreach ($drainase_tidak_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Drainase Tidak Dilaksanakan</td>
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
													//jalan_awal
													$jum = count(@$jalan_awal);
													if ($jum > 0) {
														foreach ($jalan_awal as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Jalan Perencanaan</td>
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
													//jalan_dilaksanakan
													$jum = count(@$jalan_dilaksanakan);
													if ($jum > 0) {
														foreach ($jalan_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Jalan Terealisasi</td>
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
													$jum = count(@$jalan_tidak_dilaksanakan);
													if ($jum > 0) {
														foreach ($jalan_tidak_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>jalan Tidak Dilaksanakan</td>
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
													$jum = count(@$mck_awal);
													if ($jum > 0) {
														foreach ($mck_awal as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>MCK Perencanaan</td>
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
													$jum = count(@$mck_dilaksanakan);
													if ($jum > 0) {
														foreach ($mck_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>MCK Terealisasi</td>
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
													$jum = count(@$mck_tidak_dilaksanakan);
													if ($jum > 0) {
														foreach ($mck_tidak_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>MCK Tidak Dilaksanakan</td>
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
													$jum = count(@$septictank_awal);
													if ($jum > 0) {
														foreach ($septictank_awal as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Septictank Perencanaan</td>
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
													$jum = count(@$septictank_dilaksanakan);
													if ($jum > 0) {
														foreach ($septictank_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Septictank Terealisasi</td>
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
													$jum = count(@$septictank_tidak_dilaksanakan);
													if ($jum > 0) {
														foreach ($septictank_tidak_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Septictank Tidak Dilaksanakan</td>
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
													$jum = count(@$septictank_komunal_awal);
													if ($jum > 0) {
														foreach ($septictank_komunal_awal as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Septictank Komunal Perencanaan</td>
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
													$jum = count(@$septictank_komunal_dilaksanakan);
													if ($jum > 0) {
														foreach ($septictank_komunal_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Septictank Komunal Terealisasi</td>
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
													$jum = count(@$septictank_komunal_tidak_dilaksanakan);
													if ($jum > 0) {
														foreach ($septictank_komunal_tidak_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Septictank Komunal Tidak Dilaksanakan</td>
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
													$jum = count(@$sumur_dangkal_awal);
													if ($jum > 0) {
														foreach ($sumur_dangkal_awal as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Sumur Dangkal Perencanaan</td>
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
													$jum = count(@$sumur_dangkal_dilaksanakan);
													if ($jum > 0) {
														foreach ($sumur_dangkal_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Sumur Dangkal Terealisasi</td>
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
													$jum = count(@$sumur_dangkal_tidak_dilaksanakan);
													if ($jum > 0) {
														foreach ($sumur_dangkal_tidak_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Sumur Dangkal Tidak Dilaksanakan</td>
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
													$jum = count(@$sumur_resapan_awal);
													if ($jum > 0) {
														foreach ($sumur_resapan_awal as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Sumur Resapan Perencanaan</td>
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
													$jum = count(@$sumur_resapan_dilaksanakan);
													if ($jum > 0) {
														foreach ($sumur_resapan_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Sumur Resapan Terealisasi</td>
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
													$jum = count(@$sumur_resapan_tidak_dilaksanakan);
													if ($jum > 0) {
														foreach ($sumur_resapan_tidak_dilaksanakan as $row) {
														?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td>Sumur Resapan Tidak Dilaksanakan</td>
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
											</tfoot>
										</table>
									</section>
								</div>
								<div class="form-group">
									<div class="col-lg-10">    
										<?php 
											$rw = (empty($rw)) ? '0' : $rw;
											$kegiatan = (empty($kegiatan)) ? '0' : $kegiatan;
										?>
										<button type="button" class="btn btn-info " onclick="history.go(-1);"><i class=" icon-chevron-sign-left"></i> Batal</button>
										<a href="<?php echo base_url('admin/laporan_managements/cetak_keseluruhan')?>" ><button type=submit class="btn btn-warning"><i class=" icon-print"></i> Cetak</button></a>
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