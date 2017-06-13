<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>

<?php include 'header.php';?>
  

	
    <!-- End Header =============================================== -->   
    <?php echo $this->fetch('content'); ?>

    <?php  @$latitudex = $restaurant['Restaurant']['latitude']; 
        @$longitudex = $restaurant['Restaurant']['longitude'];
	?>
	<?php
include'footer.php'; ?>
 
    
<style>
#futureLink:hover{
text-decoration:underline !important;	
}

</style>  
  <script type='text/javascript' src='<?php echo $this->webroot; ?>js/jquery.js'></script>  


<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="<?php echo $this->webroot; ?>home/js/bootstrap.min.js"></script>

    <script src="<?php echo $this->webroot; ?>home/js/jquery-1.11.2.min.js"></script>




     <!-- COMMON SCRIPTS -->
	
       
 
        <!-- SPECIFIC SCRIPTS -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
        <script src="http://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    
     
        <script src="<?php echo $this->webroot; ?>home/js/common_scripts_min.js"></script>
        <?php echo $this->Html->script(array('../home/js/addtocart.js')); 
		echo $this->fetch('script');
		?>
        
        
		<script src="<?php echo $this->webroot; ?>home/js/float-panel.js"></script>
    
		<script>

		
		
function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#userPic').attr('src', '');
			$('#userPic').attr('src', e.target.result);
            alert('Klikk på sende inn for å laste opp bilde');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
		$(document).ready(function(){
	

	
	$('.percent').each(function() {
		
	
    var $projectBar = $(this).next();
    var $projectPercent = $(this);
    var $projectRange = $(this).next().find('.ui-slider-range');
    $projectBar.slider({
      range: "min",
      animate: true,
      value: 1,
      min: 0,
      max: 100,
      step: 1,
      slide: function(event, ui) {
		  
		
        $projectPercent.val(ui.value + "%");
		//var gram_per_day = parseInt((calC * ui.value/100)/4);
	    //$(this).parent().next().find('b').html(gram_per_day);
      },
      change: function(event, ui) {
		  
		  
        var $projectRange = $(this).next().find('.ui-slider-range');
        var percent = ui.value;
		//var gram_per_day = parseInt((calC * ui.value/100)/4);
	    //$(this).parent().next().find('b').html(gram_per_day);
      }
    });
	

	
  });

	$('.alphaonly').bind('keyup blur',function(){ 
		var node = $(this);
		node.val(node.val().replace(/[^a-z]/g,'') ); }
	);
 
     $('#cartradio2').click(function(){
	 if($(this).is(':checked')){
		 $('#bringtable').html(' ');
		 $('#bodyBot').val('0');
		 $('.cart_dlvy input[type=radio]').removeAttr('disabled');
		 var to = $('#postal_ship').val();
		 var postDelivery = $(this).val();
		 $('.loaderImage').show();
		  $.ajax({
				url:'/picodes/zipavailablility',
				type:'POST',
				data:{zip:to},
				dataType: "json",
				success: function(ds){
					
                                $('#dlvryCost').html(ds['Order']['delivery_cost']+' kr');
								$('.delivey_sec .no_methods').css('display','none');
								$('.delivey_sec .delivey_tbl').css('display','block');
								
								$.ajax({
								url:'/shop/postDelivery',
								type:'POST',
								data:{'postDelivery':postDelivery},
								dataType: "json",
								success: function(d){
									
									/*if(d['Order']['check_price']){
										var pp = parseFloat(d['Order']['total']+d['Order']['total']*d['Order']['check_price']/100+parseFloat(postDelivery));
									$('.checkoutTotal').html(pp.toFixed()+' kr');
									$('.checkoutTotal').attr('data-total',pp.toFixed());
									}else{
										var pp = parseFloat(d['Order']['total']+parseFloat(postDelivery));
										$('.checkoutTotal').html(pp.toFixed()+' kr');
									$('.checkoutTotal').attr('data-total',pp.toFixed());
									}*/
									
									
								if(d['Order']['delivery_cost'] != '' && d['Order']['coupon']){
							var tol = parseFloat(parseFloat(d['Order']['total'])+parseFloat(ds['Order']['delivery_cost']));
							
							var prs = parseFloat(tol - parseFloat(d['Order']['total']*d['Order']['coupon']/100));
							$('.checkoutTotal').html(prs.toFixed()+' kr');
							$('.checkoutTotal').attr('data-total',prs.toFixed());
							var r1 = parseFloat(d['Order']['total']*0.15);
							var r2 = parseFloat(d['Order']['delivery_cost']*0.25);
							$('.checkoutTotal_mva').html(parseFloat(r1+r2).toFixed());

						}else if(d['Order']['delivery_cost'] != ''){
							
							var prs = parseFloat(parseFloat(d['Order']['total'])+parseFloat(d['Order']['delivery_cost']));
							$('.checkoutTotal').html(prs.toFixed()+' kr');
							$('.checkoutTotal').attr('data-total',prs.toFixed());
							var r1 = parseFloat(d['Order']['total']*0.15);
							var r2 = parseFloat(d['Order']['delivery_cost']*0.25);
							$('.checkoutTotal_mva').html(parseFloat(r1+r2).toFixed()); 

						}else if(d['Order']['coupon']){
							
							var prs = parseFloat(parseFloat(d['Order']['total'])-parseFloat(d['Order']['total']*d['Order']['coupon']/100));
							
							$('.checkoutTotal').html(prs.toFixed()+' kr');
							$('.checkoutTotal').attr('data-total',prs.toFixed());
							var r1 = parseFloat(d['Order']['total']*0.15);
							var r2 = parseFloat(d['Order']['delivery_cost']*0.25);
							$('.checkoutTotal_mva').html(parseFloat(r1+r2).toFixed());

						}
									
									
									
									
									$('.loaderImage').hide();
									
								    $('.delivey_tbl #cart2').val(postDelivery);
									$('.delivey_tbl #cart2').trigger('click');
								    $('#bringPost').html(' ');
								    $('.cart_dlvy input[type=radio]').attr('disabled', 'disabled');
								 }
								 });
								
							
								
							
  
  				}
 });
		 
		 
		 
 
	 }
	 });
 
 
    $('#cartradio1').click(function(){
	 if($(this).is(':checked')){
		 var to = $('#postal_ship').val();
		 var fromzip = $('#store_zip').val();
		 var date = '<?php echo date('Y-m-d'); ?>';
		 var wght = $('#packwght').val();
		 var len = $('#packlen').val();
		 var height = $('#packheight').val();
		 var width = $('#packwidth').val();
		 
		 
		 var html = '';
		 $('.loaderImage').show();
		 $.get( "https://api.bring.com/shippingguide/products/all.json?clientUrl=http://trenogmat.no&fromCountry=NO&from="+fromzip+"&toCountry=NO&to="+to+"&weightInGrams="+wght+"&length="+len+"&width="+width+"&height="+height+"&volume=&product=pa_doren&product=bpakke_dor-dor&product=ekspress09", function( data ) {
			                   $('.loaderImage').hide();
							   console.log(data);
							      
                                  html += '<table cellpadding="0" cellspacing="0" class="table_pstl"><thead><tr><th>Få varene levert</th><th>&nbsp;</th><th>Pris</th></tr></thead><tbody>';
							   $.each(data['Product'], function (index, value) {
								  if(value['GuiInformation']['DisplayName'] == 'På jobben, 08-16'){
									  var labelName = 'På jobben eller på døra, 08-16';
								  }else{
									  var labelName = value['GuiInformation']['DisplayName'];
								  } 
								   
                                html += '<tr><td><div class="radio radio-danger"><label><span></span><input type="radio" data-price="'+value['Price']['PackagePriceWithAdditionalServices']['AmountWithVAT']+'" value="'+value['ProductId']+'" class="bring_me" name="bring_m" />'+labelName+'</label><p>'+value['GuiInformation']['DescriptionText']+'</p></div></td><td data-th=""><i title="'+value['GuiInformation']['HelpText']+'" class="fa fa-info-circle" aria-hidden="true"></i></td><td data-th="Pris">'+value['Price']['PackagePriceWithoutAdditionalServices']['AmountWithVAT']+',-</td></tr>'
                               
							   });
							   html += '</tbody></table>';
        $('#bringtable').html(html);

 $('.bring_me').each(function(){
	 $(this).click(function(){
	 var options = $(this);	 
$('#bringPost input').removeAttr('disabled');
$('.cart_dlvy input[type=radio]').removeAttr('disabled');
        $('#bodyBot').val($(this).val());
		options.attr('checked','checked');
		options.closest('.radio-danger').addClass('rado_new');
	
		$('#bringtable .bring_me').each(function(){
			if(!$(this).is(':checked')){
				$(this).closest('.radio-danger').removeClass('rado_new');
			}
		});
		
	
	



	
	 var sender_name = 'TregnoMat';
	 var address_line = 'Testsvingen 12';
	 var city = 'VOLL';
	 var email = 'tregno@gmail.com';
	 var phoneNumber = '1234567890';
	 var recipient_name = $('#r_fname').val()+' '+$('#r_lname').val();
	 var r_addressLine = $('#r_adres').val();
	 var r_city = $('#r_city').val();
	 var r_email = $('#shipEmail').val();
	 var r_phn = $('#r_phn').val();
	 var pID = $(this).val();
	 var postDelivery = $(this).data('price');
	 
	 $('.loaderImage').show();
	$.post( "<?php echo $this->webroot; ?>shop/curl", { recipient_name: recipient_name, to: to, r_addressLine: r_addressLine, r_city:r_city, r_email:r_email, r_phn:r_phn, pID:pID, wght:wght, len:len, height:height, width:width}, function( data ) { 
    	

 
 
 
 $.ajax({
				url:'/picodes/zipavailablility_bring',
				type:'POST',
				data:{zip:to, cost:postDelivery},
				dataType: "json",
				success: function(ds){
					
                                $('#dlvryCost').html(postDelivery+' kr');
								
								$('.delivey_sec .no_methods').css('display','none');
								$('.delivey_sec .delivey_tbl').css('display','block');
								//$('.delivey_tbl .tregmethod').hide();
							
								$.ajax({
								url:'/shop/postDelivery',
								type:'POST',
								data:{'postDelivery':postDelivery},
								dataType: "json",
								success: function(d){
									
									/*if(d['Order']['check_price']){
										var pp = parseFloat(d['Order']['total']+d['Order']['total']*d['Order']['check_price']/100+parseFloat(postDelivery));
									    $('.checkoutTotal').html(pp.toFixed());
									    $('.checkoutTotal').attr('data-total',pp.toFixed());
									}else{
										var pp = parseFloat(d['Order']['total']+parseFloat(postDelivery));
										$('.checkoutTotal').html(pp.toFixed());
									    $('.checkoutTotal').attr('data-total',pp.toFixed());
									}*/
									$('.loaderImage').hide();
								    
									
									
							if(d['Order']['delivery_cost'] != '' && d['Order']['coupon']){
							var tol = parseFloat(parseFloat(d['Order']['total'])+parseFloat(d['Order']['delivery_cost']));
							
							var prs = parseFloat(tol - parseFloat(d['Order']['total']*d['Order']['coupon']/100));
							$('.checkoutTotal').html(prs.toFixed()+' kr');
							$('.checkoutTotal').attr('data-total',prs.toFixed());
							var r1 = parseFloat(d['Order']['total']*0.15);
							var r2 = parseFloat(d['Order']['delivery_cost']*0.25);
							$('.checkoutTotal_mva').html(parseFloat(r1+r2).toFixed());
                            
						}else if(d['Order']['delivery_cost'] != ''){
							
							var prs = parseFloat(parseFloat(d['Order']['total'])+parseFloat(d['Order']['delivery_cost']));
							$('.checkoutTotal').html(prs.toFixed()+' kr');
							
							$('.checkoutTotal').attr('data-total',prs.toFixed());
							var r1 = parseFloat(d['Order']['total']*0.15);
							var r2 = parseFloat(d['Order']['delivery_cost']*0.25);
							$('.checkoutTotal_mva').html(parseFloat(r1+r2).toFixed());

						}else if(d['Order']['coupon']){
							
							var prs = parseFloat(parseFloat(d['Order']['total'])-parseFloat(d['Order']['total']*d['Order']['coupon']/100));
							
							$('.checkoutTotal').html(prs.toFixed()+' kr');
							$('.checkoutTotal').attr('data-total',prs.toFixed());
							var r1 = parseFloat(d['Order']['total']*0.15);
							var r2 = parseFloat(d['Order']['delivery_cost']*0.25);
							$('.checkoutTotal_mva').html(parseFloat(r1+r2).toFixed());

						}
									
									
									
									
								 	$('.delivey_tbl #cart1').trigger('click');
									var cart1 = $('.delivey_tbl #cart1').val(pID); 
									
									$('#bringPost').html(html);
									$('#bringPost input').each(function(){
										
										if($('.delivey_tbl #cart1').val() == $(this).val()){
										
											$(this).attr('checked','checked');
		                                    $(this).closest('.radio-danger').addClass('rado_new');
											
										}else{
											
											$(this).removeAttr('checked');
											$(this).closest('tr').remove();
		                                    $(this).closest('.radio-danger').removeClass('rado_new');
										}
									});
									
									
								 $('#bringPost input').attr('disabled', 'disabled');
								 $('.cart_dlvy input[type=radio]').attr('disabled', 'disabled');
								 }
								 
								 });

								
								
  
  				}
 });

	
}); 
	 	 

	 });
 });

		
		 });
		  
	 }
 });

 
 
 
            $(".field").keydown(function(event){

            if (event.shiftKey == true) {
                event.preventDefault();
            }

            if ((event.keyCode >= 48 && event.keyCode <= 58) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

            } else {
                event.preventDefault();
            }
            
            if($(this).val().indexOf('.') !== -1 && event.keyCode == 190){
                event.preventDefault();
            }
        });
 
 
  $('#calculate').click(function(){

	 var calc = $('#cal_calc').val();
	 $('.percent').each(function(){
		$(this).attr('data-calc', calc);
	 });
	$('.tab-pane').each(function(){
		
  
	var carbo = $(this).data('carbo');
	var pro = $(this).data('pro');
	var fat = $(this).data('fat'); 
    var macro = $(this).data('macro');
    var $projectBar = $(this).find('.carbo').next();
    var $projectPercent = $(this).find('.carbo');
    var $projectRange = $(this).find('.carbo').next().find('.ui-slider-range');
	$projectPercent.val(carbo + "%");
    $projectBar.slider({
      range: "min",
      animate: true,
      value: carbo,
      min: 0,
      max: 100,
      step: 1,
      slide: function(event, ui) {
		  	
       $projectPercent.val(ui.value + "%");
      },
      change: function(event, ui) {
        var $projectRange = $(this).find('.carbo').next().find('.ui-slider-range');
        var percent = ui.value;
		var carbo_per_day1 = parseInt((calc * ui.value/100 * macro)/4);
	    $(this).find('.carbo_per_day').html(carbo_per_day1);
      }
    });
	
	$(this).find('.calc_under').html((calc*macro).toFixed(2));
	
	var carbo_per_day = parseInt((calc * carbo/100 * macro)/4);
	$(this).find('.carbo_per_day').html(carbo_per_day);
	
	
	
	var $projectBar1 = $(this).find('.pro').next();
    var $projectPercent1 = $(this).find('.pro');
    var $projectRange1 = $(this).find('.pro').next().find('.ui-slider-range');
	$projectPercent1.val(pro + "%");
    $projectBar1.slider({
      range: "min",
      animate: true,
      value: pro,
      min: 0,
      max: 100,
      step: 1,
      slide: function(event, ui) {
		  	
       $projectPercent1.val(ui.value + "%");

      },
      change: function(event, ui) {
        var $projectRange1 = $(this).find('.pro').next().find('.ui-slider-range');
        var percent1 = ui.value;
		var pro_per_day1 = parseInt((calc * ui.value/100 * macro)/4);
	    $(this).find('.pro_per_day').html(pro_per_day1);
      }
    });
	var pro_per_day = parseInt((calc * pro/100 * macro)/4);
	$(this).find('.pro_per_day').html(pro_per_day);
	
	var $projectBar2 = $(this).find('.fat').next();
    var $projectPercent2 = $(this).find('.fat');
    var $projectRange2 = $(this).find('.fat').next().find('.ui-slider-range');
	$projectPercent2.val(fat + "%");
    $projectBar2.slider({
      range: "min",
      animate: true,
      value: fat,
      min: 0,
      max: 100,
      step: 1,
      slide: function(event, ui) {
			
       $projectPercent2.val(ui.value + "%");
      },
      change: function(event, ui) {
		 
        var $projectRange2 = $(this).find('.fat').next().find('.ui-slider-range');
        var percent2 = ui.value;
		var fat_per_day1 = parseInt((calc * ui.value/100 * macro)/9);
	    $(this).find('.fat_per_day').html(fat_per_day1);
      }
    });
	var fat_per_day = parseInt((calc * fat/100) * macro/9);
	$(this).find('.fat_per_day').html(fat_per_day);
 $('.ui-slider').slider('disable');
});
 
 
});   


$('#usecal').click(function(){
	console.log($('#calAmount').html());
	$('#cal_calc').val($('#calAmount').html());
	 
});
		
			
			$('#myRegister').submit(function(event){ 
				event.preventDefault();
				var data = $(this).serialize();
				if($('#pass-info').html() == 'Passwords do not match!'){
					event.preventDefault();
				}else{
			$.ajax({
				url:'<?php echo $this->webroot; ?>users/add',
				type:'POST',
				data:data,
				success: function(d){
					    $('#myRegister input').val('');
                        
						if(d == 'Registrering  er vellykket'){
							alert(d);
							$('#login_2').modal('show');
							$('#register').modal('hide');
							//window.location.href = "<?php echo $this->webroot; ?>";
						}else{
							alert(d);
							$('#email').val('');
						}
						
                },
                error: function(error){
                        
                }
			});
			}
			});
			
			
			$('#myZip').submit(function(event){
				event.preventDefault();
				var data = $(this).serialize();
			$.ajax({
				url:'<?php echo $this->webroot; ?>picodes/zipcheck',
				type:'POST',
				data:data,
				success: function(d){
                        alert(d);
						$('#zip').modal('hide');
						
                },
                error: function(error){
                        
                }
			});
		
			});
			
			
			$('#shipFrom').submit(function(event){
	        $('#cartradio1').removeAttr('checked');
			$('#cartradio2').removeAttr('checked');
			$('#cart1').removeAttr('checked');
			$('#cart2').removeAttr('checked');
			$('#bringtable').html(' ');
			$('#bringPost').html(' ');
			$('#myHeader4').attr('href','javascript:void(0)'); 
		 $('#myHeader5').attr('href','javascript:void(0)'); 
			event.preventDefault();
			var data = $(this).serialize();
			var zip = $('#postal_ship').val();
			$('.checkoutTotal').html(' ');
			if(zip.length == 4){
			$('.loaderImage').show();
			$('body').css('overflow','hidden');
			$.ajax({
				url:'/picodes/zipavailablility',
				type:'POST',
				data:{zip:zip},
				dataType: "json",
				success: function(d){
					    $('.loaderImage').hide();
                        if(d == 'Sorry! we are not able to ship in your area.'){
							alert('Beklager. Vi kan ikke levere til din postnummer dessverre');
							$('.panel-default input').attr('disabled','disabled');
							$('.panel-default button').attr('disabled','disabled');
							$('#postal_ship').removeAttr('disabled');
							$('.delivey_sec .no_methods').html('Beklager. Vi kan ikke levere til din postnummer dessverre.').css('display','block');
							$('.delivey_sec .delivey_tbl').css('display','none');
							var postDelivery = 0;
								$.ajax({
								url:'/terenogmat/shop/postDelivery',
								type:'POST',
								data:{'postDelivery':postDelivery},
								dataType: "json",
								success: function(d){
									console.log($('.checkoutTotal').html(parseInt(parseFloat($('.checkoutTotal').data('total'))+parseFloat(postDelivery))));
								    
								 }
								 });
								 
							
						}else{ 
						var total = '';
							if(d['Order']['deliverable']){
								
								var postDelivery = 0;
								$.ajax({
								url:'/shop/postDelivery',
								type:'POST',
								data:{'postDelivery':postDelivery},
								dataType: "json",
								success: function(d){
									//console.log($('.checkoutTotal').html(parseInt(parseFloat($('.checkoutTotal').data('total'))+parseFloat(postDelivery))));
								    
                                    if(d['Order']['check_price']){
									
									var p = parseFloat(d['Order']['total'] * d['Order']['check_price']/100);
									var total1 = (parseFloat(d['Order']['total'] + p)+parseFloat(d['Order']['delivery_cost'])).toFixed(2);
									total = parseInt(total1);
									
									
									}else{
										
										total = parseInt(parseFloat(d['Order']['total']) + parseFloat(d['Order']['delivery_cost']));
										
										
									}
									
									
									$('.delivey_sec .no_methods').html('').css('display','none');
									$('.delivey_sec .delivey_tbl').css('display','block');
									$('.delivey_tbl .tregmethod').show();
									$('#cartradio2').val(d['Order']['delivery_cost']);
									
								 }
								 });
								
							}else{
								
								
								
								
								
								$('.delivey_sec .no_methods').css('display','none');
								 $('.delivey_sec .delivey_tbl').css('display','block');
								$('.delivey_tbl .tregmethod').hide();
								$('#cartradio2').val(d['Order']['delivery_cost']);
							}
							$('.tregmethod_price').html(d['Order']['delivery_cost']);
							//$('.panel-default input').removeAttr('disabled');
							//$('.panel-default button').removeAttr('disabled');
							
							
			
			$.ajax({
				url:'<?php echo $this->webroot; ?>shop/address',
				type:'POST',
				data:data,
				success: function(dss){
					
                        $('.loaderImage').hide();
						
						if(d['Order']['delivery_cost'] == 0){
							$('.freeDlvryText').html('( Gratis levering )');
						}else{
							$('.freeDlvryText').html('( leveringskostnader '+d['Order']['delivery_cost']+' Kr )');
						}
						
						$('#newboxes3').prev().find('a').attr('href','javascript:showonlyone("newboxes3")');
						if(d['Order']['delivery_cost'] != '' && d['Order']['coupon']){
							var tol = parseFloat(parseFloat(d['Order']['total'])+parseFloat(d['Order']['delivery_cost']));
							
							var prs = parseFloat(tol - parseFloat(d['Order']['total']*d['Order']['coupon']/100));
							
							
							$('.checkoutTotal').html(prs.toFixed()+' kr');
							$('.checkoutTotal').attr('data-total',prs.toFixed());
						
							$('#dlvryCost').html(d['Order']['delivery_cost']+' kr');
						    $('#dlvryCost').parent().css('display','block');
						}else if(d['Order']['delivery_cost'] != ''){
							
							var prs = parseFloat(parseFloat(d['Order']['total'])+parseFloat(d['Order']['delivery_cost']));
							$('.checkoutTotal').html(prs.toFixed()+' kr');
							$('.checkoutTotal').attr('data-total',prs.toFixed());
							$('#dlvryCost').html(d['Order']['delivery_cost']+' kr');
						    $('#dlvryCost').parent().css('display','block');
						}else if(d['Order']['coupon']){
							
							var prs = parseFloat(parseFloat(d['Order']['total'])-parseFloat(d['Order']['total']*d['Order']['coupon']/100));
							$('.checkoutTotal').html(prs.toFixed()+' kr');
							$('.checkoutTotal').attr('data-total',prs.toFixed());
							$('#dlvryCost').html(d['Order']['delivery_cost']+' kr');
							$('#dlvryCost').parent().css('display','none');
						}
						$('body').css('overflow','unset');
						if(dss == 'User already exists. Please use another email for register.'){
							alert('Email eksisterer fra før. Bruk en annen email for registrering');
							$('#cartSignUp').val('');
							$('#cartSignUp').focus();
						}else if(dss == 'You have been registered successfully'){
							alert('Registrering Vellykket');
							$('#newboxes2').hide();
						    $('#newboxes3').show();
							$('#third_href').attr('href','javascript:showonlyone("newboxes3");');
							$('#third_href').trigger('click');
						}
						else{
							$('#newboxes2').hide();
						    $('#newboxes3').show();
							$('#third_href').attr('href','javascript:showonlyone("newboxes3");');
							$('#third_href').trigger('click');
						}
						$('#nameShip').html($('#r_fname').val()+' '+$('#r_lname').val());
						$('#areaAdrs').html($('#postal_ship').val()+', '+$('#r_adres').val()+', '+$('#r_city').val());
						
                },
                error: function(error){
				$('.loaderImage').hide();
				$('body').css('overflow','unset');
                alert('Dette har oppstått en feil. Prøv igjen');					
                }
			});
							
							
							
							
							
						}
						
                },
                error: function(error){
                     $('.loaderImage').hide();
                alert('Dette har oppstått en feil. Prøv igjen');   
                }
			});
	  }
	

	
			}); 
			


			
			
			
$('#giveReview').click(function(){
	var loggeduser = '<?php echo $loggeduser; ?>';
    if(loggeduser != ''){
		$('#rating').modal('show');
	}else{
		alert('Pålogging er påkrevd for å kunne gi rating til denne product');
	}
});
var url = window.location.href;

var url1 = url.substr(url.lastIndexOf('/') + 1);
console.log(url);
var page = 'http://trenogmat.no/products/single/'+url1;
console.log(page);
if(url == page){
 var userRating = $('#userRatings').val();

if (userRating.indexOf('.') > -1)
{
  var splitRating = userRating.split('.');
 var total = $('#rtng span:lt('+splitRating[0]+')').addClass('checked');

 if(!$('#rtng .checked:last').next().hasClass('checked')){
	  $('#rtng .checked:last').next().removeClass('fa-star').addClass('fa-star-half-o checked');
  }
  
  
}else{    
  $('.stars span:lt('+userRating+')').addClass('checked'); 
 
} 	
}


 $('.userRatings').each(function(){
	var userRating = $(this).val();
	if (userRating.indexOf('.') > -1)
{
  var splitRating = userRating.split('.');

 $('.start_icn i:lt('+splitRating[0]+')').removeClass('fa-star-o').addClass('fa-star');
 $('.start_icn .fa-star:last').next().removeClass('fa-star-o').addClass('fa-star-half-o');

  
  
}else{
 
  $('.start_icn i:lt('+userRating+')').removeClass('fa-star-o').addClass('fa-star');
}
});


$('.rateUsers').each(function(){
	var userRating = $(this).val();
	
	if (userRating.indexOf('.') > -1)
{
	console.log('11');
  var splitRating = userRating.split('.');
  console.log(splitRating[0]);
 $(this).next().find('i:lt('+splitRating[0]+')').removeClass('fa-star-o').addClass('fa-star');  
 $(this).next().find('.fa-star:last').next().removeClass('fa-star-o').addClass('fa-star-half-o');

}else{
 console.log('33');
 $(this).next().find('i:lt('+userRating+')').removeClass('fa-star-o').addClass('fa-star');
 
}
	
	
	
}); 

	
			$('#couponApply').click(function(){
				
				var couponCode = $('#coupon').val();
				
				$.ajax({
				url:'<?php echo $this->webroot; ?>shop/promo_check',
				type:'POST',
				data: {                    
                    couponCode: couponCode
                },
				dataType: "json",
				success: function(data){
					    $('#coupon').val(' ');
                        if(data){
							if(data.msg){
								alert(data.msg);
							}else{
								
							 
							var total = data['Order']['total'];
							var coupon_price = data['Order']['coupon'];
							var discount = parseFloat(total * coupon_price/100);
							var totals = '';
							var subTol = '';
							if(coupon_price != ''){
								totals = parseFloat(total - discount);
							}
							$('#shipTOTL').html(totals.toFixed()+' kr');
							if(data['Order']['delivery_cost']){
								subTol = parseFloat(totals + parseFloat(data['Order']['delivery_cost']));
								$('.checkoutTotal').html(subTol.toFixed()+' kr');
								
							}else{
								$('.checkoutTotal').html(totals.toFixed()+' kr');
							}
							$('#totalss').html(totals.toFixed()+' Kr'); 
							var dsc_len = $('.table-hover').children().find('.dsc').length;
							
							if(dsc_len < 1){
							    $('#totalss').closest('td').append('<span class="dsc" style="color:#ff0033; font-size:10px;">('+data['Order']['coupon']+'% rabatt på dette ordre)</span>');	
							    $('.totl_fntsz15').append('<span class="dsc" style="color:#ff0033; font-size:10px;">('+data['Order']['coupon']+'% rabatt på dette ordre)</span>');
							}
							var dsc_len1 = $('.contr_tbl_ftr2').children().find('.dsc1').length;
							if(dsc_len1 < 1){
							    $('#shipTOTL').closest('tr').after('<tr class="dsc1"><td></td><td colspan="5"><span style="color:#ff0033; font-size:10px;">('+data['Order']['coupon']+'% rabatt på dette ordre)</span></td></tr>');	
							}
							$('.price_txt').html(totals.toFixed()+' Kr');
							//$('#prisCart').html(totals.toFixed()+' Kr');
							alert('Bruk Av Rabattkoden Er Vellykket');
							}  
							
						}								
                },
                error: function(error){
                        
                }
			});

			});
			
			$('#registerme').click(function(){
				
            if ($(this).is(':checked')) {

                $('.slideAccount').slideToggle( "slow" );
				$('.slideAccount input').each(function(){
					$(this).attr('required', 'required');
				});
			}else{
				$('.slideAccount').slideToggle( "slow" );
				$('.slideAccount input').each(function(){
					$(this).removeAttr('required');
					$(this).val('');
				});
			}
			});
			
			
	$('#addBilling').click(function(){
		$('#bill_zip').val($('#billing_zip').val());
		$('#bill_addrs').val($('#billing_address').val());
		$('#bill_addrs2').val($('#billing_place').val());
		$('#bill_city').val($('#billing_land').val());
	});		
			

$('.small_b').each(function(){
$(this).click(function(){
$(this).parent().prev().prev().children().find('#photo').attr('data-size','S');
$(this).parent().prev().prev().children().find('#photo').attr('data-price',$(this).data('price'));
$(this).parent().prev().prev().children().find('#photo').attr('data-cal',$(this).data('cal'));
$(this).parent().prev().prev().children().find('#photo').attr('data-carbo',$(this).data('carbo'));
$(this).parent().prev().prev().children().find('#photo').attr('data-nutri',$(this).data('nutri'));
$(this).parent().prev().prev().children().find('#photo').attr('data-fat',$(this).data('fat'));
$(this).parent().prev().prev().children().find('.proPrice').text($(this).data('price')+' KR');
$(this).parent().prev().prev().children().find('.cal span').text($(this).data('cal'));
$(this).parent().prev().prev().children().find('.carbo span').text($(this).data('carbo'));
$(this).parent().prev().prev().children().find('.nutri span').text($(this).data('nutri'));
$(this).parent().prev().prev().children().find('.fat span').text($(this).data('fat'));

});


});


$('.medium_b').each(function(){
$(this).click(function(){
$(this).parent().prev().prev().children().find('#photo').attr('data-size','M');
$(this).parent().prev().prev().children().find('#photo').attr('data-price',$(this).data('price'));
$(this).parent().prev().prev().children().find('#photo').attr('data-cal',$(this).data('cal'));
$(this).parent().prev().prev().children().find('#photo').attr('data-carbo',$(this).data('carbo'));
$(this).parent().prev().prev().children().find('#photo').attr('data-nutri',$(this).data('nutri'));
$(this).parent().prev().prev().children().find('#photo').attr('data-fat',$(this).data('fat'));	
$(this).parent().prev().prev().children().find('.proPrice').text($(this).data('price')+' KR');
$(this).parent().prev().prev().children().find('.cal span').text($(this).data('cal'));
$(this).parent().prev().prev().children().find('.carbo span').text($(this).data('carbo'));
$(this).parent().prev().prev().children().find('.nutri span').text($(this).data('nutri'));
$(this).parent().prev().prev().children().find('.fat span').text($(this).data('fat'));

});
});


$('.large_b').each(function(){
$(this).click(function(){
$(this).parent().prev().prev().children().find('#photo').attr('data-size','L');
$(this).parent().prev().prev().children().find('#photo').attr('data-price',$(this).data('price'));
$(this).parent().prev().prev().children().find('#photo').attr('data-cal',$(this).data('cal'));
$(this).parent().prev().prev().children().find('#photo').attr('data-carbo',$(this).data('carbo'));
$(this).parent().prev().prev().children().find('#photo').attr('data-nutri',$(this).data('nutri'));
$(this).parent().prev().prev().children().find('#photo').attr('data-fat',$(this).data('fat'));	
$(this).parent().prev().prev().children().find('.proPrice').text($(this).data('price')+' KR');
$(this).parent().prev().prev().children().find('.cal span').text($(this).data('cal'));
$(this).parent().prev().prev().children().find('.carbo span').text($(this).data('carbo'));
$(this).parent().prev().prev().children().find('.nutri span').text($(this).data('nutri'));
$(this).parent().prev().prev().children().find('.fat span').text($(this).data('fat'));

});
});



$("#uploadFile").change(function () {
    filePreview(this);
});





            $(document).on('click', '.remove', function(){
					//alert('hello');

					var pID = $(this).parent().data('unique');
					var proID = $(this).parent().data('id');
					var pRICE = $(this).parent().data('price');
					var size = $(this).parent().data('size');
					var div = $(this).parent();
						var day1_cal = 0;
			var day1_carbo = 0;
			var day1_nutri = 0;
			var day1_fat = 0;
			var day2_cal = 0; 
			var day2_carbo = 0;
			var day2_nutri = 0;
			var day2_fat = 0;
						var day3_cal = 0;
			var day3_carbo = 0;
			var day3_nutri = 0;
			var day3_fat = 0;
						var day4_cal = 0;
			var day4_carbo = 0;
			var day4_nutri = 0;
			var day4_fat = 0;
						var day5_cal = 0;
			var day5_carbo = 0;
			var day5_nutri = 0;
			var day5_fat = 0;
						var day6_cal = 0;
			var day6_carbo = 0;
			var day6_nutri = 0;
			var day6_fat = 0;
						var day7_cal = 0;
			var day7_carbo = 0;
			var day7_nutri = 0;
			var day7_fat = 0;
			var sum5= '';
				$('.loaderImage').show();	
				$.ajax({

                type: "POST",

                url: "http://trenogmat.no/shop/minusremovecart",

                data: {

                    id: pID,
					price:pRICE

                },

                dataType: "json",

                success: function (data) {
					$('.loaderImage').hide();
					$('.pdiv').each(function(){
						if($(this).data('id') == proID){
										if(size == 'S'){
											
											$(this).children().find('.ss').removeAttr('disabled');
											
											$(this).children().find('.ss').addClass('small_b');
											$(this).children().find('.ss').trigger('click');
											$(this).children().find('.ss').removeClass('disable');
										}else if(size == 'M'){
											
											$(this).children().find('.mm').removeAttr('disabled');
											
											$(this).children().find('.mm').addClass('medium_b');
											$(this).children().find('.mm').trigger('click');
											$(this).children().find('.mm').removeClass('disable');
										}
										else if(size == 'L'){
											
											$(this).children().find('.ll').removeAttr('disabled');
											
											$(this).children().find('.ll').addClass('large_b');
											$(this).children().find('.ll').trigger('click'); 
											$(this).children().find('.ll').removeClass('disable');
										}
										
										
										$(this).children().find('.thumb_img').draggable( 'enable' );
										$(this).children().find('.stock').css('display', 'none');
										
										$(this).children().find('.add_to_cart a').removeAttr('disabled');
										$(this).children().find('.add_to_cart a').addClass('mobile_cart').bind('click',function(){
													var addid = $(this).data('id');
													
													var imgHtml = $(this).parent().prev().prev().prev().children().find('.singlePOP').html();;
													var psid = $(this).parent().prev().prev().prev().children().find('.thumb_img').data('id');
													
													
													
													$('#cartModal').attr('data-id',addid);
													$('#cartModal').modal('show');
													$('#insertPID').html(addid);
													$('#insertPdiv').html(imgHtml);	
											
										});							
						  }
					});
					
                    $('#cartItemsHeader').html(data['Order']['quantity']);
                    console.log(data);
					if(data['Order']['check_price']){
						var p = parseFloat(data['Order']['total'] * data['Order']['check_price']/100);
						//console.log(p);
						var sum5s = parseFloat(data['Order']['total']) + p;
						sum5 = sum5s.toFixed();
						
					}else{
						var sum5s = parseFloat(data['Order']['total']);
						sum5 = sum5s.toFixed();
					}
					
					div.remove();

					 $.each(data['OrderItem'], function (index, value) {
						 
						 
						 if(value['size'] == 'S'){
								if(value['day'] == '1'){
									day1_cal += parseInt(value['Product']['small_cal']);
									day1_carbo += parseInt(value['Product']['small_carbo']);
									day1_nutri += parseInt(value['Product']['small_nutri']);
									day1_fat += parseInt(value['Product']['small_fat']);
								}
								if(value['day'] == '2'){
									day2_cal += parseInt(value['Product']['small_cal']);
									day2_carbo += parseInt(value['Product']['small_carbo']);
									day2_nutri += parseInt(value['Product']['small_nutri']);
									day2_fat += parseInt(value['Product']['small_fat']);
								}
								if(value['day'] == '3'){
									day3_cal += parseInt(value['Product']['small_cal']);
									day3_carbo += parseInt(value['Product']['small_carbo']);
									day3_nutri += parseInt(value['Product']['small_nutri']);
									day3_fat += parseInt(value['Product']['small_fat']);
								}
								if(value['day'] == '4'){
									day4_cal += parseInt(value['Product']['small_cal']);
									day4_carbo += parseInt(value['Product']['small_carbo']);
									day4_nutri += parseInt(value['Product']['small_nutri']);
									day4_fat += parseInt(value['Product']['small_fat']);
								}
								if(value['day'] == '5'){
									day5_cal += parseInt(value['Product']['small_cal']);
									day5_carbo += parseInt(value['Product']['small_carbo']);
									day5_nutri += parseInt(value['Product']['small_nutri']);
									day5_fat += parseInt(value['Product']['small_fat']);
								}
								if(value['day'] == '6'){
									day6_cal += parseInt(value['Product']['small_cal']);
									day6_carbo += parseInt(value['Product']['small_carbo']);
									day6_nutri += parseInt(value['Product']['small_nutri']);
									day6_fat += parseInt(value['Product']['small_fat']);
								}
								if(value['day'] == '7'){
									day7_cal += parseInt(value['Product']['small_cal']);
									day7_carbo += parseInt(value['Product']['small_carbo']);
									day7_nutri += parseInt(value['Product']['small_nutri']);
									day7_fat += parseInt(value['Product']['small_fat']);
								}
								
							}
                            if(value['size'] == 'M'){
								if(value['day'] == '1'){
									day1_cal += parseInt(value['Product']['medium_cal']);
									day1_carbo += parseInt(value['Product']['medium_carbo']);
									day1_nutri += parseInt(value['Product']['medium_nutri']);
									day1_fat += parseInt(value['Product']['medium_fat']);
								}
								if(value['day'] == '2'){
									day2_cal += parseInt(value['Product']['medium_cal']);
									day2_carbo += parseInt(value['Product']['medium_carbo']);
									day2_nutri += parseInt(value['Product']['medium_nutri']);
									day2_fat += parseInt(value['Product']['medium_fat']);
								}
								if(value['day'] == '3'){
									day3_cal += parseInt(value['Product']['medium_cal']);
									day3_carbo += parseInt(value['Product']['medium_carbo']);
									day3_nutri += parseInt(value['Product']['medium_nutri']);
									day3_fat += parseInt(value['Product']['medium_fat']);
								}
								if(value['day'] == '4'){
									day4_cal += parseInt(value['Product']['medium_cal']);
									day4_carbo += parseInt(value['Product']['medium_carbo']);
									day4_nutri += parseInt(value['Product']['medium_nutri']);
									day4_fat += parseInt(value['Product']['medium_fat']);
								}
								if(value['day'] == '5'){
									day5_cal += parseInt(value['Product']['medium_cal']);
									day5_carbo += parseInt(value['Product']['medium_carbo']);
									day5_nutri += parseInt(value['Product']['medium_nutri']);
									day5_fat += parseInt(value['Product']['medium_fat']);
								}
								if(value['day'] == '6'){
									day6_cal += parseInt(value['Product']['medium_cal']);
									day6_carbo += parseInt(value['Product']['medium_carbo']);
									day6_nutri += parseInt(value['Product']['medium_nutri']);
									day6_fat += parseInt(value['Product']['medium_fat']);
								}
								if(value['day'] == '7'){
									day7_cal += parseInt(value['Product']['medium_cal']);
									day7_carbo += parseInt(value['Product']['medium_carbo']);
									day7_nutri += parseInt(value['Product']['medium_nutri']);
									day7_fat += parseInt(value['Product']['medium_fat']);
								}
								
							}
                            if(value['size'] == 'L'){
								if(value['day'] == '1'){
									day1_cal += parseInt(value['Product']['large_cal']);
									day1_carbo += parseInt(value['Product']['large_carbo']);
									day1_nutri += parseInt(value['Product']['large_nutri']);
									day1_fat += parseInt(value['Product']['large_fat']);
								}
								if(value['day'] == '2'){
									day2_cal += parseInt(value['Product']['large_cal']);
									day2_carbo += parseInt(value['Product']['large_carbo']);
									day2_nutri += parseInt(value['Product']['large_nutri']);
									day2_fat += parseInt(value['Product']['large_fat']);
								}
								if(value['day'] == '3'){
									day3_cal += parseInt(value['Product']['large_cal']);
									day3_carbo += parseInt(value['Product']['large_carbo']);
									day3_nutri += parseInt(value['Product']['large_nutri']);
									day3_fat += parseInt(value['Product']['large_fat']);
								}
								if(value['day'] == '4'){
									day4_cal += parseInt(value['Product']['large_cal']);
									day4_carbo += parseInt(value['Product']['large_carbo']);
									day4_nutri += parseInt(value['Product']['large_nutri']);
									day4_fat += parseInt(value['Product']['large_fat']);
								}
								if(value['day'] == '5'){
									day5_cal += parseInt(value['Product']['large_cal']);
									day5_carbo += parseInt(value['Product']['large_carbo']);
									day5_nutri += parseInt(value['Product']['large_nutri']);
									day5_fat += parseInt(value['Product']['large_fat']);
								}
								if(value['day'] == '6'){
									day6_cal += parseInt(value['Product']['large_cal']);
									day6_carbo += parseInt(value['Product']['large_carbo']);
									day6_nutri += parseInt(value['Product']['large_nutri']);
									day6_fat += parseInt(value['Product']['large_fat']);
								}
								if(value['day'] == '7'){
									day7_cal += parseInt(value['Product']['large_cal']);
									day7_carbo += parseInt(value['Product']['large_carbo']);
									day7_nutri += parseInt(value['Product']['large_nutri']);
									day7_fat += parseInt(value['Product']['large_fat']);
								}
								
							}
						 
						 
						 $('.table tr').each(function(){
	
                        if($(this).data('day') == '1'){
							$(this).find('.shre_icn .rowcal').html(day1_cal);
							$(this).find('.shre_icn .rowcarbo').html(day1_carbo);
							$(this).find('.shre_icn .rownutri').html(day1_nutri);
							$(this).find('.shre_icn .rowfat').html(day1_fat);
						}
						if($(this).data('day') == '2'){
							$(this).find('.shre_icn .rowcal').html(day2_cal);
							$(this).find('.shre_icn .rowcarbo').html(day2_carbo);
							$(this).find('.shre_icn .rownutri').html(day2_nutri);
							$(this).find('.shre_icn .rowfat').html(day2_fat);
						}
						if($(this).data('day') == '3'){
							$(this).find('.shre_icn .rowcal').html(day3_cal);
							$(this).find('.shre_icn .rowcarbo').html(day3_carbo);
							$(this).find('.shre_icn .rownutri').html(day3_nutri);
							$(this).find('.shre_icn .rowfat').html(day3_fat);
						}
						if($(this).data('day') == '4'){
							$(this).find('.shre_icn .rowcal').html(day4_cal);
							$(this).find('.shre_icn .rowcarbo').html(day4_carbo);
							$(this).find('.shre_icn .rownutri').html(day4_nutri);
							$(this).find('.shre_icn .rowfat').html(day4_fat);
						}
						if($(this).data('day') == '5'){
							$(this).find('.shre_icn .rowcal').html(day5_cal);
							$(this).find('.shre_icn .rowcarbo').html(day5_carbo);
							$(this).find('.shre_icn .rownutri').html(day5_nutri);
							$(this).find('.shre_icn .rowfat').html(day5_fat);
						}
						if($(this).data('day') == '6'){
							$(this).find('.shre_icn .rowcal').html(day6_cal);
							$(this).find('.shre_icn .rowcarbo').html(day6_carbo);
							$(this).find('.shre_icn .rownutri').html(day6_nutri);
							$(this).find('.shre_icn .rowfat').html(day6_fat);
						}
						if($(this).data('day') == '7'){
							
							$(this).find('.shre_icn .rowcal').html(day7_cal);
							$(this).find('.shre_icn .rowcarbo').html(day7_carbo);
							$(this).find('.shre_icn .rownutri').html(day7_nutri);
							$(this).find('.shre_icn .rowfat').html(day7_fat);
						}	
	
                       });
					   });
                        $('.price_txt').html('Pris '+sum5+'kr');

						if(data['OrderItem'] == ''){
						$('.table tr').find('.shre_icn span').html(' ');
						$('#vat').remove();
					}
                },

                error: function () {

                    alert('Feil!');

                }

            });
				
			});


$('#checkOut').click(function(){
	var len = $('#cartItemsHeader').html();
	if(len < 12){
		alert('Velg minst 12 produkter');
	}else{
		window.location.href = '<?php echo $this->webroot; ?>shop/cart';
	}
	
}); 

 
 $('.card ul li a').each(function(){
	
	$(this).click(function(){
		var title = $(this).data('title');
		$('#help_sec button').each(function(){
			if( title == $(this).data('title')){
				$(this).addClass('active');
			}else{
				$(this).removeClass('active');
			}	
	    });
	});
});


$('#help_sec button').each(function(){
	
	$(this).click(function(){
		var title = $(this).data('title');
		$(this).addClass('active');
		$('.card ul li a').each(function(){
			if( title == $(this).data('title')){
				$(this).parent('li').addClass('active');
				
			}else{
				$(this).parent('li').removeClass('active');
			}	
	    });
		$('.tab-pane').each(function(){
			if( title == $(this).data('title')){
				$(this).addClass('active');
				
			}else{
				$(this).removeClass('active');
			}	
	    });
	});
}); 

$('.rating span').each(function(){
	
	$(this).click(function(){
		if(!$(this).hasClass('checked')){
			$(this).addClass('checked');
			$(this).prevAll().addClass('checked');
            var rate = $('#rating .checked').length;			
		}else{
			$(this).nextAll().removeClass('checked');
			var rate = $('#rating .checked').length;
		}
		
		console.log(rate);
		$('#rating #ratings').val(rate);
	});
});


$('#useCaloriesVal').click(function(){
	var carbo = $('.tab-content .active .carbo_per_day').html();
	var pro = $('.tab-content .active .pro_per_day').html();
	var fat = $('.tab-content .active .fat_per_day').html();
	var calc = $('.tab-content .active .calc_under').text();
	//alert(calc);  
	window.location.href = '<?php echo $this->webroot; ?>products/orders?totale_kalori='+calc+'&karbohydrater='+carbo+'&protein='+pro+'&fat='+fat;
});

$('.extraPr').each(function(){

$(this).click(function(){
	var pID = $(this).val();
	var title = $(this).data('title');
	if($(this).is(':checked')){
                
				console.log(pID);
				$.ajax({

                type: "POST",

                url: "http://trenogmat.no/shop/priceupdate", 

                data: {

                    id: pID,
					title: $(this).data('title')

                },

                dataType: "json",

                success: function (data) { 

                    console.log(data);
                    if(data['Order'][title+'_title']){
						var p = parseFloat(data['Order']['total'] * data['Order']['check_price']/100);
						//console.log(p);
						var pricee = parseInt(data['Order']['total']) + p;
						var price = pricee.toFixed();
						console.log(price);
						$('.price_txt').html('Pris '+price+'kr');
					}					
                    
                },

                error: function () {

                    alert('Feil!');

                }

            });
}
else{  
				$.ajax({

                type: "POST",

                url: "http://trenogmat.no/shop/removepriceupdate", 

                data: {

                    id: pID,
					title: $(this).data('title')

                },

                dataType: "json",

                success: function (data) { 

                    console.log(data);
                    if(data['Order']['check_price']){
						var p = parseFloat(data['Order']['total'] * data['Order']['check_price']/100);
						//console.log(p);
						var pricee = parseInt(data['Order']['total']) + p;
						var price = pricee.toFixed();
						console.log(price);
						$('.price_txt').html('Pris '+price+'kr');
					}else{
						var pricee = parseInt(data['Order']['total']);
						var price = pricee.toFixed();
						$('.price_txt').html('Pris '+price+'kr');
					}				
                    
                },

                error: function () {

                    alert('Feil!');

                }

            });	
}
});
});
    $(".clickable-row").each(function(){
	$(this).click(function() {
        window.document.location = $(this).data("href");
    });	
	});
    
$('.pdiv').each(function(){
	if($(this).data('quantity') == 0){
		console.log('null');
		$(this).children().find('.thumb_img').draggable( 'disable' );
		$(this).children().find('.stock').css('display', 'block');
	}
});
 
          $('#boton').click(function(e) {
			  
			  var sEmail = $('#sendEmail').val();
// Checking Empty Fields
if ($.trim(sEmail).length == 0) {
alert('Fyll in email adresse');
sEmail.focus();
e.preventDefault();
}
if (validateEmail(sEmail)) {
                e.preventDefault();
                $.ajax({
                      url:'http://trenogmat.no/users/emails',
                      type:'POST',
                      data:{'message':$('#messagetable').html(), 'to' : $('#sendEmail').val()},
                      success:function(data) {
						  if(data != ''){
							 $('#sendEmail').val(' ');
							 alert(data); 
						  }
                            
                           
                      }
                });
}
else {
$('#sendEmail').val(' ');	
alert('Feil email adresse'); 
e.preventDefault();
}
			  
			  
			  

          });
 
 
 

 
 
 

		});
		

		function goBack() {
    window.history.back();
}
function validateEmail(sEmail) {
var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
if (filter.test(sEmail)) {
return true;
}
else {
return false;
}
}



