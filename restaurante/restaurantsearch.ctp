<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<style> input[type=checkbox] {
    -webkit-appearance: none !important;
       border: 1px solid #d71f26 !important;
    border-radius: 0 !important;
    width: 15px !important;
    height: 15px!important;
    top: -2px!important;
    outline: 0!important;
    color: #fff!important;
    cursor: pointer!important;
    position: absolute!important;
    margin-left: -20px!important;
    -webkit-tap-highlight-color: rgba(0,0,0,.2)!important;
    box-sizing: border-box!important;
    padding: 0!important;
	
	
	
	
}
input[type=checkbox]:checked {
    background: #dc0303 !important;
}
.container1 label {
   
    font-size: 17px;
    margin-left: 9px;
    margin-top: 0 !important;
}
</style>

<!-- SubHeader =============================================== -->
<div class="heroes1">
 <section class="Hero" style=" ">
          <div class="Hero-text">
            <h1 class="Hero-heading Hero-heading1">Experience something new.</h1>
            <h2 class="Hero-subHeading Hero-subHeading1">Book unique experiences at restaurants across the globe.</h2>
            
            
			<form class="search_rest2" action="<?php echo $this->webroot; ?>restaurants/restaurantsearch?search" method="post">
			
			
			
			
				 <div class="search_rest2">
                 <input id="autocomplete" type="text"  placeholder="Enter your address" class="span4">
                 <input type="hidden" name=data[Restaurant][lat] class="field" id="latitude"></input>
                 <input type="hidden" name=data[Restaurant][long] class="field" id="longitude"></input>
                  </div>
				  
						<div style="width: 14%;float: right; margin-right: 1.5%;   margin-top: 1.5%; background-color: #d71f26; height: 35px; padding:8px 0px;"><button style="background-color: #d71f26;"><img style="width:20px;background-color: #d71f26;" src="<?php echo $this->webroot; ?>home/img/search.png" alt="image"></button>
						</div>
			</form>
			
			
			
			
			
	
			
			
			
			
			
			
			
            
            <span style="font-size:16px; font-weight:bold; padding-top:50px; color:#F7F7F7" class="Button-content">Discover Restaurants</span></div>
          <div class="Hero-switcher">
            <div class="Hero-switcherTrack"></div>
          </div>
          <div class="Hero-restaurants">
            <div class="Hero-restaurant">
              <div class="Hero-restaurantImage" title="" style=""></div>
              <div class="Hero-description">
                <div class="Hero-descriptionText"><span class="Hero-experience">Chef's Tasting Menu</span><br>
                  <span class="Hero-restaurantMeta">Club, Kuwait</span></div>
              </div>
              <div class="Hero-switcher">
                <div class="Hero-switcherDot"></div>
              </div>
            </div>
            <div class="Hero-restaurant was-selected">
              <div class="Hero-restaurantImage" title="" style="background-image: rgba(0,0,0,0)url("../img/slide1.jpg");"></div>
              <div class="Hero-description">
                <div class="Hero-descriptionText"><span class="Hero-experience">Tasting Menu</span><br>
                  <span class="Hero-restaurantMeta">Kuwait</span></div>
              </div>
              <div class="Hero-switcher">
                <div class="Hero-switcherDot"></div>
              </div>
            </div>
            <div class="Hero-restaurant is-selected">
              <div class="Hero-restaurantImage" title="" style="background-image: url(&quot;/www-assets/824/images/hero/milk-room.jpg&quot;);"></div>
              <div class="Hero-description">
                <div class="Hero-descriptionText"><span class="Hero-experience">Vintage Spirits</span><br>
                  <span class="Hero-restaurantMeta">Milk Room, Kuwait</span></div>
              </div>
              <div class="Hero-switcher">
                <div class="Hero-switcherDot"></div>
              </div>
            </div>
            <div class="Hero-restaurant">
              <div class="Hero-restaurantImage" title="Andrew Thomas Lee and Square Feet Studio" style=""></div>
              <div class="Hero-description">
                <div class="Hero-descriptionText"><span class="Hero-experience">Chef's Tasting Menu</span><br>
                  <span class="Hero-restaurantMeta">Kuwait</span></div>
              </div>
              <div class="Hero-switcher">
                <div class="Hero-switcherDot"></div>
              </div>
            </div>
            <div class="Hero-restaurant">
              <div class="Hero-restaurantImage" title="" style=""></div>
              <div class="Hero-description">
                <div class="Hero-descriptionText"><span class="Hero-experience">Kitchen Table Experience</span><br>
                  <span class="Hero-restaurantMeta">Kuwait</span></div>
              </div>
              <div class="Hero-switcher">
                <div class="Hero-switcherDot"></div>
              </div>
            </div>
            <div class="Hero-restaurant">
              <div class="Hero-restaurantImage" title="Quentin Bacon" style=""></div>
              <div class="Hero-description">
                <div class="Hero-descriptionText"><span class="Hero-experience">Black Truffle Menu</span><br>
                  <span class="Hero-restaurantMeta">Kuwait</span></div>
              </div>
              <div class="Hero-switcher">
                <div class="Hero-switcherDot"></div>
              </div>
            </div>
            <div class="Hero-restaurant">
              <div class="Hero-restaurantImage" title="" style=""></div>

              <div class="Hero-description">
                <div class="Hero-descriptionText"><span class="Hero-experience">Tasting Menu</span><br>
                  <span class="Hero-restaurantMeta">Farm Spirit, Kuwait</span></div>
              </div>
              <div class="Hero-switcher">
                <div class="Hero-switcherDot"></div>
              </div>
            </div>
          </div>
        </section>
        
     </div>   
        
        
    
    
    <div class="search_res">  	
