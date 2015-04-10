<?php $this->load->view('public/templates/header'); ?> 
<?php echo $map['js']; ?>

<body class="homepage">
	<?php $this->load->view('public/templates/menu'); ?> 
	<div class="container-fluid">
		<div class="row">
			<?php echo $map['html']; ?>
		</div>
	</div>
	
	
	<script type="text/javascript">
		function getLokasi(newLat, newLng)
		{			
				alert(newLat);
		}
	</script>
