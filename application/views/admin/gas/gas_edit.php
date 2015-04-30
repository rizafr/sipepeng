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

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;Pangkalan Gas LPG</legend>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="nama_pemilik">Nama Pemilik: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="nama_pemilik" value="<?php echo set_value('nama_pemilik', isset($gas_list['nama_pemilik']) ? $gas_list['nama_pemilik'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="alamat">Alamat: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <textarea name="alamat" ><?php echo set_value('alamat', isset($gas_list['alamat']) ? $gas_list['alamat'] : ''); ?></textarea>
                                        </div>
                                    </div><!--end form-group-->

									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rt">RT: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="rt" value="<?php echo set_value('rt', isset($gas_list['rt']) ? $gas_list['rt'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="rw">RW: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="rw" value="<?php echo set_value('rw', isset($gas_list['rw']) ? $gas_list['rw'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->                                    

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="kelurahan">Kelurahan: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="kelurahan" value="<?php echo set_value('kelurahan', isset($gas_list['kelurahan']) ? $gas_list['kelurahan'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="telp">Telp: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" name="telp" value="<?php echo set_value('telp', isset($gas_list['telp']) ? $gas_list['telp'] : ''); ?>"/>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="sp_agen">SP Agen: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('sp_agen', isset($gas_list['sp_agen']) ? $gas_list['sp_agen'] : ''); ?>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="qty">Quantity: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('qty', isset($gas_list['qty']) ? $gas_list['qty'] : ''); ?>
                                        </div>
                                    </div><!--end control-group-->                            

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="lat">Latitude: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('lat', isset($gas_list['lat']) ? $gas_list['lat'] : ''); ?>
                                        </div>
                                    </div><!--end control-group-->
									
									 <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="long">Longitude: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('long', isset($gas_list['long']) ? $gas_list['long'] : 'Belum Ada'); ?>
                                        </div>
                                    </div><!--end control-group-->   
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="no_ijin">No Ijin: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <?php echo set_value('no_ijin', isset($gas_list['no_ijin']) ? $gas_list['no_ijin'] : ''); ?>
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