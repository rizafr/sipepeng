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
                                <form method="post" action="<?php echo base_url('admin/kos_managements/process'); ?>" class="form-horizontal" id="validation-events" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="aksi" value="<? echo $aksi ?>" />
                                    <input type="hidden" name="id_kos" value="<?php echo set_value('id_kos', isset($kos_list['id_kos']) ? $kos_list['id_kos'] : ''); ?>" />
                                    <span class="help-inline"><?php echo form_error('id_kos'); ?></span>
									
									 <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="nama_pemilik">Nama Pemilik: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" placeholder="Nama Pemilik" value="<?php echo set_value('nama_pemilik', isset($kos_list['nama_pemilik']) ? $kos_list['nama_pemilik'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('nama_pemilik'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat_pemilik">Alamat Pemilik: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="alamat_pemilik" name="alamat_pemilik" data-validation="length" data-validation-length="min10"><?php echo set_value('alamat_pemilik', isset($kos_list['alamat_pemilik']) ? $kos_list['alamat_pemilik'] : ''); ?></textarea>                                           
                                            <span class="help-inline"><?php echo form_error('alamat_pemilik'); ?></span>
                                        </div>
                                    </div><!--end form-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rw" name="rw" placeholder="RW" value="<?php echo set_value('rw', isset($kos_list['rw']) ? $kos_list['rw'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('rw'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="jml_kamar">Jumlah Kamar: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="jml_kamar" name="jml_kamar" placeholder="Jumlah Kamar" value="<?php echo set_value('jml_kamar', isset($kos_list['jml_kamar']) ? $kos_list['jml_kamar'] : ''); ?>" data-validation="number">
                                            <span class="help-inline"><?php echo form_error('jml_kamar'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="jml_orang_perkamar">Jumlah Orang Per Kamar: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="jml_orang_perkamar" name="jml_orang_perkamar" placeholder="Jumlah Orang Per Kamar" value="<?php echo set_value('jml_orang_perkamar', isset($kos_list['jml_orang_perkamar']) ? $kos_list['jml_orang_perkamar'] : ''); ?>" data-validation="number">
                                            <span class="help-inline"><?php echo form_error('jml_orang_perkamar'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ijin_usaha">Ijin Usaha: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="ijin_usaha" name="ijin_usaha" placeholder="Ijin Usaha" value="<?php echo set_value('ijin_usaha', isset($kos_list['ijin_usaha']) ? $kos_list['ijin_usaha'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('ijin_usaha'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="harga_sewa">Harga Sewa: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" placeholder="Mis: 500000" value="<?php echo set_value('harga_sewa', isset($kos_list['harga_sewa']) ? $kos_list['harga_sewa'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('harga_sewa'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ket">Keterangan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="ket" name="ket" placeholder="Keterangan" value="<?php echo set_value('ket', isset($kos_list['ket']) ? $kos_list['ket'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('ket'); ?></span>
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