$('.singlePOP').each(function(){
	$(this).click(function(){ 
	    
		$('#pro_Name').html($(this).data('title'));
		$('#proCAT').html($(this).data('category'));
		$('#proDESC').html($(this).data('description'));
		$('#proPR').html($(this).data('sprice'));
		$('#prosm').data('price',$(this).data('sprice'));
		$('#prosm').data('cal',$(this).data('scal'));
		$('#prosm').data('carbo',$(this).data('scarbo'));
		$('#prosm').data('fat',$(this).data('sfat'));
		$('#prosm').data('nutri',$(this).data('snutri'));
		
		$('#promd').data('price',$(this).data('mprice'));
		$('#promd').data('cal',$(this).data('mcal'));
		$('#promd').data('carbo',$(this).data('mcarbo'));
		$('#promd').data('fat',$(this).data('mfat'));
		$('#promd').data('nutri',$(this).data('mnutri'));
		
		$('#prolg').data('price',$(this).data('lprice'));
		$('#prolg').data('cal',$(this).data('lcal'));
		$('#prolg').data('carbo',$(this).data('lcarbo'));
		$('#prolg').data('fat',$(this).data('lfat'));
		$('#prolg').data('nutri',$(this).data('lnutri'));
		
		$('#cal').html($(this).data('scal'));
		$('#carbo').html($(this).data('scarbo')+' (karbs)');
		$('#fat').html($(this).data('sfat')+' (Fett)');
		$('#nutri').html($(this).data('snutri')+' (Protein)'); 
		$('#proIMage').attr('src','http://trenogmat.no/files/product/'+$(this).data('img')); 
		$('#pRate').val($(this).data('rating'));
		
		if($('#pRate').val() != 0){
			var rate = $('#pRate').val(); 
		if (rate.indexOf('.') > -1)
{

  var splitRating = rate.split('.');

 $('#popStars span:lt('+splitRating[0]+')').addClass('checked');  
 $('#popStars .checked:last').next().removeClass('fa-star').addClass('fa-star-half-o checked');

}else{


 $('#popStars span:lt('+rate+')').addClass('checked');
}
		}else{
			
			$('#pRate').val('');
			$('#popStars span').removeClass('fa-star-half-o checked').addClass('fa-star'); 
		}
		$('#myModal1').modal('show');
		$('.small_bb').click(function(){
$('#proPR').html($(this).data('price'));
$('#cal').html($(this).data('cal'));
$('#carbo').html($(this).data('carbo')+' (karbs)');
$('#nutri').html($(this).data('nutri')+' (Protein)');
$('#fat').html($(this).data('fat')+' (Fett)');
});


$('.medium_bb').click(function(){

$('#proPR').html($(this).data('price'));
$('#cal').html($(this).data('cal'));
$('#carbo').html($(this).data('carbo')+' (karbs)');
$('#nutri').html($(this).data('nutri')+' (Protein)');
$('#fat').html($(this).data('fat')+' (Fett)');
});


$('.large_bb').click(function(){
$('#proPR').html($(this).data('price'));
$('#cal').html($(this).data('cal'));
$('#carbo').html($(this).data('carbo')+' (karbs)');
$('#nutri').html($(this).data('nutri')+' (Protein)');
$('#fat').html($(this).data('fat')+' (Fett)');
});
	});
});

 

