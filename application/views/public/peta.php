<?php $this->load->view('public/templates/header'); ?> 
<?php echo $map['js']; ?>

<body class="homepage">
    <?php $this->load->view('public/templates/menu'); ?> 
	
	
	<!-- Page Content -->
	<section id="peraturan">
		<div class="container">
			<div class="get-started center wow fadeInDown">
				<h2>PETA PEMBANGUNAN		 <BR />										
					KELURAHAN LEUWIGAJAH							
				</h2>
			</div>
		</div>
		
		<!-- <div class="container">
			<div class="get-started center wow fadeInDown">
				Pilih Kegiatan :
				<select name="kegiatan" id="pilih">
					<?php foreach ($menu_list as $row) { ?>
						<option value="<?php echo $row->menu ?>"><?php echo $row->menu ?></option>
					<? } ?>
				</select>
			</div>
		</div>
		-->
		<div class="container-fluid">
			<div id="peta">
				<?php echo $map['html']; ?>
			</div>
		</div>
		
	</section>
	<!-- /#page-content-wrapper -->
	
	<script src="<?php echo base_url() ?>assets/public/js/jquery.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			<!-- Menu Toggle Script -->
			$("#pilih").change(function (){ //change event for select
				
				// $.post(base_url+'cluster/delete/'+id_cluster, function(result){
				
				$("#peta").slideDown();
			});	
		});
	
</script>												