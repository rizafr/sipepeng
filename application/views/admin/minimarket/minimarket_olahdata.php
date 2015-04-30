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
                                <form method="post" action="<?php echo base_url('admin/minimarket_managements/process'); ?>" class="form-horizontal" id="validation-events" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="aksi" value="<? echo $aksi ?>" />
                                    <input type="hidden" name="id_minimarket" value="<?php echo set_value('id_minimarket', isset($minimarket_list['id_minimarket']) ? $minimarket_list['id_minimarket'] : ''); ?>" />
                                    <span class="help-inline"><?php echo form_error('id_minimarket'); ?></span>
									
									 <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="nama_perusahaan">Nama Perusahaan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan" value="<?php echo set_value('nama_perusahaan', isset($minimarket_list['nama_perusahaan']) ? $minimarket_list['nama_perusahaan'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('nama_perusahaan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="bentuk_perusahaan">Bentuk Perusahaan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="bentuk_perusahaan" name="bentuk_perusahaan" placeholder="Bentuk Perusahaan" value="<?php echo set_value('bentuk_perusahaan', isset($minimarket_list['bentuk_perusahaan']) ? $minimarket_list['bentuk_perusahaan'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('bentuk_perusahaan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat">Alamat: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="alamat" name="alamat" data-validation="length" data-validation-length="min10"><?php echo set_value('alamat', isset($minimarket_list['alamat']) ? $minimarket_list['alamat'] : ''); ?></textarea>                                           
                                            <span class="help-inline"><?php echo form_error('alamat'); ?></span>
                                        </div>
                                    </div><!--end form-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rt">RT: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" value="<?php echo set_value('rt', isset($minimarket_list['rt']) ? $minimarket_list['rt'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('rt'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rw" name="rw" placeholder="RW" value="<?php echo set_value('rw', isset($minimarket_list['rw']) ? $minimarket_list['rw'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('rw'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="nama_pemilik">Nama Pemilik: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" placeholder="Nama Pemilik" value="<?php echo set_value('nama_pemilik', isset($minimarket_list['nama_pemilik']) ? $minimarket_list['nama_pemilik'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('nama_pemilik'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="jml_pekerja">Jumlah Pekerja: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="jml_pekerja" name="jml_pekerja" placeholder="Jumlah Pekerja" value="<?php echo set_value('jml_pekerja', isset($minimarket_list['jml_pekerja']) ? $minimarket_list['jml_pekerja'] : ''); ?>" data-validation="number">
                                            <span class="help-inline"><?php echo form_error('jml_pekerja'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="jam_kerja">Jam Kerja: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="jam_kerja" name="jam_kerja" placeholder="Jam Kerja" value="<?php echo set_value('jam_kerja', isset($minimarket_list['jam_kerja']) ? $minimarket_list['jam_kerja'] : ''); ?>" data-validation="number">
                                            <span class="help-inline"><?php echo form_error('jam_kerja'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="status_tanah">Status Tanah: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="status_tanah" name="status_tanah" placeholder="Status Tanah" value="<?php echo set_value('status_tanah', isset($minimarket_list['status_tanah']) ? $minimarket_list['status_tanah'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('status_tanah'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="luas_bangunan">Luas Bangunan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="luas_bangunan" name="luas_bangunan" placeholder="Luas Bangunan" value="<?php echo set_value('luas_bangunan', isset($minimarket_list['luas_bangunan']) ? $minimarket_list['luas_bangunan'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('luas_bangunan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="luas_ruang_usaha">Luas Ruang Usaha: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="luas_ruang_usaha" name="luas_ruang_usaha" placeholder="Luas Ruang Usaha" value="<?php echo set_value('luas_ruang_usaha', isset($minimarket_list['luas_ruang_usaha']) ? $minimarket_list['luas_ruang_usaha'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('luas_ruang_usaha'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="no_ijin">No Ijin: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="no_ijin" name="no_ijin" placeholder="No Ijin" value="<?php echo set_value('no_ijin', isset($minimarket_list['no_ijin']) ? $minimarket_list['no_ijin'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('no_ijin'); ?></span>
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