$('.small_bbs').click(function(){
$('#singPrc').html($(this).data('price')+ ' Kr');
$('#cal').html($(this).data('cal'));
$('#carbo').html($(this).data('carbo')+' (karbs)');
$('#nutri').html($(this).data('nutri')+' (Protein)');
$('#fat').html($(this).data('fat')+' (Fett)');
});


$('.medium_bbs').click(function(){

$('#singPrc').html($(this).data('price')+ ' Kr');
$('#cal').html($(this).data('cal'));
$('#carbo').html($(this).data('carbo')+' (karbs)');
$('#nutri').html($(this).data('nutri')+' (Protein)');
$('#fat').html($(this).data('fat')+' (Fett)');
});


$('.large_bbs').click(function(){
$('#singPrc').html($(this).data('price')+ ' Kr');
$('#cal').html($(this).data('cal'));
$('#carbo').html($(this).data('carbo')+' (karbs)');
$('#nutri').html($(this).data('nutri')+' (Protein)');
$('#fat').html($(this).data('fat')+' (Fett)');
});


 
 
		</script>  

    </body>

    <script type="text/javascript">
        function valid_email_address(email)
        {
            var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
            return pattern.test(email);
        }
        $('#nwsltr').on("click", function () {
            if (!valid_email_address($("#email").val()))
            {
                $(".message").html('Please make sure you enter a valid email address');
            }
            else
            {

                $(".message").html("<span style='color:white;'>Nesten ferdig, sjekk emailen for  bekreftelse.</span>");
                $.ajax({
                    url: '<?php echo $this->webroot; ?>shop/newsletter',
                    data: $('#subscribe').serialize(),
                    type: 'POST',
                    success: function (msg) {
                        if (msg == "success")
                        {
                            $("#email").val("");
                            $(".message").html('<span style="color:white;">Abonneringen til vår nyhetsbrev liste er velykket.</span>');

                        }
                        else
                        {
                            $(".message").html('Skriv inn en gyldig email adresse.');
							
                        }
                    }
                });
            }
            return false;
        });
		

    </script> 
           
<div class="layer"></div><!-- Mobile menu overlay mask -->

        <!-- Login modal -->   

        <div class="modal fade modal-dialog_pop" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-popup">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <a href="#" class="close-link guri" data-dismiss="modal" aria-label="Close"><i class="icon_close_alt2"></i></a>
                    <!--<p class="guri">rrrrrrrrrrrrr</p>-->
                    <form action="<?php echo $this->webroot; ?>users/login" method="post"class="popup-form" id="myLogin">
                        <div class="login_icon"><i class="icon_lock_alt"></i></div>
                        <input type="email" name="data[User][username]" required title="Vennligst fyll ut dette feltet" class="form-control form-white" placeholder="Bruker-epost">
                        <input type="password" name="data[User][password]" required title="Vennligst fyll ut dette feltet" class="form-control form-white" placeholder="Passord">
                        <input type="hidden" name="data[User][server]" value="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                        <div class="text-left">
                            <a href="<?php echo $this->webroot; ?>users/forgetpwd">Glemt passord?</a>
                        </div>
                        <button  class="btnwale btn defult_btn btn-submit" type="submit">LOGG INN</button>
						<span class="acountSignup">Hvis du ikke har en konto kan du klikke her <a href="#register" data-toggle="modal" data-dismiss="modal">For å opprettekonto</a></span>
                    </form>
                </div>
            </div>

        </div>
		

		
		

		
		
		
		
		<!-- End modal -->   

        <!-- Register modal -->   
        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-popup">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <a href="#" class="close-link guri" data-dismiss="modal" aria-label="Close"><i class="icon_close_alt2"></i></a>
                    <form action="" accept-charset="ISO-8859-1" class="popup-form" method="post" id="myRegister">
                        <div class="login_icon"><i class="icon_lock_alt"></i></div>
                        <input type="text" required title="Vennligst fyll ut dette feltet" class="form-control form-white" name="data[User][name]" placeholder="Fullt navn" maxlength="50">
                        <input type="Email" id='email' required="required" title="Vennligst fyll ut dette feltet" class="form-control form-white" name="data[User][email]"  placeholder="E-post" maxlength="50">
                        <!--input type="text" required="required" class="form-control form-white" name="data[User][username]" placeholder="Username" maxlength="50"-->
                        <input type="password" required="required" title="Vennligst fyll ut dette feltet" class="form-control form-white" name="data[User][password]" placeholder="Passord"  id="password1" maxlength="50">
                        <input type="password" class="form-control form-white" title="Vennligst fyll ut dette feltet" placeholder="Bekreft passord"  id="password2" maxlength="50" required="required" name="data[User][cpassword]">
                        <input type="hidden" class="form-control form-white" name="data[User][role]" value="customer">
                        <!--<input type="hidden" class="form-control form-white" name="data[User][name]" value="gurpreet Singh">-->
                        <input type="hidden" class="form-control form-white" name="data[User][active]" value="1">
                        <!--<input type="hidden" class="form-control form-white" name="data[User][password]" value="customer">-->
                        <input type="hidden" name="data[User][server]" value="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                        <div id="pass-info" class="clearfix"></div>
                        <div class="checkbox-holder text-left">
                            <div class="checkbox checkbox1">
                                <input  type="checkbox" value="accept_2" title="Vennligst fyll ut dette feltet" id="check_2" name="check_2" required="required" />
                                <label class="checkwale" for="check_2"><span class="regit_agree">Jeg godtar <strong><a href="<?php echo $this->webroot; ?>pages/terms" target="_blank">vilkårene og betingelsene</a></strong></span></label>  
                            </div>
                        </div>
                        <button class="btnwale" type="submit" class="btn btn-submit">Registrere</button>
                    </form>
                </div>
            </div>
        </div><!-- End review modal --> 
        
        
 <!--order page starts model-->  
  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Produktbeskrivelse</h4>
        </div>
        <div class="modal-body">
        			
				<div class="panel panel-default  panel--styled">
					<div class="panel-body">
						<div class="panelTop">	
							<div class="col-md-4 col-sm-12">	
								<img id='proIMage' class="img-responsive" src="" alt=""/>
							</div>
							<div class="col-md-8 col-sm-12">	
								<h2 id='pro_Name'>Saute Italian kylling med pasta</h2>
								<input type='hidden' id='pRate'>
                                <div class="stars" id='popStars'>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span> 
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
                            <p class="vote"><strong>Kategori: </strong> <span id='proCAT'>H�y Karbo</span></p>
                            <p id='proDESC'>Kylling fillet, Spaghetti fullkorn (<strong>Fullkornmel av durumhvete (55%) og mel av durumhvete</strong>) , Kyllingbuljong saltredusert, Stivelse, Olive olje, Hvitl�k, Rosmarin, Tomat, Kapers, Pepper pulver</p>
								<h4 class="price">pris: <span id='proPR'>59</span> Kr</h4>
					<div class="cal-size">
                                <h5 class="sizes"> 
                        <div class="size_lb">størrelser:</div>
							<span class="size" data-toggle="tooltip" title="small"><a id='prosm' href="javascript:void(0)" class="btn btn-primary small_bb" role="button" data-price="59" data-cal="376" data-carbo="41" data-nutri="26" data-fat="11">Small</a></span>
							<span class="size" data-toggle="tooltip" title="medium"><a id='promd' href="javascript:void(0)" class="btn btn-default medium_bb" role="button" data-price="69" data-cal="627" data-carbo="68" data-nutri="43" data-fat="18">Medium</a> </span>
							<span class="size" data-toggle="tooltip" title="large"><a id='prolg' href="javascript:void(0)" class="btn btn-default large_bb" role="button" data-price="79" data-cal="1003" data-carbo="109" data-nutri="69" data-fat="28">Large</a></span>
							
						</h5>
                   </div>
                        <h5 class="colors">MAKROINNHOLD:
						
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" class="prduct_pop">
  <tbody><tr>
    <td><img src="/home/image/kacl_icon.png" alt=""></td>
    <td id="cal">376</td>
  </tr>
  <tr>
    <td><img src="/home/image/fire_icn.png" alt=""></td>
    <td id="fat">41 (Fett)</td>
  </tr>
  <tr>
    <td> <img src="/home/image/fire_icn2.png" alt=""></td>
    <td id="carbo">26 (karbs)</td>
  </tr>
  <tr>
    <td> <img src="/home/image/shareit_icn.png" alt=""></td>
    <td id="nutri">11 (Protein)</td>
  </tr>
