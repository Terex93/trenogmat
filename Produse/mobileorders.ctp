<div class="container">

    
          <div class="col-md-6">
           <div class="row rtxt ordng_head">
              <div class="icon_end"><img src="<?php echo $this->webroot; ?>home/image/carticon.png"></div> <h2>HANDELVOGN </h2>
           </div>
           </div>
           <div class="col-md-6">
           <div class="dlyvalue_tbl">
           		<?php if(isset($_GET['totale_kalori'])){ ?>
  <div class="panel panel-default pull-left">    
    <div class="panel-body">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="calc_item ">
  <tr>
   
    <th colspan='2'>Dine daglige beregnet verdier</th>
  </tr>
  <tr>
    <td><img src="/terenogmat/home/image/kacl_icon.png" alt=""></td>
    <td><?php echo $_GET['totale_kalori'];  ?></td>
  </tr>
  <tr>
    <td><img src="/terenogmat/home/image/fire_icn.png" alt=""></td>
    <td><?php echo $_GET['fat'].' Grams per Day';  ?></td>  
  </tr>
  <tr>
    <td><img src="/terenogmat/home/image/fire_icn2.png" alt=""></td>
    <td><?php echo $_GET['karbohydrater'].' Grams per Day';  ?></td>
  </tr>
  <tr>
    <td><img src="/terenogmat/home/image/shareit_icn.png" alt=""></td>  
    <td><?php echo $_GET['protein'].' Grams per Day';  ?></td>
  </tr>

</table>
    
    </div>
  </div>

<?php } ?>
</div>
           </div>
     

