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

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rt">RT: </label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('rt', isset($artesis_list['rt']) ? $artesis_list['rt'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: </label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('rw', isset($artesis_list['rw']) ? $artesis_list['rw'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat">Alamat: </label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('alamat', isset($artesis_list['alamat']) ? $artesis_list['alamat'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ketersediaan_lahan">Ketersediaan Lahan: </label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('ketersediaan_lahan', isset($artesis_list['ketersediaan_lahan']) ? $artesis_list['ketersediaan_lahan'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ketersediaan_lahan">Jumlah Pengguna: </label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('jml_pemakai', isset($artesis_list['jml_pemakai']) ? $artesis_list['jml_pemakai'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long_awal">Longitude: </label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('long', isset($artesis_list['long']) ? $artesis_list['long'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lat_awal">Latitude: </label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('lat', isset($artesis_list['lat']) ? $artesis_list['lat'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="anggaran">Anggaran: </label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('anggaran', isset($artesis_list['anggaran']) ? $artesis_list['anggaran'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="sumber_data">Sumber Data: </label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('sumber_data', isset($artesis_list['sumber_data']) ? $artesis_list['sumber_data'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tahun_usulan">Tahun Usulan: </label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('tahun_usulan', isset($artesis_list['tahun_usulan']) ? $artesis_list['tahun_usulan'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="tahun_usulan">Persetujuan Warga: </label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('persetujuan_warga', isset($artesis_list['persetujuan_warga']) ? $artesis_list['persetujuan_warga'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->


                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="ket">Keterangan: </label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('ket', isset($artesis_list['ket']) ? $artesis_list['ket'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="foto">Foto: </label>
                                        <div class="col-lg-10">
                                            <?
                                            $foto = isset($artesis_list['foto']) ? $artesis_list['foto'] : NULL;
                                            if ($foto === NULL) {
                                                $foto = 'noimage.jpg';
                                            } else {
                                                $foto = $foto;
                                            }


                                            $dokumen = isset($artesis_list['dokumen']) ? $artesis_list['dokumen'] : NULL;
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
                                            <a class="fancybox" rel="group" href="<?php echo base_url(); ?>assets/upload/dokumen/<?php echo $dokumen ?>"><button type="button" class="btn btn-shadow btn-primary"><?php echo set_value('dokumen', isset($artesis_list['dokumen']) ? $artesis_list['dokumen'] : 'Belum Ada'); ?></button></a>

                                        </div>
                                    </div><!--end control-group-->
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="dokumen">Peta: </label>
                                        <div class="col-lg-10">
                                            <?php echo $map['html']; ?>
                                        </div>
                                    </div><!--end control-group-->

                                   <div class="form-group">
                                        <div class="col-lg-10">                                           
                                            <button type="button" class="btn btn-default " onclick="history.go(-1);"><i class=" icon-chevron-sign-left"></i> Kembali</button>
                                            <a href="<?php echo base_url() . 'admin/artesis_managements/cetak/' . $artesis_list['id_artesis'] ?>"><button type="button" class="btn btn-info "><i class=" icon-print"></i> Print Data Usulan</button></a>
                                            <a href="<?php echo base_url() . 'admin/artesis_managements/cetak_detail/' . $artesis_list['id_artesis'] ?>"><button type="button" class="btn btn-primary"><i class=" icon-print"></i> Print Data Detail</button></a>
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