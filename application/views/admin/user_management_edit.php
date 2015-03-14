<?php $this->load->view('admin/templates/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-colorpicker/css/colorpicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/bootstrap-daterangepicker/daterangepicker.css" />
<body>

    <section id="container" >
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="<?php echo base_url(); ?>admin/homes" class="logo">Adney's<span>Shop</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-tasks"></i>
                            <span class="badge bg-success">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 6 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Iphone Development</div>
                                        <div class="percent">87%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">33%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                            <span class="sr-only">33% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">45%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-alt"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?php echo base_url(); ?>assets/admin/img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Jonathan Smith</span>
                                        <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?php echo base_url(); ?>assets/admin/img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Jhon Doe</span>
                                        <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                        Hi, Jhon Doe Bhai how are you ?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?php echo base_url(); ?>assets/admin/img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Jason Stathum</span>
                                        <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?php echo base_url(); ?>assets/admin/img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Jondi Rose</span>
                                        <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is metrolab
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-alt"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    Server #3 overloaded.
                                    <span class="small italic">34 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon-bell"></i></span>
                                    Server #10 not respoding.
                                    <span class="small italic">1 Hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    Database overloaded 24%.
                                    <span class="small italic">4 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon-plus"></i></span>
                                    New user registered.
                                    <span class="small italic">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                    Application error.
                                    <span class="small italic">10 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="<?php echo base_url(); ?>assets/admin/img/avatar1_small.jpg">
                            <?php
                            if ($this->session->userdata('user_email') != NULL) {
                                $user_name = $this->session->userdata('user_name');
                                ?>
                                <span class="username"><?php echo "$user_name" ?></span>
                            <?php } ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="<?php echo base_url(); ?>admin/profiles"><i class=" icon-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                            <li><a href="<?php echo base_url(); ?>public/logins/process_logout"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="<?php echo base_url(); ?>admin/homes">
                            <i class="icon-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a class="active" href="<?php echo base_url() ?>admin/user_managements">
                            <i class="icon-user"></i>
                            <span>Users Management</span>
                        </a>
                    </li>

                    <li>
                        <a  href="<?php echo base_url() ?>admin/state_managements">
                            <i class="icon-building"></i>
                            <span>States Management</span>
                        </a>
                    </li>

                    <li>
                        <a  href="<?php echo base_url() ?>admin/country_managements">
                            <i class="icon-flag"></i>
                            <span>Countries Management</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading tab-bg-dark-navy-blue tab-right ">
                                <span class="hidden-sm wht-color">Edit Data User</span>
                            </header>
                            <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/user_managements/process'); ?>" class="form-horizontal" role="form">

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;1. Personal Informations</legend>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputUserName">Username: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputUserName" name="user_name" placeholder="Username" value="<?php echo set_value('user_name', isset($users['user_name']) ? $users['user_name'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_name'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputEmailAddress">E-Mail Address: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputEmailAddress" name="user_email" placeholder="example@example.com" value="<?php echo set_value('user_email', isset($users['user_email']) ? $users['user_email'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_email'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputTele">Phone Number: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputTele" name="user_phone" placeholder="(02)-1598-548" value="<?php echo set_value('user_phone', isset($users['user_phone']) ? $users['user_phone'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_phone'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Level: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <?php echo form_dropdown('id_status', $level_list, set_value('id_status', isset($users['id_status']) ? $users['id_status'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('id_status'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;2. Delivery Informations</legend>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputFirstAdd">First Address: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputFirstAdd" name="first_address" placeholder="First Address" value="<?php echo set_value('first_address', isset($users['first_address']) ? $users['first_address'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_phone'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputSecondAdd">Second Address:</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputSecondAdd" name="second_address" placeholder="Second Address" value="<?php echo set_value('second_address', isset($users['second_address']) ? $users['second_address'] : ''); ?>">
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputCity">City: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputCity" name="user_city" placeholder="City" value="<?php echo set_value('user_city', isset($users['user_city']) ? $users['user_city'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_city'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputPostCode">Post Code: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputPostCode" name="user_zip" placeholder="Zip Code" value="<?php echo set_value('user_zip', isset($users['user_zip']) ? $users['user_zip'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_zip'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Country: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <?php echo form_dropdown('id_country', $country_list, set_value('id_country', isset($users['id_country']) ? $users['id_country'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('id_country'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 control-label">Region/States: <span class="text-error">*</span></div>
                                        <div class="col-lg-10">
                                            <?php echo form_dropdown('id_state', $states_list, set_value('id_state', isset($users['id_state']) ? $users['id_state'] : ''), 'class="form-control m-bot15"'); ?>
                                            <span class="help-inline"><?php echo form_error('id_state'); ?></span>
                                        </div>
                                    </div><!--end form-group-->

                                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;3. Set Your Password</legend>

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputPass">Password: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="password" class="form-control" id="inputPass" name="user_password" placeholder="**********" value="<?php echo set_value('user_password', isset($users['user_password']) ? $users['user_password'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('user_password'); ?></span>
                                        </div>
                                    </div><!--end control-group-->

                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputConPass">Re-Type Password: <span class="text-error">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="password" class="form-control" id="inputConPass" name="confirm_password" placeholder="**********" value="<?php echo set_value('confirm_password', isset($users['confirm_password']) ? $users['confirm_password'] : ''); ?>">
                                            <span class="help-inline"><?php echo form_error('confirm_password'); ?></span>
                                        </div>
                                    </div><!--end control-group-->
                                    <hr>

                                    <div class="form-group">
                                        <div class="col-lg-10">
                                            <label class="checkbox">
                                                <input type="checkbox" value="1" name="user_agree"> I'v read and agreed on <a href="#">Terms &amp; Condations</a>
                                                <span class="help-inline"><?php echo form_error('user_agree'); ?></span>
                                                <input type="hidden" name="id_user" value="<?php echo $idUser ?>">
                                            </label>
                                            <br>
                                            <button type="submit" class="btn btn-primary">Update</button>
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