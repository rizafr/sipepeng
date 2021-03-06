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
                                <ul class="nav nav-tabs pull-right">
                                    <li><a href="<?php echo base_url() . 'admin/user_managements/gotoFormAdd'; ?>"><i class="icon-plus"></i> Add Data</a></li>
                                </ul>
                                <span class="hidden-sm wht-color">User Management</span>
                            </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <?php
                                    $message = $this->session->flashdata('message');
                                    echo $message == '' ? '' : '<p id="message">' . $message . '</p>';
                                    ?>
                                    <section id="unseen">
                                        <table  class="display table table-bordered table-striped table-condensed" id="example">
                                            <thead>
                                                <tr>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Telp</th>
                                                    <th>Level</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($users_list as $row) { ?>
                                                    <tr>
                                                        <td><?php echo $row->nip ?></td>
                                                        <td><?php echo $row->nama ?></td>
                                                        <td><?php echo $row->username ?></td>
                                                        <td><?php echo $row->email ?></td>
                                                        <td><?php echo $row->telp ?></td>
                                                        <td><?php echo $row->jenis_pengguna ?></td>
                                                        <?php if(($row->username)!=$username || ($row->jenis_pengguna)!='admin'){?>
                                                        <td>
                                                            <a href="<?php echo base_url() . 'admin/user_managements/view/' . $row->id_pengguna ?>"><button class = "btn btn-info" data-toggle="tooltip" title="View" data-placemen="bottom"><i class = "icon-eye-open"></i></button></a>
                                                            <a href="<?php echo base_url() . 'admin/user_managements/edit/' . $row->id_pengguna ?>"><button class = "btn btn-success" title="Edit"><i class = "icon-pencil"></i></button></a>
                                                            <a href="<?php echo base_url() . 'admin/user_managements/delete/' . $row->id_pengguna ?>" onclick="return confirm('Are you sure want to delete this?');"><button class = "btn btn-danger" title="Delete"><i class = "icon-trash "></i></button></a>
                                                        </td>
                                                        <?php }else{?>
                                                        <td> 
															<a href="<?php echo base_url() . 'admin/user_managements/view/' . $row->id_pengguna ?>"><button class = "btn btn-info" data-toggle="tooltip" title="View" data-placemen="bottom"><i class = "icon-eye-open"></i></button></a>
                                                            <a href="<?php echo base_url() . 'admin/user_managements/edit/' . $row->id_pengguna ?>"><button class = "btn btn-success" title="Edit"><i class = "icon-pencil"></i></button></a>
                                                     </td>
                                                        <?php }?>
                                                    </tr>
                                                <?php }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Telp</th>
                                                    <th>Aksi</th>
                                                    <th>Level</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </section>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
        <?php $this->load->view('admin/templates/footer'); ?>