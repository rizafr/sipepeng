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
                              <?
                                $judul = array("1" => "Perencanaan", "3" => "Pelaksanaan", "4" => "Hasil");
                                $judul = $judul[$status];
                              ?>
                                <span class="hidden-sm wht-color">Laporan <? echo $judul; ?></span>
                            </header>
                            <div class="panel-body">
							<form method="post" action="<?php echo base_url('admin/laporan_managements/process'); ?>" class="form-horizontal" id="validation-events" role="form" enctype="multipart/form-data">
								<input type="hidden" name="status" value="<?php echo $status?>">
                                <div class="form-group">
									<div class="col-lg-2 col-sm-2 control-label">RW : <span class="text-error"></span></div>
									<div class="col-lg-10">
										<?php echo form_dropdown('rw', $rw, set_value('rw', isset($rw['rw']) ? $rw['rw'] : ''), 'class="form-control m-bot15"'); ?>
										<span class="help-inline"><?php echo form_error('rw'); ?></span>
									</div>
								</div><!--end form-group-->
								
								<div class="form-group">
									<div class="col-lg-2 col-sm-2 control-label">Kegiatan : <span class="text-error"></span></div>
									<div class="col-lg-10">
										<?php echo form_dropdown('kegiatan', $kegiatan, set_value('kegiatan', isset($kegiatan['kegiatan']) ? $kegiatan['kegiatan'] : ''), 'class="form-control m-bot15"'); ?>
										<span class="help-inline"><?php echo form_error('kegiatan'); ?></span>
									</div>
								</div><!--end form-group-->
								
								<div class="form-group">
                                        <div class="col-lg-10">    
                                            <button type="submit" class="btn btn-primary">OK</button>
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