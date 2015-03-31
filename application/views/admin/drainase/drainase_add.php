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
                                <span class="hidden-sm wht-color"><? echo $judulForm ?></span>
                            </header>
                            <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/drainase_managements/process'); ?>" class="form-horizontal" role="form" enctype="multipart/form-data">

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;1. Data Awal</legend>
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rt">RT: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" value="<?php echo set_value('rt'); ?>">
                                            <span class="help-inline"><?php echo form_error('rt'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rw" name="rw" placeholder="RW" value="<?php echo set_value('rw'); ?>">
                                            <span class="help-inline"><?php echo form_error('rw'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
                                    
                                  <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat">Alamat: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="alamat" name="alamat"><?php echo set_value('alamat'); ?></textarea>                                           
                                            <span class="help-inline"><?php echo form_error('alamat'); ?></span>
                                        </div>
                                    </div><!--end form-group-->
                                    
                                     <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="panjang">Panjang: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="panjang" name="panjang" placeholder="Panjang" value="<?php echo set_value('panjang'); ?>">
                                            <span class="help-inline"><?php echo form_error('panjang'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lebar">Lebar: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="lebar" name="lebar" placeholder="Lebar" value="<?php echo set_value('lebar'); ?>">
                                            <span class="help-inline"><?php echo form_error('lebar'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kedalaman">Kedalaman: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="kedalaman" name="kedalaman" placeholder="Kedalaman" value="<?php echo set_value('kedalaman'); ?>">
                                            <span class="help-inline"><?php echo form_error('kedalaman'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ketersediaan_lahan">Ketersediaan Lahan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="ketersediaan_lahan" name="ketersediaan_lahan" placeholder="Kedalaman" value="<?php echo set_value('ketersediaan_lahan'); ?>">
                                            <span class="help-inline"><?php echo form_error('ketersediaan_lahan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_awal">Longitude: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="long_awal" name="long_awal" placeholder="Longitude" value="<?php echo set_value('long_awal'); ?>">
                                            <span class="help-inline"><?php echo form_error('long_awal'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_akhir">Longitude Akhir: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="long_akhir" name="long_akhir" placeholder="Longitude Akhir" value="<?php echo set_value('long_awal'); ?>">
                                            <span class="help-inline"><?php echo form_error('long_akhir'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lat_awal">Latitude Awal: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="lat_awal" name="lat_awal" placeholder="Latitude Awal" value="<?php echo set_value('lat_awal'); ?>">
                                            <span class="help-inline"><?php echo form_error('lat_awal'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_akhir">Longitude Akhir: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="long_akhir" name="long_akhir" placeholder="Longitude Akhir" value="<?php echo set_value('long_awal'); ?>">
                                            <span class="help-inline"><?php echo form_error('long_akhir'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="anggaran">Anggaran: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="anggaran" name="anggaran" placeholder="anggaran" value="<?php echo set_value('anggaran'); ?>">
                                            <span class="help-inline"><?php echo form_error('anggaran'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="sumber_data">Sumber Data: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="sumber_data" name="sumber_data" placeholder="Sumber Data" value="<?php echo set_value('sumber_data'); ?>">
                                            <span class="help-inline"><?php echo form_error('sumber_data'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tahun_usulan">Tahun Usulan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="tahun_usulan" name="tahun_usulan" placeholder="Tahun Usulan" value="<?php echo set_value('tahun_usulan'); ?>">
                                            <span class="help-inline"><?php echo form_error('tahun_usulan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                     <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tahun_usulan">Tahun Usulan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="tahun_usulan" name="tahun_usulan" placeholder="Tahun Usulan" value="<?php echo set_value('tahun_usulan'); ?>">
                                            <span class="help-inline"><?php echo form_error('tahun_usulan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                     <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ket">Keterangan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                           <textarea class="form-control" id="ket" name="ket"><?php echo set_value('ket'); ?></textarea>                                           
                                            <span class="help-inline"><?php echo form_error('ket'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="foto">Foto: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto" value="<?php echo set_value('foto'); ?>">
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
                                            <button type="submit" class="btn btn-primary">Add</button>
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