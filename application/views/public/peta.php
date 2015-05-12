<?php $this->load->view('public/templates/header'); ?> 
<?php echo $map['js']; ?>

<body class="homepage">
    <?php $this->load->view('public/templates/menu'); ?> 
    <section id="peraturan" >
        <div class="container">
            <div class="row">
                <?php echo $map['html']; ?>
            </div>
        </div>
    </section>


    <script type="text/javascript">
        function getLokasi(newLat, newLng)
        {
            alert(newLat);
        }
    </script>
