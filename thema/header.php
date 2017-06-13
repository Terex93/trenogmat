<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <title>
            TrenogMat :
            <?php if($this->fetch('title') == 'Products'){
				echo 'Måltider for vinnere';
			}else{ echo $this->fetch('title'); } ?>
			
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="icon" href="<?php echo $this->webroot; ?>img/32x32.png">
	
		<link href="<?php echo $this->webroot; ?>home/css/bootstrap.min.css" rel="stylesheet">
		
		<link href="<?php echo $this->webroot; ?>home/css/style.css" rel="stylesheet" rel="stylesheet">
		<link href="<?php echo $this->webroot; ?>home/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo $this->webroot; ?>home/css/progress-wizard.min.css" rel="stylesheet">
		
		<link href="<?php echo $this->webroot; ?>css/glyphicon.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/modal.css">

<script src="<?php echo $this->webroot; ?>home/js/classie.js"></script>
<script src="<?php echo $this->webroot; ?>home/js/float-panel.js"></script>

<script src="<?php echo $this->webroot; ?>js/teste.js"></script>

<style>
#futureLink:hover{
text-decoration:underline !important;	
}

</style>  
<script type='text/javascript' src='<?php echo $this->webroot; ?>js/jquery.js'></script>  
<script src="<?php echo $this->webroot; ?>home/js/bootstrap.min.js"></script>
<script src="<?php echo $this->webroot; ?>home/js/jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="<?php echo $this->webroot; ?>home/js/common_scripts_min.js"></script>
        <?php echo $this->Html->css(array('../home/css/bootstrap.min.css', '../home/css/style.css')); 
		echo $this->fetch('css');
		?>
        

		<script>
			  window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			  ga('create', 'UA-57200812-1', 'auto');
			  ga('send', 'pageview');
			</script>
		<script async src="<?php echo $this->webroot; ?>js/analytics.js"></script>
		<script>
			  /* <![CDATA[ */
			  goog_snippet_vars = function() {
				var w = window;
				w.google_conversion_id = 940748023;
				w.google_conversion_label = "H0qkCKzNzWIQ99nKwAM";
				w.google_remarketing_only = false;
			  }
			  // DO NOT CHANGE THE CODE BELOW.
			  goog_report_conversion = function(url) {
				goog_snippet_vars();
				window.google_conversion_format = "3";
				window.google_is_call = true;
				var opt = new Object();
				opt.onload_callback = function() {
				  if (typeof(url) != 'undefined') {
					window.location = url;
				  }
				}
				var conv_handler = window['google_trackConversion'];
				if (typeof(conv_handler) == 'function') {
				  conv_handler(opt);
				}
			  }
			  /* ]]> */
		</script>

		<script src="<?php echo $this->webroot; ?>js/conversion_async.js"></script>
		<script src="<?php echo $this->webroot; ?>js/4853820972.js"></script>
    
    </head>
    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    <body>
	<div id="preloader">
  <div id="status">
  <div class="spinner_icon">
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
		<span class="sr-only">Loading...</span>
	</div>
	</div>
</div>
	<div class='loaderImage' style='display:none;'>
	<div class="spinner_icon">
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
		<span class="sr-only">Loading...</span>
	</div>
</div>
     <header>
	<div class="top_header">
  	<div class="container">
    	<div class="top">
            <div class="top_email">
                <ul class="nav navbar-nav side_menu sdbar">
				<?php if (empty($loggeduser)) { ?>
				<li> <a href="#0" data-toggle="modal" data-target="#register" class="login_shw active11">Opprettkonto</a></li>
                <li> <a href="#0" data-toggle="modal" data-target="#login_2" class="login_shw active11">Logg inn</a></li>
                <?php } else { ?>
                <li><a href='<?php echo $this->webroot ?>users/myaccount'>Min Konto</a></li>
				<li><a href='<?php echo $this->webroot ?>orders/orderhistry'>Mine ordre</a></li>
				<?php } ?>
				<li><a href="<?php echo $this->webroot ?>products/orders">Signatures</a></li>
				<li><a href="<?php echo $this->webroot ?>products/customizemeal">Tilpasset Måltider</a></li>
				<!--<li><a href="<?php// echo $this->webroot ?>shop/payment">Sjekk ut</a></li>-->
                <li><a href="<?php echo $this->webroot; ?>shop/cart" class='checkOut'><i class="fa fa-shopping-cart" aria-hidden="true"></i>
 Handlevogn <span class="badge" id='cartItemsHeader'>0</span></a></li>
				
               
               </ul>
            </div>
            <div class="top_social">
                <ul class="nav navbar-nav side_menu top_menu">
   <li><a href="https://www.facebook.com/trenogmat.no/?fref=ts" target="_blank"><i style="padding:5px 8px" class="fa fa-facebook fab" aria-hidden="true"></i></a></li>
		<li><a href="https://www.youtube.com/channel/UCnI41_1M6RgpYw7GGVfr8Ew" target="_blank"><i class="fa fa-youtube fab" aria-hidden="true"></i></a></li>
		<li><a href="https://www.instagram.com/trenogmat/" target="_blank"><i class="fa fa-instagram fab" aria-hidden="true"></i></a></li>             
              </ul>
            </div>
         </div>
    </div>
    </div>
    
    
    
  <div class="float-panel" data-top="0" data-scroll="500">
	<nav class="navbar navbar-default nvbr">
      <div class="container">
      	<div class="nav_hedr">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $this->webroot; ?>" ><img class="img-responsive logo_box" src="<?php echo $this->webroot.'home/image/logo.svg'; ?>">
              </a>
            </div>
	
      
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav side_menu">
                <li><a href="<?php echo $this->webroot; ?>">Hjem</a></li>
                <li><a href="<?php echo $this->webroot; ?>products/menu">Meny</a></li>
                <li><a href="<?php echo $this->webroot; ?>pages/om-oss">Om Oss</a></li>
				<li> <a href="<?php echo $this->webroot; ?>pages/terms">Betingelser og vilkår</a> </li> 
                <li><a href="<?php echo $this->webroot; ?>pages/sporsmal-og-svar">Spørsmål og svar</a></li>
                <li><a href="<?php echo $this->webroot; ?>pages/kontakt">Kontakt</a></li>
				<li><a href="<?php echo $this->webroot; ?>pages/calculator">Kalorikalkulator</a></li>
              </ul>
            </div><!--/.nav-collapse -->
			
       </div> 
      </div>
    </nav> 
    </div>
    </header>
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
	if (len < 5) {
alert('Velg minst 5 produkter');
} else if (time < 12) {
   window.location.href = '<?php echo $this->webroot; ?>shop/cart';
} else {
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
 <script>
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