<div id="menu_sec">
  <div class="container">
  <div class="menu_sec_inner">
  	  <?php 
	  foreach($cats as $cat){
	  if(!empty($cat)){
	  ?>
    <div class="col-sm-2">
    <div class="prodct_dsply">
    <div class="grid_col">
    <h1><?php echo $cat['DishCategory']['name']; ?>
    <span></span>
    <b></b>
    </h1>
 <?php

 foreach($products as $productss){
      
		  foreach($productss as $product){
		                                     
		  if($product['Product']['dishcategory_id'] == $cat['DishCategory']['id']){ ?>  
		  
    <div class="menu_box clickable-row" data-href='<?php echo $this->webroot; ?>products/single/<?php echo $product['Product']['id']; ?>'>
	
    <div class="menu_box_img">
	<img src="<?php echo $this->webroot; ?>files/product/<?php echo $product['Product']['image']; ?>" title="<?php echo $product['Product']['name']; ?>" alt="..." class="img-responsive">
<div class="cpation_text">
<p><?php 
						
						$string = strip_tags($product['Product']['name']);

						if (strlen($string) > 50) {

							// truncate string
							$stringCut = substr($string, 0, 50);

							// make sure it ends in a word so assassinate doesn't become ass...
							$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
						}
						echo $string;
						
						//substr($product['Product']['name'], 0, 20);
						
						//echo $product['Product']['name']; ?></p>

<input type='hidden' class='rateUsers' value='<?php echo $product['Product']['avg_rate']; ?>'>
<div class="start_icn urates">
 <i class="fa fa-star-o" aria-hidden="true"></i>
 <i class="fa fa-star-o" aria-hidden="true"></i>
 <i class="fa fa-star-o" aria-hidden="true"></i>
 <i class="fa fa-star-o" aria-hidden="true"></i>
 <i class="fa fa-star-o" aria-hidden="true"></i> 

</div>

</div>
<div class="overlay"></div>
</div> 

</div><!--menu_box-->

<?php } } } ?>

    </div> <!--grid_col-->   
    </div>
    </div>
	<?php } } ?>
   
  </div><!--contact_sec_inner-->
</div><!--container-->
</div><!--contact_sec-->
