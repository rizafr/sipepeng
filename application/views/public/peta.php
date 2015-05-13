<?php $this->load->view('public/templates/header'); ?> 
<?php echo $map['js']; ?>

<body class="homepage">
    <?php $this->load->view('public/templates/menu'); ?> 

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
		<section id="peraturan">
            <div class="container-fluid">
			<div class="get-started center wow fadeInDown">
                <h2>PETA PEMBANGUNAN		 <BR />										
					KELURAHAN LEUWIGAJAH							
				</h2>
			</div>
                <div class="row wow fadeInDown"">
                    <div class="col-lg-12">
                        <?php echo $map['html']; ?>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Tampilkan Pilihan Kegiatan</a>
                    </div>
                </div>
            </div>
			</section>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    
<script src="<?php echo base_url() ?>assets/public/js/jquery.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
		<!-- Menu Toggle Script -->
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
	} );
	
</script>