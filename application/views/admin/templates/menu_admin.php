<aside>
	<div id="sidebar"  class="nav-collapse ">
		<!-- sidebar menu start-->
		<ul class="sidebar-menu" id="nav-accordion">
			<li>
				<a href="<?php echo base_url(); ?>admin/homes">
					<i class="icon-home"></i>
					<span>Dashboard</span>
				</a>
			</li>

			<li>
				<a  href="<?php echo base_url() ?>admin/user_managements">
					<i class="icon-user"></i>
					<span>User Management</span>
				</a>
			</li>     	
			
			
			<li class="sub-menu">
				<a  href="<?php echo base_url() ?>admin/user_managements">
					<i class=" icon-bell-alt"></i>
					<span>Data Awal</span>
				</a>
				<ul class="sub">
						 <?php foreach ($menu_list as $row) { ?>
                          <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>"><?php echo $row->menu ?></a></li>
						 <? } ?>
               </ul>
			</li>      
			
			<li>
				<a  href="<?php echo base_url() ?>admin/user_managements">
					<i class=" icon-thumbs-up"></i>
					<span>Data Verifikasi</span>
				</a>
			</li> 
			
			<li>
				<a  href="<?php echo base_url() ?>admin/user_managements">
					<i class="icon-tasks"></i>
					<span>Data Progres</span>
				</a>
			</li>      
			
			<li>
				<a  href="<?php echo base_url() ?>admin/user_managements">
					<i class="icon-check"></i>
					<span>Data Selesai</span>
				</a>
			</li>  
			
			<li>
				<a  href="<?php echo base_url() ?>admin/user_managements">
					<i class="icon-check-minus"></i>
					<span>Data Tidak Terverifikasi</span>
				</a>
			</li>   
			
			<li>
				<a  href="<?php echo base_url() ?>admin/user_managements">
					<i class="icon-print"></i>
					<span>Laporan</span>
				</a>
			</li>                    
			
		</ul>
		<!-- sidebar menu end-->
	</div>
</aside>