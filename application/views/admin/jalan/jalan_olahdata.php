<?php $this->load->view('admin/templates/header'); ?>
<!--header google map start-->
<?php 
	$mapjs = isset($map['js']) ? $map['js'] : '';											
	echo $mapjs; 
	
	//cek status tambah atau edit
	if(strtolower($aksi) == 'add') {
		$aksi = 'add';
		$namaform="Tambah";
	}
    else if(strtolower($aksi) == 'edit') {
		$aksi = 'edit';
		$namaform="Ubah";
	}
?>
<!--header  google map end-->
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
                                <span class="hidden-sm wht-color"><? echo $namaform." " .$judulForm ?></span>
							</header>
                            <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/jalan_managements/process'); ?>" class="form-horizontal" id="validation-events" role="form" enctype="multipart/form-data">
									<input type="hidden" name="aksi" value="<? echo $aksi ?>" />
									<input type="hidden" name="id_jalan" value="<?php echo set_value('id_jalan', isset($jalan_list['id_jalan']) ? $jalan_list['id_jalan'] : ''); ?>" />
									<span class="help-inline"><?php echo form_error('id_jalan'); ?></span>
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rt">RT: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" value="<?php echo set_value('rt', isset($jalan_list['rt']) ? $jalan_list['rt'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('rt'); ?></span>
										</div>
									</div><!--end control-group-->
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rw" name="rw" placeholder="RW" value="<?php echo set_value('rw', isset($jalan_list['rw']) ? $jalan_list['rw'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('rw'); ?></span>
										</div>
									</div><!--end control-group-->
                                    
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat">Alamat: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="alamat" name="alamat" data-validation="length" data-validation-length="min10"><?php echo set_value('alamat', isset($jalan_list['alamat']) ? $jalan_list['alamat'] : ''); ?></textarea>                                           
                                            <span class="help-inline"><?php echo form_error('alamat'); ?></span>
										</div>
									</div><!--end form-group-->
                                    
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="panjang">Panjang: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="panjang" name="panjang" placeholder="Panjang"  data-validation="number" value="<?php echo set_value('panjang', isset($jalan_list['panjang']) ? $jalan_list['panjang'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('panjang'); ?></span>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lebar">Lebar: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="lebar" name="lebar"  onchange="javascript:autoKet();" placeholder="Lebar" value="<?php echo set_value('lebar', isset($jalan_list['lebar']) ? $jalan_list['lebar'] : ''); ?>" data-validation="number" data-validation-allowing="range[0;100],float" data-validation-help="Silakan masukan dalam satuan meter">
                                            <span class="help-inline"><?php echo form_error('lebar'); ?></span>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kategori_jalan">Kategori Jalan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="kategori_jalan" name="kategori_jalan"  placeholder="Kategori Jalan" value="<?php echo set_value('kategori_jalan', isset($jalan_list['kategori_jalan']) ? $jalan_list['kategori_jalan'] : ''); ?>" readonly>
                                            <p class="help-block"><?php echo form_error('kategori_jalan'); ?></p>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ketersediaan_lahan">Ketersediaan Lahan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="ketersediaan_lahan" name="ketersediaan_lahan" data-validation="number" placeholder="Kedalaman" value=" <?php echo set_value('ketersediaan_lahan', isset($jalan_list['ketersediaan_lahan']) ? $jalan_list['ketersediaan_lahan'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('ketersediaan_lahan'); ?></span>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_awal">Peta: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php 
												$map = isset($map['html']) ? $map['html'] : '';											
												echo $map; 
											?>
										</div>
									</div><!--end control-group--> 
									
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_awal">Longitude Awal: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="long_awal" name="long_awal" placeholder="Longitude Awal" value="<?php echo set_value('long_awal', isset($jalan_list['long_awal']) ? $jalan_list['long_awal'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('long_awal'); ?></span>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_akhir">Longitude Akhir: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="long_akhir" name="long_akhir" placeholder="Longitude Akhir" value="<?php echo set_value('long_akhir', isset($jalan_list['long_akhir']) ? $jalan_list['long_akhir'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('long_akhir'); ?></span>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lat_awal">Latitude Awal: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="lat_awal" name="lat_awal" placeholder="Latitude Awal" value="<?php echo set_value('lat_awal', isset($jalan_list['lat_awal']) ? $jalan_list['lat_awal'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('lat_awal'); ?></span>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_akhir">Longitude Akhir: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="long_akhir" name="long_akhir" placeholder="Longitude Akhir" value="<?php echo set_value('long_akhir', isset($jalan_list['long_akhir']) ? $jalan_list['long_akhir'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('long_akhir'); ?></span>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="anggaran">Anggaran: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">                                               	  
                                            <input type="text" class="form-control" id="anggaran" name="anggaran" placeholder="Silakan isi anggaran" value="<?php echo set_value('anggaran', isset($jalan_list['anggaran']) ? $jalan_list['anggaran'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('anggaran'); ?></span>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="sumber_data">Sumber Data: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="sumber_data" name="sumber_data" placeholder="Silakan isi Sumber Data" value="<?php echo set_value('sumber_data', isset($jalan_list['sumber_data']) ? $jalan_list['sumber_data'] : ''); ?>" data-validation-help="Sumber data jalan berasal darimana">
                                            <span class="help-inline"><?php echo form_error('sumber_data'); ?></span>
										</div>
									</div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tahun_usulan">Tahun Usulan: <span class="text-error">*</span></label>
                                        <div class="col-md-3 col-xs-11">
                                            <div data-date-minviewmode="years" data-date-viewmode="years" data-date-format=" yyyy" data-date="102/2012"  class="input-append date dpYears">
												<input type="text" class="form-control" id="tahun_usulan" name="tahun_usulan" placeholder="Silakan isi tahun Usulan" value="<?php echo set_value('tahun_usulan', isset($jalan_list['tahun_usulan']) ? $jalan_list['tahun_usulan'] : ''); ?>" readonly>
												<span class="help-inline"><?php echo form_error('tahun_usulan'); ?></span>
												<span class="input-group-btn add-on">
													<button class="btn btn-danger" type="button"><i class="icon-calendar"></i></button>
												</span>
											</div>
										</div>
									</div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ket">Keterangan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<textarea class="form-control" id="ket" name="ket"> <?php echo set_value('ket', isset($jalan_list['ket']) ? $jalan_list['ket'] : ''); ?></textarea>                                           
                                            <span class="help-inline"><?php echo form_error('ket'); ?></span>
										</div>
									</div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="foto">Foto: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto" value="<?php echo set_value('foto'); ?>" data-validation="mime size" data-validation-allowing="jpg, png, gif" 
											data-validation-max-size="512kb">
                                            <span class="help-inline"><?php echo form_error('foto'); ?></span>
										</div>
									</div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="dokumen">Dokumen: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="file" class="form-control" id="dokumen" name="dokumen" placeholder="Dokumen" value="<?php echo set_value('dokumen'); ?>">
                                            <span class="help-inline"><?php echo form_error('dokumen'); ?></span>
										</div>
									</div><!--end control-group-->
									
									
									
                                    <div class="form-group">
                                        <div class="col-lg-10"> 
                                            <button type="submit" class="btn btn-primary"><?echo $namaform ?></button>
                                            <button type="reset" class="btn btn-primary">Reset</button>
										</div>
									</div><!--end control-group-->
									
								</form><!--end form-->
							</div>
						</section>
					</div>
				</div>
                <!-- page end-->
			</section>
		</section>
        <!--main content end-->
		<?php $this->load->view('admin/templates/footer'); ?>
		
		<!--js only this page-->	   
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/fuelux/js/spinner.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/bootstrap-daterangepicker/moment.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/jquery-multi-select/js/jquery.multi-select.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/advanced-form-components.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
		<script>
			function autoKet(){
				lebar = document.getElementById('lebar').value;
				if(lebar>=2){
					document.getElementById('kategori_jalan').value= 'Jalan Setapak';
				}
				if(lebar>3.5){
					document.getElementById('kategori_jalan').value= 'Jalan Lingkungan';
				}
				if(lebar>=4.5){
					document.getElementById('kategori_jalan').value= 'Jalan Lebar';
				}
			}
			
		</script>		