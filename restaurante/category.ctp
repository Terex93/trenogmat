 <?php
	 //print_r($restaurant); ?>
<div class="banner_slide" style="width:100% !important; overflow:hidden; position:relative;"> 
	<img style="width:100% !important; position:absolute; top:0; right:0; left:0; bottom:0; margin:auto;" src="<?php echo $this->webroot ?>files/restaurants/<?php echo $restaurant['Restaurant']['logo'];?>" class="banner_img" />
   <h2><?php echo $restaurant['Restaurant']['name'];?></h2>
   <div class="abcdef"> </div>
</div>
   
    
   	<div class="bg_reserv"> 
       <div class="container">
  		<div class="row top_a"> 
        <div class="icon-wrap wrap_icon"><img src="<?php echo $this->webroot; ?>img/icon-reserve-app.svg"></div>
  			 <h2 class="re_drop1">RESERVATIONS AVAILABLE WITH THE DROP IN APP</h2>
      <p class="re_drop2"><?php echo $restaurant['Restaurant']['name']; ?> 
      <?php $latitudex = $restaurant['Restaurant']['latitude']; ?>
      <?php $longitudex = $restaurant['Restaurant']['longitude'];
	  		global $latitudex,$longitudex;
	   ?>
      accepts requests for reservations through the Drop in mobile app.</p>
      <div class="btn3 btn553">
      <center>
      <?php /*@$commission_pick = $restaurant['Restaurant']['commission_pick']; 
	  		@$deliveryz = $restaurant['Restaurant']['reservation'];
	  		 //$deliveryz = $restaurant['Restaurant']['delivery'];
	         @$takeawayz = $restaurant['Restaurant']['takeaway'];
	  if($deliveryz==1){*/
	   ?>
      
  	<?php @$pickupcode = $_REQUEST['pickup']; ?>
      <?php 
	 // print_r($discategory['DishCategory']);
	  if($discategory['DishCategory']){
	   foreach ($discategory['DishCategory'] as $dact) {?>
     
                   <a class='one1' href="<?php echo $this->webroot; ?>restaurants/detail/<?php echo $restaurant['Restaurant']['id']; ?>/<?php echo $dact['id']; if($pickupcode){?>/1?pickup=yes<?php }else{echo '/0';}?>" class="active btn-rsrv-light3"><?php echo $dact['name']; ?></a>
                    
     
     
     
      
      <?php //}
	  }}
	  /*if($takeawayz==1){
	  ?>
     <?php
	 if($discategory['DishCategory']){
	   foreach ($discategory['DishCategory'] as $dact) {?>
     <?php } ?> 
                   <a class='one2' href="<?php echo $this->webroot; ?>restaurants/detail/<?php echo $restaurant['Restaurant']['id']; ?>/<?php echo $dact['id']; ?>/1?pickup=yes" class="active btn-rsrv-light3">Pick Up</a>
                    
                      <?php }} */?>
                      </center>
      </div>
    	</div>
       </div>
     </div> 
       <style>	   
		  <?php
		  if($deliveryz==1 and $takeawayz==1){
			  ?>
			  .one1{ width: 48%;
    border: 1px solid #cecece;
    padding: 9px 0;
    float: left;
    background: #fff;
    font-size: 15px;
    color: #545454;
    margin-right: 1%; }
				.one2{ width: 48%;
    border: 1px solid #cecece;
    padding: 9px 0;
    float: left;
    background: #fff;
    font-size: 15px;
    color: #545454;
    margin-right: 1%; }
			 
			  <?php 
			  }
		  elseif($deliveryz==1){
			  ?>
			  .one1{    
			  width: 48%;
    border: 1px solid #cecece;
    padding: 9px 0;
    float: left;
    background: #fff;
    font-size: 15px;
    color: #545454;
    margin-right: 1%; 
	margin-left: 25%;
			  }
			  <?php 
			  }
			  elseif($takeawayz==1){?>
				 .one2{     width: 48%;
    border: 1px solid #cecece;
    padding: 9px 0;
    float: left;
    background: #fff;
    font-size: 15px;
    color: #545454;
    margin-right: 1%; 
	margin-left: 25%;			 
				 
				 }
					<?php 
					 
			  }
		  ?> 	  
	   </style>
       
       <?php   @$cuisine_title1 = $restaurant['Restaurant']['cuisine_title1']; 
       		   @$cuisine_description1 = $restaurant['Restaurant']['cuisine_description1'];
			   
			   /*$cuisine_title2 = $restaurant['Restaurant']['cuisine_title2']; 
       		   $cuisine_description2 = $restaurant['Restaurant']['cuisine_description2'];
			   
			   $cuisine_title3 = $restaurant['Restaurant']['cuisine_title3']; 
       		   $cuisine_description3 = $restaurant['Restaurant']['cuisine_description3'];*/
			   
			   @$cuisine_title4 = $restaurant['Restaurant']['cuisine_title4']; 
       		   @$cuisine_description4 = $restaurant['Restaurant']['cuisine_description4'];
	   ?>
    <div class="container">
  		<div class="row padding margn_topppp">
        <center>
        
        	<div class="col-md-3 col-md-offset-3" style="border-right:#CCC 1px solid;">
          		    <img src="<?php echo $this->webroot; ?>img/icon-cuisine.svg" class="icon">           	 
       			  <div class="category"><?php echo $cuisine_title1;?></div>
        		  <div class="value ng-binding"><?php echo $cuisine_description1;?></div>
            </div>
            <!--<div class="col-25">
            	     <img src="<?php //echo $this->webroot; ?>img/icon-neighborhood.svg" class="icon">
       			  <div class="category"><?php //echo $cuisine_title2;?></div>
        		  <div class="value ng-binding"><?php //echo $cuisine_description2;?></div>
            </div>
            <div class="col-25">
            		 <img src="<?php //echo $this->webroot; ?>img/icon-dress-code.svg" class="icon">
       			  <div class="category"><?php //echo $cuisine_title3;?></div>
        		  <div class="value ng-binding"><?php //echo $cuisine_description3;?></div>
            </div>-->
            <div class="col-md-3">
            		 <img src="<?php echo $this->webroot; ?>img/icon-price.svg" class="icon">
       			  <div class="category"><?php echo $cuisine_title4;?></div>
        		  <div class="value ng-binding"><?php echo $cuisine_description4;?></div>
            </div>
            </center>
      	 </div>  
    </div>
