<aside>
    <?php
		#login sebagai admin
		
		if ($this->session->userdata('id_jenis_pengguna') == 1) {
		?>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="<?php echo base_url(); ?>admin/dashboards" <?
						$page = 'dashboards';
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
                        <span>Sedang / akan dilaksanakan</span>
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
                        <span>Tidak Dilaksanakan</span>
					</a>
                    <ul class="sub">
						<?php foreach ($menu_list as $row) { ?>
                            <li><a  href="<?php echo base_url() ?><?php echo $row->controller ?>/index/5"><?php echo $row->menu ?></a></li>
						<? } ?>
					</ul>
				</li>   
				<li class="sub-menu" >
                    <a  href="javascript:;">
                        <i class="icon-print"></i>
                        <span>Laporan</span>
						
					</a>
                    <ul class="sub">
						<li>
							<a  href="<?php echo base_url() ?>admin/laporan_managements/index/1" >Perencanaan</a>
							<a  href="<?php echo base_url() ?>admin/laporan_managements/index/3" >Pelaksanaan</a>
							<a  href="<?php echo base_url() ?>admin/laporan_managements/index/4" >Hasil</a>
							<a  href="<?php echo base_url() ?>admin/laporan_managements/index/5" >Tidak Dilaksanakan</a>
							<a  href="<?php echo base_url() ?>admin/laporan_managements/index/6" >Keseluruhan</a>
						</li>
					</ul>
				</li>
				
				<li class="sub-menu" >
					<a  href="javascript:;">
                        <i class=" icon-bell-alt"></i>
                        <span>Ekonomi</span>
					</a>
					<ul class="sub">
						<li>
							<a  href="<?php echo base_url() ?>admin/minimarket_managements/index" >Minimarket</a>
							<a  href="<?php echo base_url() ?>admin/gas_managements/index" >Pangkalan Gas LPG</a>
							<a  href="<?php echo base_url() ?>admin/kos_managements/index" >Rumah Kos</a>
							<a  href="<?php echo base_url() ?>admin/umkm_managements/index" >UMKM</a>
						</li>
					</ul>
				</li>
				
				<li class="sub-menu" >
					<a  href="<?php echo base_url() ?>admin/berita_managements/index" >Berita</a>							
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
					<a href="<?php echo base_url(); ?>admin/dashboards" <?
						$page = 'dashboards';
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
                        <span>Tidak Dilaksanakan</span>
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
				
				<li class="sub-menu" >
					<a  href="<?php echo base_url() ?>admin/berita_managements/index" >Berita</a>							
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
					<a href="<?php echo base_url(); ?>admin/dashboards" <?
						$page = 'dashboards';
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
                        <span>Tidak Dilaksanakan</span>
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
				<li class="sub-menu" >
					<a  href="<?php echo base_url() ?>admin/berita_managements/index" >Berita</a>							
				</li>
			</ul>
			<!-- sidebar menu end-->
		</div>
	<?php } ?>
</aside>						