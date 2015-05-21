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
                                <form method="post" action="<?php echo base_url('admin/drainase_managements/process'); ?>" class="form-horizontal" id="validation-events" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="aksi" value="<? echo $aksi ?>" />
                                    <input type="hidden" name="id_drainase" value="<?php echo set_value('id_drainase', isset($drainase_list['id_drainase']) ? $drainase_list['id_drainase'] : ''); ?>" />
                                    <span class="help-inline"><?php echo form_error('id_drainase'); ?></span>
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rt">RT: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rt" name="rt" placeholder="RT" value="<?php echo set_value('rt', isset($drainase_list['rt']) ? $drainase_list['rt'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('rt'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="rw" name="rw" placeholder="RW" value="<?php echo set_value('rw', isset($drainase_list['rw']) ? $drainase_list['rw'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('rw'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat">Alamat: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="alamat" name="alamat" data-validation="length" data-validation-length="min10"><?php echo set_value('alamat', isset($drainase_list['alamat']) ? $drainase_list['alamat'] : ''); ?></textarea>                                           
                                            <span class="help-inline"><?php echo form_error('alamat'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="panjang">Panjang: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="panjang" name="panjang" placeholder="Panjang"  data-validation="number" data-validation-allowing="float" data-validation-help="satuan dalam meter,gunakan titik misalnya 0.3"  value="<?php echo set_value('panjang', isset($drainase_list['panjang']) ? $drainase_list['panjang'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('panjang'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lebar">Lebar: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="lebar" name="lebar" placeholder="Lebar" value="<?php echo set_value('lebar', isset($drainase_list['lebar']) ? $drainase_list['lebar'] : ''); ?>" data-validation="number" data-validation-allowing="float" data-validation-help="satuan dalam meter,gunakan titik misalnya 0.3">
                                            <span class="help-inline"><?php echo form_error('lebar'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kedalaman">Kedalaman: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="kedalaman" name="kedalaman" placeholder="Kedalaman" data-validation="number"data-validation="number" data-validation-allowing="float" data-validation-help="satuan dalam meter,gunakan titik misalnya 0.3" value="<?php echo set_value('kedalaman', isset($drainase_list['kedalaman']) ? $drainase_list['kedalaman'] : ''); ?>">
                                            <p class="help-block"><?php echo form_error('kedalaman'); ?></p>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ketersediaan_lahan">Ketersediaan Lahan: <span class="text-error">*</span></label>
                                        <div class="col-md-3 col-xs-11">											
                                            <?php
                                            $options = array(
                                                'Ada' => 'Ada',
                                                'Tidak' => 'Tidak'
                                            );

                                            echo form_dropdown('ketersediaan_lahan', $options, set_value('ketersediaan_lahan', isset($drainase_list['ketersediaan_lahan']) ? $drainase_list['ketersediaan_lahan'] : ''), 'class="form-control m-bot15"');
                                            ?>
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
                                        <label class="col-lg-2 col-sm-2 control-label" for="lat_awal">Latitude Awal: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="lat_awal" name="lat_awal" placeholder="Latitude Awal" value="<?php echo set_value('lat_awal', isset($drainase_list['lat_awal']) ? $drainase_list['lat_awal'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('lat_awal'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_awal">Longitude Awal: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="long_awal" name="long_awal" placeholder="Longitude Awal" value="<?php echo set_value('long_awal', isset($drainase_list['long_awal']) ? $drainase_list['long_awal'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('long_awal'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lat_akhir">Latitude Akhir: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="lat_akhir" name="lat_akhir" placeholder="Latitude Akhir" value="<?php echo set_value('lat_akhir', isset($drainase_list['lat_akhir']) ? $drainase_list['lat_akhir'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('lat_akhir'); ?></span>
                                        </div>
                                    </div><!--end control-group-->                                    

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_akhir">Longitude Akhir: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="long_akhir" name="long_akhir" placeholder="Longitude Akhir" value="<?php echo set_value('long_akhir', isset($drainase_list['long_akhir']) ? $drainase_list['long_akhir'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('long_akhir'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="anggaran">Anggaran: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">                                               	  
                                            <input type="text" class="form-control" id="anggaran" name="anggaran" placeholder="Silakan isi anggaran" value="<?php echo set_value('anggaran', isset($drainase_list['anggaran']) ? $drainase_list['anggaran'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('anggaran'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="sumber_data">Sumber Data: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="sumber_data" name="sumber_data" placeholder="Silakan isi Sumber Data" value="<?php echo set_value('sumber_data', isset($drainase_list['sumber_data']) ? $drainase_list['sumber_data'] : ''); ?>" data-validation-help="Sumber data drainase berasal darimana">
                                            <span class="help-inline"><?php echo form_error('sumber_data'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tahun_usulan">Tahun Usulan: <span class="text-error">*</span></label>
                                        <div class="col-md-3 col-xs-11">
                                            <div data-date-minviewmode="years" data-date-viewmode="years" data-date-format=" yyyy" data-date="102/2012"  class="input-append date dpYears">
                                                <input type="text" class="form-control" id="tahun_usulan" name="tahun_usulan" placeholder="Silakan isi tahun Usulan" value="<?php echo set_value('tahun_usulan', isset($drainase_list['tahun_usulan']) ? $drainase_list['tahun_usulan'] : ''); ?>" readonly>
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
                                            <textarea class="form-control" id="ket" name="ket"> <?php echo set_value('ket', isset($drainase_list['ket']) ? $drainase_list['ket'] : ''); ?></textarea>                                           
                                            <span class="help-inline"><?php echo form_error('ket'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="foto">Foto: <span class="text-error">*</span></label>
                                        <div class="col-lg-8">
                                            <?
                                            $foto = isset($drainase_list['foto']) ? $drainase_list['foto'] : 'NULL';
                                            if ($foto === NULL) {
                                                $foto = 'noimage.jpg';
                                            } else {
                                                $foto = $foto;
                                            }


                                            $dokumen = isset($drainase_list['dokumen']) ? $drainase_list['dokumen'] : 'NULL';
                                            if ($dokumen === NULL) {
                                                $dokumen = 'noimage.jpg';
                                            } else {
                                                $dokumen = $dokumen;
                                            }
                                            ?>
                                            <figure>
                                                <img src="<?php echo base_url(); ?>assets/upload/foto/<?php echo $foto ?>"  alt="img03">
                                                <a class="fancybox" rel="group" href="<?php echo base_url(); ?>assets/upload/foto/<?php echo $foto ?>"><button type="button" class="btn btn-shadow btn-info">Lihat</button></a>
                                            </figure
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto" value=""  data-validation="mime size" data-validation-allowing="jpg, png, gif" 
                                                       data-validation-max-size="512kb">
                                                <span class="help-inline"><?php echo form_error('foto'); ?></span>
                                            </div>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="dokumen">Dokumen: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <a class="fancybox" rel="group" href="<?php echo base_url(); ?>assets/upload/dokumen/<?php echo $dokumen ?>"><button type="button" class="btn btn-shadow btn-primary"><?php echo set_value('dokumen', isset($drainase_list['dokumen']) ? $drainase_list['dokumen'] : 'Belum Ada'); ?></button></a>
                                            <input type="file" class="form-control" id="dokumen" name="dokumen" placeholder="Dokumen" value="" data-validation="required">
                                            <span class="help-inline"><?php echo form_error('dokumen'); ?></span>
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