<div class="map"> 
<div id="map_canvas"></div>
<div class="location-info">

          <div class="name1"><?php echo $restaurant['Restaurant']['name']; ?></div>
          <div class="address1"><?php echo $restaurant['Restaurant']['address']; ?></div>
          <?php  $latitudex = $restaurant['Restaurant']['latitude']; 
       			 $longitudex = $restaurant['Restaurant']['longitude'];
	  		 	 global $latitudex,$longitudex;
	   ?>
          <!--<div class="links1"><a href="https://www.google.com/maps/@<?php //echo $latitudex;?>,<?php //echo $longitudex;?>,15z?hl=en-GB" target="_blank"><span class="icon-map"></span>View on Map</a>-->
          
          
          <div class="links1"><a href="https://www.google.com/maps/place/<?php echo $latitudex;?>,<?php echo $longitudex;?>+(<?php echo $restaurant['Restaurant']['name']; ?>)/@<?php echo $latitudex;?>,<?php echo $longitudex;?>,17z/data=!3m1!4b1" target="_blank"><span class="icon-map"></span>View on Map</a>
          
       <!--https://www.google.com/maps/place/49.46800006494457,17.11514008755796/@49.46800006494457,17.11514008755796,17z/data=!3m1!4b1-->
       
      
    <!-- 
    	WORKING CODE
    <div class="links1"><a href="https://www.google.com/maps/place/<?php //echo $latitudex;?>,<?php //echo $longitudex;?>/@<?php// echo $latitudex;?>,<?php //echo $longitudex;?>,17z/data=!3m1!4b1" target="_blank"><span class="icon-map"></span>View on Map</a>-->
          
       
         <a href="https://www.google.com/maps/dir//<?php echo $restaurant['Restaurant']['name']; ?>/@<?php echo $latitudex;?>,<?php echo $longitudex;?>,17z/data=!4m15!1m6!3m5!1s0x390fed21c1298543:0x441f89ff27ea829d!2s<?php echo $restaurant['Restaurant']['name']; ?>!8m2!3d<?php echo $latitudex;?>!4d<?php echo $longitudex;?>!4m7!1m0!1m5!1m1!1s0x390fed21c1298543:0x441f89ff27ea829d!2m2!1d<?php echo $longitudex;?>!2d<?php echo $latitudex;?>" target="_blank"><span class="icon-map"></span>Get Directions</a>
         
         
         <!-- <a href="https://www.google.com/maps/dir//<?php //echo $restaurant['Restaurant']['name']; ?>/@30.7259419,76.8029728,17z/data=!4m15!1m6!3m5!1s0x390fed21c1298543:0x441f89ff27ea829d!2s<?php //echo $restaurant['Restaurant']['name']; ?>!8m2!3d30.7259419!4d76.8051615!4m7!1m0!1m5!1m1!1s0x390fed21c1298543:0x441f89ff27ea829d!2m2!1d76.8051615!2d30.7259419" target="_blank"><span class="icon-map"></span>View on MapDD</a>-->
          
          
          
          
         <!--  <a href=" https://www.google.com/maps/dir//<?php //echo $latitudex;?>,<?php //echo $longitudex;?>+(<?php //echo $restaurant['Restaurant']['name']; ?>)/@<?php //echo $latitudex;?>,<?php //echo $longitudex;?>,19z"  target="_blank"><span class="icon-directions"></span>Get Directions</a>-->
         
          
          </div>
        </div>