</tbody></table>
		
						</h5>

							</div>
						</div>
						
						<div class="col-md-12 panelBottom">							
							
							<div class="col-md-4">
								<div class="stars">
								 <div id="stars" class="starrr"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
         <div>
         
         
        </div>
        
      </div>
      
    </div>
  </div>
  </div>

<!--order page ends-->
		
		
		
		
		<!-- Modal -->
  <div class="modal fade" id="myModalcal" role="dialog">  
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content calcu_pop">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Beregning av kaloribehov</h4>
          <div class="alert alert-success">
          <p>
  <strong>Denne kalkulatoren </strong>bruke revidert Harris-Benedikt formel for å beregne kalori behov. For mer informasjon om BMR beregning , se Basalmetabolisme. Merk! Lavest beregnede verdien er 1200 kalorier.
</p>
</div>
        </div>
        <div class="modal-body rty">
          <form name="frm" action="" class='frms noborders'>
          <div class="form-row">
              <div class="col-xs-6 form-group ">
                <label for="age">Alder:</label>
            
						<input type="text" class="form-control" name="age" id="age" align="left" size="3" maxlength="2" onkeypress="return cknum(event,age)" placeholder="År" required>
						
					
              </div>
                           
            </div>
            <div class="form-row">
              <div class="col-xs-6 form-group ">
                   <label for="sex">Kjønn</label>
             <div class="input-group" data-toggle="buttons">
                    <label class="btn btn-default male_lbl">
					<input type="radio" name="gen" id="gen" checked>
					Mann</label>
                    <label class="btn btn-default female_lbl">  
					<input type="radio" name="gen" id="gen">
					Kvinne</label>
                  </div>
              </div>
                           
            </div>
                
                
                  <div class="form-row">
              <div class="col-xs-6 form-group ">
                <label>Kroppsvekt(kg)</label>
               <input type="text" class="form-control" name="weight" id="weight" maxlength="3" size="3" onkeyup="isNumberKey(this.id)">
              </div>
              <!--div class="col-xs-6 form-group expiration required">
                <label class="control-label">&nbsp;</label>
                <select class="form-control" name="wtype" id="wtype"><option value="kg">Kg</option><option value="pounds">Pounds</option></select>
              </div-->             
            </div>
                <!--div class="form-group">
            		<label>Weight(lbs)</label>
					<div class="input-group" data-validate="number">
						
						<input type="text" class="form-control" name="weight" id="weight" maxlength="3" size="3" onkeyup="isNumberKey(this.id)">
                        </div>
                        <div class="input-group" data-validate="number">
						<select class="form-control" name="wtype" id="wtype"><option value="kg">Kg</option><option value="pounds">Pounds</option></select>
					</div>
				</div-->
                <!--div class="form-row">
              <div class="col-xs-6 form-group ">
               <label>Height(inches)</label>
              
              <select class="form-control" style='width:50%;' name="foot" id="foot" onchange="hcon()"><option value="1">1'</option><option value="2">2'</option><option value="3">3'</option><option value="4">4'</option><option value="5">5'</option><option value="6">6'</option><option value="7">7'</option></select>
              
              </div>
              <div class="col-xs-6 form-group expiration required">
               
                <label class="control-label">&nbsp;</label>
               <select class="form-control" name="inch" id="inch" onchange="hcon()"><option value="1">1"</option><option value="2">2"</option><option value="3">3"</option><option value="4">4"</option><option value="5">5"</option><option value="6">6"</option><option value="7">7"</option><option value="8">8"</option><option value="9">9"</option><option value="10">10"</option><option value="11">11"</option></select>
              
              </div>             
            </div-->
                <!--div class="form-group">
                	<label>Hieght(inches)</label>
					<div class="input-group" data-validate="number">
						<select class="form-control" style='width:50%;' name="foot" id="foot" onchange="hcon()"><option value="1">1'</option><option value="2">2'</option><option value="3">3'</option><option value="4">4'</option><option value="5">5'</option><option value="6">6'</option><option value="7">7'</option></select>
						<select class="form-control" style='width:40%;'name="inch" id="inch" onchange="hcon()"><option value="1">1"</option><option value="2">2"</option><option value="3">3"</option><option value="4">4"</option><option value="5">5"</option><option value="6">6"</option><option value="7">7"</option><option value="8">8"</option><option value="9">9"</option><option value="10">10"</option><option value="11">11"</option></select>
						<span class="input-group-addon danger"></span>
					</div>
				</div-->
				
                <div class="form-row">
              <div class="col-xs-6 form-group ">
               <label>Høyde(cms)</label>
              
              <input class="form-control" type="text" name="cen" id="cen" size="4" onkeyup="con(cen)">
             
              </div>
                           
            </div>
				  <!--<div class="form-group">
                	<label>Hieght(cms)</label>
					<div class="input-group" data-validate="number">
						<input class="form-control" type="text" name="cen" id="cen" size="4" onkeyup="con(cen)">
						
					</div>
				</div>-->
                
                <div class="form-row">
              <div class="col-xs-6 form-group ">
            <label>Aktivitetsnivå</label>
              
             	<select class="form-control" name="loa" id="loa"><option value="1">Lite eller ingen trening</option><option value="2">Lett trening</option><option value="3">Moderat trening</option><option value="4">Tung trening</option><option value="5">Veldig tung trening</option></select>
             
              </div>
                           
            </div>
				
                <!--<div class="form-group">
            		<label>Activity Level</label>
					
						<select class="form-control" style='width:100px;' name="loa" id="loa"><option value="1">Sedentary</option><option value="2">Light Active</option><option value="3">Moderately Active</option><option value="4">Very Active</option><option value="5">Extra Active</option></select>
						
					
				</div>-->
               
                    <div class="form-group">
                     <div id="dc_results" class="alert alert-success msg_cal" style="display:none;">
						  <h4>For å møte vekten målet din, du trenger en tilsverende inntakk på&nbsp;**<strong><span id="calAmount"></span>&nbsp;kalorier per dag</strong>**<br/>*NB! Resultatet må kun anses som omtrentlig. Ingen kalkulator eller formel i verden kan ta høyde for individuelle forkjeller i benbygning, muskelmasse osv  <button type='button' class="btn btn-danger btn-xs" id='usecal' data-dismiss="modal">Bruk resultatet</button></h4>
					  </div>
                      </div>
					  
					  
					  
					  
					  
					  <table style='display:none;' align="center" border="0" class="frms noborders"><caption><b>Calorie Result</b></caption><tr><td align="right" style="color: #3D366F; font-size:13px;">Calorie Needed:</td><td><input type="text" id="rc" style="font-size:13px;" size="15" readonly></td><td><select name="caltype" id="caltype" onChange="convert()"><option value="g">Grams</option><option value="kg">Kilograms</option><option value="pounds">Pounds</option></select></td></tr></table><!--div style="color: #3D366F; font-size:13px;">You Must Intake The Following Daily</div--><table class="frms noborders" style='display:none;'><tr><td style="color: #3D366F; font-size:13px;">Fat:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rf" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l1"></label> per day</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Protein:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rp" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l2"></label> per day</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Carbohydrate:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rh" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l3"></label> per day</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Alcohol:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="ra" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l4"></label> per day</font></td></tr></table>
					  
					  
                   
                     
                         <div class="col-xs-12 form-group ">
                        <input class='btn btn-sm defultblk_btn blue_button pull-right' type="button" value="Beregn" onclick="cc()">
                        </div>
                        <!--<div class="col-xs-12 form-group">
                        <button class="btn btn-sm defult_btn pull-right" data-dismiss="modal" onclick="resetForm();">Close</button>
                        </div>-->
                         <div class="clearfix"> 
                         <div class="col-xs-12 form-group">
						<span id="dumdiv" align="center" style=" font-size: 10px;color: #dadada;"><a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;" href="https://www.hscripts.com">�h</a></span>
                        </div>
                     </div>
                  

                
				
            </form>  
           
      </div>
      
    </div>
    
       </div>
      
    </div>   
 

 
    
    
		
		
 <style>
 .modal-open .modal {
    margin: 0 !important;
    overflow: scroll !important;
    padding: 0 !important;
    width: 100% !important;
}
.modal {
    padding: 0 25px !important;
    z-index: 9999999;
}
.modal-dialog {
    margin: 0 auto;
    max-width: 560px;
    width: 100%;
}
.modal-popup {
    background: rgb(51, 51, 51) none repeat scroll 0 0 !important;
    border: medium none;
    border-radius: 0;
    padding: 1px 30px 10px;
    position: relative;
    text-align: center;
    top: 0 !important;
}
.popup-form {
    margin: 60px auto;
    max-width: 375px;
    width: 90%;
}
.popup-form2 {
	    margin: 0px auto;
    max-width: 375px;
    width: 100%;
	}

.login_icon {
    color: #fff;
    float: left;
    font-size: 60px;
    margin-top: 29px;
    opacity: 0.5;
    text-align: center;
    width: 100%;
}
.popup-form .form-control {
    margin: 20px 0;
}
.form-control.form-white {
    -moz-appearance: none;
    background: transparent none repeat scroll 0 0;
    border: 1px solid white;
    border-radius: 0;
    color: #fff;
    font-size: 16px;
    height: 42px;
    line-height: 42px;
    position: relative;
    transition: background-color 0.3s ease 0s;
}
.btnwale {
    border-radius: 5px;
    font-size: 16px;
    margin-top: 9px;
    padding: 10px 0;
    width: 100%;
}
.modal-popup a.close-link {
    color: #fff;
    font-size: 22px;
    position: absolute;
    right: 30px;
    top: 20px;
}
.layer {
    background-color: #000;
    display: none;
    left: 0;
    min-height: 100%;
    min-width: 100%;
    opacity: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9;
}
.message {
    color: green;
    float: left;
    font-size: 18px;
    margin: 0px;
    text-align: center;
    width: 100%;
	padding-top:10px;
}

.fa-star-half-o{
	color:#ffd200;
}
.rowImg{
	list-style:none;
	padding:0;
	margin:0; 
}
.fa-trash{
	cursor:pointer;
}
#popStars .checked{
	color:#ffd200;
}
</style>


<!--Script by hscripts.com-->
<!-- Free javascripts @ https://www.hscripts.com -->
<script type="text/javascript">
var cneed;
var fneed;
var crneed;
var pneed;
var aneed;
var fd;
function cc()
{
var age=parseInt(document.getElementById("age").value);
var wtype='kg';
//var foot=parseInt(document.getElementById("foot").value);
//var inch=parseInt(document.getElementById("inch").value);
var cm =document.getElementById("cen").value;
var weight=document.getElementById("weight").value;
if (age!='' && cm!='' && weight!='') {
if (wtype=="pounds")
{weight=parseInt(weight);
weight=Math.round(weight/2.2046);
}
var loa=document.getElementById("loa").value;
if(document.getElementById("gen").checked)
{
fd=(10*weight)+(6.25*cm)-(5*age)+5;

}
else
{
fd=(10*weight)+(6.25*cm)-(5*age)-161;

}
switch(loa)
{
case "1":
cneed=fd*1.2;
break;
case "2":
cneed=fd*1.375
break;
case "3":
cneed=fd*1.53;
break;
case "4":
cneed=fd*1.725;
break;
case "5":
cneed=fd*1.9;
break;
}
cneed=Math.floor(cneed);
//cneed1=Math.floor(cneed*0.0353);
fneed=Math.floor((cneed*0.25)/9);
if (wtype=="pounds")
{
fneed=Math.floor(fneed*0.0353);
//fneed=fneed*0.0022 ;
}
pneed=Math.floor((cneed*0.25)/4);
if (wtype=="pounds")
{
pneed=Math.floor(pneed*0.0353);
}
crneed=Math.floor((cneed*0.25)/4);
if (wtype=="pounds")
{
crneed=Math.floor(crneed*0.0353);
}
aneed=Math.floor((cneed*0.25)/7);
if (wtype=="pounds")
{
aneed=Math.floor(aneed*0.0353);
}

document.getElementById("dc_results").style.display = 'block';
document.getElementById("calAmount").innerHTML=" "+cneed;
document.getElementById("rc").value=" "+cneed;
document.getElementById("rf").value=" "+fneed;
document.getElementById("rp").value=" "+pneed;
document.getElementById("rh").value=" "+crneed;
document.getElementById("ra").value=" "+aneed;
//document.getElementById("l1").innerHTML="grams";
//document.getElementById("l2").innerHTML="grams";
//document.getElementById("l3").innerHTML="grams";
//document.getElementById("l4").innerHTML="grams";
var caltype=document.getElementById("caltype").value;
if (caltype=='g') {
//document.getElementById("l1").innerHTML="grams";
//document.getElementById("l2").innerHTML="grams";
//document.getElementById("l3").innerHTML="grams";
//document.getElementById("l4").innerHTML="grams";
}
if (wtype=="pounds")
{
fat1 = fneed * 0.0022 ;
pro1 = pneed * 0.0022 ;
car1 = crneed * 0.0022 ;
alh1 = aneed * 0.0022 ;
fat1=fat1.toFixed(3);
pro1 = pro1.toFixed(3);
car1 = car1.toFixed(3);
alh1 = alh1.toFixed(3);
document.getElementById("rf").value=" "+fat1;
document.getElementById("rp").value=" "+pro1;
document.getElementById("rh").value=" "+car1;
document.getElementById("ra").value=" "+alh1;
//document.getElementById("l1").innerHTML="lbs";
//document.getElementById("l2").innerHTML="lbs";
//document.getElementById("l3").innerHTML="lbs";
//document.getElementById("l4").innerHTML="lbs";
}
if (caltype=='pounds') {
fat1 = fneed * 0.0022 ;
pro1 = pneed * 0.0022 ;
car1 = crneed * 0.0022 ;
alh1 = aneed * 0.0022 ;
fat1=fat1.toFixed(3);
pro1 = pro1.toFixed(3);
car1 = car1.toFixed(3);
alh1 = alh1.toFixed(3);
document.getElementById("rf").value=" "+fat1;
document.getElementById("rp").value=" "+pro1;
document.getElementById("rh").value=" "+car1;
document.getElementById("ra").value=" "+alh1;
//document.getElementById("l1").innerHTML="lbs";
//document.getElementById("l2").innerHTML="lbs";
//document.getElementById("l3").innerHTML="lbs";
//document.getElementById("l4").innerHTML="lbs";
}
if (caltype=='kg') {
fat2 = fneed / 1000;
pro2 = pneed / 1000;
car2 = crneed / 1000;
alh2 = aneed / 1000;
fat2=fat2.toFixed(3);
pro2 = pro2.toFixed(3);
car2 = car2.toFixed(3);
alh2 = alh2.toFixed(3);
document.getElementById("rf").value=" "+fat2;
document.getElementById("rp").value=" "+pro2;
document.getElementById("rh").value=" "+car2;
document.getElementById("ra").value=" "+alh2;
//document.getElementById("l1").innerHTML="kilogram";
//document.getElementById("l2").innerHTML="kilogram";
//document.getElementById("l3").innerHTML="kilogram";
//document.getElementById("l4").innerHTML="kilogram";
}
}
else{
alert("Fyll in detaljenekorrekt!");
}
}
/*function con(num)
{
var hc=parseInt(num.value);
var hi=hc/2.54;
var hf=Math.floor(hi/12);
var ri=Math.round(hi%12);
if(hc>40 && hc<=210)
{
document.getElementById("foot").value=hf;
}
document.getElementById("inch").value=ri;
}*/
/*function hcon()
{
var hf=parseInt(document.getElementById("foot").value);
var hi=parseInt(document.getElementById("inch").value);
var hc;
hc=Math.round((hf*30.48)+(hi*2.54));
document.getElementById("cen").value=hc;
}*/
function cknum(event,num)
{var kc;
if(window.event)
{
kc=event.keyCode;
}
else
{
kc=event.which;
}
var a=num.value;
if(kc==48)
{
if(a=="")
{
return false;
}
else
{
return true;
}
}if (kc!=8 && kc!=0)
{
if (kc<49||kc>57)
{
return false;
}
}
}
function isNumberKey(id)
{var no=eval('"'+id+'"');var number= document.getElementById(no).value; if(!number.match(/^[0-9\.]+$/) && number !=""){number = number.substring(0,number.length-1);document.getElementById(id).value = number;}
}
function convert() {
var age=parseInt(document.getElementById("age").value);
var cm =document.getElementById("cen").value;
var weight=document.getElementById("weight").value;
if (age!='' && cm!='' && weight!='') {
var caltype=document.getElementById("caltype").value;
var fat = document.getElementById("rf").value;
var pro = document.getElementById("rp").value;
var car = document.getElementById("rh").value;
var alh = document.getElementById("ra").value;
if (caltype=='g') {
document.getElementById("calAmount").innerHTML=" "+cneed;
document.getElementById("rc").value=" "+cneed;
document.getElementById("rf").value=" "+fneed;
document.getElementById("rp").value=" "+pneed;
document.getElementById("rh").value=" "+crneed;
document.getElementById("ra").value=" "+aneed;
/* document.getElementById("l1").innerHTML="grams";
document.getElementById("l2").innerHTML="grams";
document.getElementById("l3").innerHTML="grams";
document.getElementById("l4").innerHTML="grams"; */
}
if (caltype=='pounds') {
fat1 = fneed * 0.0022 ;
pro1 = pneed * 0.0022 ;
car1 = crneed * 0.0022 ;
alh1 = aneed * 0.0022 ;
fat1=fat1.toFixed(3);
pro1 = pro1.toFixed(3);
car1 = car1.toFixed(3);
alh1 = alh1.toFixed(3);
document.getElementById("rf").value=" "+fat1;
document.getElementById("rp").value=" "+pro1;
document.getElementById("rh").value=" "+car1;
document.getElementById("ra").value=" "+alh1;
/* document.getElementById("l1").innerHTML="lbs";
document.getElementById("l2").innerHTML="lbs";
document.getElementById("l3").innerHTML="lbs";
document.getElementById("l4").innerHTML="lbs"; */
}
if (caltype=='kg') {
fat2 = fneed / 1000;
pro2 = pneed / 1000;
car2 = crneed / 1000;
alh2 = aneed / 1000;
fat2=fat2.toFixed(3);
pro2 = pro2.toFixed(3);
car2 = car2.toFixed(3);
alh2 = alh2.toFixed(3);
document.getElementById("rf").value=" "+fat2;
document.getElementById("rp").value=" "+pro2;
document.getElementById("rh").value=" "+car2;
document.getElementById("ra").value=" "+alh2;
/* document.getElementById("l1").innerHTML="kilogram";
document.getElementById("l2").innerHTML="kilogram";
document.getElementById("l3").innerHTML="kilogram";
document.getElementById("l4").innerHTML="kilogram"; */
}
}
else{
alert("Fyll in detaljenekorrekt!");
}
}
function chk(){
var sds = document.getElementById('dum');
if(sds == null){alert("You are using a free package.\n You are not allowed to remove the tag.\n");
//document.getElementById("tab").style.visibility="hidden";
}
var sdss = document.getElementById("dumdiv");
if(sdss == null){alert("You are using a free package.\n You are not allowed to remove the tag.\n");}
}
window.onload=chk;
</script>
<!-- Script by hscripts.com -->


 
<script>
$(document).ready(function() {

    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
	
});
</script>
<style>

.rty {
/*  height: 500px !important;
  overflow: scroll !important;
  padding: 15px;
  position: relative;*/
}

.ui-slider-range {
   background:green;
}
.percent {
  color:green;
  font-weight:bold;
  text-align:center;
  width:100%;
  border:none;
}
</style>




<style> 


#panel {
  
    display: none;
}
.table1 {
    margin-bottom: 20px;
    max-width: 100%;
    width: 100%;
	
}
.table1 > thead > tr > th {
    border-bottom: 2px solid #ddd;
}
.table1 > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ddd;
    line-height: 1.42857;
}
.rating .checked{
	color: #ff9f1a;

}
.rating span{

	cursor:pointer;
}
</style>

<script>
$(function () {
    $('#accordion').on('shown.bs.collapse', function (e) {
        var offset = $('.panel.panel-default > .panel-collapse.in').offset();
        if(offset) {
            $('html,body').animate({
                scrollTop: $('.panel-title a').offset().top -20
            }, 500); 
        }
    }); 
});    
</script>




<script type="text/javascript">
   $(document).ready(function () {

	$('.rightorder_sec .size button').each(function(){
		
     if(!$(this).hasClass("disable")){
		$(this).trigger('click');
	 }
    });
       $("#btn-thired").click(function () {
           $("#collapse3").collapse('toggle');
       });
       $("#btn-four").click(function () {
           $("#collapse4").collapse('toggle');
       });
	   
	   

   });
