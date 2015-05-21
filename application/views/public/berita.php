<div class="blog">
            <div class="row">
				<div class="col-md-12">
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
					
					
				</div><!--/.col-md-12-->
				
				
			</div><!--/.row-->
		</div>
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
	