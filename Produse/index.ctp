    <!--slider -->
 <?php //print_r($activeSlide); ?>   
 <div class="slider-banr">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	<?php $i = 0;
	foreach($sliders as $slider){ ?>
	<li class="<?php if($slider['Staticpage']['id'] == $activeSlide[0]['Staticpage']['id']){ echo 'active'; }else{ echo ''; }?>" data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>"></li>
	<?php $i++;
	} ?>
	</ol>
	<div class="carousel-inner" role="listbox">
        <?php
	    foreach($sliders as $slider){ ?>
		<div class="item <?php if($slider['Staticpage']['id'] == $activeSlide[0]['Staticpage']['id']){ echo 'active'; }else{ echo ''; }?>">
		<img src="<?php echo $this->webroot; ?>files/staticpage/<?php echo $slider['Staticpage']['image']; ?>">
		</div>
		<?php } ?>

	</div>

	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
</div>  

 
 <div class="slidr_btm">
     <?php echo $frontHeading[0]['Staticpage']['description']; ?>
     <h2 class="pnk"></h2>
     <div class="overlyd"></div>
 </div> 
 
 <!--cart -->
 <div class="smart_container">
 <div class="container">
 <div class="process_secinner">

    <div class="side_btn">
        <a class="btn5" href="<?php echo $this->webroot; ?>products/orders"> <img src="<?php echo $this->webroot; ?>home/image/ga icon.png">Signatures</a>   <a class="btn5" href="<?php echo $this->webroot; ?>products/customizemeal"> <img src="<?php echo $this->webroot; ?>home/image/cutlery.png">Tilpasset Måltider</a>
    </div>
        
        
    <ul class="progress-indicator">
                <li class="completed">
                    <div class="bubble"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></div>
                    Plassering
                </li>
                
                <li class="completed">
                    <div class="bubble"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></div>
                    Behandling 
                </li>
                
                <li>
                    <div class="bubble"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></div>
                    Utsendt
                </li>
                
                <li class="completed">
                    <div class="bubble"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></div>
                    Leveranse
                </li>
    </ul>
 </div><!--process_secinner--> 
 </div>

   
    
   <div class="thumb">
   <div class="container">
   <div class="col-md-12">
   <div class="head head_cnt">   
   <?php echo $front_heading[0]['Staticpage']['description']; ?>
  
   </div>
   </div>
   <div class="col-md-12">
               <div class="row">
			         <?php foreach($products as $product){ ?>
					 
                      <div class="col-xs-12 col-sm-3 boxa">
						<div class="box-inner-home">
                        <a href="<?php echo $this->webroot; ?>products/single/<?php echo $product['Product']['id']; ?>" class="thumbnail thum">
                          <img src="<?php echo $this->webroot; ?>files/product/<?php echo $product['Product']['image']; ?>" alt="...">
                        </a>
                        <a href="<?php echo $this->webroot; ?>products/single/<?php echo $product['Product']['id']; ?>" class="thumbnail thum"><div class="overly"></div></a>
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
						</div>
                      </div>

					 <?php } ?>     
				</div>
        </div><!--row-->
   </div>
  </div> 
 <?php

$username = 'trenogmat';
  
$instaResult= file_get_contents('https://www.instagram.com/'.$username.'/media/');
$insta1 = json_decode($instaResult);
$insta = array_slice($insta1->items, 0, 4);
?> 
  
   <div class="thumb">
   <div class="container">
    <div class="col-md-12">
     
      <div class="insta">
      <button class="btn defult_btn btn-md">INSTAGRAM FEED</button>
      <div class="insta-line"></div>
     
      </div>
    </div>
    
   <div class="col-md-12">
   <div class="insta-portfl">
               <div class="row">
			         <?php foreach($insta as $product){ ?>
					 
                      <div class="col-xs-12 col-sm-3 boxa">
						<div class="box-inner-home">
                        <a href="<?php echo $product->link; ?>" class="thumbnail thum">
                          <img src="<?php echo $product->images->standard_resolution->url; ?>" alt="...">
                        </a>
                        
						</div>
                      </div>

					 <?php } ?>     
				</div>
        </div><!--row-->
    </div>    
   </div>
  </div>
  
  
   </div>
</div> 
</div>