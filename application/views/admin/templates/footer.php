<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2015 &copy; SIPEPENG.
        <a href="#" class="go-top">
            <i class="icon-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.8.3.min.js"></script>
<!--Data table css-->
<!--<script>
    var base_url_state = "<?php echo base_url('admin/state_managements'); ?>";
    var base_url_saved = "<?php echo base_url('admin/state_managements/process_add/add'); ?>";
</script>-->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/admin/assets/advanced-datatable/media/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/owl.carousel.js" ></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.customSelect.min.js" ></script>
<!--Data table css-->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/admin/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/respond.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.validate.min.js"></script>
	
<script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>

<!--common script for all pages-->
<script src="<?php echo base_url(); ?>assets/admin/js/common-scripts.js"></script>

<!--script for this page-->
<script src="<?php echo base_url(); ?>assets/admin/js/sparkline-chart.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/easy-pie-chart.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/count.js"></script>
 
 
<script src="<?php echo base_url(); ?>assets/admin/assets/jquery-knob/js/jquery.knob.js"></script>

<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

<!--script for this page only-->

<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#example').dataTable( {
            "aaSorting": [[ 6, "desc" ]]
        } );
    } );
</script>

<!--main content end-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/data-tables/DT_bootstrap.js"></script>
 <script src="<?php echo base_url(); ?>assets/admin/assets/fancybox/source/jquery.fancybox.js"></script>

<!--script for this page only-->
<script src="<?php echo base_url(); ?>assets/admin/js/editable-table.js"></script>

<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>

<script>

    //knob
    $(".knob").knob();

</script>
<!-- END JAVASCRIPTS -->
 <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });

  </script>
</body>
</html>