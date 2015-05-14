<header id="header">
	<nav class="navbar navbar-inverse navbar-fixed-top animated fadeIn normal" role="navigation" id="top-nav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand visible-lg visible-md">
					<img src="<?php echo base_url(); ?>assets/home/logo.png" style="width: 30px;display: inline-block;vertical-align: middle;" alt="">
					<strong>SIPEPENG</strong> 
				</a>
				<a href="<?php echo base_url(); ?>admin/homes" class="navbar-brand visible-sm">
					<img src="<?php echo base_url(); ?>assets/home/logo.png" style="width: 30px;display: inline-block;vertical-align: middle;" alt="">
					SIPEPENG
				</a>
				<a href="<?php echo base_url(); ?>admin/homes" class="navbar-brand visible-xs">
					<img src="<?php echo base_url(); ?>assets/home/logo.png" style="width: 30px;display: inline-block;vertical-align: middle;" alt="">
					<small><strong>SIPEPENG</strong></small>
				</a>
			</div>
			
			<div class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
					<li <? $page=''; $url=$this->uri->segment(2); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>">Beranda</a></li>
					<li <? $page='profil'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/profil">Profil</a></li>
					<li <? $page='peta'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/peta">Peta Pembangunan</a></li>
					<!--  <li <? $page='peraturan'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/peraturan">Peraturan</a></li>-->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Ekonomi <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu">
							<!--<li <? $page='perusahaan'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/perusahaan">Daftar Perusahaan</a></li-->
							<li <? $page='minimarket'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/minimarket">Minimarket</a></li>
							<li <? $page='gas'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/gas">Pangkalan Gas LPG</a></li>
							<li <? $page='kos'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/kos">Rumah Kos</a></li>
							<li <? $page='umkm'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/umkm">UMKM</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hasil Pembangunan <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu">
							<li <? $page='artesis'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/artesis">Artesis</a></li>
							<li <? $page='drainase'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/drainase">Drainase</a></li>
							<li <? $page='jalan'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/jalan">Jalan</a></li>
							<li <? $page='mck'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/mck">MCK</a></li>
							<li <? $page='septictank'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/septictank">Septictank</a></li>
							<li <? $page='septictank_komunal'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/septictank_komunal">Septictank Komunal</a></li>
							<li <? $page='sumur_dangkal'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/sumur_dangkal">Sumur Dangkal</a></li>
							<li <? $page='sumur_resapan'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/sumur_resapan">Sumur Resapan</a></li>
						</ul>
					</li>
					<li <? $page='kontak'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/kontak">Kontak</a></li>
					
				</ul>
			</div>
		</div><!--/.container-->
	</nav><!--/nav-->
	
</header><!--/header-->