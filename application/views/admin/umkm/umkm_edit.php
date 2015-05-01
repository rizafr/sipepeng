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

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;UMKM</legend>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rt">RT: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="rt" value="<?php echo set_value('rt', isset($umkm_list['rt']) ? $umkm_list['rt'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="rw" value="<?php echo set_value('rw', isset($umkm_list['rw']) ? $umkm_list['rw'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->                                    

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kelurahan">Kelurahan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="kelurahan" value="<?php echo set_value('kelurahan', isset($umkm_list['kelurahan']) ? $umkm_list['kelurahan'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kecamatan">Kecamatan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="kecamatan" value="<?php echo set_value('kecamatan', isset($umkm_list['kecamatan']) ? $umkm_list['kecamatan'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kota">Kota: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="kota" value="<?php echo set_value('kota', isset($umkm_list['kota']) ? $umkm_list['kota'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="nbs">NBS: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="nbs" value="<?php echo set_value('nbs', isset($umkm_list['nbs']) ? $umkm_list['nbs'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="klasifikasi_perusahaan">Klasifikasi Perusahaan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="klasifikasi_perusahaan" value="<?php echo set_value('klasifikasi_perusahaan', isset($umkm_list['klasifikasi_perusahaan']) ? $umkm_list['klasifikasi_perusahaan'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="nama_perusahaan">Nama Perusahaan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="nama_perusahaan" value="<?php echo set_value('nama_perusahaan', isset($umkm_list['nama_perusahaan']) ? $umkm_list['nama_perusahaan'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat_perusahaan">Alamat Perusahaan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea name="alamat_perusahaan" ><?php echo set_value('alamat_perusahaan', isset($umkm_list['alamat_perusahaan']) ? $umkm_list['alamat_perusahaan'] : ''); ?></textarea>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kegiatan_utama">Kegiatan Utama: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="kegiatan_utama" value="<?php echo set_value('kegiatan_utama', isset($umkm_list['kegiatan_utama']) ? $umkm_list['kegiatan_utama'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="jenis_usaha">Jenis Usaha: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                             <input type="text" name="jenis_usaha" value="<?php echo set_value('jenis_usaha', isset($umkm_list['jenis_usaha']) ? $umkm_list['jenis_usaha'] : ''); ?>"/>
                                        </div>
                                    </div><!--end form-group-->
									
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
                                             <input type="text" name="kota_tempat_lahir_pengusaha" value="<?php echo set_value('kota_tempat_lahir_pengusaha', isset($umkm_list['kota_tempat_lahir_pengusaha']) ? $umkm_list['kota_tempat_lahir_pengusaha'] : ''); ?>"/>
                                        </div>
                                    </div><!--end form-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="prov_tempat_lahir_pengusaha">Prov Tempat Lahir Pengusaha: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                             <input type="text" name="prov_tempat_lahir_pengusaha" value="<?php echo set_value('prov_tempat_lahir_pengusaha', isset($umkm_list['prov_tempat_lahir_pengusaha']) ? $umkm_list['prov_tempat_lahir_pengusaha'] : ''); ?>"/>
                                        </div>
                                    </div><!--end form-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="bentuk_badan_hukum">Bentuk Badan Hukum: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                             <input type="text" name="bentuk_badan_hukum" value="<?php echo set_value('bentuk_badan_hukum', isset($umkm_list['bentuk_badan_hukum']) ? $umkm_list['bentuk_badan_hukum'] : ''); ?>"/>
                                        </div>
                                    </div><!--end form-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tahun_mulai_operasi">Tahun Mulai Operasi: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                             <input type="text" name="tahun_mulai_operasi" value="<?php echo set_value('tahun_mulai_operasi', isset($umkm_list['tahun_mulai_operasi']) ? $umkm_list['tahun_mulai_operasi'] : ''); ?>"/>
                                        </div>
                                    </div><!--end form-group-->
									
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
                                        <label class="col-lg-2 col-sm-2 control-label" for="bentuk_badan_hukum">Bentuk Kemitraan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                             <input type="text" name="bentuk_badan_hukum" value="<?php echo set_value('bentuk_badan_hukum', isset($umkm_list['bentuk_badan_hukum']) ? $umkm_list['bentuk_badan_hukum'] : ''); ?>"/>
                                        </div>
                                    </div><!--end form-group-->
									
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
                                             <input type="text" name="pemberi_pembinaan" value="<?php echo set_value('pemberi_pembinaan', isset($umkm_list['pemberi_pembinaan']) ? $umkm_list['pemberi_pembinaan'] : ''); ?>"/>
                                        </div>
                                    </div><!--end form-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="pembinaan_pemerintah">Eksport: <span class="text-error">*</span></label>
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
                                             <input type="text" name="persentase_eksport" value="<?php echo set_value('persentase_eksport', isset($umkm_list['persentase_eksport']) ? $umkm_list['persentase_eksport'] : ''); ?>"/>
                                        </div>
                                    </div><!--end form-group-->
									
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
                                             <input type="text" name="persentase_import" value="<?php echo set_value('persentase_import', isset($umkm_list['persentase_import']) ? $umkm_list['persentase_import'] : ''); ?>"/>
                                        </div>
                                    </div><!--end form-group-->

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