</script>

<script>  
$(document).ready(function(){

	
    $("#flip").click(function(){
        $("#panel").slideDown("slow");
    });
	
	
	var path = window.location.href; 
	console.log(path);
if(path == 'http://trenogmat.no/shop/cart'){
 var session_zip = '<?php echo $address['shipping_zip']; ?>';
if(session_zip != ''){

$.ajax({
				url:'/picodes/zipavailablility',
				type:'POST',
				data:{zip:session_zip},
				dataType: "json",
				success: function(d){
					
                        if(d == 'Sorry! we are not able to ship in your area.'){
							alert('Beklager. Vi kan ikke levere til din postnummer dessverre');
							$('.panel-default input').attr('disabled','disabled');
							$('.panel-default button').attr('disabled','disabled');
							$('#postal_ship').removeAttr('disabled');
							$('.delivey_sec .no_methods').html('Beklager. Vi kan ikke levere til din postnummer dessverre').css('display','block');
							$('.delivey_sec .delivey_tbl').css('display','none');
							var postDelivery = 0;
								$.ajax({
								url:'/terenogmat/shop/postDelivery',
								type:'POST',
								data:{'postDelivery':postDelivery},
								dataType: "json",
								success: function(d){
									console.log($('.checkoutTotal').html(parseInt(parseFloat($('.checkoutTotal').data('total'))+parseFloat(postDelivery))));
								 }
								 });
								 
							event.preventDefault();
						}else{ 
							if(d['Order']['deliverable']){
								
								var postDelivery = 0;
								$.ajax({
								url:'/shop/postDelivery',
								type:'POST',
								data:{'postDelivery':postDelivery},
								dataType: "json",
								success: function(ds){
									
									var total = parseFloat(ds['Order']['total']+parseFloat(postDelivery));
									
					
					      if(ds['Order']['delivery_cost'] != '' && ds['Order']['coupon']){
							var tol = parseFloat(parseFloat(ds['Order']['total'])+parseFloat(ds['Order']['delivery_cost']));
							
							var prs = parseFloat(tol - parseFloat(ds['Order']['total']*ds['Order']['coupon']/100));
							$('.checkoutTotal').html(prs.toFixed()+' kr');
							$('.checkoutTotal').attr('data-total',prs.toFixed());
						
							$('#dlvryCost').html(ds['Order']['delivery_cost']+' kr');
						    $('#dlvryCost').parent().css('display','block');
						}else if(ds['Order']['delivery_cost'] != ''){
							
							var prs = parseFloat(parseFloat(ds['Order']['total'])+parseFloat(ds['Order']['delivery_cost']));
							$('.checkoutTotal').html(prs.toFixed()+' kr');
							$('.checkoutTotal').attr('data-total',prs.toFixed());
		
							$('#dlvryCost').html(ds['Order']['delivery_cost']+' kr');
						    $('#dlvryCost').parent().css('display','block');
						}else if(d['Order']['coupon']){
							
							var prs = parseFloat(parseFloat(ds['Order']['total'])-parseFloat(ds['Order']['total']*ds['Order']['coupon']/100));
							$('#shipTOTL').html(prss.toFixed()+' kr');
							$('.checkoutTotal').html(prs.toFixed()+' kr');
							$('.checkoutTotal').attr('data-total',prs.toFixed());
							
							$('#dlvryCost').html(d['Order']['delivery_cost']+' kr');
							$('#dlvryCost').parent().css('display','none');
						}
		             
					 
					            
								//$('#dlvryCost').html(ds['Order']['delivery_cost']+'Kr');
								//$('#shipTOTL').html(total.toFixed()+' Kr');
								$('.delivey_sec .no_methods').html('').css('display','none');
							    $('.delivey_sec .delivey_tbl').css('display','block');
								$('.delivey_tbl .tregmethod').show();
									
									
									
								 }
								 });
								
								
							}else{
								var total = parseFloat(d['Order']['total']+parseFloat(d['Order']['delivery_cost']));
								$('.checkoutTotal').html(total.toFixed()+' kr')
								$('#dlvryCost').html(d['Order']['delivery_cost']+' kr');
								
								$('.delivey_sec .no_methods').css('display','none');
								 $('.delivey_sec .delivey_tbl').css('display','block');
								$('.delivey_tbl .tregmethod').hide();
								
								
							}
							if(d['Order']['delivery_cost'] == 0){
							$('.freeDlvryText').html('( Gratis levering )');
							}else{
								$('.freeDlvryText').html('( leveringskostnader '+d['Order']['delivery_cost']+' Kr )');
							}
							$('.tregmethod_price').html(d['Order']['delivery_cost']);
							$('.panel-default input').removeAttr('disabled');
							$('.panel-default button').removeAttr('disabled');
						}
						
                },
                error: function(error){
                        
                }
			});
	
	
}
 
		}
	
	
	
	
});
</script>

  <!--<script type="text/javascript">
        $(function() {
            var offset = $("#sidebar").offset();
            var topPadding = 200;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $("#sidebar").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $("#sidebar").stop().animate({
                        marginTop: 0
                    });
					
					
                };
            });
        });
    </script>-->
    
    <!--<script>
	function scrollCheck() {
    var $right = $('#sidebar'),
        scrollTop = $(window).scrollTop(),
        windowHeight = $(window).height(),
        docHeight = $(document).height(),
        rightHeight = $right.height(),
        distanceToTop = rightHeight + 110 - windowHeight,
        distanceToBottom = scrollTop + windowHeight + 110 - docHeight;
    if (scrollTop > distanceToTop) {

        $right.css({
            'position': 'fixed',
            'bottom': (scrollTop + windowHeight + 110 > docHeight ? distanceToBottom  + 'px' : '0px')
        });
    }
    else {
        $right.css({
            'position': 'relative',
            'bottom': 'auto',
			'left': '0px'
        });
    }
}

$(window).bind('scroll', scrollCheck);
	</script>-->
    


    
    <script src="<?php echo $this->webroot; ?>home/js/classie.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
  <!---------------17feb2017----------------->
  
 


<script>
$(function () {
   
  var msie6 = $.browser == 'msie' && $.browser.version < 7;
   
  if (!msie6 && $('#sidebar').offset()!=null) {
    var top = $('#sidebar').offset().top - parseFloat($('#sidebar').css('margin-top').replace(/auto/, 0));
    var height = $('#sidebar').height();
    var winHeight = $(window).height(); 
    var footerTop = $('.footer1').offset().top - parseFloat($('.footer1').css('margin-top').replace(/auto/, 0));
    var gap = 7;
    $(window).scroll(function (event) {
      // what the y position of the scroll is
      var y = $(this).scrollTop();
       
      // whether that's below the form
      if (y+winHeight >= top+ height+gap && y+winHeight<=footerTop) {
        // if so, ad the fixed class
        $('#sidebar').addClass('leftsidebarfixed').css('top',winHeight-height-gap +'px');
      } 
      else if (y+winHeight>footerTop) {
        // if so, ad the fixed class
       $('#sidebar').addClass('leftsidebarfixed').css('top',footerTop-height-y-gap+'px');
      } 
      else    
      {
        // otherwise remove it
        $('#sidebar').removeClass('leftsidebarfixed').css('top','0px');
      }
    });
  }  
});


$('.mobile_cart').each(function(){
    $(this).click(function(){ 
		var id = $(this).data('id');
		
		var imgHtml = $(this).parent().prev().prev().prev().children().find('.singlePOP').html();;
		var pid = $(this).parent().prev().prev().prev().children().find('.thumb_img').data('id');
		
		
		
		$('#cartModal').attr('data-id',id);
		$('#cartModal').modal('show');
        $('#insertPID').html(id);
		$('#insertPdiv').html(imgHtml);	
	
		
		
	});
	
});





$('.close').click(function(){
	$('#cartModal').modal('hide');
	$('#cartModal').attr('data-id','');
});

function printDiv() 
{
  
  var divToPrint=document.getElementById('DivIdToPrint');
  
  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}

$('.tablecart .cellm').each(function(){
$('.cellm').click(function(){ 

	var t = $(this);				
	var pid1 = $('#insertPID').html();		
	var size = $('#insertPdiv').find('.thumb_img').attr('data-size');
	var elem_len_a = $('#insertPdiv .thumb_img a').length;
	var elem_len_span = $('#insertPdiv .thumb_img span').length;
	if(elem_len_a < 1 && elem_len_span < 1){
	$('#insertPdiv .thumb_img').append('<a href="javascript:void(0)" class="remove">X</a><span class="psize">'+size+'</span>');
	}
	var imgHtml = $('#insertPdiv').html();
			   
				var modal_id = $(this).closest('#cartModal').data('id');
					var len = $(this).find('.thumb_img').length;
					if(len < 1){	
					$(this).append(imgHtml);
					
						var pID = t.find('.thumb_img').attr('data-id');
						var price = t.find('.thumb_img').attr('data-price');
						var cal = t.find('.thumb_img').attr('data-cal');
						var carbo = t.find('.thumb_img').attr('data-carbo');
						var nutri = t.find('.thumb_img').attr('data-nutri');
						var fat = t.find('.thumb_img').attr('data-fat');
						var size = t.find('.thumb_img').attr('data-size');
						var block = t.attr('id');
                        var day = t.parent('tr').data('day');
						$('.loaderImage').show();
						$.ajax({
							type: "POST",
							url: "http://trenogmat.no/shop/itemupdate",
							data: {
								id: pID,
								quantity: 1,
								size: size,
								price: price,
								day: day,
								block: block
								},
								dataType: "json",
								success: function (data) { 
								$('.loaderImage').hide();
								$('#cartItemsHeader').html(data['Order']['quantity']);
								
								if(data['Order']['check_price']){
									
						var p = parseFloat(data['Order']['total'] * data['Order']['check_price']/100);
						//console.log(p);
						var prsum5s = parseFloat(data['Order']['total']) + p;
						prsum5 = prsum5s.toFixed();
						
					}else{
						var prsum5s = parseFloat(data['Order']['total']);
						prsum5 = prsum5s.toFixed();
					}
								
								console.log(data);
								var day1_cal = 0;
								var day1_carbo = 0;
								var day1_nutri = 0;	
								var day1_fat = 0;
								var day2_cal = 0;
								var day2_carbo = 0;
								var day2_nutri = 0;
								var day2_fat = 0;
								var day3_cal = 0;
								var day3_carbo = 0;
								var day3_nutri = 0;
								var day3_fat = 0;
								var day4_cal = 0;
								var day4_carbo = 0;
								var day4_nutri = 0;
								var day4_fat = 0;
								var day5_cal = 0;
								var day5_carbo = 0;
								var day5_nutri = 0;	
								var day5_fat = 0;	
								var day6_cal = 0;	
								var day6_carbo = 0;	
								var day6_nutri = 0;	
								var day6_fat = 0;	
								var day7_cal = 0;	
								var day7_carbo = 0;	
								var day7_nutri = 0;	
								var day7_fat = 0;

								
								$.each(data['OrderItem'], function (index, value) {

									
                                									
								t.find('.thumb_img').attr('data-unique', value['unique']);
								if(value['size'] == 'S'){
									if(value['day'] == '1'){
										day1_cal += parseInt(value['Product']['small_cal']);
										day1_carbo += parseInt(value['Product']['small_carbo']);
										day1_nutri += parseInt(value['Product']['small_nutri']);
										day1_fat += parseInt(value['Product']['small_fat']);
										}
										if(value['day'] == '2'){
											day2_cal += parseInt(value['Product']['small_cal']);
											day2_carbo += parseInt(value['Product']['small_carbo']);						
											day2_nutri += parseInt(value['Product']['small_nutri']);
											day2_fat += parseInt(value['Product']['small_fat']);
											}
											if(value['day'] == '3'){
												day3_cal += parseInt(value['Product']['small_cal']);
												day3_carbo += parseInt(value['Product']['small_carbo']);			
												day3_nutri += parseInt(value['Product']['small_nutri']);	
												day3_fat += parseInt(value['Product']['small_fat']);				
												}
												if(value['day'] == '4'){
													day4_cal += parseInt(value['Product']['small_cal']);	
													day4_carbo += parseInt(value['Product']['small_carbo']);
													day4_nutri += parseInt(value['Product']['small_nutri']);
													day4_fat += parseInt(value['Product']['small_fat']);
													}	
													if(value['day'] == '5'){
														day5_cal += parseInt(value['Product']['small_cal']);
														day5_carbo += parseInt(value['Product']['small_carbo']);
														day5_nutri += parseInt(value['Product']['small_nutri']);
														day5_fat += parseInt(value['Product']['small_fat']);
														}	
													if(value['day'] == '6'){	
														day6_cal += parseInt(value['Product']['small_cal']);		
														day6_carbo += parseInt(value['Product']['small_carbo']);	
														day6_nutri += parseInt(value['Product']['small_nutri']);
														day6_fat += parseInt(value['Product']['small_fat']);
														}	
													if(value['day'] == '7'){
															day7_cal += parseInt(value['Product']['small_cal']);
															day7_carbo += parseInt(value['Product']['small_carbo']);
															day7_nutri += parseInt(value['Product']['small_nutri']);
															day7_fat += parseInt(value['Product']['small_fat']);
															}	
															}   
															if(value['size'] == 'M'){								if(value['day'] == '1'){									day1_cal += parseInt(value['Product']['medium_cal']);									day1_carbo += parseInt(value['Product']['medium_carbo']);									day1_nutri += parseInt(value['Product']['medium_nutri']);									day1_fat += parseInt(value['Product']['medium_fat']);								}								if(value['day'] == '2'){									day2_cal += parseInt(value['Product']['medium_cal']);									day2_carbo += parseInt(value['Product']['medium_carbo']);									day2_nutri += parseInt(value['Product']['medium_nutri']);									day2_fat += parseInt(value['Product']['medium_fat']);								}								if(value['day'] == '3'){									day3_cal += parseInt(value['Product']['medium_cal']);									day3_carbo += parseInt(value['Product']['medium_carbo']);									day3_nutri += parseInt(value['Product']['medium_nutri']);									day3_fat += parseInt(value['Product']['medium_fat']);								}								if(value['day'] == '4'){									day4_cal += parseInt(value['Product']['medium_cal']);									day4_carbo += parseInt(value['Product']['medium_carbo']);									day4_nutri += parseInt(value['Product']['medium_nutri']);									day4_fat += parseInt(value['Product']['medium_fat']);								}								if(value['day'] == '5'){									day5_cal += parseInt(value['Product']['medium_cal']);									day5_carbo += parseInt(value['Product']['medium_carbo']);									day5_nutri += parseInt(value['Product']['medium_nutri']);									day5_fat += parseInt(value['Product']['medium_fat']);								}								if(value['day'] == '6'){									day6_cal += parseInt(value['Product']['medium_cal']);									day6_carbo += parseInt(value['Product']['medium_carbo']);									day6_nutri += parseInt(value['Product']['medium_nutri']);									day6_fat += parseInt(value['Product']['medium_fat']);								}								if(value['day'] == '7'){									day7_cal += parseInt(value['Product']['medium_cal']);									day7_carbo += parseInt(value['Product']['medium_carbo']);									day7_nutri += parseInt(value['Product']['medium_nutri']);									day7_fat += parseInt(value['Product']['medium_fat']);								}															}                            if(value['size'] == 'L'){								if(value['day'] == '1'){									day1_cal += parseInt(value['Product']['large_cal']);									day1_carbo += parseInt(value['Product']['large_carbo']);									day1_nutri += parseInt(value['Product']['large_nutri']);									day1_fat += parseInt(value['Product']['large_fat']);								}								if(value['day'] == '2'){									day2_cal += parseInt(value['Product']['large_cal']);									day2_carbo += parseInt(value['Product']['large_carbo']);									day2_nutri += parseInt(value['Product']['large_nutri']);									day2_fat += parseInt(value['Product']['large_fat']);								}								if(value['day'] == '3'){									day3_cal += parseInt(value['Product']['large_cal']);									day3_carbo += parseInt(value['Product']['large_carbo']);									day3_nutri += parseInt(value['Product']['large_nutri']);									day3_fat += parseInt(value['Product']['large_fat']);								}								if(value['day'] == '4'){									day4_cal += parseInt(value['Product']['large_cal']);									day4_carbo += parseInt(value['Product']['large_carbo']);									day4_nutri += parseInt(value['Product']['large_nutri']);									day4_fat += parseInt(value['Product']['large_fat']);								}								if(value['day'] == '5'){									day5_cal += parseInt(value['Product']['large_cal']);									day5_carbo += parseInt(value['Product']['large_carbo']);									day5_nutri += parseInt(value['Product']['large_nutri']);									day5_fat += parseInt(value['Product']['large_fat']);								}								if(value['day'] == '6'){									day6_cal += parseInt(value['Product']['large_cal']);									day6_carbo += parseInt(value['Product']['large_carbo']);									day6_nutri += parseInt(value['Product']['large_nutri']);									day6_fat += parseInt(value['Product']['large_fat']);								}								if(value['day'] == '7'){									day7_cal += parseInt(value['Product']['large_cal']);									day7_carbo += parseInt(value['Product']['large_carbo']);									day7_nutri += parseInt(value['Product']['large_nutri']);									day7_fat += parseInt(value['Product']['large_fat']);								}															}													});
							/*$.each(data['SessionQty'], function (index, value) {

								//$('.pdiv').each(function(){
									var qid = $('[data-id="'+index+'"]');
									//alert(qid.data('id'));
									if(index == qid.data('id') && value == 0){
										
										if(qid.hasClass('pdiv')){
											//console.log(qid.html());
											//alert(qid.find('.stock').html());
											qid.find('.stock').css('display', 'block'); 
										
										qid.find('.mobile_cart').attr('disabled','disabled');
										qid.find('.mobile_cart').removeClass('mobile_cart').unbind('click');
										if(qid.data('id') == modal_id){
											alert('kkk');
											$('#cartModal').modal('hide');
										}
										
										}
										
									}
								//});
							   });*/
							  var qids = $('[data-id="'+$('#insertPID').html()+'"]');
							 
							  if(qids.hasClass('pdiv')){
								   var qid = qids.data('id');
								   
							   if(qid in data['SessionQty']){
									
									if(data['SessionQty'][qid] == '0'){
										qids.find('.stock').css('display', 'block'); 
										
										qids.find('.mobile_cart').attr('disabled','disabled');
										qids.find('.mobile_cart').removeClass('mobile_cart').unbind('click');
										$('#cartModal').modal('hide');
									}else{
										$('#cartModal').modal('show');
									}
								}
							  }
							
							   
															
											if(t.parent('tr').data('day') == '1'){							t.parent('tr').find('.shre_icn .rowcal').html(day1_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day1_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day1_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day1_fat);						}						if(t.parent('tr').data('day') == '2'){							t.parent('tr').find('.shre_icn .rowcal').html(day2_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day2_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day2_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day2_fat);						}						if(t.parent('tr').data('day') == '3'){							t.parent('tr').find('.shre_icn .rowcal').html(day3_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day3_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day3_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day3_fat);						}						if(t.parent('tr').data('day') == '4'){														t.parent('tr').find('.shre_icn .rowcal').html(day4_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day4_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day4_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day4_fat);						}						if(t.parent('tr').data('day') == '5'){														t.parent('tr').find('.shre_icn .rowcal').html(day5_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day5_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day5_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day5_fat);						}						if(t.parent('tr').data('day') == '6'){														t.parent('tr').find('.shre_icn .rowcal').html(day6_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day6_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day6_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day6_fat);						}						if(t.parent('tr').data('day') == '7'){							t.parent('tr').find('.shre_icn .rowcal').html(day7_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day7_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day7_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day7_fat);						}		                $('.price_txt').html('Pris '+prsum5+'kr');
						
											},					error: function () {							 window.location.reload();				}				});	
					
					
					
					
					
					
					
					
					}					
				
			
});	
});

</script>

 <script>
    function showonlyone(thechosenone) {

         $('.newboxes').each(function(index) {

              if ($(this).attr("id") == thechosenone) {
                   $(this).prev().find('a').attr('href','javascript:showonlyone("'+$(this).attr("id")+'")');
                   $(this).show(200);

              }

              else {

                   $(this).hide(600);

              }

         });

    }
</script>

<script type="text/javascript">
      $(function() {
        var moveLeft = -220;
        var moveDown = 10;
        
        $('a#trigger').hover(function(e) {
          $('div#pop-up').show();
          //.css('top', e.pageY + moveDown)
          //.css('left', e.pageX + moveLeft)
          //.appendTo('body');
        }, function() {
          $('div#pop-up').hide();
        });
        
        $('a#trigger').mousemove(function(e) {
          $("div#pop-up").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
        });
        
      });
	  	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 window.location.href = 'http://m.trenogmat.no/';
}

