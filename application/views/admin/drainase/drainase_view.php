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
									<legend><?php
										$message = $this->session->flashdata('message');
										echo $message == '' ? '' : '<p id="message">' . $message . '</p>';
									?></legend>
                                    <div id="area-1">
                                        <!--area print-->
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="rt">RT: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('rt', isset($drainase_list['rt']) ? $drainase_list['rt'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('rw', isset($drainase_list['rw']) ? $drainase_list['rw'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="alamat">Alamat: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('alamat', isset($drainase_list['alamat']) ? $drainase_list['alamat'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="panjang">Panjang: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('panjang', isset($drainase_list['panjang']) ? $drainase_list['panjang'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="lebar">Lebar: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('lebar', isset($drainase_list['lebar']) ? $drainase_list['lebar'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="kedalaman">Kedalaman: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('kedalaman', isset($drainase_list['kedalaman']) ? $drainase_list['kedalaman'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="ketersediaan_lahan">Ketersediaan Lahan: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('ketersediaan_lahan', isset($drainase_list['ketersediaan_lahan']) ? $drainase_list['ketersediaan_lahan'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="lat_awal">Latitude Awal: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('lat_awal', isset($drainase_list['lat_awal']) ? $drainase_list['lat_awal'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="long_awal">Longitude Awal: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('long_awal', isset($drainase_list['long_awal']) ? $drainase_list['long_awal'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="long_akhir">Latitude Akhir: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('long_akhir', isset($drainase_list['lat_akhir']) ? $drainase_list['lat_akhir'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->



                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="long_akhir">Longitude Akhir: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('long_akhir', isset($drainase_list['long_akhir']) ? $drainase_list['long_akhir'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="anggaran">Anggaran: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('anggaran', isset($drainase_list['anggaran']) ? $drainase_list['anggaran'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="sumber_data">Sumber Data: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('sumber_data', isset($drainase_list['sumber_data']) ? $drainase_list['sumber_data'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="tahun_usulan">Tahun Usulan: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('tahun_usulan', isset($drainase_list['tahun_usulan']) ? $drainase_list['tahun_usulan'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->



                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="ket">Keterangan: </label>
                                            <div class="col-lg-10">
                                                <?php echo set_value('ket', isset($drainase_list['ket']) ? $drainase_list['ket'] : 'Belum Ada'); ?>
                                            </div>
                                        </div><!--end control-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="foto">Foto: </label>
                                            <div class="col-lg-10">
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
                                            </div>
                                        </div><!--end control-group-->

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="dokumen">Dokumen: </label>
                                            <div class="col-lg-10">
                                                <a class="fancybox" rel="group" href="<?php echo base_url(); ?>assets/upload/dokumen/<?php echo $dokumen ?>"><button type="button" class="btn btn-shadow btn-primary"><?php echo set_value('dokumen', isset($drainase_list['dokumen']) ? $drainase_list['dokumen'] : 'Belum Ada'); ?></button></a>

                                            </div>
                                        </div><!--end control-group-->
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label" for="dokumen">Peta: </label>
                                            <div class="col-lg-10">
                                                <?php echo $map['html']; ?>
                                            </div>
                                        </div><!--end control-group-->
                                    </div><!--end area print-->

                                    <div class="form-group">
                                        <div class="col-lg-10">                                           
                                            <a href="<?php echo base_url() . 'admin/drainase_managements/cetak/'.$drainase_list['id_drainase']?>"><button type="button" class="btn btn-info "><i class=" icon-print"></i>Print</button></a>
                                            <button type="button" class="btn btn-info " onclick="history.go(-1);"><i class=" icon-chevron-sign-left"></i> Kembali</button>
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
