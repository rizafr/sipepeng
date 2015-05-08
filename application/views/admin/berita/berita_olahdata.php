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
                                <form method="post" action="<?php echo base_url('admin/berita_managements/process'); ?>" class="form-horizontal" id="validation-events" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="aksi" value="<? echo $aksi ?>" />
                                    <input type="hidden" name="id_berita" value="<?php echo set_value('id_berita', isset($berita_list['id_berita']) ? $berita_list['id_berita'] : ''); ?>" />
                                    <span class="help-inline"><?php echo form_error('id_berita'); ?></span>
									
									 <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="judul_berita">Judul Berita: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="judul_berita" name="judul_berita" placeholder="Judul Berita" value="<?php echo set_value('judul_berita', isset($berita_list['judul_berita']) ? $berita_list['judul_berita'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('judul_berita'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="isi_berita">Berita: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="wysihtml5 form-control" id="isi_berita" name="isi_berita" data-validation="length" data-validation-length="min10"  rows="10"><?php echo set_value('isi_berita', isset($berita_list['isi_berita']) ? $berita_list['isi_berita'] : ''); ?></textarea>                                           
                                            <span class="help-inline"><?php echo form_error('isi_berita'); ?></span>
                                        </div>
                                    </div><!--end form-group-->
									
									 <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tgl_berita">Tanggal Berita: <span class="text-error">*</span></label>
                                        <div class="col-md-3 col-xs-11">
                                        <div class="input-group date form_datetime-component">
                                        <input type="text" class="form-control" id="tgl_berita" name="tgl_berita" placeholder="Tanggal Berita" value="<?php echo set_value('tgl_berita', isset($berita_list['tgl_berita']) ? $berita_list['tgl_berita'] : ''); ?>" readonly>
                                            <span class="help-inline"><?php echo form_error('tgl_berita'); ?></span>
                                              <span class="input-group-btn add-on">
                                                <button class="btn btn-danger date-set" type="button"><i class="icon-calendar"></i></button>
                                              </span>
										</div>
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
		  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>