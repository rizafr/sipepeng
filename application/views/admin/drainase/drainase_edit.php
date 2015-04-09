<?php $this->load->view('admin/templates/header'); ?>
<link href="<?php echo base_url(); ?>assets/admin/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/admin/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/admin/css/table-responsive.css" rel="stylesheet" />
<?php echo $map['js']; ?>

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
                                <span class="hidden-sm wht-color"><? echo $judulForm ?></span>
							</header>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">
									
                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;1. Data Awal</legend>
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rt">RT: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<input type="text" name="rt" value="<?php echo set_value('rt', isset($drainase_list['rt']) ? $drainase_list['rt'] : ''); ?>"/>
										</div>
									</div><!--end control-group-->
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<input type="text" name="rw" value="<?php echo set_value('rw', isset($drainase_list['rw']) ? $drainase_list['rw'] : ''); ?>"/>
										</div>
									</div><!--end control-group-->
                                    
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat">Alamat: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea name="alamat" ><?php echo set_value('alamat', isset($drainase_list['alamat']) ? $drainase_list['alamat'] : ''); ?></textarea>
										</div>
									</div><!--end form-group-->
                                    
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="panjang">Panjang: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<input type="text" name="panjang" value="<?php echo set_value('panjang', isset($drainase_list['panjang']) ? $drainase_list['panjang'] : ''); ?>"/>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lebar">Lebar: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<input type="text" name="lebar" value="<?php echo set_value('lebar', isset($drainase_list['lebar']) ? $drainase_list['lebar'] : ''); ?>"/>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kedalaman">Kedalaman: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('kedalaman', isset($drainase_list['kedalaman']) ? $drainase_list['kedalaman'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ketersediaan_lahan">Ketersediaan Lahan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('ketersediaan_lahan', isset($drainase_list['ketersediaan_lahan']) ? $drainase_list['ketersediaan_lahan'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_awal">Longitude: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('long_awal', isset($drainase_list['long_awal']) ? $drainase_list['long_awal'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_akhir">Longitude Akhir: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('long_akhir', isset($drainase_list['long_akhir']) ? $drainase_list['long_akhir'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lat_awal">Latitude Awal: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('lat_awal', isset($drainase_list['lat_awal']) ? $drainase_list['lat_awal'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_akhir">Longitude Akhir: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('long_akhir', isset($drainase_list['long_akhir']) ? $drainase_list['long_akhir'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="anggaran">Anggaran: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('anggaran', isset($drainase_list['anggaran']) ? $drainase_list['anggaran'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="sumber_data">Sumber Data: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('sumber_data', isset($drainase_list['sumber_data']) ? $drainase_list['sumber_data'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tahun_usulan">Tahun Usulan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('tahun_usulan', isset($drainase_list['tahun_usulan']) ? $drainase_list['tahun_usulan'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ket">Keterangan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('ket', isset($drainase_list['ket']) ? $drainase_list['ket'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="foto">Foto: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
												<figure>
													<img src="<?php echo base_url(); ?>/assets/upload/foto/<?php echo set_value('foto', isset($drainase_list['foto']) ? $drainase_list['foto'] : 'noimage.jpg'); ?>"  alt="img03">
													<figcaption>
														<button  class="btn btn-success dropdown-toggle btn-xs" type="button"><a class="fancybox" rel="group" href="<?php echo base_url(); ?>/assets/upload/foto/<?php echo set_value('foto', isset($drainase_list['foto']) ? $drainase_list['foto'] : 'noimage.jpg'); ?>">Lihat</a> 
													</figcaption>
												</figure
										</div>
									</div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="dokumen">Dokumen: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<a class="fancybox" rel="group" href="<?php echo base_url(); ?>/assets/upload/foto/<?php echo set_value('foto', isset($drainase_list['foto']) ? $drainase_list['foto'] : 'noimage.jpg'); ?>"><button type="button" class="btn btn-shadow btn-primary"><?php echo set_value('dokumen', isset($drainase_list['dokumen']) ? $drainase_list['dokumen'] : 'Belum Ada'); ?></button></a>
                                            
										</div>
									</div><!--end control-group-->
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="dokumen">Peta: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo $map['html']; ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <div class="col-lg-10">                                           
											<button type="button" class="btn btn-Info " onclick="history.go(-1);"><i class=" icon-chevron-sign-left"></i> Kembali</button>
										</div>
									</div><!--end control-group-->
									
								</form>
							</div>
						</section>
					</div>
				</div>
                <!-- page end-->
			</section>
		</section>
        <!--main content end-->
	<?php $this->load->view('admin/templates/footer'); ?>	