<div class="container">
  <div class="row">
    <div class="col-left">
      <button class="btn-rsrv-light fiter_popup"><img src="<?php echo $this->webroot; ?>img/icon-filter-btn-gold.svg"> <span>Filter</span></button>
      <!--<button class="btn-rsrv-light"><img src="<?php //echo $this->webroot; ?>img/icon-search-btn-gold.svg"><span> Search</span></button>-->
    </div>
    <div class="col-right">
    <?php foreach ($resdata['Restaurant'] as $dahi) {
		$findcity = $dahi['city'];
		}?>
      <p class="num-venues"> <?php if($findcity){ echo 'Restaurants in '.$findcity;}?></p>
    </div>
  </div>
</div>

  </div>   
    <?php
	
	
?>
   <div class="container margin_top">
  <div class="row">
     <div class="strip_list wow fadeIn" data-wow-delay="0.<?php echo $i; ?>s">
     <?php if (empty($resdata)) { ?>
                <div class="col-md-9 col-sm-6 hidden-xs">
                    <h2 style="color:red; font-size:20px;">There is no restaurant found</h2>
                </div>
                <?php
            } else {
                $i = 1;
                foreach ($resdata['Restaurant'] as $d) {
				?>
   
    <div class="col-33 col-33-1 wow fadeIn" data-wow-delay="0.<?php echo $i; ?>s">
	<a href="<?php echo $this->webroot; ?>restaurants/menu/<?php echo $d['id']; ?>" class="btn_1">
 	<img src="<?php echo $d['logo']; ?>" alt="pic1">
    <div class="overlay"></div>
  	<div class="text-wrap">
    	<div class="name"><?php echo $d['name']; ?></div>
    	<div class="aspects">
        	<span class="label"><?php echo wordwrap($d['address'],30,"<br>\n"); ?>
            </span>
            <!--<span class="label">Union Square</span>-->
         </div>
  	</div>
  </a>
</div> <!-- col-33 -->


<?php }} ?>

    </div>
    </div> <!--row -->
    </div>
    
   <!--<div class="container margin_top">
  <div class="row"> 
     <div class="btn_srh"><button class="search_all"><span>See More Restaurants</span></button></div>
    
    </div>
    </div>-->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
           
 <div class="fitter_main">
<div class="filter"> 
	<div id="nav-icon" class="menu open" style="">