$('#register input[type=text]').on('change invalid', function() {
    var textfield = $(this).get(0);
    
    // 'setCustomValidity not only sets the message, but also marks
    // the field as invalid. In order to see whether the field really is
    // invalid, we have to remove the message first
    textfield.setCustomValidity('');
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity('Vennligst fyll ut dette feltet');  
    }
});
$('#register input[type=email]').on('change invalid', function() {
    var textfield = $(this).get(0);
    
    // 'setCustomValidity not only sets the message, but also marks
    // the field as invalid. In order to see whether the field really is
    // invalid, we have to remove the message first
    textfield.setCustomValidity('');
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity('Vennligst fyll ut dette feltet');  
    }
});
$('#register input[type=password]').on('change invalid', function() {
    var textfield = $(this).get(0);
    
    // 'setCustomValidity not only sets the message, but also marks
    // the field as invalid. In order to see whether the field really is
    // invalid, we have to remove the message first
    textfield.setCustomValidity('');
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity('Vennligst fyll ut dette feltet');  
    }
});
$('#register input[type=checkbox]').on('change invalid', function() {
    var textfield = $(this).get(0);
    
    // 'setCustomValidity not only sets the message, but also marks
    // the field as invalid. In order to see whether the field really is
    // invalid, we have to remove the message first
    textfield.setCustomValidity('');
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity('Vennligst fyll ut dette feltet');  
    }
});


$('#login_2 input[type=email]').on('change invalid', function() {
    var textfield = $(this).get(0);
    
    // 'setCustomValidity not only sets the message, but also marks
    // the field as invalid. In order to see whether the field really is
    // invalid, we have to remove the message first
    textfield.setCustomValidity('');
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity('Vennligst fyll ut dette feltet');  
    }
});
$('#login_2 input[type=password]').on('change invalid', function() {
    var textfield = $(this).get(0);
    
    // 'setCustomValidity not only sets the message, but also marks
    // the field as invalid. In order to see whether the field really is
    // invalid, we have to remove the message first
    textfield.setCustomValidity('');
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity('Vennligst fyll ut dette feltet');  
    }
});


$('#commentReview').on('change invalid', function() {
    var textfield = $(this).get(0);
    
    // 'setCustomValidity not only sets the message, but also marks
    // the field as invalid. In order to see whether the field really is
    // invalid, we have to remove the message first
    textfield.setCustomValidity('');
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity('Vennligst fyll ut dette feltet');  
    }
});


$('#thirdTab').click(function(event){
	
     if ($('.leveranse input').is(':checked')) {
		if($('#bringtable').html() != ' '){
			
			if($('#bodyBot').val() != 0){
				$('#myHeader4').attr('href','javascript:showonlyone("newboxes4")');
                $('#myHeader5').attr('href','javascript:showonlyone("newboxes5")'); 
			}else{
				
				 event.preventDefault();
				 alert('Velg frakt alternativ');
				 $('#myHeader4').attr('href','javascript:void(0)'); 
				 $('#myHeader5').attr('href','javascript:void(0)');
			}
		}else{
			$('#myHeader4').attr('href','javascript:showonlyone("newboxes4")');
            $('#myHeader5').attr('href','javascript:showonlyone("newboxes5")'); 
		}
				
	 }else{
		
		 event.preventDefault();
		 alert('Velg frakt alternativ');
		 $('#myHeader4').attr('href','javascript:void(0)'); 
		 $('#myHeader5').attr('href','javascript:void(0)'); 
	 }


	 
});

$('#postal_ship').keydown(function(){
	$('#myHeader3').attr('href','javascript:void(0);');
	$('#myHeader4').attr('href','javascript:void(0);');
	$('#myHeader5').attr('href','javascript:void(0);');
});

var pprice = 0;
var pcalorie = 0;
var pcarbs = 0;
var pprotein = 0;
var pfat = 0;
$('#protein_portion').change(function(){
	
	if($(this).val() == 80){
		 if($('#protein').val() != ''){
			 	 pprice = $('#protein option:selected').attr('data-80price');
				 pcalorie = $('#protein option:selected').attr('data-80calorie');
				 pcarbs = $('#protein option:selected').attr('data-80carbs');
				 pprotein = $('#protein option:selected').attr('data-80protein');
				 pfat = $('#protein option:selected').attr('data-80fat');
		 }else{
			 	 pprice = 0;
				 pcalorie = 0;
				 pcarbs = 0;
				 pprotein = 0;
				 pfat = 0;
			 
		 }	
	}else if($(this).val() == 100){
		if($('#protein').val() != ''){
				 pprice = $('#protein option:selected').attr('data-100price');
				 pcalorie = $('#protein option:selected').attr('data-100calorie');
				 pcarbs = $('#protein option:selected').attr('data-100carbs');
				 pprotein = $('#protein option:selected').attr('data-100protein');
				 pfat = $('#protein option:selected').attr('data-100fat');
		}else{
			 	 pprice = 0;
				 pcalorie = 0;
				 pcarbs = 0;
				 pprotein = 0;
				 pfat = 0;
			 
		 }		
		
	}else if($(this).val() == 120){
		if($('#protein').val() != ''){
				 pprice = $('#protein option:selected').attr('data-120price');
				 pcalorie = $('#protein option:selected').attr('data-120calorie');
				 pcarbs = $('#protein option:selected').attr('data-120carbs');
				 pprotein = $('#protein option:selected').attr('data-120protein');
				 pfat = $('#protein option:selected').attr('data-120fat');
		}else{
			 	 pprice = 0;
				 pcalorie = 0;
				 pcarbs = 0;
				 pprotein = 0;
				 pfat = 0;
			 
		 }		
		
	}else if($(this).val() == 150){
		if($('#protein').val() != ''){
				 pprice = $('#protein option:selected').attr('data-150price');
				 pcalorie = $('#protein option:selected').attr('data-150calorie');
				 pcarbs = $('#protein option:selected').attr('data-150carbs');
				 pprotein = $('#protein option:selected').attr('data-150protein');
				 pfat = $('#protein option:selected').attr('data-150fat');
		}else{
			 	 pprice = 0;
				 pcalorie = 0;
				 pcarbs = 0;
				 pprotein = 0;
				 pfat = 0;
			 
		 }	
		
	}else if($(this).val() == 180){
		if($('#protein').val() != ''){
				 pprice = $('#protein option:selected').attr('data-180price');
				 pcalorie = $('#protein option:selected').attr('data-180calorie');
				 pcarbs = $('#protein option:selected').attr('data-180carbs');
				 pprotein = $('#protein option:selected').attr('data-180protein');
				 pfat = $('#protein option:selected').attr('data-180fat');
		}else{
			 	 pprice = 0;
				 pcalorie = 0;
				 pcarbs = 0;
				 pprotein = 0;
				 pfat = 0;
			 
		 }	
		
	}else if($(this).val() == 200){
		if($('#protein').val() != ''){
				 pprice = $('#protein option:selected').attr('data-200price');
				 pcalorie = $('#protein option:selected').attr('data-200calorie');
				 pcarbs = $('#protein option:selected').attr('data-200carbs');
				 pprotein = $('#protein option:selected').attr('data-200protein');
				 pfat = $('#protein option:selected').attr('data-200fat');
				
		}else{
			 	 pprice = 0;
				 pcalorie = 0;
				 pcarbs = 0;
				 pprotein = 0;
				 pfat = 0;
			 
		 }
	}else if($(this).val() == 250){
		if($('#protein').val() != ''){
				 pprice = $('#protein option:selected').attr('data-250price');
				 pcalorie = $('#protein option:selected').attr('data-250calorie');
				 pcarbs = $('#protein option:selected').attr('data-250carbs');
				 pprotein = $('#protein option:selected').attr('data-250protein');
				 pfat = $('#protein option:selected').attr('data-250fat');
		}else{
			 	 pprice = 0;
				 pcalorie = 0;
				 pcarbs = 0;
				 pprotein = 0;
				 pfat = 0;
			 
		 }	
		
	}
	else{
		         pprice = 0;
				 pcalorie = 0;
				 pcarbs = 0;
				 pprotein = 0;
				 pfat = 0;
	}
	$('#total_price_protein').val(pprice);
	$('#total_calorie_protein').val(pcalorie);
	$('#total_carb_protein').val(pcarbs);
	$('#total_protein_protein').val(pprotein);
	$('#total_fat_protein').val(pfat);
	var calorie1 = $('#total_calorie_protein').val();
	var calorie2 = $('#total_calorie_carb').val();
	var calorie3 = $('#total_calorie_vegetable').val();
	var calorie4 = $('#total_calorie_fat_almond').val(); 
	var calorie5 = $('#total_calorie_sauce').val();
	var calorie6 = $('#total_calorie_fat_avocado').val();
	var calorie = (parseFloat(calorie1) + parseFloat(calorie2) + parseFloat(calorie3) + parseFloat(calorie4) + parseFloat(calorie5) + parseFloat(calorie6)).toFixed(2);
	$('#cal_custom').html(calorie);
	
	var fat1 = $('#total_fat_protein').val();
	var fat2 = $('#total_fat_carb').val();
	var fat3 = $('#total_fat_vegetable').val();
	var fat4 = $('#total_fat_fat_almond').val(); 
	var fat5 = $('#total_fat_sauce').val();
	var fat6 = $('#total_fat_fat_avocado').val();
	var fat = (parseFloat(fat1) + parseFloat(fat2) + parseFloat(fat3) + parseFloat(fat4) + parseFloat(fat5) + parseFloat(fat6)).toFixed(2);
	$('#fat_custom').html(fat);
	
	var carb1 = $('#total_carb_protein').val();
	var carb2 = $('#total_carb_carb').val();
	var carb3 = $('#total_carb_vegetable').val();
	var carb4 = $('#total_carb_fat_almond').val(); 
	var carb5 = $('#total_carb_sauce').val();
	var carb6 = $('#total_carb_fat_avocado').val();
	var carb = (parseFloat(carb1) + parseFloat(carb2) + parseFloat(carb3) + parseFloat(carb4) + parseFloat(carb5) + parseFloat(carb6)).toFixed(2);
	$('#carbs_custom').html(carb);
	
	var protein1 = $('#total_protein_protein').val();
	var protein2 = $('#total_protein_carb').val();
	var protein3 = $('#total_protein_vegetable').val();
	var protein4 = $('#total_protein_fat_almond').val(); 
	var protein5 = $('#total_protein_sauce').val();
	var protein6 = $('#total_protein_fat_avocado').val();

	var protein = (parseFloat(protein1) + parseFloat(protein2) + parseFloat(protein3) + parseFloat(protein4) + parseFloat(protein5) + parseFloat(protein6)).toFixed(2);
	$('#protein_custom').html(protein);
	
	var price = (parseFloat($('#total_price_protein').val()) + parseFloat($('#total_price_carb').val()) + parseFloat($('#total_price_vegetable').val()) + parseFloat($('#total_price_fat_almond').val()) + parseFloat($('#total_price_sauce').val()) + parseFloat($('#total_price_fat_avocado').val())).toFixed(2);
	$('#customOptionalPrice').html(price);
	var grandPrice = (parseFloat(price) + 39).toFixed(2);
	$('#grandPrice').html(grandPrice*$('#customQty').val());
	$('#option_p').val(price);
	$('#real_p').val(grandPrice*$('#customQty').val());
	//$('#cal_custom').html(parseFloat($('#total_calorie_protein').val())+ parseFloat($('#total_calorie_carb').val()) + parseFloat($('#total_calorie_vegetable').val()) + parseFloat($('#total_calorie_fat').val()) + parseFloat($('#total_calorie_sauce').val()));
});


$('#protein').change(function(){
	
	if($(this).val() != ''){
	if($('#protein_portion option:selected').val() == 80){
		 pprice = $('#protein option:selected').attr('data-80price');
		 pcalorie = $('#protein option:selected').attr('data-80calorie');
		 pcarbs = $('#protein option:selected').attr('data-80carbs');
		 pprotein = $('#protein option:selected').attr('data-80protein');
		 pfat = $('#protein option:selected').attr('data-80fat');
		
		
	}else if($('#protein_portion option:selected').val() == 100){
		
				 pprice = $('#protein option:selected').attr('data-100price');
				 pcalorie = $('#protein option:selected').attr('data-100calorie');
				 pcarbs = $('#protein option:selected').attr('data-100carbs');
				 pprotein = $('#protein option:selected').attr('data-100protein');
				 pfat = $('#protein option:selected').attr('data-100fat');
				
		
	}else if($('#protein_portion option:selected').val() == 120){
		
				 pprice = $('#protein option:selected').attr('data-120price');
				 pcalorie = $('#protein option:selected').attr('data-120calorie');
				 pcarbs = $('#protein option:selected').attr('data-120carbs');
				 pprotein = $('#protein option:selected').attr('data-120protein');
				 pfat = $('#protein option:selected').attr('data-120fat');
				
		
	}else if($('#protein_portion option:selected').val() == 150){
		
				 pprice = $('#protein option:selected').attr('data-150price');
				 pcalorie = $('#protein option:selected').attr('data-150calorie');
				 pcarbs = $('#protein option:selected').attr('data-150carbs');
				 pprotein = $('#protein option:selected').attr('data-150protein');
				 pfat = $('#protein option:selected').attr('data-150fat');
				
		
	}else if($('#protein_portion option:selected').val() == 180){
		
				 pprice = $('#protein option:selected').attr('data-180price');
				 pcalorie = $('#protein option:selected').attr('data-180calorie');
				 pcarbs = $('#protein option:selected').attr('data-180carbs');
				 pprotein = $('#protein option:selected').attr('data-180protein');
				 pfat = $('#protein option:selected').attr('data-180fat');
				
		
	}else if($('#protein_portion option:selected').val() == 200){
		
				 pprice = $('#protein option:selected').attr('data-200price');
				 pcalorie = $('#protein option:selected').attr('data-200calorie');
				 pcarbs = $('#protein option:selected').attr('data-200carbs');
				 pprotein = $('#protein option:selected').attr('data-200protein');
				 pfat = $('#protein option:selected').attr('data-200fat');
				
		
	}else if($('#protein_portion option:selected').val() == 250){
		
				 pprice = $('#protein option:selected').attr('data-250price');
				 pcalorie = $('#protein option:selected').attr('data-250calorie');
				 pcarbs = $('#protein option:selected').attr('data-250carbs');
				 pprotein = $('#protein option:selected').attr('data-250protein');
				 pfat = $('#protein option:selected').attr('data-250fat');
				
		
	}else{
		         pprice = 0;
				 pcalorie = 0;
				 pcarbs = 0;
				 pprotein = 0;
				 pfat = 0;
	}
	}else{
				 pprice = 0;
				 pcalorie = 0;
				 pcarbs = 0;
				 pprotein = 0;
				 pfat = 0;
	}
	$('#total_price_protein').val(pprice);
	$('#total_calorie_protein').val(pcalorie);
	$('#total_carb_protein').val(pcarbs);
	$('#total_protein_protein').val(pprotein);
	$('#total_fat_protein').val(pfat);
	var calorie1 = $('#total_calorie_protein').val();
	var calorie2 = $('#total_calorie_carb').val();
	var calorie3 = $('#total_calorie_vegetable').val();
	var calorie4 = $('#total_calorie_fat_almond').val(); 
	var calorie5 = $('#total_calorie_sauce').val();
	var calorie6 = $('#total_calorie_fat_avocado').val();
	var calorie = (parseFloat(calorie1) + parseFloat(calorie2) + parseFloat(calorie3) + parseFloat(calorie4) + parseFloat(calorie5) + parseFloat(calorie6)).toFixed(2);
	$('#cal_custom').html(calorie);
	
	var fat1 = $('#total_fat_protein').val();
	var fat2 = $('#total_fat_carb').val();
	var fat3 = $('#total_fat_vegetable').val();
	var fat4 = $('#total_fat_fat_almond').val(); 
	var fat5 = $('#total_fat_sauce').val();
	var fat6 = $('#total_fat_fat_avocado').val();
	var fat = (parseFloat(fat1) + parseFloat(fat2) + parseFloat(fat3) + parseFloat(fat4) + parseFloat(fat5) + parseFloat(fat6)).toFixed(2);
	$('#fat_custom').html(fat);
	
	var carb1 = $('#total_carb_protein').val();
	var carb2 = $('#total_carb_carb').val();
	var carb3 = $('#total_carb_vegetable').val();
	var carb4 = $('#total_carb_fat_almond').val(); 
	var carb5 = $('#total_carb_sauce').val();
	var carb6 = $('#total_carb_fat_avocado').val();
	var carb = (parseFloat(carb1) + parseFloat(carb2) + parseFloat(carb3) + parseFloat(carb4) + parseFloat(carb5) + parseFloat(carb6)).toFixed(2);
	$('#carbs_custom').html(carb);
	
	var protein1 = $('#total_protein_protein').val();
	var protein2 = $('#total_protein_carb').val();
	var protein3 = $('#total_protein_vegetable').val();
	var protein4 = $('#total_protein_fat_almond').val(); 
	var protein5 = $('#total_protein_sauce').val();
	var protein6 = $('#total_protein_fat_avocado').val();
	var protein = (parseFloat(protein1) + parseFloat(protein2) + parseFloat(protein3) + parseFloat(protein4) + parseFloat(protein5) + parseFloat(protein6)).toFixed(2);
	$('#protein_custom').html(protein);
	
	var price = (parseFloat($('#total_price_protein').val()) + parseFloat($('#total_price_carb').val()) + parseFloat($('#total_price_vegetable').val()) + parseFloat($('#total_price_fat_almond').val()) + parseFloat($('#total_price_sauce').val()) + parseFloat($('#total_price_fat_avocado').val())).toFixed(2);
	$('#customOptionalPrice').html(price);
	var grandPrice = (parseFloat(price) + 39).toFixed(2);
	$('#grandPrice').html(grandPrice*$('#customQty').val());
	$('#option_p').val(price);
	$('#real_p').val(grandPrice*$('#customQty').val());
	//$('#cal_custom').html(parseFloat($('#total_calorie_protein').val())+ parseFloat($('#total_calorie_carb').val()) + parseFloat($('#total_calorie_vegetable').val()) + parseFloat($('#total_calorie_fat').val()) + parseFloat($('#total_calorie_sauce').val()));
});