<?php 
	  foreach($cats as $cat){
	  if(!empty($cat)){
?>

  <div class="col-sm-12 col-xs-12">
    <div class="fancy">
      <h2><?php echo $cat['DishCategory']['name']; ?></h2>
    </div>
    <div class="order_prodt">
	<?php $i = 1; foreach($products as $productss){
		  foreach($productss as $product){    
		  //echo '<pre>'; print_r($product); 
		  if($product['Product']['dishcategory_id'] == $cat['DishCategory']['id']){ ?> 
<div class="pdiv" id='<?php echo $product['Product']['name']; ?>' data-id='<?php echo $product['Product']['id']; ?>' data-quantity='<?php echo $product['Product']['quantity']; ?>'>		  
      <div class="thumbnail rt">
        <div class="thumbnail_box">
          <div class="thumbnail_img">
<div class='singlePOP' data-title='<?php echo $product['Product']['name']; ?>' data-description='<?php echo $product['Product']['description']; ?>' data-category='<?php echo $cat['DishCategory']['name']; ?>' data-rating='<?php echo $product['Product']['avg_rate']; ?>' data-sprice='<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['small_price'] * $product['Product']['vat'] + $product['Product']['small_price']; }else{ echo $product['Product']['small_price']; }?>' data-scal="<?php echo $product['Product']['small_cal']; ?>" data-scarbo="<?php echo $product['Product']['small_carbo']; ?>" data-snutri="<?php echo $product['Product']['small_nutri']; ?>" data-sfat="<?php echo $product['Product']['small_fat']; ?>" data-mprice='<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['medium_price'] * $product['Product']['vat'] + $product['Product']['medium_price']; }else{ echo $product['Product']['medium_price']; }?>' data-mcal="<?php echo $product['Product']['medium_cal']; ?>" data-mcarbo="<?php echo $product['Product']['medium_carbo']; ?>" data-mnutri="<?php echo $product['Product']['medium_nutri']; ?>" data-mfat="<?php echo $product['Product']['medium_fat']; ?>" data-lprice='<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['large_price'] * $product['Product']['vat'] + $product['Product']['large_price']; }else{ echo $product['Product']['large_price']; }?>' data-lcal="<?php echo $product['Product']['large_cal']; ?>" data-lcarbo="<?php echo $product['Product']['large_carbo']; ?>" data-lnutri="<?php echo $product['Product']['large_nutri']; ?>" data-lfat="<?php echo $product['Product']['large_fat']; ?>" data-img="<?php echo $product['Product']['image']; ?>">		  
              <div data-size='S' data-id="<?php echo $product['Product']['id']; ?>" data-price="<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['small_price'] * $product['Product']['vat'] + $product['Product']['small_price']; }else{ echo $product['Product']['small_price']; }?>" data-cal="<?php echo $product['Product']['small_cal']; ?>" data-carbo="<?php echo $product['Product']['small_carbo']; ?>" data-nutri="<?php echo $product['Product']['small_nutri']; ?>" data-fat="<?php echo $product['Product']['small_fat']; ?>" class="thumb_img" id='photo'><img src="<?php echo $this->webroot; ?>files/product/<?php echo $product['Product']['image']; ?>" title="<?php echo $product['Product']['name']; ?>" alt="..." class="img-responsive"></div>
          </div>
            <div class="thumbnl_txt">
              <h6><?php echo $product['Product']['name']; ?></h6>
              <span class="proPrice"><?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['small_price'] * $product['Product']['vat'] + $product['Product']['small_price']; }else{ echo $product['Product']['small_price']; }?> KR</span>
              			  <input type='hidden' class='rateUsers' value='<?php echo $product['Product']['avg_rate']; ?>'>
<p class="urates">
 <i class="fa fa-star-o" aria-hidden="true"></i>
 <i class="fa fa-star-o" aria-hidden="true"></i>
 <i class="fa fa-star-o" aria-hidden="true"></i>
 <i class="fa fa-star-o" aria-hidden="true"></i>
 <i class="fa fa-star-o" aria-hidden="true"></i> 

</p>
              <span class="stock" style="display:none;">utsolgt</span> </div> 
            <div class="counter">
              <div class="countr_inner icon_shre">
                <ul>
                	<li class='cal'><img src="<?php echo $this->webroot; ?>home/image/kacl_icon.png" ><span><?php echo $product['Product']['small_cal']; ?></span></li>
                    <li class='carbo'><img src="<?php echo $this->webroot; ?>home/image/fire_icn.png" ><span><?php echo $product['Product']['small_carbo']; ?></span></li>
                    <li class='nutri'><img src="<?php echo $this->webroot; ?>home/image/fire_icn2.png" ><span><?php echo $product['Product']['small_nutri']; ?></span></li>
                    <li class='fat'><img src="<?php echo $this->webroot; ?>home/image/shareit_icn.png" ><span><?php echo $product['Product']['small_fat']; ?></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="caption cap"></div>
                      <p class="size">
			  <a href="javascript:void(0)" class="btn btn-primary small_b" role="button" data-price="<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['small_price'] * $product['Product']['vat'] + $product['Product']['small_price']; }else{ echo $product['Product']['small_price']; }?>" data-cal="<?php echo $product['Product']['small_cal']; ?>" data-carbo="<?php echo $product['Product']['small_carbo']; ?>" data-nutri="<?php echo $product['Product']['small_nutri']; ?>" data-fat="<?php echo $product['Product']['small_fat']; ?>">Small</a>
			  <a href="javascript:void(0)" class="btn btn-default medium_b" role="button" data-price="<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['medium_price']* $product['Product']['vat'] + $product['Product']['medium_price']; }else{ echo $product['Product']['medium_price']; }?>" data-cal="<?php echo $product['Product']['medium_cal']; ?>" data-carbo="<?php echo $product['Product']['medium_carbo']; ?>" data-nutri="<?php echo $product['Product']['medium_nutri']; ?>" data-fat="<?php echo $product['Product']['medium_fat']; ?>">Medium</a>
			  <a href="javascript:void(0)" class="btn btn-default large_b" role="button" data-price="<?php if($product['Product']['vat_display'] != ''){ echo $product['Product']['large_price'] * $product['Product']['vat'] + $product['Product']['large_price']; }else{ echo $product['Product']['large_price']; }?>" data-cal="<?php echo $product['Product']['large_cal']; ?>" data-carbo="<?php echo $product['Product']['large_carbo']; ?>" data-nutri="<?php echo $product['Product']['large_nutri']; ?>" data-fat="<?php echo $product['Product']['large_fat']; ?>">Large</a></p>
        <div class="add_to_cart"><a <?php if($product['Product']['quantity'] == 0){ echo 'disabled'; } ?> href="javascript:void(0);" id='<?php echo $i; ?>' data-id="<?php echo $product['Product']['id']; ?>" class="btn defult_btn <?php if($product['Product']['quantity'] != 0){ echo 'mobile_cart'; } ?>" type="button">Legg i handlekurv</a></div>
      </div>
	  </div>
	  <?php } $i++; } } ?>  
    </div>
  </div>
<?php } } ?>  
  