</div>
   
  
  <div class="container">
  		<div class="row top_a padding-2"> 
        	<div class="col-50 venue-details"> 
            	<h3>Description</h3>
                <p><?php echo $restaurant['Restaurant']['description']; ?></p>
            </div>
            
   <?php //print_r($discategory['DishCategory']);?>
  			<div class="col-50"> 
            	<ul class="attributes">
  					<li> 
                    <!--<span class="icon icon-hours"></span> -->
                    <p class="closed"><span class="icon icon-hours" style="color:#d71f26 !important; "></span> Opening Time: <?php echo $restaurant['Restaurant']['opening_time'];?></p>
                    <p class="closed"><span class="icon icon-hours" style="color:#d71f26 !important;"></span> Closing Time: &nbsp; <?php echo $restaurant['Restaurant']['closing_time'];?></p> 
                    <p><span class="icon icon-website"></span> 
                        <a href="http://<?php echo $restaurant['Restaurant']['website']; ?>" target="_blank">Restaurant's Website</a></p>
                        <!--<p>                        <span class="icon icon-menu"></span><?php //if($discategory['DishCategory']){  foreach ($discategory['DishCategory'] as $dact) {?>
                   <a href="<?php //echo $this->webroot; ?>restaurants/category/<?php //echo $restaurant['Restaurant']['id']; ?>/<?php ///echo $dact['id']; ?>" class="active">Menu</a>
                    <?php // } }?></p>--> 
                        
                   </li>
  					
			</ul>
            
            </div> 
      
    	</div>
       </div>
 <?php
 //echo '<pre>';
