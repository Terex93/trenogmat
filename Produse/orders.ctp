
<div class="thumb" id="odering_sec">
<?php //echo '<pre>'; print_r($products); ?>
  <div class="container hand_outer">
   <div class="odering_sec_inner clearfix">
  
      
      
      <div class="col-md-5">
      <div id="leftorder_sec">
      <div class="clearfix">
          <div class="col-md-12">
           <div class="row rtxt ordng_head">
           <div class="col-md-6">
              <div class="icon_end"><img src="<?php echo $this->webroot; ?>home/image/carticon.png"></div> <h1>HANDLEVOGN </h1>
            </div> 
              
              <?php /*************************************** total Calorie***********************************************/ ?> 
     
           <div class="dlyvalue_tbl">
           		<?php if(isset($_GET['totale_kalori'])){ ?>
  <div class="panel panel-default pull-left">    
    <div class="panel-body">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="calc_item ">
  <tr>
   
    <th colspan='2'>Dine daglige beregnet verdier</th>
  </tr>
  <tr>
    <td><img src="/home/image/kacl_icon.png" alt=""></td>
    <td><?php echo  round($_GET['totale_kalori'],2);  ?></td>
  </tr>
  <tr>
    <td><img src="/home/image/fire_icn.png" alt=""></td>
    <td><?php echo $_GET['fat'].' Grams per Dag';  ?></td>  
  </tr>
  <tr>
    <td><img src="/home/image/fire_icn2.png" alt=""></td>
    <td><?php echo $_GET['karbohydrater'].' Grams per Dag';  ?></td>
  </tr>
  <tr>
    <td><img src="/home/image/shareit_icn.png" alt=""></td>  
    <td><?php echo $_GET['protein'].' Grams per Dag';  ?></td>
  </tr>

</table>
    
    </div>
  </div>

<?php } ?>

         
 <?php /*************************************** total Calorie***********************************************/ ?>  
              </div> 
           </div>
           </div>
           
       </div>
       <div class="clearfix">
       <div class="contr_tble"  id="sidebar">       
       <div class="contr_inner "> 
       <div class="well">
    <table class="table" border="0" cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th>D/M</th>
          <th>1</th>
          <th>2</th>
          <th>3</th>
          <th>4</th>
          <th>5</th>
          <th>6</th>          
          <th>TOTAL MAKRO</th> 
        </tr>
      </thead>
      <tbody>
        <tr data-day='1'>
          <td class='day'>DAG 1</td>
         <td id='1' class="cell ui-widget-content"></td>
         <td id='2' class="cell ui-widget-content"></td>
         <td id='3' class="cell ui-widget-content"></td>
         <td id='4' class="cell ui-widget-content"></td>
         <td id='5' class="cell ui-widget-content"></td>
         <td id='6' class="cell ui-widget-content"></td>

            
          <td>
          <div class="shre_icn">
		    <ul class="rowImg">
			 <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
			</ul>
			</div>
          
          </td>      
          
        </tr>
        <tr data-day='2'>
          <td class='day'>DAG 2</td>
          <td id='7' class="cell ui-widget-content"></td>
         <td id='8' class="cell ui-widget-content"></td>
         <td id='9' class="cell ui-widget-content"></td>
         <td id='10' class="cell ui-widget-content"></td>
         <td id='11' class="cell ui-widget-content"></td>
         <td id='12' class="cell ui-widget-content"></td>
         <td><div class="shre_icn"><ul class="rowImg">
			  <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
			</ul></div></td>   
        </tr>
        <tr data-day='3'>
          <td class='day'>DAG 3</td>
          <td id='13' class="cell ui-widget-content"></td>
         <td id='14' class="cell ui-widget-content"></td>
         <td id='15' class="cell ui-widget-content"></td>
         <td id='16' class="cell ui-widget-content"></td>
         <td id='17' class="cell ui-widget-content"></td>
         <td id='18' class="cell ui-widget-content"></td>
          <td><div class="shre_icn"><ul class="rowImg">
			  <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
			</ul></div></td>   
        </tr>
        <tr data-day='4'>
          <td class='day'>DAG 4</td>
          <td id='19' class="cell ui-widget-content"></td>
         <td id='20' class="cell ui-widget-content"></td>
         <td id='21' class="cell ui-widget-content"></td>
         <td id='22' class="cell ui-widget-content"></td>
         <td id='23' class="cell ui-widget-content"></td>
         <td id='24' class="cell ui-widget-content"></td>
          <td><div class="shre_icn"><ul class="rowImg">
			  <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
			</ul></div></td>   
        </tr>
        <tr data-day='5'>
          <td class='day'>DAG 5</td>
          <td id='25' class="cell ui-widget-content"></td>
         <td id='26' class="cell ui-widget-content"></td>
         <td id='27' class="cell ui-widget-content"></td>
         <td id='28' class="cell ui-widget-content"></td>
         <td id='29' class="cell ui-widget-content"></td>
         <td id='30' class="cell ui-widget-content"></td>
          <td><div class="shre_icn"><ul class="rowImg">
			  <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
			</ul></div></td>   
        </tr>
        <tr data-day='6'>
          <td class='day'>DAG 6</td>
          <td id='31' class="cell ui-widget-content"></td>
         <td id='32' class="cell ui-widget-content"></td>
         <td id='33' class="cell ui-widget-content"></td>
         <td id='34' class="cell ui-widget-content"></td>
         <td id='35' class="cell ui-widget-content"></td>
         <td id='36' class="cell ui-widget-content"></td>
          <td><div class="shre_icn"><ul class="rowImg">
              <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
			</ul></div></td>   
        </tr>
        <tr data-day='7'>
          <td class='day'>DAG 7</td>
          <td id='37' class="cell ui-widget-content"></td>
         <td id='38' class="cell ui-widget-content"></td>
         <td id='39' class="cell ui-widget-content"></td>
         <td id='40' class="cell ui-widget-content"></td>
         <td id='41' class="cell ui-widget-content"></td>
         <td id='42' class="cell ui-widget-content"></td>
          <td><div class="shre_icn"><ul class="rowImg">
			  <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
			</ul></div></td>   
        </tr>
      </tbody>
    </table>
