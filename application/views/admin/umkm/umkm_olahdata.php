<?php $this->load->view('admin/templates/header'); ?>
<!--header google map start-->
<?php
$mapjs = isset($map['js']) ? $map['js'] : '';
echo $mapjs;

//cek status tambah atau edit
if (strtolower($aksi) == 'add') {
    $aksi = 'add';
    $namaform = "Tambah";
} else if (strtolower($aksi) == 'edit') {
    $aksi = 'edit';
    $namaform = "Ubah";
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
                                <span class="hidden-sm wht-color"><? echo $namaform . " " . $judulForm ?></span>
                            </header>
                            <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/umkm_managements/process'); ?>" class="form-horizontal" id="validation-events" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="aksi" value="<? echo $aksi ?>" />
                                    <input type="hidden" name="id_umkm" value="<?php echo set_value('id_umkm', isset($umkm_list['id_umkm']) ? $umkm_list['id_umkm'] : ''); ?>" />
                                    <span class="help-inline"><?php echo form_error('id_umkm'); ?></span>
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rt">RT: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" value="<?php echo set_value('rt', isset($umkm_list['rt']) ? $umkm_list['rt'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('rt'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rw" name="rw" placeholder="RW" value="<?php echo set_value('rw', isset($umkm_list['rw']) ? $umkm_list['rw'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('rw'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kelurahan">Kelurahan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" value="<?php echo set_value('kelurahan', isset($umkm_list['kelurahan']) ? $umkm_list['kelurahan'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('kelurahan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kecamatan">Kecamatan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="<?php echo set_value('kecamatan', isset($umkm_list['kecamatan']) ? $umkm_list['kecamatan'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('kecamatan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kota">Kota: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" value="<?php echo set_value('kota', isset($umkm_list['kota']) ? $umkm_list['kota'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('kota'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="nbs">NBS: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="nbs" name="nbs" placeholder="NBS" value="<?php echo set_value('nbs', isset($umkm_list['nbs']) ? $umkm_list['nbs'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('nbs'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="klasifikasi_perusahaan">Klasifikasi Perusahaan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="klasifikasi_perusahaan" name="klasifikasi_perusahaan" placeholder="Klasifikasi Perusahaan" value="<?php echo set_value('klasifikasi_perusahaan', isset($umkm_list['klasifikasi_perusahaan']) ? $umkm_list['klasifikasi_perusahaan'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('klasifikasi_perusahaan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="nama_perusahaan">Nama Perusahaan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan" value="<?php echo set_value('nama_perusahaan', isset($umkm_list['nama_perusahaan']) ? $umkm_list['nama_perusahaan'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('nama_perusahaan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat_perusahaan">Alamat Perusahaan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" data-validation="length" data-validation-length="min10"><?php echo set_value('alamat_perusahaan', isset($umkm_list['alamat_perusahaan']) ? $umkm_list['alamat_perusahaan'] : ''); ?></textarea>                                           
                                            <span class="help-inline"><?php echo form_error('alamat_perusahaan'); ?></span>
                                        </div>
                                    </div><!--end form-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kegiatan_utama">Kegiatan Utama: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="kegiatan_utama" name="kegiatan_utama" placeholder="Kegiatan Utama" value="<?php echo set_value('kegiatan_utama', isset($umkm_list['kegiatan_utama']) ? $umkm_list['kegiatan_utama'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('kegiatan_utama'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="jenis_usaha">Jenis Usaha: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" placeholder="Jenis Usaha" value="<?php echo set_value('jenis_usaha', isset($umkm_list['jenis_usaha']) ? $umkm_list['jenis_usaha'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('jenis_usaha'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="jk_pengusaha">JK Pengusaha: <span class="text-error">*</span></label>
                                        <div class="col-md-3 col-xs-11">											
											 <?php 
												 $options = array(
													  'LAKI-LAKI'  => 'LAKI-LAKI',
													  'PEREMPUAN'    => 'PEREMPUAN'
													);
												 
												 echo form_dropdown('jk_pengusaha', $options, set_value('jk_pengusaha', isset($umkm_list['jk_pengusaha']) ? $umkm_list['jk_pengusaha'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('jk_pengusaha'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kota_tempat_lahir_pengusaha">Kota Tempat Lahir Pengusaha: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="kota_tempat_lahir_pengusaha" name="kota_tempat_lahir_pengusaha" placeholder="Kota Tempat Lahir Pengusaha" value="<?php echo set_value('kota_tempat_lahir_pengusaha', isset($umkm_list['kota_tempat_lahir_pengusaha']) ? $umkm_list['kota_tempat_lahir_pengusaha'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('kota_tempat_lahir_pengusaha'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="prov_tempat_lahir_pengusaha">Prov Tempat Lahir Pengusaha: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="prov_tempat_lahir_pengusaha" name="prov_tempat_lahir_pengusaha" placeholder="Prov Tempat Lahir Pengusaha" value="<?php echo set_value('prov_tempat_lahir_pengusaha', isset($umkm_list['prov_tempat_lahir_pengusaha']) ? $umkm_list['prov_tempat_lahir_pengusaha'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('prov_tempat_lahir_pengusaha'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="bentuk_badan_hukum">Bentuk Badan Hukum: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="bentuk_badan_hukum" name="bentuk_badan_hukum" placeholder="Bentuk Badan Hukum" value="<?php echo set_value('bentuk_badan_hukum', isset($umkm_list['bentuk_badan_hukum']) ? $umkm_list['bentuk_badan_hukum'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('bentuk_badan_hukum'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tahun_mulai_operasi">Tahun Mulai Operasi: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="tahun_mulai_operasi" name="tahun_mulai_operasi" placeholder="Tahun Mulai Operasi" value="<?php echo set_value('tahun_mulai_operasi', isset($umkm_list['tahun_mulai_operasi']) ? $umkm_list['tahun_mulai_operasi'] : ''); ?>" data-validation="number">
                                            <span class="help-inline"><?php echo form_error('tahun_mulai_operasi'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="gabung_paguyuban">Gabung Paguyuban: <span class="text-error">*</span></label>
                                        <div class="col-md-3 col-xs-11">											
											 <?php 
												 $options = array(
													  'YA'  => 'YA',
													  'TIDAK'    => 'TIDAK'
													);
												 
												 echo form_dropdown('gabung_paguyuban', $options, set_value('gabung_paguyuban', isset($umkm_list['gabung_paguyuban']) ? $umkm_list['gabung_paguyuban'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('gabung_paguyuban'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="bermitra">Bermitra: <span class="text-error">*</span></label>
                                        <div class="col-md-3 col-xs-11">											
											 <?php 
												 $options = array(
													  'YA'  => 'YA',
													  'TIDAK'    => 'TIDAK'
													);
												 
												 echo form_dropdown('bermitra', $options, set_value('bermitra', isset($umkm_list['bermitra']) ? $umkm_list['bermitra'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('bermitra'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="bentuk_kemitraan">Bentuk Kemitraan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="bentuk_kemitraan" name="bentuk_kemitraan" placeholder="Bentuk Kemitraan" value="<?php echo set_value('bentuk_kemitraan', isset($umkm_list['bentuk_kemitraan']) ? $umkm_list['bentuk_kemitraan'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('bentuk_kemitraan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="pembinaan_pemerintah">Pembinaan Pemerintah: <span class="text-error">*</span></label>
                                        <div class="col-md-3 col-xs-11">											
											 <?php 
												 $options = array(
													  'YA'  => 'YA',
													  'TIDAK'    => 'TIDAK'
													);
												 
												 echo form_dropdown('pembinaan_pemerintah', $options, set_value('pembinaan_pemerintah', isset($umkm_list['pembinaan_pemerintah']) ? $umkm_list['pembinaan_pemerintah'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('pembinaan_pemerintah'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="pemberi_pembinaan">Pemberi Pembinaan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="pemberi_pembinaan" name="pemberi_pembinaan" placeholder="Pemberi Pembinaan" value="<?php echo set_value('pemberi_pembinaan', isset($umkm_list['pemberi_pembinaan']) ? $umkm_list['pemberi_pembinaan'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('pemberi_pembinaan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="eksport">Eksport: <span class="text-error">*</span></label>
                                        <div class="col-md-3 col-xs-11">											
											 <?php 
												 $options = array(
													  'YA'  => 'YA',
													  'TIDAK'    => 'TIDAK'
													);
												 
												 echo form_dropdown('eksport', $options, set_value('eksport', isset($umkm_list['eksport']) ? $umkm_list['eksport'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('eksport'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="persentase_eksport">Persentase Eksport: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="persentase_eksport" name="persentase_eksport" placeholder="Persentase Eksport" value="<?php echo set_value('persentase_eksport', isset($umkm_list['persentase_eksport']) ? $umkm_list['persentase_eksport'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('persentase_eksport'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="import">Import: <span class="text-error">*</span></label>
                                        <div class="col-md-3 col-xs-11">											
											 <?php 
												 $options = array(
													  'YA'  => 'YA',
													  'TIDAK'    => 'TIDAK'
													);
												 
												 echo form_dropdown('import', $options, set_value('import', isset($umkm_list['import']) ? $umkm_list['import'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('import'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="persentase_import">Persentase Import: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="persentase_import" name="persentase_import" placeholder="Persentase Import" value="<?php echo set_value('persentase_import', isset($umkm_list['persentase_import']) ? $umkm_list['persentase_import'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('persentase_import'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
                                    
                                    <div class="form-group">
                                        <div class="col-lg-10"> 
                                            <button type="button" class="btn btn-info " onclick="history.go(-1);"><i class=" icon-chevron-sign-left"></i> Batal</button>
                                            <button type="submit" class="btn btn-primary"><? echo $namaform ?></button>
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

        <script type="text/javascript">
        //FUNGSI MENANGKAP Latitude DAN lONGITUDE DAN MENYIMPANNYA KE DALAM VARIABEL ID DI FORM
        function getLokasi(newLat, newLng)
        {
            document.getElementById('lat_awal').value = newLat;
            document.getElementById('long_awal').value = newLng;
        }

        function getLokasiAkhir(newLat, newLng)
        {
            document.getElementById('lat_akhir').value = newLat;
            document.getElementById('long_akhir').value = newLng;
        }
        </script>