var cprice = 0;
var ccalorie = 0;
var ccarbs = 0;
var cprotein = 0;
var cfat = 0;
$('#carb_portion').change(function(){
	
   if($(this).val() == 50){
		 if($('#carb').val() != ''){
				 cprice = $('#carb option:selected').attr('data-50price');
				 ccalorie = $('#carb option:selected').attr('data-50calorie');
				 ccarbs = $('#carb option:selected').attr('data-50carbs');
				 cprotein = $('#carb option:selected').attr('data-50protein');
				 cfat = $('#carb option:selected').attr('data-50fat'); 
		 }else{
			 	 cprice = 0;
				 ccalorie = 0; 
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
		 }

		
		
	}else if($(this).val() == 80){
		if($('#carb').val() != ''){
		 cprice = $('#carb option:selected').attr('data-80price');
		 ccalorie = $('#carb option:selected').attr('data-80calorie');
		 ccarbs = $('#carb option:selected').attr('data-80carbs');
		 cprotein = $('#carb option:selected').attr('data-80protein');
		 cfat = $('#carb option:selected').attr('data-80fat');
		}else{
			 	 cprice = 0;
				 ccalorie = 0; 
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
		 }
		
	}else if($(this).val() == 100){
		if($('#carb').val() != ''){
				 cprice = $('#carb option:selected').attr('data-100price');
				 ccalorie = $('#carb option:selected').attr('data-100calorie');
				 ccarbs = $('#carb option:selected').attr('data-100carbs');
				 cprotein = $('#carb option:selected').attr('data-100protein');
				 cfat = $('#carb option:selected').attr('data-100fat');
				
		}else{
			 	 cprice = 0;
				 ccalorie = 0; 
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
		 }
	}else if($(this).val() == 120){
		if($('#carb').val() != ''){
				 cprice = $('#carb option:selected').attr('data-120price');
				 ccalorie = $('#carb option:selected').attr('data-120calorie');
				 ccarbs = $('#carb option:selected').attr('data-120carbs');
				 cprotein = $('#carb option:selected').attr('data-120protein');
				 cfat = $('#carb option:selected').attr('data-120fat');
		}else{
			 	 cprice = 0;
				 ccalorie = 0; 
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
		 }	
		
	}else if($(this).val() == 150){
		if($('#carb').val() != ''){
				 cprice = $('#carb option:selected').attr('data-150price');
				 ccalorie = $('#carb option:selected').attr('data-150calorie');
				 ccarbs = $('#carb option:selected').attr('data-150carbs');
				 cprotein = $('#carb option:selected').attr('data-150protein');
				 cfat = $('#carb option:selected').attr('data-150fat');
		}else{
			 	 cprice = 0;
				 ccalorie = 0; 
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
		 }		
		
	}else if($(this).val() == 180){
		if($('#carb').val() != ''){
				 cprice = $('#carb option:selected').attr('data-180price');
				 ccalorie = $('#carb option:selected').attr('data-180calorie');
				 ccarbs = $('#carb option:selected').attr('data-180carbs');
				 cprotein = $('#carb option:selected').attr('data-180protein');
				 cfat = $('#carb option:selected').attr('data-180fat');
		}else{
			 	 cprice = 0;
				 ccalorie = 0; 
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
		 }	
		
	}else if($(this).val() == 200){
		if($('#carb').val() != ''){
				 cprice = $('#carb option:selected').attr('data-200price');
				 ccalorie = $('#carb option:selected').attr('data-200calorie');
				 ccarbs = $('#carb option:selected').attr('data-200carbs');
				 cprotein = $('#carb option:selected').attr('data-200protein');
				 cfat = $('#carb option:selected').attr('data-200fat');
		}else{
			 	 cprice = 0;
				 ccalorie = 0; 
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
		 }		
		
	}else if($(this).val() == 250){
		if($('#carb').val() != ''){
				 cprice = $('#carb option:selected').attr('data-250price');
				 ccalorie = $('#carb option:selected').attr('data-250calorie');
				 ccarbs = $('#carb option:selected').attr('data-250carbs');
				 cprotein = $('#carb option:selected').attr('data-250protein');
				 cfat = $('#carb option:selected').attr('data-250fat');
		}else{
			 	 cprice = 0;
				 ccalorie = 0; 
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
		 }	
		
	}else if($(this).val() == 300){
		if($('#carb').val() != ''){
				 cprice = $('#carb option:selected').attr('data-300price');
				 ccalorie = $('#carb option:selected').attr('data-300calorie'); 
				 ccarbs = $('#carb option:selected').attr('data-300carbs');
				 cprotein = $('#carb option:selected').attr('data-300protein');
				 cfat = $('#carb option:selected').attr('data-300fat');
		}else{
			 	 cprice = 0;
				 ccalorie = 0; 
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
		 }	
		
	}else{
		
		         cprice = 0;
				 ccalorie = 0; 
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
	}
	$('#total_price_carb').val(cprice);
	$('#total_calorie_carb').val(ccalorie);
	$('#total_carb_carb').val(ccarbs);
	$('#total_protein_carb').val(cprotein);
	$('#total_fat_carb').val(cfat);
	var calorie1 = $('#total_calorie_protein').val();
	var calorie2 = $('#total_calorie_carb').val();
	var calorie3 = $('#total_calorie_vegetable').val();
	var calorie4 = $('#total_calorie_fat_almond').val(); 
	var calorie5 = $('#total_calorie_sauce').val();
	var calorie6 = $('#total_calorie_fat_avocado').val();
	var calorie = (parseFloat(calorie1) + parseFloat(calorie2) + parseFloat(calorie3) + parseFloat(calorie4) + parseFloat(calorie5) + parseFloat(calorie6)).toFixed(2);
	$('#cal_custom').html(calorie);
	
	var fat1 = $('#total_fat_protein').val();
	var fat2 = $('#total_fat_carb').val();
	var fat3 = $('#total_fat_vegetable').val();
	var fat4 = $('#total_fat_fat_almond').val(); 
	var fat5 = $('#total_fat_sauce').val();
	var fat6 = $('#total_fat_fat_avocado').val();
	var fat = (parseFloat(fat1) + parseFloat(fat2) + parseFloat(fat3) + parseFloat(fat4) + parseFloat(fat5) + parseFloat(fat6)).toFixed(2);
	$('#fat_custom').html(fat);
	
	var carb1 = $('#total_carb_protein').val();
	var carb2 = $('#total_carb_carb').val();
	var carb3 = $('#total_carb_vegetable').val();
	var carb4 = $('#total_carb_fat_almond').val(); 
	var carb5 = $('#total_carb_sauce').val();
	var carb6 = $('#total_carb_fat_avocado').val();
	var carb = (parseFloat(carb1) + parseFloat(carb2) + parseFloat(carb3) + parseFloat(carb4) + parseFloat(carb5) + parseFloat(carb6)).toFixed(2);
	$('#carbs_custom').html(carb);
	
	var protein1 = $('#total_protein_protein').val();
	var protein2 = $('#total_protein_carb').val();
	var protein3 = $('#total_protein_vegetable').val();
	var protein4 = $('#total_protein_fat_almond').val(); 
	var protein5 = $('#total_protein_sauce').val();
	var protein6 = $('#total_protein_fat_avocado').val();
	var protein = (parseFloat(protein1) + parseFloat(protein2) + parseFloat(protein3) + parseFloat(protein4) + parseFloat(protein5) + parseFloat(protein6)).toFixed(2);
	$('#protein_custom').html(protein);
	
	var price = (parseFloat($('#total_price_protein').val()) + parseFloat($('#total_price_carb').val()) + parseFloat($('#total_price_vegetable').val()) + parseFloat($('#total_price_fat_almond').val()) + parseFloat($('#total_price_sauce').val()) + parseFloat($('#total_price_fat_avocado').val())).toFixed(2);
	$('#customOptionalPrice').html(price);
	var grandPrice = (parseFloat(price) + 39).toFixed(2);
	$('#grandPrice').html(grandPrice*$('#customQty').val());
	$('#option_p').val(price);
	$('#real_p').val(grandPrice*$('#customQty').val());
//$('#cal_custom').html(parseFloat($('#total_calorie_protein').val())+ parseFloat($('#total_calorie_carb').val()) + parseFloat($('#total_calorie_vegetable').val()) + parseFloat($('#total_calorie_fat').val()) + parseFloat($('#total_calorie_sauce').val()));
});


$('#carb').change(function(){
	
	if($(this).val() != '' && $(this).val() != 'no_carb'){
			
			$('#carb_portion').prev().show();
			$('#carb_portion').show();
	if($('#carb_portion option:selected').val() == 50){
		 cprice = $('#carb option:selected').attr('data-50price');
		 ccalorie = $('#carb option:selected').attr('data-50calorie');
		 ccarbs = $('#carb option:selected').attr('data-50carbs');
		 cprotein = $('#carb option:selected').attr('data-50protein');
		 cfat = $('#carb option:selected').attr('data-50fat');
		
		
	}else if($('#carb_portion option:selected').val() == 80){
		 cprice = $('#carb option:selected').attr('data-80price');
		 ccalorie = $('#carb option:selected').attr('data-80calorie');
		 ccarbs = $('#carb option:selected').attr('data-80carbs');
		 cprotein = $('#carb option:selected').attr('data-80protein');
		 cfat = $('#carb option:selected').attr('data-80fat');
		
		
	}else if($('#carb_portion option:selected').val() == 100){
		
				 cprice = $('#carb option:selected').attr('data-100price');
				 ccalorie = $('#carb option:selected').attr('data-100calorie');
				 ccarbs = $('#carb option:selected').attr('data-100carbs');
				 cprotein = $('#carb option:selected').attr('data-100protein');
				 cfat = $('#carb option:selected').attr('data-100fat');
				
		
	}else if($('#carb_portion option:selected').val() == 120){
		
				 cprice = $('#carb option:selected').attr('data-120price');
				 ccalorie = $('#carb option:selected').attr('data-120calorie');
				 ccarbs = $('#carb option:selected').attr('data-120carbs');
				 cprotein = $('#carb option:selected').attr('data-120protein');
				 cfat = $('#carb option:selected').attr('data-120fat');
				
		
	}else if($('#carb_portion option:selected').val() == 150){
		
				 cprice = $('#carb option:selected').attr('data-150price');
				 ccalorie = $('#carb option:selected').attr('data-150calorie');
				 ccarbs = $('#carb option:selected').attr('data-150carbs');
				 cprotein = $('#carb option:selected').attr('data-150protein');
				 cfat = $('#carb option:selected').attr('data-150fat');
				
		
	}else if($('#carb_portion option:selected').val() == 180){
		
				 cprice = $('#carb option:selected').attr('data-180price');
				 ccalorie = $('#carb option:selected').attr('data-180calorie');
				 ccarbs = $('#carb option:selected').attr('data-180carbs');
				 cprotein = $('#carb option:selected').attr('data-180protein');
				 cfat = $('#carb option:selected').attr('data-180fat');
				
		
	}else if($('#carb_portion option:selected').val() == 200){
		
				 cprice = $('#carb option:selected').attr('data-200price');
				 ccalorie = $('#carb option:selected').attr('data-200calorie');
				 ccarbs = $('#carb option:selected').attr('data-200carbs');
				 cprotein = $('#carb option:selected').attr('data-200protein');
				 cfat = $('#carb option:selected').attr('data-200fat');
				
		
	}else if($('#carb_portion option:selected').val() == 250){
		
				 cprice = $('#carb option:selected').attr('data-250price');
				 ccalorie = $('#carb option:selected').attr('data-250calorie');
				 ccarbs = $('#carb option:selected').attr('data-250carbs');
				 cprotein = $('#carb option:selected').attr('data-250protein');
				 cfat = $('#carb option:selected').attr('data-250fat');
				
		
	}else if($('#carb_portion option:selected').val() == 300){
		
				 cprice = $('#carb option:selected').attr('data-300price');
				 ccalorie = $('#carb option:selected').attr('data-300calorie');
				 ccarbs = $('#carb option:selected').attr('data-300carbs');
				 cprotein = $('#carb option:selected').attr('data-300protein');
				 cfat = $('#carb option:selected').attr('data-300fat');
				
		
	}else{
		         cprice = 0;
				 ccalorie = 0; 
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
	}
	}else{
		if($(this).val() == 'no_carb'){
			$('#carb_portion').val('no_carb');
			$('#carb_portion').prev().hide();
			$('#carb_portion').hide();
				 cprice = 0;
				 ccalorie = 0; 
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
			
		}else{
			$('#carb_portion').prev().show();
			$('#carb_portion').show();
				 cprice = 0;
				 ccalorie = 0;  
				 ccarbs = 0;
				 cprotein = 0;
				 cfat = 0;
		}

	}
	$('#total_price_carb').val(cprice);
	$('#total_calorie_carb').val(ccalorie);
	$('#total_carb_carb').val(ccarbs);
	$('#total_protein_carb').val(cprotein);
	$('#total_fat_carb').val(cfat);
	var calorie1 = $('#total_calorie_protein').val();
	var calorie2 = $('#total_calorie_carb').val();
	var calorie3 = $('#total_calorie_vegetable').val();
	var calorie4 = $('#total_calorie_fat_almond').val(); 
	var calorie5 = $('#total_calorie_sauce').val();
	var calorie6 = $('#total_calorie_fat_avocado').val();
	var calorie = (parseFloat(calorie1) + parseFloat(calorie2) + parseFloat(calorie3) + parseFloat(calorie4) + parseFloat(calorie5) + parseFloat(calorie6)).toFixed(2);
	$('#cal_custom').html(calorie);
	
	var fat1 = $('#total_fat_protein').val();
	var fat2 = $('#total_fat_carb').val();
	var fat3 = $('#total_fat_vegetable').val();
	var fat4 = $('#total_fat_fat_almond').val(); 
	var fat5 = $('#total_fat_sauce').val();
	var fat6 = $('#total_fat_fat_avocado').val();
	var fat = (parseFloat(fat1) + parseFloat(fat2) + parseFloat(fat3) + parseFloat(fat4) + parseFloat(fat5) + parseFloat(fat6)).toFixed(2);
	$('#fat_custom').html(fat);
	
	var carb1 = $('#total_carb_protein').val();
	var carb2 = $('#total_carb_carb').val();
	var carb3 = $('#total_carb_vegetable').val();
	var carb4 = $('#total_carb_fat_almond').val(); 
	var carb5 = $('#total_carb_sauce').val();
	var carb6 = $('#total_carb_fat_avocado').val();
	var carb = (parseFloat(carb1) + parseFloat(carb2) + parseFloat(carb3) + parseFloat(carb4) + parseFloat(carb5) + parseFloat(carb6)).toFixed(2);
	$('#carbs_custom').html(carb);
	
	var protein1 = $('#total_protein_protein').val();
	var protein2 = $('#total_protein_carb').val();
	var protein3 = $('#total_protein_vegetable').val();
	var protein4 = $('#total_protein_fat_almond').val(); 
	var protein5 = $('#total_protein_sauce').val();
	var protein6 = $('#total_protein_fat_avocado').val();
	var protein = (parseFloat(protein1) + parseFloat(protein2) + parseFloat(protein3) + parseFloat(protein4) + parseFloat(protein5) + parseFloat(protein6)).toFixed(2);
	$('#protein_custom').html(protein);
	
	var price = (parseFloat($('#total_price_protein').val()) + parseFloat($('#total_price_carb').val()) + parseFloat($('#total_price_vegetable').val()) + parseFloat($('#total_price_fat_almond').val()) + parseFloat($('#total_price_sauce').val()) + parseFloat($('#total_price_fat_avocado').val())).toFixed(2);
	$('#customOptionalPrice').html(price);
	var grandPrice = (parseFloat(price) + 39).toFixed(2);
	$('#grandPrice').html(grandPrice*$('#customQty').val());
	$('#option_p').val(price);
	$('#real_p').val(grandPrice*$('#customQty').val());
});



var vprice = 0;
var vcalorie = 0;
var vcarbs = 0;
var vprotein = 0;
var vfat = 0;
$('#vegetable_portion').change(function(){
	
   if($(this).val() == 50){
		if($('#vegetable').val() != ''){
			 vprice = $('#vegetable option:selected').attr('data-50price');
			 vcalorie = $('#vegetable option:selected').attr('data-50calorie');
			 vcarbs = $('#vegetable option:selected').attr('data-50carbs');
			 vprotein = $('#vegetable option:selected').attr('data-50protein');
			 vfat = $('#vegetable option:selected').attr('data-50fat');	
		}else{
				 vprice = 0;
				 vcalorie = 0; 
				 vcarbs = 0;
				 vprotein = 0;
				 vfat = 0;
		}

	}else if($(this).val() == 100){
		if($('#vegetable').val() != ''){
				 vprice = $('#vegetable option:selected').attr('data-100price');
				 vcalorie = $('#vegetable option:selected').attr('data-100calorie');
				 vcarbs = $('#vegetable option:selected').attr('data-100carbs');
				 vprotein = $('#vegetable option:selected').attr('data-100protein');
				 vfat = $('#vegetable option:selected').attr('data-100fat');
		}else{
				 vprice = 0;
				 vcalorie = 0; 
				 vcarbs = 0;
				 vprotein = 0;
				 vfat = 0;
		}	
		
	}else if($(this).val() == 150){
		if($('#vegetable').val() != ''){
				 vprice = $('#vegetable option:selected').attr('data-150price');
				 vcalorie = $('#vegetable option:selected').attr('data-150calorie');
				 vcarbs = $('#vegetable option:selected').attr('data-150carbs');
				 vprotein = $('#vegetable option:selected').attr('data-150protein');
				 vfat = $('#vegetable option:selected').attr('data-150fat');
		}else{
				 vprice = 0;
				 vcalorie = 0; 
				 vcarbs = 0;
				 vprotein = 0;
				 vfat = 0;
		}		
		
	}else if($(this).val() == 200){
		if($('#vegetable').val() != ''){
				 vprice = $('#vegetable option:selected').attr('data-200price');
				 vcalorie = $('#vegetable option:selected').attr('data-200calorie');
				 vcarbs = $('#vegetable option:selected').attr('data-200carbs');
				 vprotein = $('#vegetable option:selected').attr('data-200protein');
				 vfat = $('#vegetable option:selected').attr('data-200fat');
		}else{
				 vprice = 0;
				 vcalorie = 0; 
				 vcarbs = 0;
				 vprotein = 0;
				 vfat = 0;
		}		
		
	}else if($(this).val() == 250){
		if($('#vegetable').val() != ''){
				 vprice = $('#vegetable option:selected').attr('data-250price');
				 vcalorie = $('#vegetable option:selected').attr('data-250calorie');
				 vcarbs = $('#vegetable option:selected').attr('data-250carbs');
				 vprotein = $('#vegetable option:selected').attr('data-250protein');
				 vfat = $('#vegetable option:selected').attr('data-250fat');
		}else{
				 vprice = 0;
				 vcalorie = 0; 
				 vcarbs = 0;
				 vprotein = 0;
				 vfat = 0;
		}	
		
	}else{
		         vprice = 0;
				 vcalorie = 0; 
				 vcarbs = 0;
				 vprotein = 0;
				 vfat = 0;
	}
	$('#total_price_vegetable').val(vprice);
	$('#total_calorie_vegetable').val(vcalorie);
	$('#total_carb_vegetable').val(vcarbs);
	$('#total_protein_vegetable').val(vprotein);
	$('#total_fat_vegetable').val(vfat);
	var calorie1 = $('#total_calorie_protein').val();
	var calorie2 = $('#total_calorie_carb').val();
	var calorie3 = $('#total_calorie_vegetable').val();
	var calorie4 = $('#total_calorie_fat_almond').val(); 
	var calorie5 = $('#total_calorie_sauce').val();
	var calorie6 = $('#total_calorie_fat_avocado').val();
	var calorie = (parseFloat(calorie1) + parseFloat(calorie2) + parseFloat(calorie3) + parseFloat(calorie4) + parseFloat(calorie5) + parseFloat(calorie6)).toFixed(2);
	$('#cal_custom').html(calorie);
	
	var fat1 = $('#total_fat_protein').val();
	var fat2 = $('#total_fat_carb').val();
	var fat3 = $('#total_fat_vegetable').val();
	var fat4 = $('#total_fat_fat_almond').val(); 
	var fat5 = $('#total_fat_sauce').val();
	var fat6 = $('#total_fat_fat_avocado').val();
	var fat = (parseFloat(fat1) + parseFloat(fat2) + parseFloat(fat3) + parseFloat(fat4) + parseFloat(fat5) + parseFloat(fat6)).toFixed(2);
	$('#fat_custom').html(fat);
	
	var carb1 = $('#total_carb_protein').val();
	var carb2 = $('#total_carb_carb').val();
	var carb3 = $('#total_carb_vegetable').val();
	var carb4 = $('#total_carb_fat_almond').val(); 
	var carb5 = $('#total_carb_sauce').val();
	var carb6 = $('#total_carb_fat_avocado').val();
	var carb = (parseFloat(carb1) + parseFloat(carb2) + parseFloat(carb3) + parseFloat(carb4) + parseFloat(carb5) + parseFloat(carb6)).toFixed(2);
	$('#carbs_custom').html(carb);
	
	var protein1 = $('#total_protein_protein').val();
	var protein2 = $('#total_protein_carb').val();
	var protein3 = $('#total_protein_vegetable').val();
	var protein4 = $('#total_protein_fat_almond').val(); 
	var protein5 = $('#total_protein_sauce').val();
	var protein6 = $('#total_protein_fat_avocado').val();
	var protein = (parseFloat(protein1) + parseFloat(protein2) + parseFloat(protein3) + parseFloat(protein4) + parseFloat(protein5) + parseFloat(protein6)).toFixed(2);
	$('#protein_custom').html(protein);
	
	var price = (parseFloat($('#total_price_protein').val()) + parseFloat($('#total_price_carb').val()) + parseFloat($('#total_price_vegetable').val()) + parseFloat($('#total_price_fat_almond').val()) + parseFloat($('#total_price_sauce').val()) + parseFloat($('#total_price_fat_avocado').val())).toFixed(2);
	$('#customOptionalPrice').html(price);
	var grandPrice = (parseFloat(price) + 39).toFixed(2);
	$('#grandPrice').html(grandPrice*$('#customQty').val());
	$('#option_p').val(price);
	$('#real_p').val(grandPrice*$('#customQty').val());
	});


