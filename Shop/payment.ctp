<div id="pymnt-mtd_sec">
  <div class="container">
  <div class="pymnt-mtd_sec_inner clearfix">
    
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed pymt_order">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>        							
        							<td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-center"><strong>Price</strong></td>
                                    <td class="text-center"><strong>Vat</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
								<?php  
								
								//echo '<pre>'; print_r($shop);
								
								foreach($shop['OrderItem'] as $key=>$product) { 

								?>
								<tr>
    								<td><?php echo $product['name']; ?></td>    								
    								<td class="text-center"><?php echo $product['quantity']; ?></td>
                                    <td class="text-center"><?php echo $product['price']; ?>Kr</td>
                                    <td class="text-center"><?php echo $product['Product']['vat'] * 100; ?>%</td>
    								<td class="text-right"><?php echo $product['subtotal']; ?>Kr</td>
    							</tr>
								
								<?php }  							
                                ?>
                                
                                <tr>
    								
    								<td class="text-right" colspan="3">Gift Certificate or Coupon Code:</td>
                                    <td class="text-left"><input class="form-control apl_cod" id="coupon" name="cardCVC" placeholder="Coupon Code" type="text">
									<input class="form-control apl_cod" id="order_ID_num" name="cardCVC" placeholder="Coupon Code" type="hidden" value='<?php echo $orderID; ?>'>
									</td>
    								<td class="text-right"><button type='button' id='couponApply' class="btn btn-warning defultblk_btn pull-right">Apply</button></td>
    							</tr>
                                
                                
    							
    							
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
                                    <td class="no-line"></td>
    								<td class="no-line text-center"><strong>SubTotal</strong></td>
    								<td class="no-line text-right"><?php 
									if($shop['Order']['check_price'] != 0 && $shop['Order']['coupon'] != 0){
									
									echo (($shop['Order']['total'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100)-(($shop['Order']['total'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100)*$shop['Order']['coupon']/100)); 
									}elseif($shop['Order']['check_price'] == 0 && $shop['Order']['coupon'] != 0){
									
									echo ($shop['Order']['total'] - ($shop['Order']['total'] * $shop['Order']['coupon'])/100);
									}elseif($shop['Order']['check_price'] != 0 && $shop['Order']['coupon'] == 0){
									
									echo ($shop['Order']['total'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100);
									}else{
									
									echo $shop['Order']['total'];
									}
									
									?>Kr</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    <div class="col-lg-12 col-md-12">
     <h1>Payment Method</h1>
   <div id="payment_tbl">
   <form action="" method="post">
   <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><input type="radio" name="payment_method" value="creditcard"> Credit Cards </td>
    <td><span><img src="<?php echo $this->webroot; ?>home/image/credit_icn.png" alt="wallet_icn" ></span></td>
  </tr>
  <tr>
    <td><input type="radio" value="paypal" name="payment_method" checked> Pay with Paypal</td>
    <td><span><img src="<?php echo $this->webroot; ?>home/image/paypal_icn.png" alt="wallet_icn" ></span></td>
  </tr>
  <tr>
    <td><input type="radio" value="klarna" name="payment_method"> Pay with Klarna</td>
    <td><span><img src="<?php echo $this->webroot; ?>home/image/wallet_icn.png" alt="wallet_icn" ></span></td>
  </tr>
  <tr class="lastrow">
    <td></td>
  <td><button type="submit" class="btn btn-warning defultblk_btn pull-right">Fortsett til utsjekking</button></td>
  </tr>
</table>
</form>
   </div>
   </div>



    
    </div><!--</div>-->
    <!--col-md-12--> 
  </div>
</div>