<span style="background: #545454;"></span>
<span style="background: #545454;"></span>
<span style="background: #545454;"></span>


</div>
<!--<h1> RESERVE </h1> -->
<!--<div class="search_res">  	
<div class="container">
  <div class="row">
    <div class="col-left">
      <button class="btn-rsrv-light drpdwn_btn"><img src="<?php // echo $this->webroot;?>img/icon-filter-btn-gold.svg"> <span>Filter</span></button>
    </div>
    <div class="col-right">
      <p class="num-venues"><?php //if($findcity){ echo 'Restaurants in '.$findcity;}?></p>
    </div>
  </div>
</div>

  </div>-->
		<div class="container1"> 
         <div class="row filter-section ">
         	<div class="col-25n" style="width:100%;"> <h3 class="title1"> Cuisines:</h3> </div>	
            <div class="col-75" style="width: 100%; margin-top: 4%;"> 
            	  <div class="checkbox">
          <label><input type="checkbox" name="location[]" class="alltype"  value="0">All <!--<small>(<?php //echo @count($resdata['Restaurant']); ?>)--></small></label>
        </div>
        
        <?php foreach ($restauranttype as $d) { ?>
                                <div class="checkbox">
                                <label><input type="checkbox"  name="location[]" class="alltype" value="<?php echo $d['RestaurantsType']['id']; ?>"><?php echo $d['RestaurantsType']['name']; ?> <small></small></label> 
                                </div>          
                            <?php } ?>
        
        
        
         
            </div>	
           <!-- <div class="row text-center"> <button class="more1"><span>More</span></button> </div>	-->
         </div> <!-- row filler sec -->
            <!--<div class="row filter-section ">
         	<div class="col-25n"> <h3 class="title1"> Cuisines:</h3> </div>	
            <div class="col-75"> 
            	  <div class="checkbox">
          <label><input type="checkbox">American (78)</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox">Asian (15) </label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox">Australian / New Zealand (2)</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox">Bar / Lounge (14) </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox">Chinese (2)  </label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox">European (15)</label>
        </div>
            </div>	
            <div class="row text-center"> <button class="more1"><span>More</span></button> </div>	
         </div>--> <!-- row filler sec -->
            <!--<div class="row filter-section ">
         	<div class="col-25n"> <h3 class="title1"> Cuisines:</h3> </div>	
            <div class="col-75"> 
            	  <div class="checkbox">
          <label><input type="checkbox">American (78)</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox">Asian (15) </label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox">Australian / New Zealand (2)</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox">Bar / Lounge (14) </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox">Chinese (2)  </label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox">European (15)</label>
        </div>
            </div>	
            <div class="row text-center"> <button class="more1"><span>More</span></button> </div>	
         </div>--> <!-- row filler sec -->
            <!--<div class="row filter-section ">
         	<div class="col-25n"> <h3 class="title1"> Instant Booking:</h3> </div>	
            <div class="col-75"> 
       				<div class="checkbox checkbox1">
          		<label><input type="checkbox">Only show restaurants with Instant Booking available. <a href="#"> Learn more </a> </label>
        </div>
            </div>	
           	
         </div>--> <!-- row filler sec -->
                 

</div>
<!--<div class="container2">
<div class="row filter-section mrgn-btm">
         	<div class="col-25n"> &nbsp; </div>	
            <div class="col-75"> 
    <div class="right_btn"> <a class="filter_btn">RESEt FiltErs</a> 
      <a class="filter_btn">apply FiltErs</a> </div>
         </div>  row filler sec 
         
         
         
        </div>
</div>-->

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script language="javascript"> 
var gurpreet = jQuery.noConflict();
gurpreet(document).ready(function() {
    gurpreet(".fiter_popup").click(function(){
		gurpreet(".fitter_main").fadeIn();	
	gurpreet("body").addClass("dsp_n")	
		})
 gurpreet("#nav-icon").click(function(){
		gurpreet(".fitter_main").fadeOut();	
		gurpreet("body").removeClass("dsp_n")	
		})		
});

</script>