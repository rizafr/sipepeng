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

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;Minimarket</legend>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="nama_perusahaan">Nama Perusahaan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="nama_perusahaan" value="<?php echo set_value('nama_perusahaan', isset($minimarket_list['nama_perusahaan']) ? $minimarket_list['nama_perusahaan'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="bentuk_perusahaan">Bentuk Perusahaan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="bentuk_perusahaan" value="<?php echo set_value('bentuk_perusahaan', isset($minimarket_list['bentuk_perusahaan']) ? $minimarket_list['bentuk_perusahaan'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat">Alamat: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea name="alamat" ><?php echo set_value('alamat', isset($minimarket_list['alamat']) ? $minimarket_list['alamat'] : ''); ?></textarea>
                                        </div>
                                    </div><!--end form-group-->

									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rt">RT: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="rt" value="<?php echo set_value('rt', isset($minimarket_list['rt']) ? $minimarket_list['rt'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="rw" value="<?php echo set_value('rw', isset($minimarket_list['rw']) ? $minimarket_list['rw'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->   

									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="nama_pemilik">Nama Pemilik: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="nama_pemilik" value="<?php echo set_value('nama_pemilik', isset($minimarket_list['nama_pemilik']) ? $minimarket_list['nama_pemilik'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="jml_pekerja">Jumlah Pekerja: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="jml_pekerja" value="<?php echo set_value('jml_pekerja', isset($minimarket_list['jml_pekerja']) ? $minimarket_list['jml_pekerja'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="jam_kerja">Jam Kerja: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="jam_kerja" value="<?php echo set_value('jam_kerja', isset($minimarket_list['jam_kerja']) ? $minimarket_list['jam_kerja'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="status_tanah">Status Tanah: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="status_tanah" value="<?php echo set_value('status_tanah', isset($minimarket_list['status_tanah']) ? $minimarket_list['status_tanah'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="luas_bangunan">Luas Bangunan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="luas_bangunan" value="<?php echo set_value('luas_bangunan', isset($minimarket_list['luas_bangunan']) ? $minimarket_list['luas_bangunan'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="luas_ruang_usaha">Luas Ruang Usaha: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="luas_ruang_usaha" value="<?php echo set_value('luas_ruang_usaha', isset($minimarket_list['luas_ruang_usaha']) ? $minimarket_list['luas_ruang_usaha'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="no_ijin">No Ijin: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('no_ijin', isset($minimarket_list['no_ijin']) ? $minimarket_list['no_ijin'] : ''); ?>
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