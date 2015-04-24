<header id="header">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>">
						 <img src="<?php echo base_url() ?>assets/public/images/logo.png"/>
					</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li <? $page=''; $url=$this->uri->segment(2); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>">Beranda</a></li>
                        <li <? $page='profil'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/profil">Profil</a></li>
                        <li <? $page='peta'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/peta">Peta</a></li>
                        <li <? $page='peraturan'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/peraturan">Peraturan</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li <? $page='kontak'; $url=$this->uri->segment(3); echo ($page==$url ? " class='active' " : '') ?>><a href="<?php echo base_url();?>public/homes/kontak">Kontak</a></li>
                                             
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->