</div>
       
       </div><!--contr_inner-->
       
      <table width="120%" border="0" cellpadding="0" cellspacing="0" class="contr_tbl_ftr">
  <tr>
  <input type="checkbox" name="prove" value="5">PRøVPAKE<br>
    <td colspan="2">
     <p class="Velg">Minstebestilling er på <span>12</span> måltider</p>
    </td>
 
  </tr>
  <tr>
    <td style='display:<?php if($additionalcharge[0]['Additionalcharge']['halal_display'] == 'Yes'){ echo 'block'; }else{ echo 'none'; } ?>;'> <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox18" data-title='halal' class='extraPr' name='extraPr' value='<?php echo $additionalcharge[0]['Additionalcharge']['halal_price']; ?>' type="checkbox" >
                        <label for="checkbox18">Halal</label>
                    </div></td>
    <td style='display:<?php if($additionalcharge[0]['Additionalcharge']['gluten_display'] == 'Yes'){ echo 'block'; }else{ echo 'none'; } ?>;'>
     <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox19" data-title='gluten' class='extraPr' name='extraPr' value='<?php echo $additionalcharge[0]['Additionalcharge']['gluten_price']; ?>' type="checkbox">
                        <label for="checkbox19">Glutenfri</label>
                    </div>
      </td>
  </tr>
   
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="contr_tbl_ftr contr_tbl_ftr2">
  
  <tr>
   <!-- <td colspan="2"><img src="<?php// echo $this->webroot; ?>home/image/fb_icn.png" alt="" > Del</td>-->
    <td class="text-left" id='price_td'><span class="price_txt">Pris 0kr</span></td>
   <td class="text-right" ><button id='checkOut' class="btn btn-default btn-sm sbt_tbl">Sjekk ut</button></td>
  </tr>
  <!--<tr>
    <td colspan="2"><img src="<?php// echo $this->webroot; ?>home/image/print_icn.png" alt="" > Skriv</td>
   
  </tr>-->
  <tr>
    <!--<td><img src="<?php// echo $this->webroot; ?>home/image/epost_icn.png" alt="" > Send epost</td>-->
  <!--  <td colspan="2" class="text-right"><button id='checkOut' class="btn btn-default btn-sm sbt_tbl">Sjekk ut</button></td>-->
  </tr>