$countxx = count($gimages);
//echo 'ssssssssssssssss';
  //print_r($gimages);?>
  
  
  <div style="" class="gallery autoplay items-<?php echo $countxx; ?> mygallery">
   <!-- <div id="item-1" class="control-operator"></div>
    <div id="item-2" class="control-operator"></div>
    <div id="item-3" class="control-operator"></div>
    <div id="item-4" class="control-operator"></div>
    <div id="item-5" class="control-operator"></div>-->


<?php
$slide = 1;

foreach($gimages as $gimage){
	
	?> <div id="item-<?php echo $slide; ?>" class="control-operator"></div><?php
	
		 $galleryimage = $gimage['Gallery']['image'];
		 ?>
         <figure class="item">
     <img src="<?php echo $this->webroot; ?>files/restaurants/<?php echo $galleryimage; ?>" alt="Dropin" />
    </figure>
         <?php
$slide++;		 		
}
?>
<!--
    <figure class="item">
     <img src="<?php //echo $this->webroot; ?>img/slide11.jpg" alt="11" />
    </figure>

    <figure class="item">
      <img src="<?php //echo $this->webroot; ?>img/slide12.jpeg" alt="12" />
    </figure>

    <figure class="item">
      <img src="<?php //echo $this->webroot; ?>img/slide13.jpg" alt="13" />
    </figure>
    
     <figure class="item">
      <img src="<?php //echo $this->webroot; ?>img/slide14.jpeg" alt="14" />
    </figure>

    <figure class="item">
      <img src="<?php //echo $this->webroot; ?>img/slide15.jpg" alt="15" />
    </figure>-->
<div class="controls">
<?php
$controlexx = 1;
foreach($gimages as $gimage){ ?>
    
      <a href="#item-<?php echo $controlexx; ?>" class="control-button">•</a>
      <!--<a href="#item-2" class="control-button">•</a>
      <a href="#item-3" class="control-button">•</a>
      <a href="#item-4" class="control-button">•</a>
      <a href="#item-5" class="control-button">•</a>-->
    
	<?php
	$controlexx++;
	 }?>
     </div>
  </div>
  
  
  
     <div class="container rec">
  <div class="row">
      	<h2 class="rech">Recommendations</h2>
        <p class="recp">Based on Your Interest in <?php echo $restaurant['Restaurant']['name']; ?></p>
        
        <?php
	  //echo '<pre>';
//print_r($fetchrec );
foreach($fetchrec as $fetchrecs):
?>
<div class="col-25-2" style="min-height:200px;">
	<a href="<?php echo $fetchrecs['Restaurant']['id']; ?>">
 	<img style="min-height:200px;" src="<?php echo $this->webroot; ?>files/restaurants/<?php echo $fetchrecs['Restaurant']['logo']; ?>" alt="pic1">
    <div class="overlay"></div>
  	<div class="text-wrap">
    	<div class="name"><?php echo $fetchrecs['Restaurant']['name']; ?></div>
    	<div class="aspects">
        	<span class="label"><?php $addressd = $fetchrecs['Restaurant']['address'];
			echo wordwrap($addressd,30,"<br>\n"); ?></span>
            <span class="label"><?php echo $fetchrecs['Restaurant']['city']; ?>,<?php echo $fetchrecs['Restaurant']['state']; ?></span>
         </div>
  	</div>
  </a>
</div> <!-- col-25 -->

<?php
endforeach;
?>
        
        
        
    


</div>
</div>
  <?php //echo '<pre>';
//print_r($restaurant);
?>
      
    <div class="search_res1 rec ">  	
<div class="container">
  <div class="row">
  		<div class="col-75">
        	<img src="<?php echo $this->webroot; ?>img/icon-neighborhood-transparent.svg" class="neigh">
      <p class="newsletter-cta-text">Want recommendations, chef insights, local tips and more sent straight to your inbox?</p>
        </div>
        <div class="col-25n"> 
        	 <a href="http://trenogmat.no/pages/contact" class="newsletter-cta">Yes, Please!</a>
        </div>
  </div><!--row-->
  </div>
  </div>
  

















                       