<?php $this->load->view('admin/templates/header'); ?> 
<?php echo $map['js']; ?>   
<body>

    <section id="container" >
        <!--header start-->
        <?php $this->load->view('admin/templates/top-nav'); ?>
        <!--header end-->
       <!--sidebar start-->
			 <?php $this->load->view('admin/templates/menu_admin'); ?>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!--state overview start-->
                <div class="row state-overview">
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol terques">
                                <i class="icon-user"></i>
                            </div>
                            <div class="value">
                                <h1 class="count">
                                   0
                                </h1>
                                <p>Pengguna</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol red">
                                <i class="icon-tags"></i>
                            </div>
                            <div class="value">
                                <h1 class=" count2">
                                    0
                                </h1>
                                <p>Data</p>
                            </div>
                        </section>
                    </div>
                    
                </div>
                <!--state overview end-->

                <div class="row">
                    <div class="col-lg-12">
                        <!--custom chart start-->
                        <div class="border-head">
                            <h3>Grafik Perencanaan</h3>
							
                        </div>
                        <div id="grafikPerencanaan" style="min-width: 800px; height: 400px; margin: 0 auto"></div>
                        <!--custom chart end-->
                    </div>
                   
                </div>
				
				<div class="row">
                    <div class="col-lg-12">
                        <!--custom chart start-->
                        <div class="border-head">
                            <h3>Grafik Terelisasi</h3>
							
                        </div>
                        <div id="grafikTerelisasi" style="min-width: 800px; height: 400px; margin: 0 auto"></div>
                       
                        <!--custom chart end-->
                    </div>
                   
                </div>
				
				<div class="row">
                    <div class="col-lg-12">
                        <!--custom chart start-->
                        <div class="border-head">
                            <h3>Grafik Tidak Terelisasi</h3>
							
                        </div>
                        	<div id="grafikTidakTerelisasi" style="min-width: 800px; height: 400px; margin: 0 auto"></div>
                        
                       
                        <!--custom chart end-->
                    </div>
                   
                </div>
				
					<div class="row">
                    <div class="col-lg-12">
                        <!--custom chart start-->
                        <div class="border-head">
                            <h3>Grafik Kegiatan</h3>
							
                        </div>
                        	<div id="grafikKegiatan" style="min-width: 800px; height: 400px; margin: 0 auto"></div>
                       
                        <!--custom chart end-->
                    </div>
                   
                </div>
				
                
               <div class="container-fluid">
					<div class="row">
						<?php echo $map['html']; ?>
					</div>
				</div>
            </section>
        </section>
        <!--main content end-->
        <?php $this->load->view('admin/templates/footer'); ?>
		
<script>
	//jumlah user
	function countUp(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp(<? echo $jumPengguna ?>);


function countUp2(count)
{
    var div_by = 100,
        speed = Math.round(count / div_by),
        $display = $('.count2'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp2(<? echo $jumlahData ?>);
		
</script>
	<script src="<?php echo base_url() ?>assets/public/js/jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/public/js/highcharts.js"></script>
	<script src="<?php echo base_url() ?>assets/public/js/exporting.js"></script>
	
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
					
				});
				
		});
		
		
	</script>
