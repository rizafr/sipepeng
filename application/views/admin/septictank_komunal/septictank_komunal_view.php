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
											<?php echo set_value('rt', isset($septictank_komunal_list['rt']) ? $septictank_komunal_list['rt'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('rw', isset($septictank_komunal_list['rw']) ? $septictank_komunal_list['rw'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
                                    
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat">Alamat: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('alamat', isset($septictank_komunal_list['alamat']) ? $septictank_komunal_list['alamat'] : 'Belum Ada'); ?>
										</div>
									</div><!--end form-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ketersediaan_lahan">Ketersediaan Lahan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('ketersediaan_lahan', isset($septictank_komunal_list['ketersediaan_lahan']) ? $septictank_komunal_list['ketersediaan_lahan'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_awal">Longitude: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('long', isset($septictank_komunal_list['long']) ? $septictank_komunal_list['long'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lat_awal">Latitude: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('lat', isset($septictank_komunal_list['lat']) ? $septictank_komunal_list['lat'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="anggaran">Anggaran: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('anggaran', isset($septictank_komunal_list['anggaran']) ? $septictank_komunal_list['anggaran'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="sumber_data">Sumber Data: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('sumber_data', isset($septictank_komunal_list['sumber_data']) ? $septictank_komunal_list['sumber_data'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tahun_usulan">Tahun Usulan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('tahun_usulan', isset($septictank_komunal_list['tahun_usulan']) ? $septictank_komunal_list['tahun_usulan'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->

									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tahun_usulan">Persetujuan Warga: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('tahun_usulan', isset($septictank_komunal_list['persetujuan_warga']) ? $septictank_komunal_list['persetujuan_warga'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
								
									 <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="jml_pemakai">Jumlah Pemakai: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<?php echo set_value('jml_pemakai', isset($septictank_komunal_list['jml_pemakai']) ? $septictank_komunal_list['jml_pemakai'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ket">Keterangan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('ket', isset($septictank_komunal_list['ket']) ? $septictank_komunal_list['ket'] : 'Belum Ada'); ?>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="foto">Foto: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
										<? 
											$foto = isset($septictank_komunal_list['foto']) ? $septictank_komunal_list['foto'] : 'NULL';
											if($foto === NULL){
												$foto = 'noimage.jpg';
											}else{												
												$foto = $foto;
											}
											
											
											$dokumen = isset($septictank_komunal_list['dokumen']) ? $septictank_komunal_list['dokumen'] : 'NULL';
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
											<a class="fancybox" rel="group" href="<?php echo base_url(); ?>assets/upload/dokumen/<?php echo $dokumen ?>"><button type="button" class="btn btn-shadow btn-primary"><?php echo set_value('dokumen', isset($septictank_komunal_list['dokumen']) ? $septictank_komunal_list['dokumen'] : 'Belum Ada'); ?></button></a>
                                            
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