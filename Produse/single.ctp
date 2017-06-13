<div id="product_sec">
  <div class="container">
  <div class="product_descriptino clearfix">

  
  <?php //echo '<pre>'; print_r($product['Review']);
     $sum = 0;
	 foreach($product['Review'] as $review){
		   $sum += $review['ratings'];
	 }
	 $ratings = $sum/count($product['Review']);
  ?>
 <input type='hidden' id='userRatings' value='<?php echo $ratings; ?>'>
  	<div class="card">
			
			<div style="width:100%;float:left;" class="col-md-12"><a class="bck_btn" onclick="goBack()"><i class="fa fa-arrow-left" aria-hidden="true"></i>
Tilbake</a></div>
            	
					<div class="preview col-md-4">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="<?php echo $this->webroot; ?>files/product/<?php echo $product['Product']['image']; ?>" > </div>
						</div>
						
						
					</div>
					<div class="details col-md-8">
                    <div class="col-sm-12">
						<h3 class="product-title"><?php echo $product['Product']['name']; ?></h3>
						
						<div id='rtng'>
							<div class="stars">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							 
                            <p class="vote"><strong>Kategori: </strong> <?php echo $category['DishCategory']['name']; ?></p>
						</div>
                        <p class="product-description"><?php echo $product['Product']['description']; ?></p>
                        </div>
                        
                         <div class="col-sm-6">
                         <div class="prdt-left">
						
						<h4 class="price"><div class="size_lb">pris:</div> <span id='singPrc'><?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['small_price'] * $product['Product']['vat'] + $product['Product']['small_price'];  }else{ if($product['Product']['small_price'] != 0){ echo $product['Product']['small_price']; } }?> Kr</span></h4>

						<h5 class="sizes">
                        <div class="size_lb">størrelser:</div>
							<span class="size" data-toggle="tooltip" title="small"><a href="javascript:void(0)" class="btn btn-primary small_bbs" role="button" data-price="<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['small_price'] * $product['Product']['vat'] + $product['Product']['small_price']; }else{ echo $product['Product']['small_price']; }?>" data-cal="<?php echo $product['Product']['small_cal']; ?>" data-carbo="<?php echo $product['Product']['small_carbo']; ?>" data-nutri="<?php echo $product['Product']['small_nutri']; ?>" data-fat="<?php echo $product['Product']['small_fat']; ?>">Small</a></span>
							<span class="size" data-toggle="tooltip" title="medium"><a href="javascript:void(0)" class="btn btn-default medium_bbs" role="button" data-price="<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['medium_price'] * $product['Product']['vat'] + $product['Product']['medium_price']; }else{ echo $product['Product']['medium_price']; }?>" data-cal="<?php echo $product['Product']['medium_cal']; ?>" data-carbo="<?php echo $product['Product']['medium_carbo']; ?>" data-nutri="<?php echo $product['Product']['medium_nutri']; ?>" data-fat="<?php echo $product['Product']['medium_fat']; ?>">Medium</a> </span>
							<span class="size" data-toggle="tooltip" title="large"><a href="javascript:void(0)" class="btn btn-default large_bbs" role="button" data-price="<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['large_price'] * $product['Product']['vat'] + $product['Product']['large_price']; }else{ echo $product['Product']['large_price']; }?>" data-cal="<?php echo $product['Product']['large_cal']; ?>" data-carbo="<?php echo $product['Product']['large_carbo']; ?>" data-nutri="<?php echo $product['Product']['large_nutri']; ?>" data-fat="<?php echo $product['Product']['large_fat']; ?>">Large</a></span>
							
						</h5>
						<h5 class="colors">MAKROINNHOLD:
						
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="Calorie_tbl">
						  <tr>
							<td><img src="<?php echo $this->webroot; ?>home/image/kacl_icon.png" alt="" ></td>
							<td id='cal'><?php echo $product['Product']['small_cal']; ?> </td>
						  </tr>
						  <tr>
							<td><img src="<?php echo $this->webroot; ?>home/image/fire_icn.png" alt="" ></td>
							<td id='fat'><?php echo $product['Product']['small_fat'];  ?> (Fett)</td>
						  </tr>
						  <tr>
							<td> <img src="<?php echo $this->webroot; ?>home/image/fire_icn2.png" alt="" ></td>
							<td id='carbo'><?php echo $product['Product']['small_carbo'];  ?> (karbs)</td>
						  </tr>
						  <tr>
							<td> <img src="<?php echo $this->webroot; ?>home/image/shareit_icn.png" alt="" ></td>
							<td id='nutri'><?php  echo $product['Product']['small_nutri'];  ?> (Protein)</td>
						  </tr>
						</table>
		
						</h5>
                        </div>
                        </div>
                        <?php if(!empty($loggeduser)){ ?>
                         <div class="col-sm-6">
                         <div class="prodt_rgt">
                        
						<div id="rating">
						<div class="review_prdct"><a href='javascript:void(0)' class='giveReview'>Vurdering og Anmeldelse</a></div> 
						<div class="stars rating">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
						<form action="<?php echo $this->webroot; ?>reviews/add/<?php echo $product['Product']['id']; ?>" method="post"class="popup-form2" id="myLogin">
						<input type='hidden' name='data[Review][resid]' value='628'>
						<input type='hidden' name='data[Review][uid]' value='<?php echo $loggeduser; ?>'>
						<input type='hidden' name='data[Review][product_id]' value='<?php echo $product['Product']['id']; ?>'>
						<input type='hidden' name='data[Review][ratings]' id='ratings' value='1'>
						<label><span id='popUPRating'>Anmeldelse</span></label>
						<textarea id='commentReview' title="Vennligst fyll ut dette feltet" placeholder="Skriv her..." name='data[Review][review]' cols='6' rows='4' style='width:100%' required></textarea>
					    </div>
                        
                        <div class="lagr">
						<button type="submit" id='submitReview' class="btn defult_btn">Lagre</button>
					  </div>
					  </form>
                      
                      </div>
						</div>
						<?php } ?>
                <div class="col-sm-12">
                   <h2 class="rvw_title">Anmeldelse</h2>
				       <?php foreach($reviews as $review){ 
					   $ext = strtolower(pathinfo($review['User']['image'], PATHINFO_EXTENSION));
					   ?>
                       <a class="rvw_sec" href="javascript:void(0);">
                        <span><img src="<?php if($ext){ echo $this->webroot.'files/profile_pic/'.$review['User']['image']; }else{ echo $this->webroot.'files/profile_pic/avaterR.png'; } ?>" alt="images" class="img-rounded">
                        </span>
                        <div class="right_list">
                            <h3><?php echo $review['User']['name']; ?></h3>
                            <h6><?php echo $review['Review']['review']; ?></h6>
                         </div>
                    	</a>
						<?php } ?>
                	</div>
				</div>
						<div class="col-sm-12">
                        
                        <div class="action">
							<a class="add-to-cart btn btn-default ordnowbtn" type="button" href="<?php echo $this->webroot; ?>products/orders#<?php echo $product['Product']['name']; ?>">Bestill nå</a>
                        </div>
                        
						<!--<div class="action act_btn">
							<a class="add-to-cart btn btn-default" type="button" href="<?php //echo $this->webroot; ?>products/orders#<?php //echo $product['Product']['name']; ?>">Bestill nå</a>
                        </div>-->
					</div>
                    </div>
				
		
		</div>
  

  </div><!--product_descriptino-->
  
  
  
  
  <!--contact_sec_inner-->
</div><!--container-->
</div><!--contact_sec-->
	<!-- Large modal -->


<div class="modal fade" id="rating" tabindex="-1" role="dialog" aria-labelledby="myrating">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myrating">Vurdering og Anmeldelse</h4>
      </div>
      <div class="modal-body">
	  <span id='popUPRating'>Vurdering</span>
        <div class="stars rating">
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
		</div> 
		<form action="<?php echo $this->webroot; ?>reviews/add/<?php echo $product['Product']['id']; ?>" method="post"class="popup-form" id="myLogin">
		<input type='hidden' name='data[Review][resid]' value='628'>
		<input type='hidden' name='data[Review][uid]' value='<?php echo $loggeduser; ?>'>
		<input type='hidden' name='data[Review][product_id]' value='<?php echo $product['Product']['id']; ?>'>
		<input type='hidden' name='data[Review][ratings]' id='ratings' value='1'>
		<label><span id='popUPRating'>Anmeldelse</span></label>
        <textarea id='commentReview' name='data[Review][review]' cols='6' rows='4' style='width:100%'></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Lukk</button>
        <button type="submit" id='submitReview' class="btn btn-primary">Lagre</button>
      </div>
	  </form>
    </div>
  </div>
</div>   

 
