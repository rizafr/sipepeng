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
                                <form method="post" action="<?php echo base_url('admin/gas_managements/process'); ?>" class="form-horizontal" id="validation-events" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="aksi" value="<? echo $aksi ?>" />
                                    <input type="hidden" name="id_gas" value="<?php echo set_value('id_gas', isset($gas_list['id_gas']) ? $gas_list['id_gas'] : ''); ?>" />
                                    <span class="help-inline"><?php echo form_error('id_gas'); ?></span>
									
									 <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="nama_pemilik">Nama Pemilik: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" placeholder="nama_pemilik" value="<?php echo set_value('nama_pemilik', isset($gas_list['nama_pemilik']) ? $gas_list['nama_pemilik'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('nama_pemilik'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rt">RT: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" value="<?php echo set_value('rt', isset($gas_list['rt']) ? $gas_list['rt'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('rt'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rw" name="rw" placeholder="RW" value="<?php echo set_value('rw', isset($gas_list['rw']) ? $gas_list['rw'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('rw'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat">Alamat: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="alamat" name="alamat" data-validation="length" data-validation-length="min10"><?php echo set_value('alamat', isset($gas_list['alamat']) ? $gas_list['alamat'] : ''); ?></textarea>                                           
                                            <span class="help-inline"><?php echo form_error('alamat'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kelurahan">Kelurahan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" value="<?php echo set_value('kelurahan', isset($gas_list['kelurahan']) ? $gas_list['kelurahan'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('kelurahan'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="telp">No Telp: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="telp" name="telp" placeholder="Telp" value="<?php echo set_value('telp', isset($gas_list['telp']) ? $gas_list['telp'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('telp'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="sp_agen">SP Agen: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="sp_agen" name="sp_agen" placeholder="SP Agen" value="<?php echo set_value('sp_agen', isset($gas_list['sp_agen']) ? $gas_list['sp_agen'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('sp_agen'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="qty">Quantity: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity" value="<?php echo set_value('qty', isset($gas_list['qty']) ? $gas_list['qty'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('qty'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lat">Latitude: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="lat" name="lat" placeholder="Latitude" value="<?php echo set_value('lat', isset($gas_list['lat']) ? $gas_list['lat'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('lat'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long">Longitude: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="long" name="long" placeholder="Longitude" value="<?php echo set_value('long', isset($gas_list['long']) ? $gas_list['long'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('long'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="no_ijin">No Ijin: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="no_ijin" name="no_ijin" placeholder="No Ijin" value="<?php echo set_value('no_ijin', isset($gas_list['no_ijin']) ? $gas_list['no_ijin'] : ''); ?>">
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

