<div class="smart-container">
<!--Order history --> 

<div class="container">
	<div class="orderhistory">
    <h1>Tidligere ordre</h1>
    <div class="table-responsive">
	<?php if(empty($data)){
		 echo 'Beklager, ingen ordre er plassert.';
		
	}else{ ?>
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_ordrhst table">
   <thead>
  <tr>  
    <th>Ordre#</th>
    <th>Ordredato</th>
    <th>Ordrestatus</th>
    <th>Bestiling totalt</th>   
  </tr>
   </thead>
   <tbody>
   <?php foreach($data as $d){ ?> 
  <tr>
    <td data-label="Ordre#"><?php echo $d['Order']['id']; ?></td>
    <td data-label="Order Date"><?php $date = explode(' ', $d['Order']['created']);
	echo $date[0]; ?></td>
    <td data-label="Ordrestatus"><?php if($d['Order']['dl_status'] == 4){
		echo 'Avsendt';
	}elseif($d['Order']['dl_status'] == 1){
        echo 'Bekreftet';
	}
	elseif($d['Order']['dl_status'] == 2){
        echo 'Cancelled';
	}
	elseif($d['Order']['dl_status'] == 3){
        echo 'Levert';
	}else{
	echo 'Under behandling'; } ?></td>
    <td data-label="Bestiling totalt"><?php 

                                    if($d['Order']['coupon'] != 0){
									
									echo round($d['Order']['total'] + $d['Order']['delivery_charges'] - ($d['Order']['total'] * $d['Order']['coupon'])/100);
									}elseif($d['Order']['coupon'] == 0){
									
									echo round($d['Order']['total'] + $d['Order']['delivery_charges'] + ($d['Order']['total'] * $d['Order']['check_price'])/100);
									}else{
									
									echo round($d['Order']['total'] + $d['Order']['delivery_charges']);
									}


	?> Kr ( Rabattkode : <?php if($d['Order']['coupon'] == 0){ echo 'ingen';}else{ echo $d['Order']['coupon'].' %';}?>, MVA  Mat : <?php echo ($d['Order']['total'] * 15/100); ?>, MVA Levering : <?php echo ($d['Order']['delivery_charges'] * 25/100); ?>, Levering sbeløp : <?php echo $d['Order']['delivery_charges']; ?>)</td>
  </tr>
  <?php } ?>

  </tbody>
</table>
	<?php } ?>
    </div>
    </div>
</div>
</div>


<!--Order history --> 
