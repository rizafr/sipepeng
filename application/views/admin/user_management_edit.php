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
                                <span class="hidden-sm wht-color">Edit User</span>
                            </header>
                            <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/user_managements/process/edit'); ?>" class="form-horizontal" id="Form" role="form">

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;1. Data Pengguna</legend>
                                    
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputNip">NIP: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<input type="hidden" class="form-control" id="id_pengguna" name="id_pengguna" placeholder="id_pengguna" value="<?php echo set_value('id_pengguna', isset($users['id_pengguna']) ? $users['id_pengguna'] : ''); ?>">
											<input type="text" class="form-control" id="inputNip" name="nip" placeholder="Nip" value="<?php echo set_value('nip', isset($users['nip']) ? $users['nip'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('nip'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputNama">Nama: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<input type="text" class="form-control" id="inputNama" name="nama" placeholder="nama" value="<?php echo set_value('nama', isset($users['nama']) ? $users['nama'] : ''); ?>"  data-validation="required">
                                             <span class="help-inline"><?php echo form_error('nama'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputUserName">Username: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<input type="text" class="form-control" id="inputUserName" name="username" placeholder="Username" value="<?php echo set_value('username', isset($users['username']) ? $users['username'] : ''); ?>"  data-validation="length alphanumeric" 
		 data-validation-length="3-12" data-validation-error-msg="username harus terdiri minimal 3 karakter">
                                           <span class="help-inline"><?php echo form_error('username'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
									
									 <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputPass">Password: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<input type="password" class="form-control" id="inputPass" name="password" placeholder="**********" value="">
                                            <span class="help-inline"><?php echo form_error('password'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputEmailAddress">E-Mail: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<input type="text" class="form-control" id="inputEmailAddress" name="email" placeholder="example@example.com" value="<?php echo set_value('email', isset($users['email']) ? $users['email'] : ''); ?>"  data-validation="email">
                                            <span class="help-inline"><?php echo form_error('email'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputTele">Telepon: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<input type="text" class="form-control" id="inputTele" name="telp" placeholder="(02)-1598-548" value="<?php echo set_value('telp', isset($users['telp']) ? $users['telp'] : ''); ?>"  data-validation="number">
                                            <span class="help-inline"><?php echo form_error('telp'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

									<div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputAlamat">Alamat: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
											<textarea class="form-control" id="alamat" name="alamat" data-validation="length" data-validation-length="min10"><?php echo set_value('alamat', isset($users['alamat']) ? $users['alamat'] : ''); ?></textarea>                                           
                                             <span class="help-inline"><?php echo form_error('alamat'); ?></span>
                                        </div>
                                    </div><!--end form-group-->
                                    
                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Level: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <?php echo form_dropdown('id_jenis_pengguna', $level_list, set_value('id_jenis_pengguna', isset($users['id_jenis_pengguna']) ? $users['id_jenis_pengguna'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('id_jenis_pengguna'); ?></span>
                                        </div>
                                    </div><!--end form-group-->
                                    
                                    <div class="form-group">
                                        <div class="col-lg-10">                                           
                                            <button type="submit" class="btn btn-primary">Ubah</button>
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