</table>

       
       </div>
       </div>
     </div><!--leftorder_sec-->
     </div>
     
      <div class="col-md-7" id="main_content">
      <div class="rightorder_sec">



      <div class="right_valutp">
    
  <div class="panel panel-default pull-right">    
    <div class="panel-body">
    <table width="120%" border="0" cellspacing="0" cellpadding="0" class="calc_item ">
  <tr>
    <td><img src="/home/image/kacl_icon.png" alt=""></td>
    <td>Kalorier</td>
  </tr>
  <tr>
    <td><img src="/home/image/fire_icn.png" alt=""></td>
    <td>Fett</td>
  </tr>
  <tr>
    <td><img src="/home/image/fire_icn2.png" alt=""></td>
    <td>Karbohydrater</td>
  </tr>
  <tr>
    <td><img src="/home/image/shareit_icn.png" alt=""></td>
    <td>Protein</td>
  </tr> 
  <tr>
  <td><i class="fa fa-calculator" aria-hidden="true"></i></td>
    <td>
<a role="button" href="<?php echo $this->webroot; ?>pages/calculator">Kalorikalkulator</a></td>

  </tr>
</table>
    
    </div>
  </div>
  </div>
 
 

     <p class="drag-drop">Velg størrelse DRA og SLIPP <img src="<?php echo $this->webroot; ?>home/image/arrow2.png" class="image-responsive"> </p>
	  <?php 
	  foreach($cats as $cat){
	  if(!empty($cat)){
	  ?>
        <div class="row btx" id="left-pane">
        <div class="ordng_head">
          <h2> <?php echo $cat['DishCategory']['name']; ?>
          <span></span>
          <i></i>
          </h2>
          <div class="clearfix"></div>
          </div>
           
          
		  <?php foreach($products as $productss){
		  foreach($productss as $product){    
		  //echo '<pre>'; print_r($product); 
		  if($product['Product']['dishcategory_id'] == $cat['DishCategory']['id']){ ?>      
		    <div class="col-sm-6 col-md-4 pdiv" id='<?php echo $product['Product']['name']; ?>' data-id='<?php echo $product['Product']['id']; ?>'>
             
            <div class="thumbnail rt clearfix" id='dragDivthumb'>
            <div class="thumbnail_box">
            <div class="thumbnail_img">
              <div class='singlePOP' data-title='<?php echo $product['Product']['name']; ?>' data-description='<?php echo $product['Product']['description']; ?>' data-category='<?php echo $cat['DishCategory']['name']; ?>' data-rating='<?php echo $product['Product']['avg_rate']; ?>' data-sprice='<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['small_price'] * $product['Product']['vat'] + $product['Product']['small_price']; }else{ echo $product['Product']['small_price']; }?>' data-scal="<?php echo $product['Product']['small_cal']; ?>" data-scarbo="<?php echo $product['Product']['small_carbo']; ?>" data-snutri="<?php echo $product['Product']['small_nutri']; ?>" data-sfat="<?php echo $product['Product']['small_fat']; ?>" data-sqty="<?php echo $product['Product']['small_qty']; ?>" data-mprice='<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['medium_price'] * $product['Product']['vat'] + $product['Product']['medium_price']; }else{ echo $product['Product']['medium_price']; }?>' data-mcal="<?php echo $product['Product']['medium_cal']; ?>" data-mcarbo="<?php echo $product['Product']['medium_carbo']; ?>" data-mnutri="<?php echo $product['Product']['medium_nutri']; ?>" data-mfat="<?php echo $product['Product']['medium_fat']; ?>" data-mqty="<?php echo $product['Product']['medium_qty']; ?>" data-lprice='<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['large_price'] * $product['Product']['vat'] + $product['Product']['large_price']; }else{ echo $product['Product']['large_price']; }?>' data-lcal="<?php echo $product['Product']['large_cal']; ?>" data-lcarbo="<?php echo $product['Product']['large_carbo']; ?>" data-lnutri="<?php echo $product['Product']['large_nutri']; ?>" data-lfat="<?php echo $product['Product']['large_fat']; ?>" data-lqty="<?php echo $product['Product']['large_qty']; ?>" data-img="<?php echo $product['Product']['image']; ?>">
            <div data-size='S' data-id="<?php echo $product['Product']['id']; ?>" data-price="<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['small_price'] * $product['Product']['vat'] + $product['Product']['small_price']; }else{ echo $product['Product']['small_price']; }?>" data-cal="<?php echo $product['Product']['small_cal']; ?>" data-carbo="<?php echo $product['Product']['small_carbo']; ?>" data-nutri="<?php echo $product['Product']['small_nutri']; ?>" data-fat="<?php echo $product['Product']['small_fat']; ?>" class="<?php if($product['Product']['small_qty'] == 0 && $product['Product']['medium_qty'] == 0 && $product['Product']['large_qty'] == 0){ echo ''; }else{ echo 'thumb_img'; }  ?>" id='photo'>
              <img src="<?php echo $this->webroot; ?>files/product/<?php echo $product['Product']['image']; ?>" title="<?php echo $product['Product']['name']; ?>" alt="..." class="img-responsive"></a>	 		  
              </div>
                </div> 
              <div class="thumbnl_txt">
			  <h6><?php 
						
						$string = strip_tags($product['Product']['name']);

						if (strlen($string) > 50) {

							// truncate string
							$stringCut = substr($string, 0, 50);

							// make sure it ends in a word so assassinate doesn't become ass...
							$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
						}
						echo $string;
						
						//substr($product['Product']['name'], 0, 20);
						
						//echo $product['Product']['name']; ?></h6>
               <span class='proPrice'><?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['small_price'] * $product['Product']['vat'] + $product['Product']['small_price'];  }else{  echo $product['Product']['small_price']; } ?> KR</span>

			  
			  <input type='hidden' class='rateUsers' value='<?php echo $product['Product']['avg_rate']; ?>'>
<p class="urates">
 <i class="fa fa-star-o" aria-hidden="true"></i>
 <i class="fa fa-star-o" aria-hidden="true"></i>
 <i class="fa fa-star-o" aria-hidden="true"></i>
 <i class="fa fa-star-o" aria-hidden="true"></i>
 <i class="fa fa-star-o" aria-hidden="true"></i> 

</p>
<span class='stock' style='display:<?php if($product['Product']['small_qty'] == 0 && $product['Product']['medium_qty'] == 0 && $product['Product']['large_qty'] == 0){ echo 'block'; }else{ echo 'none'; }  ?>;'>utsolgt</span>
			  
			  
              </div>
              <div class="counter">
              <div class="countr_inner icon_shre">
              	<ul>
				
                	<li class='cal'><img src="<?php echo $this->webroot; ?>home/image/kacl_icon.png" ><span><?php echo $product['Product']['small_cal']; ?></span></li>
                    <li class='fat'><img src="<?php echo $this->webroot; ?>home/image/fire_icn.png" ><span><?php echo $product['Product']['small_fat']; ?></span></li>
                    <li class='carbo'><img src="<?php echo $this->webroot; ?>home/image/fire_icn2.png" ><span><?php echo $product['Product']['small_carbo'];  ?></span></li>
                    <li class='nutri'><img src="<?php echo $this->webroot; ?>home/image/shareit_icn.png" ><span><?php echo $product['Product']['small_nutri'];  ?></span></li>
                    
                </ul>
              </div>
              
              </div>
              </div>
              
              </div>
              
              <div class="caption cap"></div>
              <p class="size">
			  <button href="javascript:void(0)" class="btn btn-primary ss small_b <?php if($product['Product']['small_qty'] == 0){ echo 'disable'; }  ?>" role="button" data-qty="<?php echo $product['Product']['small_qty'];  ?>" data-price="<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['small_price'] * $product['Product']['vat'] + $product['Product']['small_price']; }else{ echo $product['Product']['small_price']; }?>" data-cal="<?php echo $product['Product']['small_cal']; ?>" data-carbo="<?php echo $product['Product']['small_carbo']; ?>" data-nutri="<?php echo $product['Product']['small_nutri']; ?>" data-fat="<?php echo $product['Product']['small_fat']; ?>" <?php if($product['Product']['small_qty'] == 0){ echo 'disabled'; }  ?>>Small</button>
			  <button href="javascript:void(0)" class="btn btn-default mm medium_b <?php if($product['Product']['medium_qty'] == 0){ echo 'disable'; }  ?>" role="button" data-qty="<?php echo $product['Product']['medium_qty'];  ?>" data-price="<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['medium_price']* $product['Product']['vat'] + $product['Product']['medium_price']; }else{ echo $product['Product']['medium_price']; }?>" data-cal="<?php echo $product['Product']['medium_cal']; ?>" data-carbo="<?php echo $product['Product']['medium_carbo']; ?>" data-nutri="<?php echo $product['Product']['medium_nutri']; ?>" data-fat="<?php echo $product['Product']['medium_fat']; ?>" <?php if($product['Product']['medium_qty'] == 0){ echo 'disabled'; }  ?>>Medium</button>
			  <button href="javascript:void(0)" class="btn btn-default ll large_b <?php if($product['Product']['large_qty'] == 0){ echo 'disable'; }  ?>" role="button" data-qty="<?php echo $product['Product']['large_qty'];  ?>" data-price="<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['large_price'] * $product['Product']['vat'] + $product['Product']['large_price']; }else{ echo $product['Product']['large_price']; }?>" data-cal="<?php echo $product['Product']['large_cal']; ?>" data-carbo="<?php echo $product['Product']['large_carbo']; ?>" data-nutri="<?php echo $product['Product']['large_nutri']; ?>" data-fat="<?php echo $product['Product']['large_fat']; ?>" <?php if($product['Product']['large_qty'] == 0){ echo 'disabled'; }  ?>>Large</button></p>
            </div>
       
          </div>
		  <?php }
		  } }?>
        </div>
		<?php } } ?>
        <!-- ROW 1 -->

         </div>
      </div>
   
    
   </div><!--odering_sec_inner-->
  </div>
</div>
<style>
.img-responsive {
    width: 100%;
}
.cell {
    background-color: #ccc !important;
    border: 1px solid #aaaaaa;
    height: 30px;
    padding: 0;
    width: 30px;
}
</style>

		<div class="modal fade modal-dialog_pop" id="zip" tabindex="-1" role="dialog" aria-labelledby="myZip" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-popup">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <a href="#" class="close-link guri" data-dismiss="modal" aria-label="Close"><i class="icon_close_alt2"></i></a>
                   
                    <form action="" method="post"class="popup-form" id="myZip">
                        <div class="login_icon"><i class="icon_lock_alt"></i></div>
                        <input type="text" name="data[Picode][zip]" class="form-control form-white" placeholder="Skriv inn postnummer">
                        <button  type="submit" class="btn btn-submit defult_btn btnwale">Sende inn</button>
                    </form>
                </div>
            </div>

        </div>