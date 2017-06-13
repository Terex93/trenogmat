<div id="ordersuccess_sec">
  <div class="container">
  <div class="ordersuccess_inner clearfix ">
 <div class="col-lg-12 col-md-12">
 
 
 <div class="clearfix">
 
 	   <h1>ORDREBEKREFTELSE</h1>
       
       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="order_tbl">
          <tr>
            <td colspan="2" class="text-center"><img src="<?php echo $this->webroot; ?>home/image/order-succes.png" alt="" ></td>
           
          </tr>
              <?php $sum = 0;
			  foreach($shop['ProductQty'] as $key=>$product) { 
			  $sum += $shop['ProductQty'][$key]['price'] + ($shop['ProductQty'][$key]['price'] * $shop['ProductQty'][$key]['Product']['vat']);
			  ?>
				<tr>
					<td>
						<strong><?php echo $shop['ProductQty'][$key]['qty']; ?>x</strong> <?php echo $shop['ProductQty'][$key]['name'].'<br/>'; ?>
						<?php if($product['attribute']){
							foreach($product['attribute'] as $k=>$v) {
							echo $k.' : '.$v.'<br/>';
							}
							}?>
					</td>
					<td>
						<strong class="pull-right">Kr <?php $ord_price = $shop['ProductQty'][$key]['price'] + ($shop['ProductQty'][$key]['price'] * $shop['ProductQty'][$key]['Product']['vat']);
						echo number_format($ord_price,2);
						 ?></strong>
					</td>
				</tr>
                <?php }?>
          <tr>
            <td>Antall</td>
            <td><strong class="pull-right"><?php echo $shop['Order']['quantity'];?></strong></td>
          </tr>
          <tr>
            <td>Sub Total</td>
            <td><strong class="pull-right">Kr <?php 
            echo round($sum);
			?></strong></td>
          </tr>
		  <tr>
            <td>Fraktkostnad</td>
            <td><strong class="pull-right">Kr <?php $subtot1 = $shop['Order']['delivery_cost'];
             echo number_format($subtot1,2);
			?></strong></td>
          </tr>
		  <?php if($shop['Order']['coupon'] != ''){ ?>
		  <tr>
            <td>Rabatt</td>
            <td><strong class="pull-right">Kr <?php $subtot2 = $shop['Order']['coupon'];
            echo number_format($subtot2,2).'%';
			?></strong></td>
          </tr>
		  <?php } ?>
          <tr>
            <td>Total</td>
            <td><strong class="pull-right">Kr <?php 
			
			if($shop['Order']['check_price'] != 0 && $shop['Order']['coupon'] != 0){
									
									echo round(($shop['Order']['total'] + $shop['Order']['delivery_cost'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100)-(($shop['Order']['total'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100)*$shop['Order']['coupon']/100)); 
									}elseif($shop['Order']['check_price'] == 0 && $shop['Order']['coupon'] != 0){
									
									echo round($shop['Order']['total'] + $shop['Order']['delivery_cost'] - ($shop['Order']['total'] * $shop['Order']['coupon'])/100);
									}elseif($shop['Order']['check_price'] != 0 && $shop['Order']['coupon'] == 0){
									
									echo round($shop['Order']['total'] + $shop['Order']['delivery_cost'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100);
									}else{
									
									echo round($shop['Order']['total'] + $shop['Order']['delivery_cost']);
									}
			
			?></strong></td>
          </tr>
        </table>

                
                        
                
            </div>
          </div>  
           
        
        
 </div>
   <div class="clearfix"></div>
  </div><!--contact_sec_inner-->
  
  
  
</div><!--container-->