</div>

 <!-- Modal -->
  <div class="modal fade" id="cartModal" data-id='' role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close">&times;</button>
          <h4 class="modal-title">HANDELVOGN</h4>
        </div>
        <div class="modal-body">
          <div class="cart_mbl contr_inner  table-responsive">
          	<table class="tablecart table" cellspacing="0" cellpadding="0" border="0">
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
        <tr data-day="1">
          <td class="day">DAG 1</td>
         <td id="1" class="cell cellm"></td>
         <td id="2" class="cell cellm"></td>
         <td id="3" class="cell cellm"></td>
         <td id="4" class="cell cellm"></td>
         <td id="5" class="cell cellm"></td>
         <td id="6" class="cell cellm"></td>

            
          <td>
          <div class="shre_icn">
		    <ul class="rowImg">
  <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt=""><span class="rowcal"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt=""><span class="rowcarbo"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11..png" alt=""><span class="rownutri"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt=""><span class="rowfat"></span></li>
			</ul>
			</div>
          
          </td>      
          
        </tr>
        <tr data-day="2">
          <td class="day">DAG 2</td>
          <td id="7" class="cell cellm"></td>
         <td id="8" class="cell cellm"></td>
         <td id="9" class="cell cellm"></td>
         <td id="10" class="cell cellm"></td>
         <td id="11" class="cell cellm"></td>
         <td id="12" class="cell cellm"></td>
         <td><div class="shre_icn"><ul class="rowImg">
  <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt=""><span class="rowcal"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt=""><span class="rowcarbo"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11..png" alt=""><span class="rownutri"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt=""><span class="rowfat"></span></li>
			</ul></div></td>   
        </tr>
        <tr data-day="3">
          <td class="day">DAG 3</td>
          <td id="13" class="cell cellm"></td>
         <td id="14" class="cell cellm"></td>
         <td id="15" class="cell cellm"></td>
         <td id="16" class="cell cellm"></td>
         <td id="17" class="cell cellm"></td>
         <td id="18" class="cell cellm"></td>
          <td><div class="shre_icn"><ul class="rowImg">
  <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt=""><span class="rowcal"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt=""><span class="rowcarbo"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11..png" alt=""><span class="rownutri"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt=""><span class="rowfat"></span></li>
			</ul></div></td>   
        </tr>
        <tr data-day="4">
          <td class="day">DAG 4</td>
          <td id="19" class="cell cellm"></td>
         <td id="20" class="cell cellm"></td>
         <td id="21" class="cell cellm"></td>
         <td id="22" class="cell cellm"></td>
         <td id="23" class="cell cellm"></td>
         <td id="24" class="cell cellm"></td>
          <td><div class="shre_icn"><ul class="rowImg">
  <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt=""><span class="rowcal"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt=""><span class="rowcarbo"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11..png" alt=""><span class="rownutri"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt=""><span class="rowfat"></span></li>
			</ul></div></td>   
        </tr>
        <tr data-day="5">
          <td class="day">DAG 5</td>
          <td id="25" class="cell cellm"></td>
         <td id="26" class="cell cellm"></td>
         <td id="27" class="cell cellm"></td>
         <td id="28" class="cell cellm"></td>
         <td id="29" class="cell cellm"></td>
         <td id="30" class="cell cellm"></td>
          <td><div class="shre_icn"><ul class="rowImg">
  <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt=""><span class="rowcal"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt=""><span class="rowcarbo"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11..png" alt=""><span class="rownutri"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt=""><span class="rowfat"></span></li>
			</ul></div></td>   
        </tr>
        <tr data-day="6">
          <td class="day">DAG 6</td>
          <td id="31" class="cell cellm"></td>
         <td id="32" class="cell cellm"></td>
         <td id="33" class="cell cellm"></td>
         <td id="34" class="cell cellm"></td>
         <td id="35" class="cell cellm"></td>
         <td id="36" class="cell cellm"></td>
          <td><div class="shre_icn"><ul class="rowImg">
  <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt=""><span class="rowcal"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt=""><span class="rowcarbo"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11..png" alt=""><span class="rownutri"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt=""><span class="rowfat"></span></li>
			</ul></div></td>   
        </tr>
        <tr data-day="7">
          <td class="day">DAG 7</td>
          <td id="37" class="cell cellm"></td>
         <td id="38" class="cell cellm"></td>
         <td id="39" class="cell cellm"></td>
         <td id="40" class="cell cellm"></td>
         <td id="41" class="cell cellm"></td>
         <td id="42" class="cell cellm"></td>
          <td><div class="shre_icn"><ul class="rowImg">
			  <li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt=""><span class="rowcal"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt=""><span class="rowcarbo"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11..png" alt=""><span class="rownutri"></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt=""><span class="rowfat"></span></li>
			</ul></div></td>   
        </tr>
      </tbody>
    </table>
         <table width="100%" border="0" cellpadding="0" cellspacing="0" class="contr_tbl_ftr">
  <tr>
    <td colspan="2">
     <p class="Velg">Minstebestilling er på <span>12</span>  måltider</p>
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
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="text-left" id="price_td"><span class="price_txt">Pris 0kr</span></td>
    <td class="text-right"><button id="checkOut" class="btn btn-default btn-sm sbt_tbl">Sjekk ut</button></td>
  </tr>
</table>
        	
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div style='display:none' id='insertPID'></div>
<div style='display:none' id='insertPdiv'></div> 