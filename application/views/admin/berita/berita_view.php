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
                                <form class="form-horizontal" role="form">

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;Berita</legend>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="judul">Judul: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('judul_berita', isset($berita_list['judul_berita']) ? $berita_list['judul_berita'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="berita">Berita: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo htmlspecialchars_decode(set_value('isi_berita', isset($berita_list['isi_berita']) ? $berita_list['isi_berita'] : 'Belum Ada')); ?>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="berita">Tanggal Berita: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('tgl_berita', isset($berita_list['tgl_berita']) ? $berita_list['tgl_berita'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="foto">Foto: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?
                                            $foto = isset($berita_list['foto']) ? $berita_list['foto'] : 'NULL';
                                            if ($foto === NULL) {
                                                $foto = 'noimage.jpg';
                                            } else {
                                                $foto = $foto;
                                            }
                                            ?>
                                            <figure>
                                                <img src="<?php echo base_url(); ?>assets/upload/berita/<?php echo $foto ?>"  alt="img03">
                                                <a class="fancybox" rel="group" href="<?php echo base_url(); ?>assets/upload/berita/<?php echo $foto ?>"><button type="button" class="btn btn-shadow btn-info">Lihat</button></a>
                                            </figure
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <div class="col-lg-10">                                           
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