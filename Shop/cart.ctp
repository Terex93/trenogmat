<div class="shpncart_sec">
<?php if(empty($shop['OrderItem'])){ ?>
<div class="container">

                    <h1>Handlevogner Tomt.</h1>
                    </div>
                    <?php }else{?>
                    
                    
<div class="container" >

<h1 id='emptytd' style='display:none;'>Handlevogner Tomt.</h1>
<div class="shpncart_inner clearfix" id='accordion'>


<div class="togle1">
     <div class="heading">

                <a id="myHeader1" href="javascript:showonlyone('newboxes1');" style="text-decoration:none; color:#fff;"><img src="<?php echo $this->webroot; ?>home/image/cart.png" alt="" > Handlevogn</a>

             </div>

             <div class="newboxes newbblck" id="newboxes1">


                                <div class="panel-body handtbl table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Produkt</th>
                                                <th>Lagerstatus</th>
                                                <th>Antall</th>
                                                <th>Pris</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach($shop['ProductQty'] as $key=>$product) { 
											?>
                                            <tr>
                                                <td data-label="Produckt">
                                                    <div class="media">
                                                        <a class="thumbnail pull-left" href="#"> <img height='50' width='50' class="media-object" src="<?php echo $this->webroot; ?>files/product/<?php echo $product['Product']['image']; ?>" alt=""> </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><?php echo $product['name']; ?></h4>
                                                            <div class="customizmeal">
														<?php if($product['attribute']){
														foreach($product['attribute'] as $k=>$v) {
														echo $k.' : '.$v.'<br/>';
														}
														}?>
														</div>
                                                        </div>
                                                        
                                                    </div>
                                                </td>
                                                <td data-label="Lagerstatus">
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                </td>
                                                <td data-label="Antall"><strong><input type="email" class="form-control text-center" id="exampleInputEmail1" value="<?php echo $product['qty']; ?>" disabled></strong>
                                                </td>
                                                <td data-label="Pris"><strong><?php echo ($product['price'] + ($product['price'] * $product['Product']['vat'])); ?> Kr</strong>
                                                </td>
                                                <td data-label="Delete">
                                                    <div class="text-right">
                                                        <i class="fa fa-trash cart_cmins" data-qty='<?php echo $product['qty']; ?>' data-price='<?php echo ($product['price'] + ($product['price'] * $product['Product']['vat'])); ?>' data-unique='<?php echo $product['unique']; ?>' data-key="<?php echo $key; ?>" id='<?php echo $product['product_id']; ?>' aria-hidden="true"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            
                                            <tr>
                                            <td colspan="2">&nbsp;</td>
                                            	<td colspan="2">
												

	</td>
                                            </tr>
                                            
                                            <tr>

                                                <td colspan="5" class="handltotl">
                                                    <h5>Totalpris: <strong id='totalss'><?php 
									if($shop['Order']['check_price'] != 0 && $shop['Order']['coupon'] != 0){ 
									
									echo round(($shop['Order']['total'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100)-(($shop['Order']['total'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100)*$shop['Order']['coupon']/100)); 
									}elseif($shop['Order']['check_price'] == 0 && $shop['Order']['coupon'] != 0){
									
									echo round($shop['Order']['total'] - ($shop['Order']['total'] * $shop['Order']['coupon'])/100);
									}elseif($shop['Order']['check_price'] != 0 && $shop['Order']['coupon'] == 0){
									
									echo round($shop['Order']['total'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100);
									}else{
									
									echo round($shop['Order']['total']);
									}
									
									?> Kr</strong></h5>
                                    
                                    <?php if($shop['Order']['coupon'] != 0){ ?>	
											
                                                
									<span class='dsc' style='color:#ff0033; font-size:10px;'>(<?php echo $shop['Order']['coupon']; ?>% rabatt på dette ordre)</span>
												
												
											<?php } ?>
                                    
                                    
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                        <tr>


                                                <td colspan="5" >
                                                <div class="btn-lft">
                                                    <a href="javascript:void(0);" id='fronttab' style=" background-color:#F00; color:#fff; padding:10px 5px;">
                                                        Neste – fyll inn Kundeopplysninger
                                                    </a>
                                                 </div>   
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

			 
             
                                                    </div>

</div>

<div class="togle1">
  
   <div class="heading">

                <a id="myHeader2" href="javascript:void(0);" style="text-decoration:none; color:#fff;"><img src="<?php echo $this->webroot; ?>home/image/postaladdres.png" alt="" > Postadresse</a>

             </div>

             <div class="newboxes inner newbnone" id="newboxes2" > 
             <div id="odering_sec">
             <div class="postadresse odering_sec_inner">
             
                                                                 <!--div class="col-md-5 col-sm-12 col-xs-12">
                                                        <div class="rtxt ordng_head">
                                                            <div class="icon_end"><img src="<?php echo $this->webroot; ?>home/image/carticon.png"> 
                                                            </div>
                                                            <h2>HANDLEVOGN </h2>
                                                        </div>
                                                        <div class="contr_tble" >
                                                            
                                                            <div class="contr_inner contr_inner2 table-responsive " id=''>
                                                                <div class="well ">
                                                                    <table class="table1 table " border="0" cellpadding="0" cellspacing="0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>DAGS</th>
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
                                                                                <td  id='2' class="cell ui-widget-content"></td>
                                                                                <td id='3' class="cell ui-widget-content"></td>
                                                                                <td  id='4' class="cell ui-widget-content"></td>
                                                                                <td  id='5' class="cell ui-widget-content"></td>
                                                                                <td  id='6' class="cell ui-widget-content"></td>


                                                                                <td >
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
                                                                                <td  class='day'>DAG 2</td>
                                                                                <td  id='7' class="cell ui-widget-content"></td>
                                                                                <td  id='8' class="cell ui-widget-content"></td>
                                                                                <td id='9' class="cell ui-widget-content"></td>
                                                                                <td  id='10' class="cell ui-widget-content"></td>
                                                                                <td  id='11' class="cell ui-widget-content"></td>
                                                                                <td  id='12' class="cell ui-widget-content"></td>
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
                                                                            <tr data-day='3'>
                                                                                <td class='day'>DAG 3</td>
                                                                                <td id='13' class="cell ui-widget-content"></td>
                                                                                <td id='14' class="cell ui-widget-content"></td>
                                                                                <td id='15' class="cell ui-widget-content"></td>
                                                                                <td id='16' class="cell ui-widget-content"></td>
                                                                                <td id='17' class="cell ui-widget-content"></td>
                                                                                <td id='18' class="cell ui-widget-content"></td>
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
                                                                            <tr data-day='4'>
                                                                                <td class='day'>DAG 4</td>
                                                                                <td id='19' class="cell ui-widget-content"></td>
                                                                                <td id='20' class="cell ui-widget-content"></td>
                                                                                <td id='21' class="cell ui-widget-content"></td>
                                                                                <td id='22' class="cell ui-widget-content"></td>
                                                                                <td id='23' class="cell ui-widget-content"></td>
                                                                                <td id='24' class="cell ui-widget-content"></td>
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
                                                                            <tr data-day='5'>
                                                                                <td class='day'>DAG 5</td>
                                                                                <td id='25' class="cell ui-widget-content"></td>
                                                                                <td id='26' class="cell ui-widget-content"></td>
                                                                                <td id='27' class="cell ui-widget-content"></td>
                                                                                <td id='28' class="cell ui-widget-content"></td>
                                                                                <td id='29' class="cell ui-widget-content"></td>
                                                                                <td id='30' class="cell ui-widget-content"></td>
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
                                                                            <tr data-day='6'>
                                                                                <td class='day'>DAG 6</td>
                                                                                <td id='31' class="cell ui-widget-content"></td>
                                                                                <td id='32' class="cell ui-widget-content"></td>
                                                                                <td id='33' class="cell ui-widget-content"></td>
                                                                                <td id='34' class="cell ui-widget-content"></td>
                                                                                <td id='35' class="cell ui-widget-content"></td>
                                                                                <td id='36' class="cell ui-widget-content"></td>
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
                                                                            <tr data-day='7'>
                                                                                <td class='day'>DAG 7</td>
                                                                                <td id='37' class="cell ui-widget-content"></td>
                                                                                <td id='38' class="cell ui-widget-content"></td>
                                                                                <td id='39' class="cell ui-widget-content"></td>
                                                                                <td id='40' class="cell ui-widget-content"></td>
                                                                                <td id='41' class="cell ui-widget-content"></td>
                                                                                <td id='42' class="cell ui-widget-content"></td>
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
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                          -
                                                            
                                                            
                                                            <div id='messagetable' style='display:none;'>
                                                                <div class="well">
                                                                    <table class="table1" border="0" cellpadding="0" cellspacing="0" style="background-color:#fff; border:4px solid #CCC; width:100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="background-color:#000; color:#fff; padding:5px;">DAGS</th>
                                                                                <th style="background-color:#ff0033; color:#fff; padding:5px;">1</th>
                                                                                <th style="background-color:#ff0033; color:#fff; padding:5px;">2</th>
                                                                                <th style="background-color:#ff0033; color:#fff; padding:5px;">3</th>
                                                                                <th style="background-color:#ff0033; color:#fff; padding:5px;">4</th>
                                                                                <th style="background-color:#ff0033; color:#fff; padding:5px;">5</th>
                                                                                <th style="background-color:#ff0033; color:#fff; padding:5px;">6</th>
                                                                                <th style="background-color:#ff0033; color:#fff; padding:5px;">TOTAL MAKRO</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr data-day='1'>
                                                                                <td style="background-color:#fff; text-align:center; color:#000;" class='day'>DAG 1</td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='1' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='2' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='3' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='4' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center;  width:60px;" id='5' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;"  id='6' class="cell ui-widget-content"></td>


                                                                                <td >
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>

                                                                                </td>

                                                                            </tr>
                                                                            <tr data-day='2'>
                                                                                <td style="background-color:#fff; color:#000;" class='day'>DAG 2</td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='7' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='8' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='9' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='10' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='11' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='12' class="cell ui-widget-content"></td>
                                                                                <td>
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr data-day='3'>
                                                                                <td style="background-color:#fff; color:#000;" class='day'>DAG 3</td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='13' class="cell ui-widget-content"></td>
                                                                                <td style="background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='14' class="cell ui-widget-content"></td>
                                                                                <td style="background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='15' class="cell ui-widget-content"></td>
                                                                                <td style="background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='16' class="cell ui-widget-content"></td>
                                                                                <td style="background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='17' class="cell ui-widget-content"></td>
                                                                                <td  style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='18' class="cell ui-widget-content"></td>
                                                                                <td>
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr data-day='4'>
                                                                                <td style="background-color:#fff; color:#000;" class='day'>DAG 4</td>
                                                                                <td style="background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='19' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='20' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='21' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='22' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='23' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='24' class="cell ui-widget-content"></td>
                                                                                <td>
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr data-day='5'>
                                                                                <td style="background-color:#fff; color:#000;" class='day'>DAG 5</td>
                                                                                <td style="background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='25' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='26' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='27' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='28' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='29' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='30' class="cell ui-widget-content"></td>
                                                                                <td>
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr data-day='6'>
                                                                                <td style="background-color:#fff; color:#000;" class='day'>DAG 6</td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='31' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='32' class="cell ui-widget-content"></td>
                                                                                <td style="background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='33' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='34' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='35' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='36' class="cell ui-widget-content"></td>
                                                                                <td>
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr data-day='7'>
                                                                                <td style="background-color:#fff; color:#000;" class='day'>DAG 7</td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='37' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='38' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='39' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='40' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='41' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; color:#ec1a21; text-align:center; width:60px;" id='42' class="cell ui-widget-content"></td>
                                                                                <td>
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                            
															
															
															   <div id='DivIdToPrint' style='display:none;'>
															   <?php if(!empty($loggeduser)){ ?>
															   <h2><?php echo $loggedusername; ?></h2>
															   <?php } ?>
                                                                <div class="well">
                                                                    <table class="table1" border="0" cellpadding="0" cellspacing="0" style="background-color:#000; border:4px solid #CCC;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="background-color:#000; color:#000; font-size:28px; padding:15px;  border-bottom:1px solid #CCC;">DAGS</th>
                                                                                <th style="background-color:#ff0033; color:#000;  font-size:25px; padding:15px;  border-bottom:1px solid #CCC;">1</th>
                                                                                <th style="background-color:#ff0033; font-size:25px;  color:#000; padding:15px;  border-bottom:1px solid #CCC;">2</th>
                                                                                <th style="background-color:#ff0033; font-size:25px;  color:#000; padding:15px; border-bottom:1px solid #CCC !important;">3</th>
                                                                                <th style="background-color:#ff0033; font-size:25px;  color:#000; padding:15px; border-bottom:1px solid #CCC;">4</th>
                                                                                <th style="background-color:#ff0033; font-size:25px;  color:#000; padding:15px;  border-bottom:1px solid #CCC;">5</th>
                                                                                <th style="background-color:#ff0033; font-size:25px;  color:#000; padding:15px;  border-bottom:1px solid #CCC;">6</th>
                                                                                <th style="background-color:#ff0033; font-size:25px;  color:#000; padding:15px;  border-bottom:1px solid #CCC;">TOTAL MAKRO</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr data-day='1'>
                                                                                <td style="background-color:#fff; color:#000; text-align:center; " class='day'>DAG 1</td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px;  text-align:center; color:#F00;" id='1' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='2' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='3' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='4' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px;  text-align:center; color:#F00;" id='5' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px;  text-align:center; color:#F00;"  id='6' class="cell ui-widget-content"></td>


                                                                                <td >
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>

                                                                                </td>

                                                                            </tr>
                                                                            <tr data-day='2'>
                                                                                <td style="background-color:#fff; color:#000; text-align:center; " class='day'>DAG 2</td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='7' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='8' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='9' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='10' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc;  font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='11' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='12' class="cell ui-widget-content"></td>
                                                                                <td>
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr data-day='3'>
                                                                                <td style="background-color:#fff; color:#000; text-align:center; " class='day'>DAG 3</td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='13' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='14' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='15' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='16' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='17' class="cell ui-widget-content"></td>
                                                                                <td  style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='18' class="cell ui-widget-content"></td>
                                                                                <td>
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr data-day='4'>
                                                                                <td style="background-color:#fff; color:#000; text-align:center; " class='day'>DAG 4</td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='19' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='20' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='21' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='22' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='23' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='24' class="cell ui-widget-content"></td>
                                                                                <td>
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr data-day='5'>
                                                                                <td style="background-color:#fff; color:#000; text-align:center; " class='day'>DAG 5</td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='25' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='26' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='27' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='28' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='29' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='30' class="cell ui-widget-content"></td>
                                                                                <td>
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr data-day='6'>
                                                                                <td style="background-color:#fff; color:#000; text-align:center; " class='day'>DAG 6</td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='31' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='32' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='33' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='34' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='35' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='36' class="cell ui-widget-content"></td>
                                                                                <td>
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr data-day='7'>
                                                                                <td style="background-color:#fff; color:#000; text-align:center; " class='day'>DAG 7</td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='37' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='38' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='39' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='40' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='41' class="cell ui-widget-content"></td>
                                                                                <td style=" background-color:#ccc; font-size:22px;  color:#000; padding:0px; text-align:center; color:#F00;" id='42' class="cell ui-widget-content"></td>
                                                                                <td>
                                                                                    <div class="shre_icn">
                                                                                        <ul class="rowImg" style="padding:0">
<li><img src="<?php echo $this->webroot; ?>home/image/kacl_icon11X11.png" alt="" ><span class='rowcal'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn11X11.png" alt="" ><span class='rowfat'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/fire_icn211X11.png" alt="" ><span class='rowcarbo'></span></li>
			  <li><img src="<?php echo $this->webroot; ?>home/image/shareit_icn11X11.png" alt="" ><span class='rownutri'></span></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
															
															
															
															
															
															
															
															
															
															

                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="contr_tbl_ftr"></table>
                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="contr_tbl_ftr contr_tbl_ftr2">

                                                                <tr>
                                                                    
                                                                    <td class="text-right" colspan="2"><span id='prisCart'>Pris: 0kr</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    
																	<td colspan="2" class="text-right"><span class="dlivry_txt" style='display:none;'>Total: <span id='shipTOTL'>0 kr</span></span>
                                                                    </td>
                                                                    

                                                                </tr>
																<?php if($shop['Order']['coupon'] != ''){ ?>
																 <tr class="dsc1">
                                                                   
																	<td colspan="2" class="text-right"><div class="discnt">(<?php echo $shop['Order']['coupon']; ?>% rabatt på dette ordre)</div>
                                                                    </td>
                                                                    

                                                                </tr>
																<?php } ?>
                                                                <tr>
                                                                            	<td class="mblprnt"><a href="javascript:void(0);" id='op' onclick="printDiv();"><img src="<?php echo $this->webroot; ?>home/image/print_icn.png" alt="" > Skriv ut</a>
                                                                    </td>
                                                                    <td class="text-right"><span class="dlivry_txt" style='display:none;'>Leveringskostnad: <span id='dlvryCost'>0 kr</span></span>
                                                                    </td>
                                                                            </tr>
                                                                <tr>
                                                                    <td  colspan="2">
                                                                        <div id="flip"><a href='javascript:void(0);' id='flip'><img src="<?php echo $this->webroot; ?>home/image/epost_icn.png" alt=""> Send epost</a>
                                                                        </div>
                                                                    </td>
                                                                    

                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <div id="panel" class="form-group ">
                                                                            <table width="100%"  class="sendetbl" cellpadding="0" cellspacing="0">
                                                                            
                                                                                <tr>
                                                                                    <td>



                                                                                        <input class="form-control sende" id="sendEmail" size="3" placeholder="Skriv inn epostadressen din" required="" type="text" align="left"> 
                                                                                    </td>
                                                                                    <td><button id='boton' class="btn btn-sm btn-primary defult_btn sendbtn" type="submit">Sende</button></td>
                                                                                   
                                                                                </tr>

                                                                            </table>

                                                                        </div>



                                                                    </td>
                                                                </tr>
                                                            </table>

                                                            <style>
                                                                .slider {
                                                                    overflow-y: hidden;
                                                                    max-height: 100px;
                                                                    /* approximate max height */
                                                                    
                                                                    transition-property: all;
                                                                    transition-duration: .5s;
                                                                    transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
                                                                }
                                                                .slider.closed {
                                                                    max-height: 0;
                                                                }
                                                            </style>


                                                        </div>
                                                    </div-->                                               
                                                    
             <div class="col-md-12 col-sm-12 col-xs-12">

                                                        <div class="kunde_fom">
                                                            <h1><img src="<?php echo $this->webroot; ?>home/image/agent_icn.png" alt="agent icn" > Kundeopplysninger</h1>

                                                            <?php echo $this->Form->create('Order' , array('id' => 'shipFrom')); ?>
                                                            <div class="col-xs-12 form-group kundefrm">
                                                            <div class="logginn">
                                                                        <?php if (empty($loggeduser)) { ?>
                                                                        <h2>Er du allerede kunde hos oss? <a href="#0" data-toggle="modal" data-target="#login_2" class="login_shw active11">Logg inn</a></h2>
                                                                        <?php } ?>
                                                                    </div>
                                                                
                                                                    

                                                                    <div class="kunde-left">

                                                                       <?php if(!empty($loggeduser)){
																	   $namelogin = explode(' ',$loggedusername);
																	   } ?>
                                                                        <div class="form-group">
                                                                            <label>Fornavn*</label>
                                                                            <input type="text" id='r_fname' class="form-control" name='data[Order][first_name]' value='<?php if(!empty($loggeduser)){ echo $namelogin[0]; }else{ if($address['first_name'] != ''){ echo $address['first_name'];} } ?>' required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                        <label>Etternavn*</label>
                                                                        <input type="text" class="form-control" id='r_lname' name='data[Order][last_name]' value='<?php if(!empty($loggeduser)){ if($namelogin[1] != ''){ echo $namelogin[1]; }else{ echo $address['last_name']; } }else{ if($address['last_name'] != ''){ echo $address['last_name'];} } ?>' required>
                                                                    </div>
																		<div class="form-group">
                                                                            <label>E-post*</label>
                                                                            <input type="email" id='shipEmail' class="form-control" name='data[Order][email]' value='<?php if(!empty($loggeduser)){ echo $loggedEmail; }else{ if($address['email'] != ''){ echo $address['email']; } } ?>' required>
                                                                        </div>
                                                                       <div class="form-group">
                                                                            <label>Mobilnummer*</label>
                                                                           <input type="text" class="form-control field" name='data[Order][phone]' value='<?php if(!empty($loggeduser)){ echo $loggedUserPhn; }else{ if($address['phone'] != ''){ echo $address['phone'];} }?>' maxlength="10" required>
                                                                        </div>
                                                                    <div class="form-group">
                                                                        <label>Adresse*</label>
                                                                        <input type="text" id='r_adres' class="form-control" name='data[Order][address_1]' value='<?php if(!empty($loggeduser)){ echo $loggedUserAddress; }else{ if($address['shipping_address'] != ''){ echo $address['shipping_address'];} } ?>' required>
                                                                    </div>
<div class="form-group">
                                                                            <label>C/O</label>
                                                                            <input type="text" class="form-control" name='data[Order][co]' value='<?php if($address['co'] != ''){ echo $address['co'];} ?>'>
                                                                        </div>

                                                                    </div>
                                                                
                                                                <!--col-lg-6 col-md-6-->

                                                               
                                                                    <!--<div class="row">
                                                                        <h2>
                &nbsp;
              </h2>
                                                                    </div>-->
                                                                    <!--row-->

																	<div class="kunde-right">
                                                                     
                                                                        <div class="form-group">
                                                                            <label>Postnummer*</label>
                                                                            <input type="text" id='postal_ship' class="form-control field" maxlength="4" name='data[Order][shipping_zip]' value='<?php if(!empty($loggeduser)){ echo $loggedUserZip; }else{ if($address['shipping_zip'] != ''){ echo $address['shipping_zip'];} } ?>' required>
                                                                        </div>
                                                                    
																	
                                                                    <div class="form-group">
                                                                        <label>Stedsnavn*</label>
                                                                        <input type="text" id='r_city' class="form-control" name='data[Order][shipping_city]' value='<?php if(!empty($loggeduser)){ echo $loggedUserCity; }else{ if($address['shipping_city'] != ''){ echo $address['shipping_city'];} } ?>' required>
                                                                        <input style="display:none;" type="text" id='bill_addrs' class="form-control" name='data[Order][billing_address]' value='<?php if($address['billing_address'] != ''){ echo $address['billing_address'];} ?>'>
                                                                        <input style="display:none;" type="text" id='bill_zip' class="form-control" name='data[Order][billing_zip]' value='<?php if($address['billing_zip'] != ''){ echo $address['billing_zip'];} ?>'>
                                                                        <input style="display:none;" type="text" id='bill_addrs2' class="form-control" name='data[Order][billing_address2]' value='<?php if($address['billing_address2'] != ''){ echo $address['billing_address2'];} ?>'>
                                                                        <input style="display:none;" type="text" id='bill_city' class="form-control" name='data[Order][billing_city]' value='<?php if($address['billing_city'] != ''){ echo $address['billing_city'];} ?>'>
                                                                    </div>

																</div>
                                                               

                                                            </div>

                                                            <!-- col-xs-12 form-group-->


                                                            <div class="col-xs-12 form-group ">
                                                                <div class="form-group">
                                                                    <label>Kommentar</label>
                                                                    <textarea name="data[Order][notes]" class="form-control"><?php if($address['notes'] != ''){ echo $address['notes'];} ?></textarea>
                                                                </div>
                                                            </div>
                                                            <!--col-lg-6 col-md-6-->
                                                            <!--div class="col-xs-12 form-group ">
                                                                <div class="checkbox checkbox-danger">
                                                               

                                                                    <input id="checkbox644" name="data[Order][both]" type="checkbox" value='both_same'>
                                                                    <label for="checkbox644">
                                                                        Fortsett med samme fakturaadresse
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 form-group ">
                                                                <button type="button" id='otherBilling' class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModalship">Bruk Annen Leverings Adresse</button>
                                                            </div-->

                                                        </div>
                                                        <!--kunde_fom ends-->

                                                      
                                                            <div class="col-xs-12">
                                                                <div class="frm_chk">
                                                                    <div class="oblig_cndt">* Obligatoriske felt</div>
                                                                   <?php if(empty($loggeduser)){?>
                                                                    <div class="checkbox checkbox-danger">

                                                                        <input type="checkbox" value='register' id='registerme' name="data[Order][register]">
                                                                        <label for="registerme">
                                                                            Lagre opplysnigner?
                                                                        </label>
                                                                    </div>

                                                                    <?php } ?>
                                                                    <div class="slideAccount" style='display:none;'>
                                                                        <div class="form-group">
                                                                            <label>Bruker-epost*</label>
                                                                            <input id='cartSignUp' class="form-control" name="data[Order][username]" type="text">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Passord*</label>
                                                                            <input class="form-control" name="data[Order][password]" type="password">
                                                                        </div>
                                                                    </div>

                                                                    <!--   <input type="checkbox" style="border-color:red" value='subscribed' id='subscribeme' name="data[Order][subscribed]">
            Ja jeg onsket e. post orn produktnyheter, trender og konkurranser.-->

                                                                    <!--div class="checkbox checkbox-danger">
                                                                        <input id="checkbx06" type="checkbox" value='subscribed' id='subscribeme' name="data[Order][subscribed]">
                                                                        <label for="checkbx06">
                                                                            Ja jeg onsket e. post orn produktnyheter, trender og konkurranser.
                                                                        </label>
                                                                    </div-->


                                                                    <a href="javascript:void(0);" id='third_href' class="kundebtn"><button type="submit" class="btn defult_btn ">Neste - Velg Fraktalternativ</button></a>
                                                                    <?php echo $this->Form->end(); ?>
                                                                </div>
                                                                <!--frm_chk-->

                                                            </div>
                                                        

                                                    </div>
													
													
													
								 <!-- Modal -->
                                    <!--div id="myModalship" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Angi en ny mottaksadresse</h4>
                                                </div>
                                                <div class="modal-body clearfix">


                                                    <div class="col-md-12">

                                                        <form class="form-horizontal" action="" method="post">
                                                            <fieldset>



                                                                
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label" for="email">Post Number</label>
                                                                    <div class="col-md-9">
                                                                        <input id="billing_zip" name="email" type="text" placeholder="Post Number" class="form-control field" maxlength="6">
                                                                    </div>
                                                                </div>


                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label" for="message">Adresse</label>
                                                                    <div class="col-md-9">
                                                                        <textarea class="form-control" id="billing_address" name="message" placeholder="Adresse" rows="5"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label" for="email">Landemerke</label>
                                                                    <div class="col-md-9">
                                                                        <input id="billing_place" type="text" placeholder="Landemerke" class="form-control">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label" for="email">Land</label>
                                                                    <div class="col-md-9">
                                                                        <input id="billing_land" type="text" placeholder="Land" class="form-control">
                                                                    </div>
                                                                </div>

                                                                
                                                                <div class="form-group">
                                                                    <div class="col-md-12 text-right">
                                                                        <button type="button" id='addBilling' data-dismiss="modal" class="btn defult_btn pull-right" >Lagre og fortsett</button>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>

                                                    </div>




                                                </div>

                                            </div>

                                        </div>
                                    </div-->
													
													
													
             
             </div>
             </div>
             
              <div class="clearfix">
             <!--a href="javascript:showonlyone('newboxes3');"  style=" background-color:#F00; color:#fff; padding:10px 5px;">
                                                        Neste- fyll inn Kuneopplysniger
                                                    </a-->
             </div>
             </div>
</div>
<form method="post" action="" class="cartfrm">
<div class="togle1">
 
   <div class="heading">

                <a id="myHeader3" href="javascript:void(0);" style="text-decoration:none; color:#fff;"><img src="<?php echo $this->webroot; ?>home/image/delivery.png" alt="" > Leveranse</a>

             </div>

             <div class="newboxes inner newbnone" id="newboxes3">
             
             
             <div class="leveranse delivey_sec">
             
                                               <div class="panel-body delivey_sec ">
                                        <span class='no_methods' style='display:none;'></span>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="delivey_tbl table">
                                            <tr>
                                                <td>
                                                    <div class="radio radio-danger">
                                                        <input type="radio" class='dlm' name="ww" id="cartradio1" value="">
														
                                                        <label for="cartradio1">
                                                            Bring
                                                        </label>
                                                    </div>
                                                </td>
                                      		 <td  colspan="3"><a href="<?php echo $this->webroot; ?>pages/sporsmal-og-svar" target="_blank" title=''>Vis info</a>  </td>
                                                

                                            </tr>
                                            <tr class='tregmethod'>
                                                <td>
                                                    <div class="radio radio-danger">
                                                        <input type="radio" class='dlm' name="ww" id="cartradio2" value="0">
                                                        <label for="cartradio2">
                                                            Levert av Trenogmat på Randaberg, Stavanger, Sandnes, Sola, Ålgård og på Jæren. Hver onsdag og lørdag mellom 18.00 og 22.00 <b class='freeDlvryText'>( Gratis levering )</b>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td colspan="3"><a href="<?php echo $this->webroot; ?>pages/terms" target="_blank" title=''>Vis info</a>
                                                </td>
                                                

                                            </tr>
                                            
                                            <tr class='bring_service'>
                                            	<td valign="top" style='display:none;'>
                                                	<div class="bring">
                                                     
                                                    	<div class="col-sm-6 col-xs-12"><p>Bruk disse valgene for å tilpasse fraktalternativene og prøve dem ut med forskjellige sendinger. </p></div>
                                                        <div class="col-sm-6 col-xs-12"><img src="<?php echo $this->webroot; ?>home/image/logo-bring.jpg" /></div>
                                                       
                                                        <div class="col-sm-12"> 
                                                       <div class="clearfix voffset2">
                                                        <label>Fra postnummer *</label>
                                                        <input type="text" value='<?php echo $services[0]['Service']['from_zip']; ?>' id='store_zip' readonly />
                                                        </div>
                                                        <div class="clearfix voffset2">
                                                        <label>Til postnummer *</label>
                                                        <input type="text" id='toZip' readonly />
                                                        </div>
                                                        <div class="clearfix voffset2">
                                                        <label>Forsendelsesdato</label>
                                                        
                                                        <input type="text" id="datepicker" placeholder="dd/mm/yyyy" class='shipDate'>
                                                        </div>
                                                          <div class="clearfix voffset2">
                                                        <label>Vekt (gram) *</label>
														<?php if($shop['Order']['quantity'] == 12){
														         $weight = $services[0]['Service']['wght_for_12'];
														      }elseif($shop['Order']['quantity'] > 12 && $shop['Order']['quantity'] <= 24){
															     $weight = $services[0]['Service']['wght_for_13_24'];
															  }elseif($shop['Order']['quantity'] > 24 && $shop['Order']['quantity'] <= 36){
															     $weight = $services[0]['Service']['wght_for_25_36'];
															  }elseif($shop['Order']['quantity'] > 36 && $shop['Order']['quantity'] <= 42){
															     $weight = $services[0]['Service']['wght_for_37_42'];
															  }
														?>
                                                        <input type="text" id='packwght' value='<?php echo $weight*1000; ?>' readonly />
                                                        </div>
                                                          <div class="clearfix voffset2">
                                                        <label>Lengde (cm)</label>
														
														<?php if($shop['Order']['quantity'] == 12){
														         $len = $services[0]['Service']['len_for_12'];
														      }elseif($shop['Order']['quantity'] > 12 && $shop['Order']['quantity'] <= 24){
															     $len = $services[0]['Service']['len_for_13_24'];
															  }elseif($shop['Order']['quantity'] > 24 && $shop['Order']['quantity'] <= 36){
															     $len = $services[0]['Service']['len_for_25_36'];
															  }elseif($shop['Order']['quantity'] > 36 && $shop['Order']['quantity'] <= 42){
															     $len = $services[0]['Service']['len_for_25_36'];
															  }
														?>
														
                                                        <input type="text" id='packlen' value='<?php echo $len; ?>' readonly />
                                                        </div>
                                                          <div class="clearfix voffset2">
                                                        <label>Bredde (cm)</label>
														
														<?php if($shop['Order']['quantity'] == 12){
														         $width = $services[0]['Service']['width_for_12'];
														      }elseif($shop['Order']['quantity'] > 12 && $shop['Order']['quantity'] <= 24){
															     $width = $services[0]['Service']['width_for_13_24'];
															  }elseif($shop['Order']['quantity'] > 24 && $shop['Order']['quantity'] <= 36){
															     $width = $services[0]['Service']['width_for_25_36'];
															  }elseif($shop['Order']['quantity'] > 36 && $shop['Order']['quantity'] <= 42){
															     $width = $services[0]['Service']['width_for_25_36'];
															  }
														?>
														
                                                        <input type="text" id='packwidth' value='<?php echo $width; ?>' readonly />
                                                        </div>
                                                          <div class="clearfix voffset2">
                                                        <label>Høyde (cm)</label>
														
														<?php if($shop['Order']['quantity'] == 12){
														         $height = $services[0]['Service']['hght_for_12'];
														      }elseif($shop['Order']['quantity'] > 12 && $shop['Order']['quantity'] <= 24){
															     $height = $services[0]['Service']['hght_for_13_24'];
															  }elseif($shop['Order']['quantity'] > 24 && $shop['Order']['quantity'] <= 36){
															     $height = $services[0]['Service']['hght_for_25_36'];
															  }elseif($shop['Order']['quantity'] > 36 && $shop['Order']['quantity'] <= 42){
															     $height = $services[0]['Service']['hght_for_25_36'];
															  }
														?>
														
                                                        <input type="text" id='packheight' value='<?php echo $height; ?>' readonly />
                                                        </div>
														
                                                         <!--div class="clearfix voffset2" class='bringServe'>
                                                        <label>Produkter</label>
                                                        <input type="checkbox" value='PA_DOREN'/> På Døren
                                                        <input type="checkbox" value='BPAKKE_DOR-DOR'/> Bedriftspakke
                                                        <input type="checkbox" value='EKSPRESS09'/> Ekspress09 
                                                        </div-->
                                                        </div>
                                                    </div>
                                                </td>
                                                <td colspan="5" id='bringtable' valign="top">
    
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"> 
                                                 <div class="pull-right">
                                                    <a href="javascript:showonlyone('newboxes4');" id='thirdTab'  style=" background-color:#F00; color:#fff; padding:10px 5px;">
                                                       Neste – Velg Betalingsmåte
                                                   </a>
                                                   </div>  
                                                   
                                            </tr>

                                        </table>

                                    </div>                                       
             
             
             </div>
             <div class="clearfix">
              
             </div>
</div>
</div>

<div class="togle1">
 
   <div class="heading">

                <a id="myHeader4" href="javascript:void(0);"  style="text-decoration:none; color:#fff;" > <img src="<?php echo $this->webroot; ?>home/image/card.png" alt="" > Betalingsmetode</a>

             </div>

             <div class="newboxes inner newbnone" id="newboxes4" >
             
             <div class="betalingsmetode table-responsive">
             
                                                     <table width="100%" border="0" cellspacing="0" cellpadding="0" class="delivey_tbl table">
                                            <tr>
                                                <td>
                                                    <div class="radio radio-danger">
                                                        <input type="radio" id="cartrdio2" value="paypal" name="payment_method" checked="">
                                                        <label for="cartrdio2">
                                                            Betal med PayPal
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-right"><img src="<?php echo $this->webroot; ?>home/image/paypal-icon.png" alt="">
                                                </td>
                                                <td class="text-right"><a href="https://www.paypal.com/" target="_blank">Vis Info</a>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="radio radio-danger">
                                                        <input type="radio" id="cartrdio3" value="dibs" name="payment_method" checked="">
                                                        <label for="cartrdio3">
                                                            Sikker betaling med kort (DIBS betaling)
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-right"><img src="<?php echo $this->webroot; ?>home/image/DIBS-logo.png" alt="">
                                                </td>
                                                <td class="text-right">
                                                <div class="toltp">
                                                <a href="javascript:void(0);"  id="trigger" title="">Vis Info</a></div>

 <!-- HIDDEN / POP-UP DIV -->
    <div id="pop-up">
   
      <p>
        Vi aksepterer kun Visa og Mastercard, men ikke kredittkort som er utstedt av utenlandsk bank. Beløpet reserveres på din konto når du fullfører kjøpsprosessen, men belastes først ved levering.
        </p>
        <p>

Vi benytter oss av VbV (Verified by Visa), en global sikkerhetsstandard for Visa og Mastercard. Overføringen skjer med SSL-kryptering, som betyr at ingen uvedkommende kan se dine kredittkortopplysninger
.
      </p>
    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                <div class="pull-right">
                                                     <a href="javascript:showonlyone('newboxes5');"  style=" background-color:#F00; color:#fff; padding:10px 5px;">
                                                        Neste – sjekk ut
                                                    </a>
                                                    </div>
                                            </tr>

                                        </table>
             
             
             </div>
             
             
              <div class="clearfix">
             
             </div>
             </div>
</div>


<div class="togle1">
 
   <div class="heading">

                <a id="myHeader5" href="javascript:void(0);"  style="text-decoration:none; color:#fff;"> <img src="<?php echo $this->webroot; ?>home/image/checkout.png" alt="" > Sjekk ut</a>

             </div>

             <div class="newboxes inner newbnone" id="newboxes5" >
             
             <div class="sjekk chkout_tbl">
             	                                    <div class="panel-body chkout_tbl table-responsive">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
                                            <tr>
                                                <td valign="top" class="left_sec">
                                                    <address>
                    <div class="title">Leveringsadresse</div>

                    <?php //echo $address['shipping_zip']; ?>
                    <span id='nameShip'><?php echo $address['first_name'].' '.$address['last_name']; ?></span> <br>
                    <span id='areaAdrs'><?php echo $address['shipping_zip'].', '.$address['shipping_address'].' , '.$address['shipping_city']; ?></span>
                 </address>
                                                </td>

                                                <td valign="top" class="right_sec">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td colspan="3" valign="top">
                                                                <span>Handlekurvens innhold</span>
                                                            </td>
                                                        </tr>
                                                      <?php foreach($shop['ProductQty'] as $key=>$product) { ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $product[ 'name']; ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo $product[ 'qty']; ?> stk</td>
                                                            <td class="text-right">
                                                                <?php echo ($product['price'] + ($product['price'] * $product['Product']['vat'])); ?>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>

                                                      
                                                        <tr>
                                                            <td colspan="3">Frakt</td>
                                                        </tr>
                                                        <td colspan="3">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="delivey_tbl cart_dlvy">
                                                                <tr>
                                                                    <td>
                                                                        <div class="radio radio-danger">
                                                                            <input type="radio" name="delivery_methods" id="cart1" value="" checked="">
                                                                            <label for="cart1">
                                                                                Bring
                                                                            </label>
                                                                        </div>
																		
																		<div id='bringPost'>
																		
																		</div>
                                                                    </td>

                                                                    

                                                                </tr>
                                                                <tr class='tregmethod'> 
                                                                    <td>
                                                                        <div class="radio radio-danger">
                                                                            <input type="radio" name="delivery_methods" id="cart2" value="0" checked="">
                                                                            <label for="cart2">
                                                                                Levert av Trenogmat på randaberg, Stavanger, Sandnes, Sola, Ålgård og på Jæren. Hver onsdag og lørdag mellom 18.00 og 22.00 <b class='freeDlvryText'>( Gratis levering )</b>
                                                                            </label>
                                                                        </div>
                                                                    </td>

                                                                   

                                                                </tr>
																<tr>
																<td id="bringPost" valign="top">
																</td>
																</tr>

                                                                <tr>
                                                                   
                                                                    <td colspan="2">
                                                                         <div class="input-group">										
																  <input class="form-control" id='coupon' placeholder="Rabattkode" type="text">
																  <span class="input-group-btn">
																	<button class="btn btn-default" id="couponApply" type="button">Bruk</button>
																  </span>
																</div>
                                                                    </td>
                                                                    <td class="text-right"><span class="glb_txtblck totl_fntsz14">Totalt</span> <span class="glb_txtred totl_fntsz14 checkoutTotal" data-total='
																	
																	<?php 
																			if($shop['Order']['check_price'] != 0 && $shop['Order']['coupon'] != 0){ 
																			
																			echo (($shop['Order']['total'] + $shop['Order']['delivery_cost'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100)-(($shop['Order']['total'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100)*$shop['Order']['coupon']/100)); 
																			}elseif($shop['Order']['check_price'] == 0 && $shop['Order']['coupon'] != 0){
																			
																			echo ($shop['Order']['total'] + $shop['Order']['delivery_cost'] - ($shop['Order']['total'] * $shop['Order']['coupon'])/100);
																			}elseif($shop['Order']['check_price'] != 0 && $shop['Order']['coupon'] == 0){
																			
																			echo ($shop['Order']['total'] + $shop['Order']['delivery_cost'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100);
																			}else{
																			
																			echo $shop['Order']['total'] + $shop['Order']['delivery_cost'];
																			}?>
																	'>
																	
																	<?php 
																		if($shop['Order']['check_price'] != 0 && $shop['Order']['coupon'] != 0){ 
																		
																		echo round(($shop['Order']['total'] + $shop['Order']['delivery_cost'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100)-(($shop['Order']['total'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100)*$shop['Order']['coupon']/100)); 
																		}elseif($shop['Order']['check_price'] == 0 && $shop['Order']['coupon'] != 0){
																		
																		echo round($shop['Order']['total'] + $shop['Order']['delivery_cost'] - ($shop['Order']['total'] * $shop['Order']['coupon'])/100);
																		}elseif($shop['Order']['check_price'] != 0 && $shop['Order']['coupon'] == 0){
																		
																		echo round($shop['Order']['total'] + $shop['Order']['delivery_cost'] + ($shop['Order']['total'] * $shop['Order']['check_price'])/100);
																		}else{
																		
																		echo round($shop['Order']['total'] + $shop['Order']['delivery_cost']);
																		}
																		
																		?> Kr
																	</span>
                                                                        <br/>
                                                                        <span class="glb_txtgrey totl_fntsz15"> hvorav MVA 
																		<span class='checkoutTotal_mva'>
																		
																		</span> Kr
<?php if($shop['Order']['coupon'] != 0){ ?>	
											
                                                
									<span class='dsc' style='color:#ff0033; font-size:10px;'>(<?php echo $shop['Order']['coupon']; ?>% rabatt på dette ordre)</span>
												
												
											<?php } ?>																		
																		</span>
                                                                        <br/>
                                                                        <br/>
                                                                        <span class="glb_txtred " style="display:none;"> From the toptal amount<br/> the 15% From the food and the 25% from the delivery is vat</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3">
                                                                        <p class="glb_txtgrey text-left">Når du klikker på "Gjennomfør kjøp" godkjenner du <span class="glb_txtred"><a href="<?php echo $this->webroot; ?>pages/terms" class="glb_txtblck" target="_blank">Trenogmat Kjøpsbetingelser</a></span>
                                                                        </p>
                                                                        
                                                                    </td>
                                                                </tr>

                                                                <tr>
																
                                                                    <td colspan="3">
                                                                        <button  style=" background-color:#F00; color:#fff; padding:10px 5px;" type="submit" class="btn btn-success defult_btn pull-right">
                                                                            Gjennomfør kjøp
                                                                        </button>
                                                                </tr>

                                                            </table>

                                                            </td>
                                                            <tr>
                                                            </tr>
                                                    </table>

                                                    </td>

                                            </tr>
                                        </table>

                                    </div>
             </div> 
             
             <div class="clearfix">
             <!--a href="javascript:showonlyone('newboxes5');"  style=" background-color:#F00; color:#fff; padding:10px 5px;">
                                                        Neste- fyll inn Kuneopplysniger
                                                    </a>-->
              </div>                                      
             </div>
</div>
</form>
</div>
</div>
</div>
<?php } ?>
 </div> 

