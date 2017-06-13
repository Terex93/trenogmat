<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'TrenogMat';
?>
<!DOCTYPE html>
<html>
    <head>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>


      
        <title>
            TrenogMat :
            <?= $this->fetch('title') ?>
			
        </title>
        <link rel="icon" href="<?php echo $this->webroot; ?>img/32x32.png"> 
        <?= $this->Html->css(array('../dashboard/bootstrap/css/bootstrap.min.css', '../dashboard/dist/css/AdminLTE.min.css',
            '../dashboard/dist/css/skins/_all-skins.min.css', '../dashboard/plugins/iCheck/flat/blue.css', '../dashboard/plugins/morris/morris.css',
            '../dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css', '../dashboard/plugins/datepicker/datepicker3.css',
            '../dashboard/plugins/datepicker/datepicker3.css', '../dashboard/plugins/daterangepicker/daterangepicker.css',
            '../dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')) ?>
        <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') ?>
        <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') ?>      
       
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>      
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <?= $this->element('Dashboard/header') ?>
    <?= $this->element('Dashboard/sidebar') ?>
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="smart-container">
    <?php echo $this->fetch('content') ?>
    </div>
</div>
<?= $this->element('Dashboard/footer') ?>
<?php echo $this->Html->script(array('../dashboard/plugins/jQuery/jquery-2.2.3.min.js', 'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js','jquery.table2excel.js')); ?>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <?php
    echo $this->Html->script(array('../dashboard/bootstrap/js/bootstrap.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js', '../dashboard/plugins/morris/morris.min.js', '../dashboard/plugins/sparkline/jquery.sparkline.min.js',
        '../dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', '../dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        '../dashboard/plugins/knob/jquery.knob.js', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js', '../dashboard/plugins/daterangepicker/daterangepicker.js',
        '../dashboard/plugins/datepicker/bootstrap-datepicker.js', '../dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.j', '../dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        '../dashboard/plugins/slimScroll/jquery.slimscroll.min.js', '../dashboard/plugins/fastclick/fastclick.js', '../dashboard/dist/js/app.min.js',
        '../dashboard/dist/js/app.min.js'));
    ?>
        <script src="<?php echo $this->webroot; ?>home/js/customcheckall.js"></script>
        <script src="<?php echo $this->webroot; ?>home/js/addtocart.js"></script>
<script>
            $(document).ready(function () {
                var trigger = $('.hamburger'),
                        overlay = $('.overlay'),
                        isClosed = false;

                trigger.click(function () {
                    hamburger_cross();
                });

                function hamburger_cross() {

                    if (isClosed == true) {
                        overlay.hide();
                        trigger.removeClass('is-open');
                        trigger.addClass('is-closed');
                        isClosed = false;
                    } else {
                        overlay.show();
                        trigger.removeClass('is-closed');
                        trigger.addClass('is-open');
                        isClosed = true;
                    }
                }

                $('[data-toggle="offcanvas"]').click(function () {
                    $('#wrapper').toggleClass('toggled');
                });
            });
            $("#dishcatname").change(function () {
                var a = $(this).val();
                $.post("<?php echo $this->webroot; ?>admin/products/getsubcat", {'id': a}, function (d) {
                    var html = '';
                    var data = jQuery.parseJSON(d);
                    console.log(data);
                    for (var key in data) {
                        html += '<option value="' + key + '">' + data[key] + '</option>';
                    }
                    jQuery('#dishsubcatname').html('');
                    jQuery('#dishsubcatname').html(html);
                });
            });
            $( "#dishcatname" ).trigger( "change" );
				$("#export").click(function(){
				  $("#table2excel").table2excel({
									exclude: ".noExl",
									name: "Excel Document Name",
									filename: "TregnoMat Orders",
									fileext: ".xls",
									exclude_img: true,
									exclude_links: true,
									exclude_inputs: true
				  }); 
				});
				
				  $("#export_product").click(function(){
					  alert('hh');
				  $("#table2excel2").table2excel({
									exclude: ".noExl",
									name: "Excel Document Name",
									filename: "TregnoMat Products", 
									fileext: ".xls",
									exclude_img: true,
									exclude_links: true,
									exclude_inputs: true
				  }); 
				});
				
				

				
				
        </script>


</body>
</html>
