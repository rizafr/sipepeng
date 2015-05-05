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

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;Data Berita</legend>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="nama_pemilik">Nama Pemilik: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="nama_pemilik" value="<?php echo set_value('nama_pemilik', isset($kos_list['nama_pemilik']) ? $kos_list['nama_pemilik'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat_pemilik">Alamat Pemilik: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea name="alamat" ><?php echo set_value('alamat_pemilik', isset($kos_list['alamat_pemilik']) ? $kos_list['alamat_pemilik'] : ''); ?></textarea>
                                        </div>
                                    </div><!--end form-group-->    

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