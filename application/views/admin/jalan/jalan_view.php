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
											<?php echo set_value('rt', isset($jalan_list['rt']) ? $jalan_list['rt'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('rw', isset($jalan_list['rw']) ? $jalan_list['rw'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
                                    
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat">Alamat: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('alamat', isset($jalan_list['alamat']) ? $jalan_list['alamat'] : 'Belum Ada'); ?>
										</div>
									</div><!--end form-group-->
                                    
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="panjang">Panjang: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('panjang', isset($jalan_list['panjang']) ? $jalan_list['panjang'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lebar">Lebar: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('lebar', isset($jalan_list['lebar']) ? $jalan_list['lebar'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kedalaman">Kedalaman: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('kedalaman', isset($jalan_list['kedalaman']) ? $jalan_list['kedalaman'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ketersediaan_lahan">Ketersediaan Lahan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('ketersediaan_lahan', isset($jalan_list['ketersediaan_lahan']) ? $jalan_list['ketersediaan_lahan'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_awal">Longitude: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('long_awal', isset($jalan_list['long_awal']) ? $jalan_list['long_awal'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_akhir">Longitude Akhir: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('long_akhir', isset($jalan_list['long_akhir']) ? $jalan_list['long_akhir'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lat_awal">Latitude Awal: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('lat_awal', isset($jalan_list['lat_awal']) ? $jalan_list['lat_awal'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_akhir">Longitude Akhir: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('long_akhir', isset($jalan_list['long_akhir']) ? $jalan_list['long_akhir'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="anggaran">Anggaran: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('anggaran', isset($jalan_list['anggaran']) ? $jalan_list['anggaran'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="sumber_data">Sumber Data: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('sumber_data', isset($jalan_list['sumber_data']) ? $jalan_list['sumber_data'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tahun_usulan">Tahun Usulan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('tahun_usulan', isset($jalan_list['tahun_usulan']) ? $jalan_list['tahun_usulan'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ket">Keterangan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('ket', isset($jalan_list['ket']) ? $jalan_list['ket'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="foto">Foto: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
										<? 
											$foto = isset($jalan_list['foto']) ? $jalan_list['foto'] : 'NULL';
											if($foto === NULL){
												$foto = 'noimage.jpg';
											}else{												
												$foto = $foto;
											}
											
											
											$dokumen = isset($jalan_list['dokumen']) ? $jalan_list['dokumen'] : 'NULL';
											if($dokumen === NULL){
												$dokumen = 'noimage.jpg';
											}else{												
												$dokumen = $dokumen;
											}
											
										?>
												<figure>
													<img src="<?php echo base_url(); ?>assets/upload/foto/<?php echo $foto ?>"  alt="img03">
													<a class="fancybox" rel="group" href="<?php echo base_url(); ?>assets/upload/foto/<?php echo $foto ?>"><button type="button" class="btn btn-shadow btn-info">Lihat</button></a>
												</figure
										</div>
									</div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="dokumen">Dokumen: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<a class="fancybox" rel="group" href="<?php echo base_url(); ?>assets/upload/dokumen/<?php echo $dokumen ?>"><button type="button" class="btn btn-shadow btn-primary"><?php echo set_value('dokumen', isset($jalan_list['dokumen']) ? $jalan_list['dokumen'] : 'Belum Ada'); ?></button></a>
                                            
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
											<button type="button" class="btn btn-info " onclick="history.go(-1);"><i class=" icon-chevron-sign-left"></i> Kembali</button>
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