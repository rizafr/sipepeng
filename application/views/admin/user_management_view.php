<?php $this->load->view('admin/templates/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-colorpicker/css/colorpicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-daterangepicker/daterangepicker.css" />
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
                                <span class="hidden-sm wht-color">Detail Data Pengguna <?php echo set_value('nama', isset($users['nama']) ? $users['nama'] : ''); ?> </span>
                            </header>
                            <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/user_managements/'); ?>" class="form-horizontal" id="Form" role="form">
                       
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputNip">NIP: </label>
                                        <div class="col-lg-10">
											<?php echo set_value('nip', isset($users['nip']) ? $users['nip'] : ''); ?>
                                            <span class="help-inline"><?php echo form_error('nip'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputNama">Nama: </label>
                                        <div class="col-lg-10">
											<?php echo set_value('nama', isset($users['nama']) ? $users['nama'] : ''); ?>
                                             <span class="help-inline"><?php echo form_error('nama'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputUserName">Username: </label>
                                        <div class="col-lg-10">
											<?php echo set_value('username', isset($users['username']) ? $users['username'] : ''); ?>
                                           <span class="help-inline"><?php echo form_error('username'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputEmailAddress">E-Mail: </label>
                                        <div class="col-lg-10">
											<?php echo set_value('email', isset($users['email']) ? $users['email'] : ''); ?>
                                            <span class="help-inline"><?php echo form_error('email'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputTele">Telepon: </label>
                                        <div class="col-lg-10">
											<?php echo set_value('telp', isset($users['telp']) ? $users['telp'] : ''); ?>
                                            <span class="help-inline"><?php echo form_error('telp'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputAlamat">Alamat: </label>
                                        <div class="col-lg-10">
											<?php echo set_value('alamat', isset($users['alamat']) ? $users['alamat'] : ''); ?>                                          
                                             <span class="help-inline"><?php echo form_error('alamat'); ?></span>
                                        </div>
                                    </div><!--end form-group-->
                                    
                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Level:</div>
                                        <div class="col-lg-10">
                                            <?php echo set_value('id_jenis_pengguna', isset($users['id_jenis_pengguna']) ? $users['id_jenis_pengguna'] : '')?>
                                            <span class="help-inline"><?php echo form_error('id_jenis_pengguna'); ?></span>
                                        </div>
                                    </div><!--end form-group-->
                                    
                                    <div class="form-group">
                                        <div class="col-lg-10">                                           
                                            <button type="submit" class="btn btn-primary">Kembali</button>
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