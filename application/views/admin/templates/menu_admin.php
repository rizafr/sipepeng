<aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="<?php echo base_url(); ?>admin/homes" <? $page='homes'; $url=$this->uri->segment(2);echo ($page==$url ? " class='active' " : '') ?>>
                            <i class="icon-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="active" >
                        <a  href="<?php echo base_url() ?>admin/user_managements" <? $page='user_managements'; $url=$this->uri->segment(2);echo ($page==$url ? " class='active' " : '') ?>>
                            <i class="icon-user"></i>
                            <span>User Management </span>
                        </a>
                    </li>       
                    
                    <li class="sub-menu" >
                        <a  href="<?php echo base_url() ?>admin/user_managements">
                            <i class=" icon-bell-alt"></i>
                            <span>Data Awal</span>
                        </a>
                        <ul class="sub">
                             <?php foreach ($menu_list as $row) { ?>
                              <li ><a  class="active" href="<?php echo base_url() ?><?php echo $row->controller ?>/index/1" <? $page=$row->controller; $url=$this->uri->segment(1)."/".$this->uri->segment(2);echo ($page==$url ? " class='active' " : '') ?>><?php echo $row->menu ?></a></li>
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
                            <i class="icon-check-minus"></i>
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
        </aside>