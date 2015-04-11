<aside>
    <?php
    #login sebagai admin

    if ($this->session->userdata('id_jenis_pengguna') == 1) {
        ?>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="<?php echo base_url(); ?>admin/homes" <?
                    $page = 'homes';
                    $url = $this->uri->segment(2);
                    echo ($page == $url ? " class='active' " : '')
                    ?>>
                        <i class="icon-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li >
                    <a  href="<?php echo base_url() ?>admin/user_managements" <?
                    $page = 'user_managements';
                    $url = $this->uri->segment(2);
                    echo ($page == $url ? " class='active' " : '')
                    ?>>
                        <i class="icon-user"></i>
                        <span>User Management </span>
                    </a>
                </li>       

                <li class="sub-menu" >
                    <a  href="javascript:;">
                        <i class=" icon-bell-alt"></i>
                        <span>Data Awal</span>
                    </a>
                    <ul class="sub">
                            <?php foreach ($menu_list as $row) { ?>
                            <li <?
                        $page = $row->controller;
                        $url = $this->uri->segment(2);
                        $page = (explode("/", $page));
                        echo ($page[0] == $url ? " class='active' " : '')
                        ?>><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/1" ><?php echo $row->menu ?></a></li>
    <? } ?>
                    </ul>
                </li>      

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class=" icon-thumbs-up"></i>
                        <span>Data Verifikasi</span>
                    </a>
                    <ul class="sub">
    <?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/2"><?php echo $row->menu ?></a></li>
    <? } ?>
                    </ul>
                </li> 

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class="icon-tasks"></i>
                        <span>Data Progres</span>
                    </a>
                    <ul class="sub">
    <?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/3"><?php echo $row->menu ?></a></li>
    <? } ?>
                    </ul>
                </li>      

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class="icon-check"></i>
                        <span>Data Selesai</span>
                    </a>
                    <ul class="sub">
    <?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/4"><?php echo $row->menu ?></a></li>
    <? } ?>
                    </ul>
                </li>  

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class=" icon-remove"></i>
                        <span>Data Tidak Terverifikasi</span>
                    </a>
                    <ul class="sub">
    <?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/5"><?php echo $row->menu ?></a></li>
    <? } ?>
                    </ul>
                </li>   

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class="icon-print"></i>
                        <span>Laporan</span>
                    </a>
                </li>                    

            </ul>
            <!-- sidebar menu end-->
        </div>
    <?php
} else
#login sebagai dkp
if ($this->session->userdata('id_jenis_pengguna') == 2) {
    ?>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="<?php echo base_url(); ?>admin/homes" <?
                $page = 'homes';
                $url = $this->uri->segment(2);
                echo ($page == $url ? " class='active' " : '')
                ?>>
                        <i class="icon-home"></i>
                        <span>Dashboard DKP</span>
                    </a>
                </li>

                <li class="sub-menu" >
                    <a  href="javascript:;">
                        <i class=" icon-bell-alt"></i>
                        <span>Data Awal</span>
                    </a>
                    <ul class="sub">
    <?php foreach ($menu_list as $row) { ?>
                            <li <?
        $page = $row->controller;
        $url = $this->uri->segment(2);
        $page = (explode("/", $page));
        echo ($page[0] == $url ? " class='active' " : '')
        ?>><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/1" ><?php echo $row->menu ?></a></li>
                        <? } ?>
                    </ul>
                </li>      

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class=" icon-thumbs-up"></i>
                        <span>Data Verifikasi</span>
                    </a>
                    <ul class="sub">
    <?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/2"><?php echo $row->menu ?></a></li>
                        <? } ?>
                    </ul>
                </li> 

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class="icon-tasks"></i>
                        <span>Data Progres</span>
                    </a>
                    <ul class="sub">
    <?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/3"><?php echo $row->menu ?></a></li>
                        <? } ?>
                    </ul>
                </li>      

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class="icon-check"></i>
                        <span>Data Selesai</span>
                    </a>
                    <ul class="sub">
    <?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/4"><?php echo $row->menu ?></a></li>
                        <? } ?>
                    </ul>
                </li>  

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class=" icon-remove"></i>
                        <span>Data Tidak Terverifikasi</span>
                    </a>
                    <ul class="sub">
    <?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/5"><?php echo $row->menu ?></a></li>
    <? } ?>
                    </ul>
                </li>   

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class="icon-print"></i>
                        <span>Laporan</span>
                    </a>
                </li>                    

            </ul>
            <!-- sidebar menu end-->
        </div>

                    <?php
                   } else
#login sebagai PU
                   if ($this->session->userdata('id_jenis_pengguna') == 3) {
                       ?>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="<?php echo base_url(); ?>admin/homes" <?
                       $page = 'homes';
                       $url = $this->uri->segment(2);
                       echo ($page == $url ? " class='active' " : '')
                       ?>>
                        <i class="icon-home"></i>
                        <span>Dashboard PU</span>
                    </a>
                </li>

                <li class="sub-menu" >
                    <a  href="javascript:;">
                        <i class=" icon-bell-alt"></i>
                        <span>Data Awal</span>
                    </a>
                    <ul class="sub">
    <?php foreach ($menu_list as $row) { ?>
                            <li <?
        $page = $row->controller;
        $url = $this->uri->segment(2);
        $page = (explode("/", $page));
        echo ($page[0] == $url ? " class='active' " : '')
        ?>><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/1" ><?php echo $row->menu ?></a></li>
    <? } ?>
                    </ul>
                </li>      

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class=" icon-thumbs-up"></i>
                        <span>Data Verifikasi</span>
                    </a>
                    <ul class="sub">
                        <?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/2"><?php echo $row->menu ?></a></li>
    <? } ?>
                    </ul>
                </li> 

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class="icon-tasks"></i>
                        <span>Data Progres</span>
                    </a>
                    <ul class="sub">
                        <?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/3"><?php echo $row->menu ?></a></li>
    <? } ?>
                    </ul>
                </li>      

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class="icon-check"></i>
                        <span>Data Selesai</span>
                    </a>
                    <ul class="sub">
                        <?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/4"><?php echo $row->menu ?></a></li>
    <? } ?>
                    </ul>
                </li>  

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class=" icon-remove"></i>
                        <span>Data Tidak Terverifikasi</span>
                    </a>
                    <ul class="sub">
    <?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/5"><?php echo $row->menu ?></a></li>
        <? } ?>
                    </ul>
                </li>   

                <li class="sub-menu">
                    <a  href="<?php echo base_url() ?>admin/user_managements">
                        <i class="icon-print"></i>
                        <span>Laporan</span>
                    </a>
                </li>                    

            </ul>
            <!-- sidebar menu end-->
        </div>
<?php } ?>
</aside>