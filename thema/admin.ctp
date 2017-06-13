
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $title_for_layout; ?></title>
        <?php echo $this->Html->css(array('bootstrap.min.css', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css', 'admin.css')); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
		
        <?php echo $this->Html->script(array('bootstrap.min.js', 'admin.js', 'jquery.table2excel.js')); ?>

        <?php echo $this->App->js(); ?>

        <?php echo $this->fetch('css'); ?>
        <?php echo $this->fetch('script'); ?>
    </head>
    <body>


        <div id="wrapper">

            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <p class="navbar-brand" >Welcome <?php echo $loggedusername; ?></p>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><?php echo $this->Html->link('Store', array('controller' => 'restaurants', 'action' => 'admin_index', 'admin' => true), array('class' => 'restaurants_autorizemenu')); ?></li>
                            <li><?php echo $this->Html->link('Orders', array('controller' => 'orders', 'action' => 'index', 'admin' => true), array('class' => 'orders_autorizemenu')); ?></li>
                            <?php if($loggedUserRole!='rest_admin') {?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Utils<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index', 'admin' => true), array('class' => 'users_autorizemenu')); ?></li>
                                    <li><?php echo $this->Html->link('User Add', array('controller' => 'users', 'action' => 'add', 'admin' => true), array('class' => 'users_autorizemenu')); ?></li>
                                   
                                </ul>
                            </li>
                            <?php } ?>
                            <li><?php echo $this->Html->link('All Order Report', array('controller' => 'orders', 'action' => 'indexall', 'admin' => true), array('class' => 'orders_autorizemenu')); ?></li>
                       
                            <li><?php echo $this->Html->link('My Profile', array('controller' => 'orders', 'action' => 'myaccount', 'admin' => true), array('class' => 'users_autorizemenu1')); ?></li>
                            
                            
                             <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout', 'admin' => true), array('class' => 'users_autorizemenu1')); ?></li>
                        
                        
                        </ul>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                      
                    <li class="sidebar-brand">
                        <a href="#">
                            Brand
                        </a>

                    </li>

                    <li>
                        <?php echo $this->Html->link('Dish Categories', array('controller' => 'dish_categories', 'action' => 'add', 'admin' => true), array('class' => 'dish_categories_autorizemenu')); ?>
                    </li>                          

                    <li>
                        <?php echo $this->Html->link('Page', array('controller' => 'staticpages', 'action' => 'add', 'admin' => true), array('class' => 'staticpages_autorizemenu')); ?>
                    </li>


					<li>
                        <?php echo $this->Html->link('Vat on products', array('controller' => 'products', 'action' => 'addvat', 'admin' => true), array('class' => 'socials_autorizemenu')); ?>
                    </li>
					<li>
                        <?php echo $this->Html->link('Postal Codes', array('controller' => 'picodes', 'action' => 'add', 'admin' => true), array('class' => 'socials_autorizemenu')); ?>
                    </li>
					<li>
                        <?php echo $this->Html->link('Discount', array('controller' => 'coupons', 'action' => 'add', 'admin' => true), array('class' => 'socials_autorizemenu')); ?>
                    </li>
					<li>
                        <?php echo $this->Html->link('Additional Charges', array('controller' => 'additionalcharges', 'action' => 'add', 'admin' => true), array('class' => 'socials_autorizemenu')); ?>
                    </li>
					<li>
                        <?php echo $this->Html->link('Bring Postal', array('controller' => 'services', 'action' => 'add', 'admin' => true), array('class' => 'socials_autorizemenu')); ?>
                    </li>
					
              </ul>
            </nav>
            
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
                <?php
                foreach ($controllerLists as $controllerList) {
                    if ($loggedUserRole == 'rest_admin') {
                        if (isset($authocss)) {
                            if (in_array(strtolower(str_replace(' ', '_', $controllerList['displayName'])), $authocss)) {
                                $d = strtolower(str_replace(' ', '_', $controllerList['displayName']));
                                echo "<script>$('." . $d . "_autorizemenu').remove()</script>";
                            }
                        }
                    } else {
                        if (isset($authocss)) {
                            if (!in_array(strtolower(str_replace(' ', '_', $controllerList['displayName'])), $authocss)) {
                                $d = strtolower(str_replace(' ', '_', $controllerList['displayName']));
                                echo "<script>$('." . $d . "_autorizemenu').remove()</script>";
                            }
                        }
                    }
                }
                ?>
                <div class="main_admin_container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content foodpatrn">
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content foodpatrn'); ?>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <div class="footer">
            <p>&copy; <?php echo date('Y'); ?> <?php echo env('HTTP_HOST'); ?></p>
        </div>

<!--        <div class="sqldump">
        </div> -->
		
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


			
				
            });
            $("#dishcatname").change(function () {
                var a = $(this).val();
                $.post("http://trenogmat.no/admin/products/getsubcat", {'id': a}, function (d) {
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

        </script>




<?php //print_r($authocss);  ?>
<?php //print_r($controllerLists);  ?>


    </body>
</html>