<div class="banner_slide" style="width:100% !important; overflow:hidden;"> 
	<img style="width:100% !important; margin-top: -25%;" src="<?php echo $this->webroot ?>files/restaurants/<?php echo $restaurant['Restaurant']['logo'];?>" class="banner_img" />
   <h2><?php echo $restaurant['Restaurant']['name'];?></h2>
   <div class="abcdef"> </div>
</div>
    
    <div class="bg_reserv bg_reserv3"> 
       <div class="container">
  			<div class="row top_a"> 
        		<div class="icon-wrap wrap_icon"><img src="<?php echo $this->webroot; ?>img/icon-reserve-app.svg"></div>
  			 <h2>RESERVATIONS AVAILABLE WITH THE DROP IN APP</h2>
      <p><?php echo $restaurant['Restaurant']['name']; ?> accepts requests for reservations through the Drop In mobile app.</p>
      <!--div class="btn3">
  	 <button class="btn-rsrv-light3 active1"> Dine In </button>
     <button class="btn-rsrv-light3"> Pick up  </button>
      </div-->
 			</div><!--row-->
       </div><!--container-->
   </div> <!--bg_reserv-->
     
     
     
       <div class="container padding">
  			<div class="row top_a">
            	<div class="col-60 width_chg1"> 
                	<header class="entry-header">
						<h1 class="entry-title"><!--menu--></h1>	
        			</header>
                <div class="entry-content">
		<ul id="fdm-menu-1">


<li class="fdm-column">

<?php foreach ($DishSubcat['DishSubcat'] as $discat) { ?>
           <?php //echo $discat['id']; ?><?php //echo $discat['name']; ?>

<!--<br/><br/>-->
	<ul class="fdm-section">
        <li class="fdm-section-header"><h3><?php echo $discat['name']; ?></h3></li>
        <?php foreach($product as $pdata){  if($discat['id']==$pdata['Product']['dishsubcat_id']) {?>
        <li class="fdm-item-has-price">
			<div class="fdm-item-panel">
				<p class="fdm-item-title"><?php echo $pdata['Product']['name']; ?></p>
                <div class="fdm-item-price-wrapper">
					<span class="fdm-item-price">
					<?php echo $pdata['Product']['price']; ?></span>
  					<span> <?php echo $this->Form->button('Add to Cart', array('class' => 'btn addtocart', 'id' => 'addtocart', 'id' => $pdata['Product']['id']));?></span>                   
				</div>
                <div class="fdm-item-content">
				<p><?php echo $pdata['Product']['description']; ?></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</li><!--fdm-item-has-price-->
        
        <?php } } ?>
        
        
        <?php }?>






</li>
	</ul>
		<!--<div class="fdm-menu-footer clearfix">
			<p><em>A 10% gratuity will be added to parties of 6 or more.</em></p>
		</div>-->
</div>
           </div>
                <br/><br/>
                <div class="col-25n outer_shd width_chg2">    
            <div class="theiaStickySidebar">
                <div id="cart_box" >
                    <h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
                    <div id="added_items">

                    </div>
                   
                    <div class="row" id="options_2">
                       <?php if($restaurant['Restaurant']['reservation']==1){ ?>
                        <div style="display:none;" class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                            <label><input type="radio" value="" checked name="option_1" class="icheck">Delivery</label>
                        </div>
                        <?php } if($restaurant['Restaurant']['takeaway']==1) {?>
                        <div style="display:none;" class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                            <label><input type="radio" value="" checked name="option_2" class="icheck">Take Away</label>
                        </div>
                        <?php } ?>
                    </div><!-- Edn options 2 -->

                   
                    <div id="total_items"></div>                   
                    <hr>
                     <?php @$pickupcode = $_REQUEST['pickup']; ?>
                    <?php 
                   if($loggeduser){ 
                   if($pickupcode=='yes'){?>
                    <a class="btn_full" href="<?php echo $this->webroot ?>shop/address/<?php echo $restaurant['Restaurant']['id']; ?>?pickup=<?php echo $pickupcode;?>">Order now</a>
                    <?php } else{?>
                    
                    <a class="btn_full" href="<?php echo $this->webroot ?>shop/address/<?php echo $restaurant['Restaurant']['id']; ?>">Order now</a>
                    <?php }?>
                    
                    
                   <?php } else{?>
                    <a href="#0" data-toggle="modal" class="btn_full" data-target="#login_2">Confirm Your Order</a>
                   <?php }?>
                </div><!-- End cart_box -->
            </div><!-- End theiaStickySidebar -->
        </div><!-- End col-md-3 -->
                
                         
                
                
            </div><!--row-->
       </div><!--container-->
      