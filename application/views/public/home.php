<?php $this->load->view('public/templates/header'); ?> 
<body class="homepage">
	<?php $this->load->view('public/templates/menu'); ?> 
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                <li data-target="#main-slider" data-slide-to="3"></li>
                <li data-target="#main-slider" data-slide-to="4"></li>
                <li data-target="#main-slider" data-slide-to="5"></li>
			</ol>
            <div class="carousel-inner">
				
                <div class="item active" style="background-image: url(<?php echo base_url() ?>assets/public/images/slider/gajah.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-10">
							<?php
							$no = 1;
							
							$jum = count(@$berita_list);
							// var_dump($berita_list);
							?>
                                <div class="carousel-content">
                                    <!--<h1 class="animation animated-item-1"></h1>-->
                                     <!--<h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>-->
								</div>
							</div>
							
                            <div class="col-sm-2 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url() ?>assets/public/images/slider/chima.png" class="img-responsive">
								</div>
							</div>
							
						</div>
					</div>
				</div><!--/.item-->
				
                <div class="item" style="background-image: url(<?php echo base_url() ?>assets/public/images/slider/kerkof.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-10">
                                <div class="carousel-content">
                                    <!-- <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>-->
                                    <!-- <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>-->
								</div>
							</div>
							
                            <div class="col-sm-2 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url() ?>assets/public/images/slider/cimahi.png" class="img-responsive">
								</div>
							</div>
							
						</div>
					</div>
				</div><!--/.item-->
				
                <div class="item" style="background-image: url(<?php echo base_url() ?>assets/public/images/slider/kuburan.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-10">
                                <div class="carousel-content">
                                    <!-- <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>-->
                                    <!-- <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>-->
								</div>
							</div>
                            <div class="col-sm-2 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url() ?>assets/public/images/slider/chima_batik.png" class="img-responsive">
								</div>
							</div>
						</div>
					</div>
				</div><!--/.item-->
				
				<div class="item" style="background-image: url(<?php echo base_url() ?>assets/public/images/slider/cireundeu.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-10">
                                <div class="carousel-content">
                                  <!--   <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>-->
                                   <!--  <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>-->
								</div>
							</div>
                            <div class="col-sm-2 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url() ?>assets/public/images/slider/chima_batik.png" class="img-responsive">
								</div>
							</div>
						</div>
					</div>
				</div><!--/.item-->
				
				<div class="item" style="background-image: url(<?php echo base_url() ?>assets/public/images/slider/slide5.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-10">
                                <div class="carousel-content">
                                    <!-- <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>-->
                                   <!--  <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>-->
								</div>
							</div>
                            <div class="col-sm-2 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url() ?>assets/public/images/slider/chima_batik.png" class="img-responsive">
								</div>
							</div>
						</div>
					</div>
				</div><!--/.item-->
				
				<div class="item" style="background-image: url(<?php echo base_url() ?>assets/public/images/slider/slide6.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-10">
                                <div class="carousel-content">
                                    <!-- <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>  -->
                                    <!-- <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2> 
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>-->
								</div>
							</div>
                            <div class="col-sm-2 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url() ?>assets/public/images/slider/chima_batik.png" class="img-responsive">
								</div>
							</div>
						</div>
					</div>
				</div><!--/.item-->
				
			</div><!--/.carousel-inner-->
		</div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
		</a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
		</a>
	</section><!--/#main-slider-->
	
	<section id="blog" class="container">
        <div class="center">
            <h2>Berita Terbaru</h2>
            <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
		</div>
		
        <div class="blog">
            <div class="row">
				<div class="col-md-12">
					<div id="main_content">
						<?php
							$no = 1;
							
							$jum = count(@$berita_list);
							if ($jum > 0) {
								foreach ($berita_list as $row) {
									
								?>
								
								<div class="blog-item wow fadeInDown">
									<div class="row">
										<div class="col-xs-12 col-sm-2 text-center">
											<div class="entry-meta">
												<span id="publish_date"> <?php echo $row->tgl_berita ?></span>
												<span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
											</div>
										</div>
										
										<div class="col-xs-12 col-sm-10 blog-content">
											<? 
												$foto = isset($row->foto) ? $row->foto : 'NULL';
												if($foto === NULL){
													$foto = 'noimage.jpg';
													}else{												
													$foto = $foto;
												}
												
											?>
											<a class="preview" href="<?php echo base_url() ?>assets/upload/berita/<?php echo $foto ?>" rel="prettyPhoto"><img class="img-responsive img-blog" src="<?php echo base_url() ?>assets/upload/berita/<?php echo $foto ?>" width="100%" alt="" /></a>
											<h2> <?php echo $row->judul_berita; ?></h2>
											<h3> <?php echo limitChar($row->isi_berita,500) ?>.</h3>
											<a class="btn btn-primary readmore" data-toggle="modal" data-id="<?php echo $row->id_berita ?>" href="#readmore">Selengkapnya <i class="fa fa-angle-right"></i></a>
										</div>
									</div>    
								</div><!--/.blog-item-->
								
								<?php 
								}
							}
							
						?>
					</div>
					<a id="more_button" class="btn btn-primary">
						more
					</a>
					
				</div><!--/.col-md-12-->
				
				
			</div><!--/.row-->
		</div>
	</section><!--/#blog-->
	
	<section id="gallery">
		<div class="container">
			<div class="center wow fadeInDown">
				<h2>Galeri</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
			</div>
			
			<div class="row wow fadeInDown">
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="recent-work-wrap">
						<img class="img-responsive" src=" <?php echo base_url() ?>assets/public/images/slider/slide3.jpg" alt="">
						<div class="overlay">
							<div class="recent-work-inner">
								<h3><a href="#">Business theme</a> </h3>
								<a class="preview" href=" <?php echo base_url() ?>assets/public/images/slider/slide3.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
							</div> 
						</div>
					</div>
				</div>   
				
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="recent-work-wrap">
						<img class="img-responsive" src=" <?php echo base_url() ?>assets/public/images/slider/slide2.jpg" alt="">
						<div class="overlay">
							<div class="recent-work-inner">
								<h3><a href="#">Business theme</a></h3>
								<a class="preview" href="<?php echo base_url() ?>assets/public/images/slider/slide2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
							</div> 
						</div>
					</div>
				</div> 
				
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="recent-work-wrap">
						<img class="img-responsive" src=" <?php echo base_url() ?>assets/public/images/slider/slide2.jpg" alt="">
						<div class="overlay">
							<div class="recent-work-inner">
								<h3><a href="#">Business theme</a></h3>
								<a class="preview" href="<?php echo base_url() ?>assets/public/images/slider/slide2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
							</div> 
						</div>
					</div>
				</div> 
				
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="recent-work-wrap">
						<img class="img-responsive" src=" <?php echo base_url() ?>assets/public/images/slider/slide2.jpg" alt="">
						<div class="overlay">
							<div class="recent-work-inner">
								<h3><a href="#">Business theme</a></h3>
								<a class="preview" href="<?php echo base_url() ?>assets/public/images/slider/slide2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
							</div> 
						</div>
					</div>
				</div> 
				
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="recent-work-wrap">
						<img class="img-responsive" src="<?php echo base_url() ?>assets/public/images/portfolio/recent/item5.png" alt="">
						<div class="overlay">
							<div class="recent-work-inner">
								<h3><a href="#">Business theme</a></h3>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
								<a class="preview" href="<?php echo base_url() ?>assets/public/images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
							</div> 
						</div>
					</div>
				</div>   
				
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="recent-work-wrap">
						<img class="img-responsive" src=" <?php echo base_url() ?>assets/public/images/slider/slide2.jpg" alt="">
						<div class="overlay">
							<div class="recent-work-inner">
								<h3><a href="#">Business theme</a></h3>
								<a class="preview" href="<?php echo base_url() ?>assets/public/images/slider/slide2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
							</div> 
						</div>
					</div>
				</div> 
				
				<<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="recent-work-wrap">
						<img class="img-responsive" src=" <?php echo base_url() ?>assets/public/images/slider/slide2.jpg" alt="">
						<div class="overlay">
							<div class="recent-work-inner">
								<h3><a href="#">Business theme</a></h3>
								<a class="preview" href="<?php echo base_url() ?>assets/public/images/slider/slide2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
							</div> 
						</div>
					</div>
				</div> 
				
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="recent-work-wrap">
						<img class="img-responsive" src=" <?php echo base_url() ?>assets/public/images/slider/slide2.jpg" alt="">
						<div class="overlay">
							<div class="recent-work-inner">
								<h3><a href="#">Business theme</a></h3>
								<a class="preview" href="<?php echo base_url() ?>assets/public/images/slider/slide2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
							</div> 
						</div>
					</div>
				</div> 
				
			</div><!--/.row-->
		</div><!--/.container-->
	</section><!--/#recent-works-->
	
	
	<section id="middle">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 wow fadeInDown">
					<div class="tab-wrap"> 
						<div class="media">
							<div class="parrent pull-left">
								<ul class="nav nav-tabs nav-stacked">
									<li class="active"><a href="#tabPerencanaan" data-toggle="tab" class="analistic-03">Grafik Kegiatan Perencanaan</a></li>
									<li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Grafik Kegiatan Terealisasi</a></li>
									<li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Grafik Kegiatan Tidak Terealisasi</a></li>
									<li class=""><a href="#tabKegiatan" data-toggle="tab" class="analistic-02">Grafik Per Kegiatan</a></li>
									<li class=""><a href="#tabKlasifikasi" data-toggle="tab" class="analistic-02">Grafik Klasifikasi Perusahaan</a></li>
									<li class=""><a href="#tabGender" data-toggle="tab" class="analistic-02">Grafik Klasifikasi Perusahaan Berdasarkan Gender</a></li>
									
								</ul>
							</div>
							
							<div class="parrent media-body">
								<div class="tab-content">
									<div class="tab-pane fade active in" id="tabPerencanaan">
										<div class="media">
											<div class="media-body">
												<h2>Grafik Kegiatan Perencanaan</h2>
												<div id="grafikPerencanaan" ></div>
											</div>
										</div>
									</div>
									
									<div class="tab-pane fade " id="tab1">
										<div class="media">
											<div class="media-body">
												<h2>Grafik Kegiatan Terealisasi</h2>
												<div id="grafikTerelisasi" ></div>
											</div>
										</div>
									</div>
									
									<div class="tab-pane fade " id="tab2">
										<div class="media">
											<div class="media-body">
												<h2>Grafik Kegiatan Tidak Terealisasi</h2>
												<div id="grafikTidakTerelisasi" ></div>
											</div>
										</div>
									</div>
									
									<div class="tab-pane fade " id="tabKegiatan">
										<div class="media">
											<div class="media-body">
												<h2>Grafik Perkegiatan</h2>
												<div id="grafikKegiatan" ></div>
											</div>
										</div>
									</div>
									
									<div class="tab-pane fade " id="tabKlasifikasi">
										<div class="media">
											<div class="media-body">
												<h2>Grafik Klasifikasi Perusahaan</h2>
												<div id="grafikJumlahKlasifikasiPerusahaan" ></div>
											</div>
										</div>
									</div>
									
									<div class="tab-pane fade " id="tabGender">
										<div class="media">
											<div class="media-body">
												<div id="grafikJumlahJenisKelamin" ></div>
											</div>
										</div>
									</div>
									
									
								</div> <!--/.tab-content-->  
							</div> <!--/.media-body--> 
						</div> <!--/.media-->     
					</div><!--/.tab-wrap-->               
				</div><!--/.col-sm-6-->
				
				
				
			</div><!--/.row-->
		</div><!--/.container-->
	</section><!--/#content-->
	<script src="<?php echo base_url() ?>assets/public/js/jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/public/js/highcharts.js"></script>
	<script src="<?php echo base_url() ?>assets/public/js/exporting.js"></script>
	
	<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
	<script type="text/javascript">
		$(function () {
			
			$(document).ready(function () {
				
				// GRAFIK AWAL
				$('#grafikPerencanaan').highcharts({
					chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					title: {
						text: 'Grafik Perbandingan Kegiatan Perencanaan '
					},
					tooltip: {
						pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: false
							},
							showInLegend: true
						}
					},
					series: [{
						type: 'pie',
						name: 'Kegiatan',
						data: [
						['Artesis',   <?php echo $artesis_awal ?>],
						['Drainase',   <?php echo $drainase_awal ?>],
						{
							name: 'MCK',
							y: <?php echo $mck_awal ?>,
							sliced: true,
							selected: true
						},
						['Jalan',   <?php echo $jalan_awal ?>],
						['Septictank',     <?php echo $septictank_awal ?>],
						['Septictank Komunal',    <?php echo $septictank_komunal_awal ?>],
						['Sumur Dangkal',    <?php echo $sumur_dangkal_awal ?>],
						['Sumur Resapan',  <?php echo $sumur_resapan_awal ?>]
						]
					}]
				});
				//END GRAFIK TEREALISASI
				
				// GRAFIK TEREALISASI
				$('#grafikTerelisasi').highcharts({
					chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					title: {
						text: 'Grafik Perbandingan Kegiatan Terealisasi '
					},
					tooltip: {
						pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: false
							},
							showInLegend: true
						}
					},
					series: [{
						type: 'pie',
						name: 'Kegiatan',
						data: [
						['Artesis',   <?php echo $artesis_dilaksanakan ?>],
						['Drainase',   <?php echo $drainase_dilaksanakan ?>],
						{
							name: 'MCK',
							y: <?php echo $mck_dilaksanakan ?>,
							sliced: true,
							selected: true
						},
						['Jalan',   <?php echo $jalan_dilaksanakan ?>],
						['Septictank',     <?php echo $septictank_dilaksanakan ?>],
						['Septictank Komunal',    <?php echo $septictank_komunal_dilaksanakan ?>],
						['Sumur Dangkal',    <?php echo $sumur_dangkal_dilaksanakan ?>],
						['Sumur Resapan',  <?php echo $sumur_resapan_dilaksanakan ?>]
						]
					}]
				});
				//END GRAFIK TEREALISASI
				
				// GRAFIK TIDAK TEREALISASI
				$('#grafikTidakTerelisasi').highcharts({
					chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					title: {
						text: 'Grafik Perbandingan Kegiatan Tidak Terealisasi '
					},
					tooltip: {
						pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: false
							},
							showInLegend: true
						}
					},
					series: [{
						type: 'pie',
						name: 'Kegiatan',
						data: [
						['Artesis',   <?php echo $artesis_tidak_dilaksanakan ?>],
						['Drainase',   <?php echo $drainase_tidak_dilaksanakan ?>],
						{
							name: 'MCK',
							y: <?php echo $mck_tidak_dilaksanakan ?>,
							sliced: true,
							selected: true
						},
						['Jalan',   <?php echo $jalan_tidak_dilaksanakan ?>],
						['Septictank',     <?php echo $septictank_tidak_dilaksanakan ?>],
						['Septictank Komunal',    <?php echo $septictank_komunal_tidak_dilaksanakan ?>],
						['Sumur Dangkal',    <?php echo $sumur_dangkal_tidak_dilaksanakan ?>],
						['Sumur Resapan',  <?php echo $sumur_resapan_tidak_dilaksanakan ?>]
						]
					}]
				});
				//END GRAFIK TIDAK TEREALISASI
				
				// GRAFIK TIDAK TEREALISASI
				$('#grafikKegiatan').highcharts({
					chart: {
						type: 'column'
					},
					title: {
						text: 'Grafik Per Kegiatan'
					},
					xAxis: {
						categories: [
						'Perencanaan',
						'Pelaksanaan',
						'Tidak Terealisasi'
						],
						crosshair: true
					},
					yAxis: {
						min: 0,
						title: {
							text: 'Jumlah Kegiatan'
						}
					},
					tooltip: {
						headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
						pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
						'<td style="padding:0"><b>{point.y:.f} </b></td></tr>',
						footerFormat: '</table>',
						shared: true,
						useHTML: true
					},
					plotOptions: {
						column: {
							pointPadding: 0.2,
							borderWidth: 0
						}
					},
					series: [{
						name: 'Artesis',
						data: [<?php echo $artesis_awal ?>, <?php echo $artesis_dilaksanakan ?>, <?php echo $artesis_tidak_dilaksanakan ?>]
						
						}, {
						name: 'Drainase',
						data: [<?php echo $drainase_awal ?>, <?php echo $drainase_dilaksanakan ?>, <?php echo $drainase_tidak_dilaksanakan ?>]
						
						
						}, {
						name: 'MCK',
						data: [<?php echo $mck_awal ?>, <?php echo $mck_dilaksanakan ?>, <?php echo $mck_tidak_dilaksanakan ?>]
						
						
						}, {
						name: 'Jalan',
						data: [<?php echo $jalan_awal ?>, <?php echo $jalan_dilaksanakan ?>, <?php echo $jalan_tidak_dilaksanakan ?>]
						
						
						}, {
						name: 'Septictank',
						data: [<?php echo $septictank_awal ?>, <?php echo $septictank_dilaksanakan ?>, <?php echo $septictank_tidak_dilaksanakan ?>]
						
						
						}, {
						name: 'Septictank Komunal',
						data: [<?php echo $septictank_komunal_awal ?>, <?php echo $septictank_komunal_dilaksanakan ?>, <?php echo $septictank_komunal_tidak_dilaksanakan ?>]
						
						
						}, {
						name: 'Sumur Dangkal',
						data: [<?php echo $sumur_dangkal_awal ?>, <?php echo $sumur_dangkal_dilaksanakan ?>, <?php echo $sumur_dangkal_tidak_dilaksanakan ?>]
						
						
						}, {
						name: 'Sumur Resapan',
						data: [<?php echo $sumur_resapan_awal ?>, <?php echo $sumur_resapan_dilaksanakan ?>, <?php echo $sumur_resapan_tidak_dilaksanakan ?>]
						
						
					}]
				});
				//END GRAFIK TIDAK TEREALISASI
				
				// GRAFIK KLASIFIKASI PERUSAHAAN
				$('#grafikJumlahKlasifikasiPerusahaan').highcharts({
					chart: {
						type: 'column'
					},
					title: {
						text: 'GRAFIK KLASIFIKASI PERUSAHAAN'
					},
					xAxis: {
						categories: [
						<?php
							
							$jum = count($getJumlahKlasifikasiPerusahaan);
							if ($jum > 0) {
								foreach ($getJumlahKlasifikasiPerusahaan as $row) {
								?>
								'<?php echo $row->klasifikasi_perusahaan ?>',
								<?php 
								}
							}
							
						?>
						],
						crosshair: true
					},
					yAxis: {
						min: 0,
						title: {
							text: 'Jumlah Perusahaan'
						}
					},
					tooltip: {
						headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
						pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.f}</b><br/>'
					},
					plotOptions: {
						column: {
							pointPadding: 0.2,
							borderWidth: 0
						}
					},
					series: [
					<?php
						$jum = count($getJumlahKlasifikasiPerusahaan);
						if ($jum > 0) {
							foreach ($getJumlahKlasifikasiPerusahaan as $row) {
							?>
							
							{
								name: '<?php echo $row->klasifikasi_perusahaan ?>',
								data: [<?php echo $row->jumlah ?>]
								
							}, 
							<?php 
							}
						}
						
					?>
					]
				});
				//END GRAFIK TIDAK TEREALISASI
				
				// GRAFIK KLASIFIKASI PERUSAHAAN BERDASARKAN GENDER
				$('#grafikJumlahJenisKelamin').highcharts({
					chart: {
						type: 'column'
					},
					title: {
						text: 'GRAFIK KLASIFIKASI PERUSAHAAN BERDASARKAN GENDER'
					},
					xAxis: {
						categories: [
						<?php
							
							$jum = count($getJumlahJenisKelamin);
							if ($jum > 0) {
								foreach ($getJumlahJenisKelamin as $row) {
								?>
								'<?php echo $row->jk_pengusaha ?>',
								<?php 
								}
							}
							
						?>
						],
						crosshair: true
					},
					yAxis: {
						min: 0,
						title: {
							text: 'Jumlah Perusahaan'
						}
					},
					tooltip: {
						headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
						pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.f}</b><br/>'
					},
					plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.f}'
                        }
                    }
                },
					series: [
					<?php
						$jum = count($getJumlahJenisKelamin);
						if ($jum > 0) {
							foreach ($getJumlahJenisKelamin as $row) {
							?>
							
							{
								name: '<?php echo $row->jk_pengusaha ?>',
								data: [<?php echo $row->jumlah ?>]
								
							}, 
							<?php 
							}
						}
						
					?>
					]
				});
				//END GRAFIK KLASIFIKASI PERUSAHAAN BERDASARKAN GENDER
				
			});
			
		});
		
		
	</script>
	<?php 
		
		function limitChar($content, $limit) {
			if (strlen($content) <= $limit) {
				return $content;
				} else {
				$hasil = substr($content, 0, $limit);
				return $hasil . "...";
			}
		}
	?> 
	
	<script type="text/javascript">
		$(document).ready(function(){
			var num_messages = <?=$jum_artikel?>;
			var loaded_messages = 0;
			$("#more_button").click(function(){
				loaded_messages += 5;
				$.get("<?=base_url();?>public/homes/berita/" + loaded_messages, function(data){
					$("#main_content").append(data);
				});
				
				if(loaded_messages >= num_messages - 5)
				{
					$("#more_button").hide();
					//alert('hide');
				}
			})
		})
	</script>			
	
	<footer id="footer" class="midnight-blue">
		<div class="container">
			<div class="row">
			<div class="col-sm-12">
			<p align="center">SIPEPENG | Sistem Informasi Pemetaan Pembangunan <br />
			Proyek Perubahan Diklatpim IV - DEVI JANUAR HADI, S.Si, M.Si  <br /> 
			<small><i>Developed by Ratih Pujihati dan  Riza Fauzi Rahman</i> </small> </p>
			</div>                
			</div>
			</div>
			</footer><!--/#footer-->
			
			
			<script src="<?php echo base_url() ?>assets/public/js/bootstrap.min.js"></script>
			<script src="<?php echo base_url() ?>assets/public/js/jquery.prettyPhoto.js"></script>
			<script src="<?php echo base_url() ?>assets/public/js/jquery.isotope.min.js"></script>
			<script src="<?php echo base_url() ?>assets/public/js/main.js"></script>
			<script src="<?php echo base_url() ?>assets/public/js/wow.min.js"></script>
			
			<!-- Modal -->
			<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="readmore" class="modal fade">
			<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
			<h4 class="modal-title"><p id="judul"></p></h4>
			</div>
			<div class="modal-body">
			<div class="blog-item wow fadeInDown">
			<div class="row">
			<div class="col-xs-12 col-sm-2 text-center">
			<div class="entry-meta">
			<p id="tanggal"></p>
			<span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
			</div>
			</div>
			
			<div class="col-xs-12 col-sm-10 blog-content">
			<p id="foto"></p>
			<h2><a href="blog-item.html"> <p id="judul"></p></a></h2>
			<h3> <p id="isi"></p>.</h3>
			</div>
			</div>    
			</div><!--/.blog-item-->
			
			</div>
			
			</div>
			</div>
			</div>
			
			<!-- modal -->	
			
			<script>
			$(document).on("click", ".readmore", function () {
			var id = $(this).data('id');
			$(".modal-body #id").val( id );
			
			$.post('<?php echo base_url() ?>admin/berita_managements/readmore/' +id, function(result)
			{
			var status = result.split("|");
			$("#judul").html("<font color='green'>"+status[0]+"</font>");
			$("#isi").html(status[1]);
			$("#tanggal").html(status[2]);
			$("#foto").html("<img class='img-responsive img-blog' src='<?php echo base_url() ?>assets/upload/berita/"+status[3]+"'width='100%' /></img>");
			});
			
			});
			</script>
			<style>
			.modal-dialog {
			width: 75% !important;
			}
			</style>			