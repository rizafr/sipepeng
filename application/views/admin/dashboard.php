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
                    <div class="col-lg-8">
                        <!--custom chart start-->
                        <div class="border-head">
                            <h3>Rekapitulasi Data</h3>
							
                        </div>
                        <div class="custom-bar-chart">
                            <ul class="y-axis">                                
                              <li><span>100</span></li>
                              <li><span>80</span></li>
                              <li><span>60</span></li>
                              <li><span>40</span></li>
                              <li><span>20</span></li>
                              <li><span>0</span></li>
                            </ul>
							<div class="bar ">
                                <div class="title">ARTESIS</div>
                                <div class="value tooltips" data-original-title="<?php echo number_format($persenArtesis,2);?>%" data-toggle="tooltip" data-placement="top"><?php echo $persenArtesis?>%</div>
                            </div>
                            
							<div class="bar">
                                <div class="title">DRAINASE</div>
                                <div class="value tooltips" data-original-title="<?php echo number_format($persenDrainase,2) ?>%" data-toggle="tooltip" data-placement="top"><?php echo $persenDrainase ?>%</div>
                            </div>
                            
							<div class="bar">
                                <div class="title">JALAN</div>
                                <div class="value tooltips" data-original-title="<?php echo number_format($persenJalan,2)?>%" data-toggle="tooltip" data-placement="top"><?php echo $persenJalan ?>%</div>
                            </div>
                            
							<div class="bar">
                                <div class="title">Kirmir</div>
                                <div class="value tooltips" data-original-title="<?php echo number_format($persenKirmir,2) ?>%" data-toggle="tooltip" data-placement="top"><?php echo $persenKirmir ?>%</div>
                            </div>
                            
							<div class="bar">
                                <div class="title">Mck</div>
                                <div class="value tooltips" data-original-title="<?php echo number_format($persenMck,2) ?>%" data-toggle="tooltip" data-placement="top"><?php echo $persenMck ?>%</div>
                            </div>
                            
							<div class="bar">
                                <div class="title">Septictank</div>
                                <div class="value tooltips" data-original-title="<?php echo number_format($persenSeptictank,2) ?>%" data-toggle="tooltip" data-placement="top"><?php echo $persenSeptictank ?>%</div>
                            </div>
                            
							<div class="bar">
                                <div class="title">Komunal    </div>
                                <div class="value tooltips" data-original-title="<?php echo number_format($persenSeptictankKomunal,2)?>%" data-toggle="tooltip" data-placement="top"><?php echo $persenSeptictankKomunal ?>%</div>
                            </div>
                           
						   <div class="bar">
                                <div class="title">Dangkal</div>
                                <div class="value tooltips" data-original-title="<?php echo number_format($persenSumurDangkal,2) ?>%" data-toggle="tooltip" data-placement="top"><?php echo $persenSumurDangkal ?>%</div>
                            </div>
                           
						   <div class="bar">
                                <div class="title">Resapan</div>
                                <div class="value tooltips" data-original-title="<?php echo number_format($persenSumurResapan,2) ?>%" data-toggle="tooltip" data-placement="top"><?php echo $persenSumurResapan ?>%</div>
                            </div>
                            
                            
                        </div>
                        <!--custom chart end-->
                    </div>
                    <div class="col-lg-4">
                        <!--new earning start-->
                        <div class="panel terques-chart">
                            <div class="panel-body chart-texture">
                                <div class="chart">
                                    <div class="heading">
                                        <span>Friday</span>
                                        <strong>$ 57,00 | 15%</strong>
                                    </div>
                                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                                </div>
                            </div>
                            <div class="chart-tittle">
                                <span class="title">New Earning</span>
                                <span class="value">
                                    <a href="#" class="active">Market</a>
                                    |
                                    <a href="#">Referal</a>
                                    |
                                    <a href="#">Online</a>
                                </span>
                            </div>
                        </div>
                        <!--new earning end-->

                        <!--total earning start-->
                        <div class="panel green-chart">
                            <div class="panel-body">
                                <div class="chart">
                                    <div class="heading">
                                        <span>June</span>
                                        <strong>23 Days | 65%</strong>
                                    </div>
                                    <div id="barchart"></div>
                                </div>
                            </div>
                            <div class="chart-tittle">
                                <span class="title">Total Earning</span>
                                <span class="value">$, 76,54,678</span>
                            </div>
                        </div>
                        <!--total earning end-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <!--user info table start-->
                        <section class="panel">
                            <div class="panel-body">
                                <a href="#" class="task-thumb">
                                    <img src="<?php echo base_url();?>assets/admin/img/avatar1.jpg" alt="">
                                </a>
                                <div class="task-thumb-details">
                                    <h1><a href="#"><?php echo $this->session->userdata('nama')?></a></h1>
                                    <p><?php echo $this->session->userdata('jenis_pengguna')?></p>
                                </div>
                            </div>
                            <table class="table table-hover personal-task">
                                <tbody>
                                    <tr>
                                        <td>
                                            <i class=" icon-tasks"></i>
                                        </td>
                                        <td>New Task Issued</td>
                                        <td> 02</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="icon-warning-sign"></i>
                                        </td>
                                        <td>Task Pending</td>
                                        <td> 14</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="icon-envelope"></i>
                                        </td>
                                        <td>Inbox</td>
                                        <td> 45</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class=" icon-bell-alt"></i>
                                        </td>
                                        <td>New Notification</td>
                                        <td> 09</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <!--user info table end-->
                    </div>
                    <div class="col-lg-8">
                        <!--work progress start-->
                        <section class="panel">
                            <div class="panel-body progress-panel">
                                <div class="task-progress">
                                    <h1>Work Progress</h1>
                                    <p>Anjelina Joli</p>
                                </div>
                                <div class="task-option">
                                    <select class="styled">
                                        <option>Anjelina Joli</option>
                                        <option>Tom Crouse</option>
                                        <option>Jhon Due</option>
                                    </select>
                                </div>
                            </div>
                            <table class="table table-hover personal-task">
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Target Sell
                                        </td>
                                        <td>
                                            <span class="badge bg-important">75%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress1"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            Product Delivery
                                        </td>
                                        <td>
                                            <span class="badge bg-success">43%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress2"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            Payment Collection
                                        </td>
                                        <td>
                                            <span class="badge bg-info">67%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress3"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            Work Progress
                                        </td>
                                        <td>
                                            <span class="badge bg-warning">30%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress4"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            Delivery Pending
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">15%</span>
                                        </td>
                                        <td>
                                            <div id="work-progress5"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <!--work progress end-->
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