$('#vegetable').change(function(){
	
	if($(this).val() != '' && $(this).val() != 'no_veg'){
			$('#vegetable_portion').prev().show();
			$('#vegetable_portion').show();
	if($('#vegetable_portion option:selected').val() == 50){
		 vprice = $('#vegetable option:selected').attr('data-50price');
		 vcalorie = $('#vegetable option:selected').attr('data-50calorie');
		 vcarbs = $('#vegetable option:selected').attr('data-50carbs');
		 vprotein = $('#vegetable option:selected').attr('data-50protein');
		 vfat = $('#vegetable option:selected').attr('data-50fat');
		
		
	}else if($('#vegetable_portion option:selected').val() == 80){
		 vprice = $('#vegetable option:selected').attr('data-80price');
		 vcalorie = $('#vegetable option:selected').attr('data-80calorie');
		 vcarbs = $('#vegetable option:selected').attr('data-80carbs');
		 vprotein = $('#vegetable option:selected').attr('data-80protein');
		 vfat = $('#vegetable option:selected').attr('data-80fat');
		
		
	}else if($('#vegetable_portion option:selected').val() == 100){
		
				 vprice = $('#vegetable option:selected').attr('data-100price');
				 vcalorie = $('#vegetable option:selected').attr('data-100calorie');
				 vcarbs = $('#vegetable option:selected').attr('data-100carbs');
				 vprotein = $('#vegetable option:selected').attr('data-100protein');
				 vfat = $('#vegetable option:selected').attr('data-100fat');
				
		
	}else if($('#vegetable_portion option:selected').val() == 120){
		
				 vprice = $('#vegetable option:selected').attr('data-120price');
				 vcalorie = $('#vegetable option:selected').attr('data-120calorie');
				 vcarbs = $('#vegetable option:selected').attr('data-120carbs');
				 vprotein = $('#vegetable option:selected').attr('data-120protein');
				 vfat = $('#vegetable option:selected').attr('data-120fat');
				
		
	}else if($('#vegetable_portion option:selected').val() == 150){
		
				 vprice = $('#vegetable option:selected').attr('data-150price');
				 vcalorie = $('#vegetable option:selected').attr('data-150calorie');
				 vcarbs = $('#vegetable option:selected').attr('data-150carbs');
				 vprotein = $('#vegetable option:selected').attr('data-150protein');
				 vfat = $('#vegetable option:selected').attr('data-150fat');
				
		
	}else if($('#vegetable_portion option:selected').val() == 180){
		
				 vprice = $('#vegetable option:selected').attr('data-180price');
				 vcalorie = $('#vegetable option:selected').attr('data-180calorie');
				 vcarbs = $('#vegetable option:selected').attr('data-180carbs');
				 vprotein = $('#vegetable option:selected').attr('data-180protein');
				 vfat = $('#vegetable option:selected').attr('data-180fat');
				
		
	}else if($('#vegetable_portion option:selected').val() == 200){
		
				 vprice = $('#vegetable option:selected').attr('data-200price');
				 vcalorie = $('#vegetable option:selected').attr('data-200calorie');
				 vcarbs = $('#vegetable option:selected').attr('data-200carbs');
				 vprotein = $('#vegetable option:selected').attr('data-200protein');
				 vfat = $('#vegetable option:selected').attr('data-200fat');
				
		
	}else if($('#vegetable_portion option:selected').val() == 250){
		
				 vprice = $('#vegetable option:selected').attr('data-250price');
				 vcalorie = $('#vegetable option:selected').attr('data-250calorie');
				 vcarbs = $('#vegetable option:selected').attr('data-250carbs');
				 vprotein = $('#vegetable option:selected').attr('data-250protein');
				 vfat = $('#vegetable option:selected').attr('data-250fat');
				
		
	}else if($('#vegetable_portion option:selected').val() == 300){
		
				 vprice = $('#vegetable option:selected').attr('data-300price');
				 vcalorie = $('#vegetable option:selected').attr('data-300calorie');
				 vcarbs = $('#vegetable option:selected').attr('data-300carbs');
				 vprotein = $('#vegetable option:selected').attr('data-300protein');
				 vfat = $('#vegetable option:selected').attr('data-300fat');
				
		
	}else{
		         vprice = 0;
				 vcalorie = 0; 
				 vcarbs = 0;
				 vprotein = 0;
				 vfat = 0;
	}
	}else{
		if($(this).val() == 'no_veg'){
			$('#vegetable_portion').val('no_veg');
			$('#vegetable_portion').prev().hide();
			$('#vegetable_portion').hide();
				 vprice = 0;
				 vcalorie = 0; 
				 vcarbs = 0;
				 vprotein = 0;
				 vfat = 0;
			
		}else{
				 vprice = 0;
				 vcalorie = 0; 
				 vcarbs = 0;
				 vprotein = 0;
				 vfat = 0;
		}
	}
	$('#total_price_vegetable').val(vprice);
	$('#total_calorie_vegetable').val(vcalorie);
	$('#total_carb_vegetable').val(vcarbs);
	$('#total_protein_vegetable').val(vprotein);
	$('#total_fat_vegetable').val(vfat);
	var calorie1 = $('#total_calorie_protein').val();
	var calorie2 = $('#total_calorie_carb').val();
	var calorie3 = $('#total_calorie_vegetable').val();
	var calorie4 = $('#total_calorie_fat_almond').val(); 
	var calorie5 = $('#total_calorie_sauce').val();
	var calorie6 = $('#total_calorie_fat_avocado').val();
	var calorie = (parseFloat(calorie1) + parseFloat(calorie2) + parseFloat(calorie3) + parseFloat(calorie4) + parseFloat(calorie5) + parseFloat(calorie6)).toFixed(2);
	$('#cal_custom').html(calorie);
	
	var fat1 = $('#total_fat_protein').val();
	var fat2 = $('#total_fat_carb').val();
	var fat3 = $('#total_fat_vegetable').val();
	var fat4 = $('#total_fat_fat_almond').val(); 
	var fat5 = $('#total_fat_sauce').val();
	var fat6 = $('#total_fat_fat_avocado').val();
	var fat = (parseFloat(fat1) + parseFloat(fat2) + parseFloat(fat3) + parseFloat(fat4) + parseFloat(fat5) + parseFloat(fat6)).toFixed(2);
	$('#fat_custom').html(fat);
	
	var carb1 = $('#total_carb_protein').val();
	var carb2 = $('#total_carb_carb').val();
	var carb3 = $('#total_carb_vegetable').val();
	var carb4 = $('#total_carb_fat_almond').val(); 
	var carb5 = $('#total_carb_sauce').val();
	var carb6 = $('#total_carb_fat_avocado').val();
	var carb = (parseFloat(carb1) + parseFloat(carb2) + parseFloat(carb3) + parseFloat(carb4) + parseFloat(carb5) + parseFloat(carb6)).toFixed(2);
	$('#carbs_custom').html(carb);
	
	var protein1 = $('#total_protein_protein').val();
	var protein2 = $('#total_protein_carb').val();
	var protein3 = $('#total_protein_vegetable').val();
	var protein4 = $('#total_protein_fat_almond').val(); 
	var protein5 = $('#total_protein_sauce').val();
	var protein6 = $('#total_protein_fat_avocado').val();
	var protein = (parseFloat(protein1) + parseFloat(protein2) + parseFloat(protein3) + parseFloat(protein4) + parseFloat(protein5) + parseFloat(protein6)).toFixed(2);
	$('#protein_custom').html(protein);
	
	var price = (parseFloat($('#total_price_protein').val()) + parseFloat($('#total_price_carb').val()) + parseFloat($('#total_price_vegetable').val()) + parseFloat($('#total_price_fat_almond').val()) + parseFloat($('#total_price_sauce').val()) + parseFloat($('#total_price_fat_avocado').val())).toFixed(2);
	$('#customOptionalPrice').html(price);
	var grandPrice = (parseFloat(price) + 39).toFixed(2);
	$('#grandPrice').html(grandPrice*$('#customQty').val());
	$('#option_p').val(price);
	$('#real_p').val(grandPrice*$('#customQty').val());

});





var f1price = 0;
var f1calorie = 0;
var f1carbs = 0;
var f1protein = 0;
var f1fat = 0;

$('#almond').click(function(){

	if($(this).is(':checked')){
		f1price = $(this).data('price');
		f1calorie = $(this).data('calorie');
		f1carbs = $(this).data('carbs');
		f1protein = $(this).data('protein');
		f1fat = $(this).data('fat');
	}else{
		 f1price = 0;
		 f1calorie = 0;
		 f1carbs = 0;
		 f1protein = 0;
		 f1fat = 0;
	}
	
	$('#total_price_fat_almond').val(f1price);
	$('#total_calorie_fat_almond').val(f1calorie);
	$('#total_carb_fat_almond').val(f1carbs);
	$('#total_protein_fat_almond').val(f1protein);
	$('#total_fat_fat_almond').val(f1fat);
	var calorie1 = $('#total_calorie_protein').val();
	var calorie2 = $('#total_calorie_carb').val();
	var calorie3 = $('#total_calorie_vegetable').val();
	var calorie4 = $('#total_calorie_fat_almond').val(); 
	var calorie5 = $('#total_calorie_sauce').val();
	var calorie6 = $('#total_calorie_fat_avocado').val();
	var calorie = (parseFloat(calorie1) + parseFloat(calorie2) + parseFloat(calorie3) + parseFloat(calorie4) + parseFloat(calorie5) + parseFloat(calorie6)).toFixed(2);
	$('#cal_custom').html(calorie);
	
	var fat1 = $('#total_fat_protein').val();
	var fat2 = $('#total_fat_carb').val();
	var fat3 = $('#total_fat_vegetable').val();
	var fat4 = $('#total_fat_fat_almond').val(); 
	var fat5 = $('#total_fat_sauce').val();
	var fat6 = $('#total_fat_fat_avocado').val();
	var fat = (parseFloat(fat1) + parseFloat(fat2) + parseFloat(fat3) + parseFloat(fat4) + parseFloat(fat5) + parseFloat(fat6)).toFixed(2);
	$('#fat_custom').html(fat);
	
	var carb1 = $('#total_carb_protein').val();
	var carb2 = $('#total_carb_carb').val();
	var carb3 = $('#total_carb_vegetable').val();
	var carb4 = $('#total_carb_fat_almond').val(); 
	var carb5 = $('#total_carb_sauce').val();
	var carb6 = $('#total_carb_fat_avocado').val();
	var carb = (parseFloat(carb1) + parseFloat(carb2) + parseFloat(carb3) + parseFloat(carb4) + parseFloat(carb5) + parseFloat(carb6)).toFixed(2);
	$('#carbs_custom').html(carb);
	
	var protein1 = $('#total_protein_protein').val();
	var protein2 = $('#total_protein_carb').val();
	var protein3 = $('#total_protein_vegetable').val();
	var protein4 = $('#total_protein_fat_almond').val(); 
	var protein5 = $('#total_protein_sauce').val();
	var protein6 = $('#total_protein_fat_avocado').val();
	var protein = (parseFloat(protein1) + parseFloat(protein2) + parseFloat(protein3) + parseFloat(protein4) + parseFloat(protein5) + parseFloat(protein6)).toFixed(2);
	$('#protein_custom').html(protein);
	
	var price = (parseFloat($('#total_price_protein').val()) + parseFloat($('#total_price_carb').val()) + parseFloat($('#total_price_vegetable').val()) + parseFloat($('#total_price_fat_almond').val()) + parseFloat($('#total_price_sauce').val()) + parseFloat($('#total_price_fat_avocado').val())).toFixed(2);
	$('#customOptionalPrice').html(price);
	var grandPrice = (parseFloat(price) + 39).toFixed(2);
	$('#grandPrice').html(grandPrice*$('#customQty').val());
	$('#option_p').val(price);
	$('#real_p').val(grandPrice*$('#customQty').val());
	
	
});




var f2price = 0;
var f2calorie = 0;
var f2carbs = 0;
var f2protein = 0;
var f2fat = 0;

$('#avocado').click(function(){
	
	if($(this).is(':checked')){
		f2price = $(this).data('price');
		f2calorie = $(this).data('calorie');
		f2carbs = $(this).data('carbs');
		f2protein = $(this).data('protein');
		f2fat = $(this).data('fat');

	}else{
		 f2price = 0;
		 f2calorie = 0;
		 f2carbs = 0;
		 f2protein = 0;
		 f2fat = 0;
	}
	
	$('#total_price_fat_avocado').val(f2price);
	$('#total_calorie_fat_avocado').val(f2calorie);
	$('#total_carb_fat_avocado').val(f2carbs);
	$('#total_protein_fat_avocado').val(f2protein);
	$('#total_fat_fat_avocado').val(f2fat);
	var calorie1 = $('#total_calorie_protein').val();
	var calorie2 = $('#total_calorie_carb').val();
	var calorie3 = $('#total_calorie_vegetable').val();
	var calorie4 = $('#total_calorie_fat_almond').val(); 
	var calorie5 = $('#total_calorie_sauce').val();
	var calorie6 = $('#total_calorie_fat_avocado').val();
	var calorie = (parseFloat(calorie1) + parseFloat(calorie2) + parseFloat(calorie3) + parseFloat(calorie4) + parseFloat(calorie5) + parseFloat(calorie6)).toFixed(2);
	$('#cal_custom').html(calorie);
	
	var fat1 = $('#total_fat_protein').val();
	var fat2 = $('#total_fat_carb').val();
	var fat3 = $('#total_fat_vegetable').val();
	var fat4 = $('#total_fat_fat_almond').val(); 
	var fat5 = $('#total_fat_sauce').val();
	var fat6 = $('#total_fat_fat_avocado').val();
	var fat = (parseFloat(fat1) + parseFloat(fat2) + parseFloat(fat3) + parseFloat(fat4) + parseFloat(fat5) + parseFloat(fat6)).toFixed(2);
	$('#fat_custom').html(fat);
	
	var carb1 = $('#total_carb_protein').val();
	var carb2 = $('#total_carb_carb').val();
	var carb3 = $('#total_carb_vegetable').val();
	var carb4 = $('#total_carb_fat_almond').val(); 
	var carb5 = $('#total_carb_sauce').val();
	var carb6 = $('#total_carb_fat_avocado').val();
	var carb = (parseFloat(carb1) + parseFloat(carb2) + parseFloat(carb3) + parseFloat(carb4) + parseFloat(carb5) + parseFloat(carb6)).toFixed(2);
	$('#carbs_custom').html(carb);
	
	var protein1 = $('#total_protein_protein').val();
	var protein2 = $('#total_protein_carb').val();
	var protein3 = $('#total_protein_vegetable').val();
	var protein4 = $('#total_protein_fat_almond').val(); 
	var protein5 = $('#total_protein_sauce').val();
	var protein6 = $('#total_protein_fat_avocado').val();
	var protein = (parseFloat(protein1) + parseFloat(protein2) + parseFloat(protein3) + parseFloat(protein4) + parseFloat(protein5) + parseFloat(protein6)).toFixed(2);
	$('#protein_custom').html(protein);
	
	var price = (parseFloat($('#total_price_protein').val()) + parseFloat($('#total_price_carb').val()) + parseFloat($('#total_price_vegetable').val()) + parseFloat($('#total_price_fat_almond').val()) + parseFloat($('#total_price_sauce').val()) + parseFloat($('#total_price_fat_avocado').val())).toFixed(2);
	$('#customOptionalPrice').html(price);
	var grandPrice = (parseFloat(price) + 39).toFixed(2);
	$('#grandPrice').html(grandPrice*$('#customQty').val());
	$('#option_p').val(price);
	$('#real_p').val(grandPrice*$('#customQty').val());
	
	
});






var sprice = 0;
var scalorie = 0;
var scarbs = 0;
var sprotein = 0;
var sfat = 0;
$('#sauce').change(function(){
    
	if($(this).val() != ''){	
		 sprice = $('#sauce option:selected').attr('data-price');
		 scalorie = $('#sauce option:selected').attr('data-calorie');
		 scarbs = $('#sauce option:selected').attr('data-carbs');
		 sprotein = $('#sauce option:selected').attr('data-protein');
		 sfat = $('#sauce option:selected').attr('data-fat');
		
    }else{
		var sprice = 0;
		var scalorie = 0;
		var scarbs = 0;
		var sprotein = 0;
		var sfat = 0;
	}
	$('#total_price_sauce').val(sprice);
	$('#total_calorie_sauce').val(scalorie);
	$('#total_carb_sauce').val(scarbs);
	$('#total_protein_sauce').val(sprotein);
	$('#total_fat_sauce').val(sfat);
	var calorie1 = $('#total_calorie_protein').val();
	var calorie2 = $('#total_calorie_carb').val();
	var calorie3 = $('#total_calorie_vegetable').val();
	var calorie4 = $('#total_calorie_fat_almond').val(); 
	var calorie5 = $('#total_calorie_sauce').val();
	var calorie6 = $('#total_calorie_fat_avocado').val();
	var calorie = (parseFloat(calorie1) + parseFloat(calorie2) + parseFloat(calorie3) + parseFloat(calorie4) + parseFloat(calorie5) + parseFloat(calorie6)).toFixed(2);
	$('#cal_custom').html(calorie);
	
	var fat1 = $('#total_fat_protein').val();
	var fat2 = $('#total_fat_carb').val();
	var fat3 = $('#total_fat_vegetable').val();
	var fat4 = $('#total_fat_fat_almond').val(); 
	var fat5 = $('#total_fat_sauce').val();
	var fat6 = $('#total_fat_fat_avocado').val();
	var fat = (parseFloat(fat1) + parseFloat(fat2) + parseFloat(fat3) + parseFloat(fat4) + parseFloat(fat5) + parseFloat(fat6)).toFixed(2);
	$('#fat_custom').html(fat);
	
	var carb1 = $('#total_carb_protein').val();
	var carb2 = $('#total_carb_carb').val();
	var carb3 = $('#total_carb_vegetable').val();
	var carb4 = $('#total_carb_fat_almond').val(); 
	var carb5 = $('#total_carb_sauce').val();
	var carb6 = $('#total_carb_fat_avocado').val();
	var carb = (parseFloat(carb1) + parseFloat(carb2) + parseFloat(carb3) + parseFloat(carb4) + parseFloat(carb5) + parseFloat(carb6)).toFixed(2);
	$('#carbs_custom').html(carb);
	
	var protein1 = $('#total_protein_protein').val();
	var protein2 = $('#total_protein_carb').val();
	var protein3 = $('#total_protein_vegetable').val();
	var protein4 = $('#total_protein_fat_almond').val(); 
	var protein5 = $('#total_protein_sauce').val();
	var protein6 = $('#total_protein_fat_avocado').val();
	var protein = (parseFloat(protein1) + parseFloat(protein2) + parseFloat(protein3) + parseFloat(protein4) + parseFloat(protein5) + parseFloat(protein6)).toFixed(2);
	$('#protein_custom').html(protein);
	
	var price = (parseFloat($('#total_price_protein').val()) + parseFloat($('#total_price_carb').val()) + parseFloat($('#total_price_vegetable').val()) + parseFloat($('#total_price_fat_almond').val()) + parseFloat($('#total_price_sauce').val()) + parseFloat($('#total_price_fat_avocado').val())).toFixed(2);
	$('#customOptionalPrice').html(price);
	
	var grandPrice = (parseFloat(price) + 39).toFixed(2);
	$('#grandPrice').html(grandPrice*$('#customQty').val());
	$('#option_p').val(price);
	$('#real_p').val(grandPrice*$('#customQty').val());
	//$('#cal_custom').html(parseFloat($('#total_calorie_protein').val())+ parseFloat($('#total_calorie_carb').val()) + parseFloat($('#total_calorie_vegetable').val()) + parseFloat($('#total_calorie_fat').val()) + parseFloat($('#total_calorie_sauce').val()));
});

$("#customQty").change(function () {
	var optionPrice = (parseFloat($('#option_p').val())).toFixed(2);
	var grandPrice = (parseFloat($('#real_p').val())).toFixed(2);
    var direction = this.defaultValue < this.value
    this.defaultValue = this.value;
    if(direction){
        if(optionPrice != 0 || grandPrice != 0){
			$('#customOptionalPrice').html((parseFloat(this.value*optionPrice)).toFixed(2));
			$('#grandPrice').html((parseFloat(this.value*grandPrice)).toFixed(2));
		}else{
			$('#customOptionalPrice').html('0');
			$('#grandPrice').html('39');
		}
	}else{
		if(optionPrice != 0 || grandPrice != 0){
			$('#customOptionalPrice').html((parseFloat(this.value*optionPrice)).toFixed(2));
			$('#grandPrice').html((parseFloat(this.value*grandPrice)).toFixed(2));
		}else{
			$('#customOptionalPrice').html('0');
			$('#grandPrice').html('39');
		}
	} 
});
/*$('.checkOut').click(function(){
	if($('#cartItemsHeader').html() >= 12){
		window.location.href = '<?php echo $this->webroot; ?>shop/cart';
	}else{
     alert('Velg minst 12 produkter');
	}
});*/

    </script>

<input type='hidden' id='bodyBot' value='0'>
<script>
jQuery(window).load(function() {
        // will first fade out the loading animation
	jQuery("#status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery("#preloader").delay(1000).fadeOut("slow");

});

</script>
<script>
function goBack() {
    window.history.back();
}
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5923462276be7313d291df23/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>