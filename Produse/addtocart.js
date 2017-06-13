$(document).ready(function () { 
           var cnt = 0;
		   var prsum5= '';
		   $(".cell")
		   .droppable({
			   activeClass: "ui-state-default",
			   hoverClass: "ui-state-hover",
			   drop: function(event, ui) {	
			   cnt++; 
			   var self = $(this); 
			   var productid = ui.draggable.attr("id"); 
			   if(self.find('.thumb_img').length == 1) return false;
			   var t = $(this).append($(ui.draggable).clone()
			   .attr('id',ui.draggable.attr('id')+cnt)
			   .append('<a href="javascript:void(0)" class="remove">X</a><span class="psize">'+$(ui.draggable).clone().data('size')+'</span>'));
			  // t.find('.thumbnail_img').css('height','30px');
			   //t.find('.thumbnail_img').css('width','60px');

			//t.find('img').attr('height', 50);
            //t.find('img').attr('width', 50);
						var pID = t.find('.thumb_img').attr('data-id');
						var price = t.find('.thumb_img').attr('data-price');
						var cal = t.find('.thumb_img').attr('data-cal');
						var carbo = t.find('.thumb_img').attr('data-carbo');
						var nutri = t.find('.thumb_img').attr('data-nutri');
						var fat = t.find('.thumb_img').attr('data-fat');
						var size = t.find('.thumb_img').attr('data-size');
						var block = t.attr('id');
                        var day = t.parent('tr').data('day');
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
								if(data['Order']['checkprice']){
						var p = parseFloat(data['Order']['total'] * data['Order']['checkprice']/100);
						//console.log(p);
						prsum5 = parseInt(data['Order']['total']) + p;
						
					}else{
						prsum5 = parseInt(data['Order']['total']);
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
											if(t.parent('tr').data('day') == '1'){							t.parent('tr').find('.shre_icn .rowcal').html(day1_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day1_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day1_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day1_fat);						}						if(t.parent('tr').data('day') == '2'){							t.parent('tr').find('.shre_icn .rowcal').html(day2_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day2_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day2_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day2_fat);						}						if(t.parent('tr').data('day') == '3'){							t.parent('tr').find('.shre_icn .rowcal').html(day3_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day3_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day3_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day3_fat);						}						if(t.parent('tr').data('day') == '4'){														t.parent('tr').find('.shre_icn .rowcal').html(day4_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day4_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day4_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day4_fat);						}						if(t.parent('tr').data('day') == '5'){														t.parent('tr').find('.shre_icn .rowcal').html(day5_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day5_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day5_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day5_fat);						}						if(t.parent('tr').data('day') == '6'){														t.parent('tr').find('.shre_icn .rowcal').html(day6_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day6_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day6_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day6_fat);						}						if(t.parent('tr').data('day') == '7'){							t.parent('tr').find('.shre_icn .rowcal').html(day7_cal);							t.parent('tr').find('.shre_icn .rowcarbo').html(day7_carbo);							t.parent('tr').find('.shre_icn .rownutri').html(day7_nutri);							t.parent('tr').find('.shre_icn .rowfat').html(day7_fat);						}		                $('.price_txt').html('Pris '+prsum5+'kr');											},					error: function () {						alert('Error!');					}				});				                    var cartid = self.closest('.cell').attr('id');                    $(".cell:not(#"+cartid+") [id="+productid+"]").remove();	                			}            });
											$(".thumb_img").draggable({
												appendTo: 'body', 
												helper: 'clone',
    start: function (e, ui) {
        ui.helper.animate({
            width: 42,
            height: 42,

        });
		ui.helper.css("height",42);
    },
    cursorAt: {left:21, top:21}

												});
    $('.addtocart').off("click").on('click', function (event) {
        $.ajax({
            type: "POST",
            url: "http://trenogmat.no/shop/itemupdate",
            data: {
                id: $(this).attr("id"),
                mods: $("#modselected").attr("value"),
                quantity: 1
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                var html = '<table class="table table_summary">';
                html += '<tbody>';
                $.each(data['OrderItem'], function (index, value) {
                    html += '<tr><td><a id=' + index + ' class="remove_item"><i class="icon_minus_alt"></i></a> <strong>' + value['quantity'] + 'x</strong>' + value['name'] + '';
                    html += '<td style="width:47px"><a href="#" class="cmins" id=' + index + '><i class="icon_minus_alt"></i></a> <a href="#" class="cplus" id=' + index + '><i class="icon_plus_alt"></i></a>';
                    html += '<td><strong class="pull-right">' + value['price'] + '</strong></td></tr>';
                });
                html += '</tbody></table>';
                console.log(html);
                $('#added_items').html(html);
                $('#added_items').delay(2000).fadeIn('slow');
                var totalhtml = '<table class="table table_summary">';
                totalhtml += '<tbody>';
                totalhtml += '<tr><td>';			
                totalhtml += 'Subtotal <span class="pull-right">KD ' + data['Order']['subtotal'] + '</span>';
                totalhtml += '</td></tr>';
                totalhtml += '<tr><td>';
                totalhtml += '  TOTAL <span class="pull-right">KD ' + data['Order']['total'] + '</span>';
                totalhtml += '</td></tr>';
                totalhtml += '</tbody></table>';
                $('#total_items').html(totalhtml);
               // alert(data['alergi']);
                if((data['alergi']) || (data['productasso'])){
                   $('#myModal-'+data['id']).modal('show') ;
                }
                // $('#total_items').delay(2000).fadeIn('slow');
                rmv();
            },
            error: function () {
                alert('Error!');
            }
        });
        return false;
    });



var psum5= '';
var checkTitle= '';
    $.getJSON("http://trenogmat.no/shop/getcartitem", function (data) {
		
		if(data['Order']['checkprice']){
						var p = parseFloat(data['Order']['total'] * data['Order']['checkprice']/100);
						//console.log(p);
						psum5 = parseInt(data['Order']['total']) + p;
						checkTitle = data['Order']['checktitle'];
						
					}else{
						psum5 = parseInt(data['Order']['total']);
					}
		        
						var day1_cal = 0;			var day1_carbo = 0;			var day1_nutri = 0;			var day1_fat = 0;			var day2_cal = 0;			var day2_carbo = 0;			var day2_nutri = 0;			var day2_fat = 0;						var day3_cal = 0;			var day3_carbo = 0;			var day3_nutri = 0;			var day3_fat = 0;						var day4_cal = 0;			var day4_carbo = 0;			var day4_nutri = 0;			var day4_fat = 0;						var day5_cal = 0;			var day5_carbo = 0;			var day5_nutri = 0;			var day5_fat = 0;						var day6_cal = 0;			var day6_carbo = 0;			var day6_nutri = 0;			var day6_fat = 0;						var day7_cal = 0;			var day7_carbo = 0;			var day7_nutri = 0;			var day7_fat = 0;					 var item1 = '';			var item2 = '';			var item3 = '';			var item4 = '';
        $.each(data['OrderItem'], function (index, value) {
                            if(value['size'] == 'S'){								if(value['day'] == '1'){									day1_cal += parseInt(value['Product']['small_cal']);									day1_carbo += parseInt(value['Product']['small_carbo']);									day1_nutri += parseInt(value['Product']['small_nutri']);									day1_fat += parseInt(value['Product']['small_fat']);								}								if(value['day'] == '2'){									day2_cal += parseInt(value['Product']['small_cal']);									day2_carbo += parseInt(value['Product']['small_carbo']);									day2_nutri += parseInt(value['Product']['small_nutri']);									day2_fat += parseInt(value['Product']['small_fat']);								}								if(value['day'] == '3'){									day3_cal += parseInt(value['Product']['small_cal']);									day3_carbo += parseInt(value['Product']['small_carbo']);									day3_nutri += parseInt(value['Product']['small_nutri']);									day3_fat += parseInt(value['Product']['small_fat']);								}								if(value['day'] == '4'){									day4_cal += parseInt(value['Product']['small_cal']);									day4_carbo += parseInt(value['Product']['small_carbo']);									day4_nutri += parseInt(value['Product']['small_nutri']);									day4_fat += parseInt(value['Product']['small_fat']);								}								if(value['day'] == '5'){									day5_cal += parseInt(value['Product']['small_cal']);									day5_carbo += parseInt(value['Product']['small_carbo']);									day5_nutri += parseInt(value['Product']['small_nutri']);									day5_fat += parseInt(value['Product']['small_fat']);								}								if(value['day'] == '6'){									day6_cal += parseInt(value['Product']['small_cal']);									day6_carbo += parseInt(value['Product']['small_carbo']);									day6_nutri += parseInt(value['Product']['small_nutri']);									day6_fat += parseInt(value['Product']['small_fat']);								}								if(value['day'] == '7'){									day7_cal += parseInt(value['Product']['small_cal']);									day7_carbo += parseInt(value['Product']['small_carbo']);									day7_nutri += parseInt(value['Product']['small_nutri']);									day7_fat += parseInt(value['Product']['small_fat']);								}															}                            if(value['size'] == 'M'){								if(value['day'] == '1'){									day1_cal += parseInt(value['Product']['medium_cal']);									day1_carbo += parseInt(value['Product']['medium_carbo']);									day1_nutri += parseInt(value['Product']['medium_nutri']);									day1_fat += parseInt(value['Product']['medium_fat']);								}								if(value['day'] == '2'){									day2_cal += parseInt(value['Product']['medium_cal']);									day2_carbo += parseInt(value['Product']['medium_carbo']);									day2_nutri += parseInt(value['Product']['medium_nutri']);									day2_fat += parseInt(value['Product']['medium_fat']);								}								if(value['day'] == '3'){									day3_cal += parseInt(value['Product']['medium_cal']);									day3_carbo += parseInt(value['Product']['medium_carbo']);									day3_nutri += parseInt(value['Product']['medium_nutri']);									day3_fat += parseInt(value['Product']['medium_fat']);								}								if(value['day'] == '4'){									day4_cal += parseInt(value['Product']['medium_cal']);									day4_carbo += parseInt(value['Product']['medium_carbo']);									day4_nutri += parseInt(value['Product']['medium_nutri']);									day4_fat += parseInt(value['Product']['medium_fat']);								}								if(value['day'] == '5'){									day5_cal += parseInt(value['Product']['medium_cal']);									day5_carbo += parseInt(value['Product']['medium_carbo']);									day5_nutri += parseInt(value['Product']['medium_nutri']);									day5_fat += parseInt(value['Product']['medium_fat']);								}								if(value['day'] == '6'){									day6_cal += parseInt(value['Product']['medium_cal']);									day6_carbo += parseInt(value['Product']['medium_carbo']);									day6_nutri += parseInt(value['Product']['medium_nutri']);									day6_fat += parseInt(value['Product']['medium_fat']);								}								if(value['day'] == '7'){									day7_cal += parseInt(value['Product']['medium_cal']);									day7_carbo += parseInt(value['Product']['medium_carbo']);									day7_nutri += parseInt(value['Product']['medium_nutri']);									day7_fat += parseInt(value['Product']['medium_fat']);								}															}                            if(value['size'] == 'L'){								if(value['day'] == '1'){									day1_cal += parseInt(value['Product']['large_cal']);									day1_carbo += parseInt(value['Product']['large_carbo']);									day1_nutri += parseInt(value['Product']['large_nutri']);									day1_fat += parseInt(value['Product']['large_fat']);								}								if(value['day'] == '2'){									day2_cal += parseInt(value['Product']['large_cal']);									day2_carbo += parseInt(value['Product']['large_carbo']);									day2_nutri += parseInt(value['Product']['large_nutri']);									day2_fat += parseInt(value['Product']['large_fat']);								}								if(value['day'] == '3'){									day3_cal += parseInt(value['Product']['large_cal']);									day3_carbo += parseInt(value['Product']['large_carbo']);									day3_nutri += parseInt(value['Product']['large_nutri']);									day3_fat += parseInt(value['Product']['large_fat']);								}								if(value['day'] == '4'){									day4_cal += parseInt(value['Product']['large_cal']);									day4_carbo += parseInt(value['Product']['large_carbo']);									day4_nutri += parseInt(value['Product']['large_nutri']);									day4_fat += parseInt(value['Product']['large_fat']);								}								if(value['day'] == '5'){									day5_cal += parseInt(value['Product']['large_cal']);									day5_carbo += parseInt(value['Product']['large_carbo']);									day5_nutri += parseInt(value['Product']['large_nutri']);									day5_fat += parseInt(value['Product']['large_fat']);								}								if(value['day'] == '6'){									day6_cal += parseInt(value['Product']['large_cal']);									day6_carbo += parseInt(value['Product']['large_carbo']);									day6_nutri += parseInt(value['Product']['large_nutri']);									day6_fat += parseInt(value['Product']['large_fat']);								}								if(value['day'] == '7'){									day7_cal += parseInt(value['Product']['large_cal']);									day7_carbo += parseInt(value['Product']['large_carbo']);									day7_nutri += parseInt(value['Product']['large_nutri']);									day7_fat += parseInt(value['Product']['large_fat']);								}															}									         $('.table tr td').each(function(){			           						var attr = $(this).parent('tr').data('day');            if(value['size'] == 'S'){				item1 = value['Product']['small_cal'];				item2 = value['Product']['small_carbo'];				item3 = value['Product']['small_nutri'];				item4 = value['Product']['small_fat'];			}else if(value['size'] == 'M'){				item1 = value['Product']['medium_cal'];				item2 = value['Product']['medium_carbo'];				item3 = value['Product']['medium_nutri'];				item4 = value['Product']['medium_fat'];			}else if(value['size'] == 'L'){				item1 = value['Product']['large_cal'];				item2 = value['Product']['large_carbo'];				item3 = value['Product']['large_nutri'];				item4 = value['Product']['large_fat'];			}			if(($(this).is('#'+value['block'])) && (attr == value['day'])){				$(this).append('<div data-size="'+value['size']+'" data-id="'+value['product_id']+'" data-price="'+value['price']+'" data-unique="'+value['unique']+'" data-cal="'+item1+'" data-carbo="'+item2+'" data-nutri="'+item3+'" data-fat="'+item4+'" class="thumb_img ui-draggable ui-draggable-handle" id="photo1"><img src="http://trenogmat.no/files/product/'+value['Product']['image']+'" title="'+value['name']+'" alt="..." class="img-responsive"><a href="javascript:void(0)" class="remove">X</a><span class="psize">'+value['size']+'</span></div>');			}		});$('.table tr').each(function(){	                        if($(this).data('day') == '1'){							$(this).find('.shre_icn .rowcal').html(day1_cal);							$(this).find('.shre_icn .rowcarbo').html(day1_carbo);							$(this).find('.shre_icn .rownutri').html(day1_nutri);							$(this).find('.shre_icn .rowfat').html(day1_fat);						}						if($(this).data('day') == '2'){							$(this).find('.shre_icn .rowcal').html(day2_cal);							$(this).find('.shre_icn .rowcarbo').html(day2_carbo);							$(this).find('.shre_icn .rownutri').html(day2_nutri);							$(this).find('.shre_icn .rowfat').html(day2_fat);						}						if($(this).data('day') == '3'){							$(this).find('.shre_icn .rowcal').html(day3_cal);							$(this).find('.shre_icn .rowcarbo').html(day3_carbo);							$(this).find('.shre_icn .rownutri').html(day3_nutri);							$(this).find('.shre_icn .rowfat').html(day3_fat);						}						if($(this).data('day') == '4'){							$(this).find('.shre_icn .rowcal').html(day4_cal);							$(this).find('.shre_icn .rowcarbo').html(day4_carbo);							$(this).find('.shre_icn .rownutri').html(day4_nutri);							$(this).find('.shre_icn .rowfat').html(day4_fat);						}						if($(this).data('day') == '5'){							$(this).find('.shre_icn .rowcal').html(day5_cal);							$(this).find('.shre_icn .rowcarbo').html(day5_carbo);							$(this).find('.shre_icn .rownutri').html(day5_nutri);							$(this).find('.shre_icn .rowfat').html(day5_fat);						}						if($(this).data('day') == '6'){							$(this).find('.shre_icn .rowcal').html(day6_cal);							$(this).find('.shre_icn .rowcarbo').html(day6_carbo);							$(this).find('.shre_icn .rownutri').html(day6_nutri);							$(this).find('.shre_icn .rowfat').html(day6_fat);						}						if($(this).data('day') == '7'){														$(this).find('.shre_icn .rowcal').html(day7_cal);							$(this).find('.shre_icn .rowcarbo').html(day7_carbo);							$(this).find('.shre_icn .rownutri').html(day7_nutri);							$(this).find('.shre_icn .rowfat').html(day7_fat);						}		});		
							$('.price_txt').html('Pris '+psum5+'kr');
$('.extraPr').each(function(){
	if($(this).data('title') == checkTitle){
		$(this).attr('checked','checked');
	}
});							
        });		 

        rmv();
        //$('#total_items').delay(2000).fadeIn('slow');
    });
    $.getJSON("http://trenogmat.no/shop/reviewgetcartitem", function (data) {
        var html = '<table class="table table_summary">';
        html += '<tbody>';
        $.each(data['OrderItem'], function (index, value) {
            html += '<tr><td> <strong>' + value['quantity'] + 'x</strong>' + value['name'] + '';
            html += '<td style="width:47px">';
            html += '<td><strong class="pull-right">' + value['subtotal']+'</strong></td></tr>';
        });
		
        html += '</tbody></table>';
        $('#added_items_chk').html(html);

        var totalhtml = '<table class="table table_summary">';
        totalhtml += '<tbody>';
		
		
		// MY FETCH CODE
		if(data['Order']['tablecalc']){
		totalhtml += '<tr><td>';
        totalhtml += ' Sitting changes <span class="pull-right">KD ' + data['Order']['tablecalc'] + '</span>';
        totalhtml += '</td></tr>';
        totalhtml += '<tr><td>';
		}
		
		
		
		
		
		//data['Order']['perpersonrate']
		/*totalhtml += '<tr><td>';
        totalhtml += 'Person <span class="pull-right">$' + data['Restaurant']['noofperson'] + '</span>';
        totalhtml += '</td></tr>';
        totalhtml += '<tr><td>';*/
		
		/*var subtotalzz = data['Order']['subtotal'];
				var subtotalnew = subtotalzz.toFixed(3);*/
				//var n = data['Order']['subtotal'];    
				//n.round(2); // 1.78
				
				
		
        totalhtml += '<tr><td>';
        totalhtml += 'Subtotal <span class="pull-right">KD ' + data['Order']['subtotal'] +'</span>';
        totalhtml += '</td></tr>';
        totalhtml += '<tr><td>';
        totalhtml += '  Tax <span class="pull-right">KD ' + data['Order']['tax'] + '</span>';
        totalhtml += '</td></tr>';
		/*var per = data['Order']['person'];
		totalhtml += '<tr><td>';
        totalhtml += '  Sitting Charges <span class="pull-right">$'+ per + '</span>';
        totalhtml += '</td></tr>';*/
		
		/*var totalzz = data['Order']['total'];
		var totalnew = totalzz.toFixed(3);*/
        totalhtml += '<tr><td>';
        totalhtml += '  TOTAL <span class="pull-right">KD ' + data['Order']['total'] + '</span>';
        totalhtml += '</td></tr>';
        totalhtml += '</tbody></table>';
        $('#total_items_chk').html(totalhtml);
        rmv();
        //$('#total_items').delay(2000).fadeIn('slow');
    });




    $.getJSON("http://trenogmat.no/admin/shop/getcartitem", function (data) {
        if(data){
            adminrmv();
            var html = '<table class="table table_summary">';
            html += '<tbody>';
            $.each(data['OrderItem'], function (index, value) {
                html += '<tr><td><a data-tid = ' + value['tno'] + ' id=' + index + ' class="remove_itema"><i class="icon_minus_alt"></i></a> <strong>' + value['quantity'] + 'x</strong>' + value['name'] + '';
                html += '<td style="width:47px"><a href="#" data-tid = ' + value['tno'] + ' class="cminsa" id=' + index + '><i class="icon_minus_alt"></i></a> <a href="#" data-tid = ' + value['tno'] + ' class="cplusa" id=' + index + '><i class="icon_plus_alt"></i></a>';
                html += '<td><strong class="pull-right">' + value['price'] + '</strong></td></tr>';
            });
            html += '</tbody></table>';
            $('#added_items_admin').html(html);

            var totalhtml = '<table class="table table_summary">';
            totalhtml += '<tbody>';
            totalhtml += '<tr><td>';
            totalhtml += 'Subtotal <span class="pull-right">KD ' + data['Order']['subtotal'] + '</span>';
            totalhtml += '</td></tr>';
            totalhtml += '<tr><td>';
            totalhtml += '  Tax <span class="pull-right">KD ' + data['Order']['tax'] + '</span>';
            totalhtml += '</td></tr>';
            totalhtml += '<tr><td>';
            totalhtml += '  TOTAL <span class="pull-right">KD ' + data['Order']['total'] + '</span>';
            totalhtml += '</td></tr>';
            totalhtml += '</tbody></table>';
            $('#total_items_admin').html(totalhtml);
            adminrmv();
            //$('#total_items').delay(2000).fadeIn('slow');
        }else{
            console.log('No response');
        }
        
    });
    $('.adminaddtocart').off("click").on('click', function (event) {
        $.ajax({
            type: "POST",
            url: "http://trenogmat.no/admin/shop/itemupdate",
            data: {
                id: $(this).attr("id"),
                tid: $(this).data('tid'),
                mods: $("#modselected").attr("value"),
                quantity: 1
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                var html = '<table class="table table_summary">';
                html += '<tbody>';
                $.each(data['OrderItem'], function (index, value) {
                    html += '<tr><td><a id=' + index + ' data-tid = ' + value['tno'] + ' class="remove_itema"><i class="icon_minus_alt"></i></a> <strong>' + value['quantity'] + 'x</strong>' + value['name'] + '';
                    html += '<td style="width:47px"><a href="#" data-tid = ' + value['tno'] + ' class="cminsa" id=' + index + '><i class="icon_minus_alt"></i></a> <a href="#" data-tid = ' + value['tno'] + ' class="cplusa" id=' + index + '><i class="icon_plus_alt"></i></a>';
                    html += '<td><strong class="pull-right">' + value['price'] + '</strong></td></tr>';
                });
                html += '</tbody></table>';
                console.log(html);
                $('#added_items_admin').html(html);
                $('#added_items_admin').delay(2000).fadeIn('slow');
                var totalhtml = '<table class="table table_summary">';
                totalhtml += '<tbody>';
                totalhtml += '<tr><td>';
                totalhtml += 'Subtotal <span class="pull-right">KD ' + data['Order']['subtotal'] + '</span>';
                totalhtml += '</td></tr>';
                totalhtml += '<tr><td>';
                totalhtml += '  Tax <span class="pull-right">KD ' + data['Order']['tax'] + '</span>';
                totalhtml += '</td></tr>';
                totalhtml += '<tr><td>';
                totalhtml += '  TOTAL <span class="pull-right">KD ' + data['Order']['total'] + '</span>';
                totalhtml += '</td></tr>';
                totalhtml += '</tbody></table>';
                $('#total_items_admin').html(totalhtml);
                // $('#total_items').delay(2000).fadeIn('slow');
                adminrmv();
            },
            error: function () {
                alert('Error!');
            }
        });
        return false;
    });
    function adminrmv() {
        $('.remove_itema').off("click").on('click', function () {
            $.ajax({
                type: "POST",
                url: "http://trenogmat.no/admin/shop/crtremove",
                data: {
                    id: $(this).attr("id"),
                    tid: $(this).data('tid'),
                },
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    var html = '<table class="table table_summary">';
                    html += '<tbody>';
                    $.each(data['OrderItem'], function (index, value) {
                        html += '<tr><td><a id=' + index + ' data-tid = ' + value['tno'] + ', class="remove_itema"><i class="icon_minus_alt"></i></a> <strong>' + value['quantity'] + 'x</strong>' + value['name'] + '';
                        html += '<td style="width:47px"><a href="#" data-tid = ' + value['tno'] + ' class="cminsa" id=' + index + '><i class="icon_minus_alt"></i></a> <a href="#" class="cplusa" data-tid = ' + value['tno'] + ' id=' + index + '><i class="icon_plus_alt"></i></a>';
                        html += '<td><strong class="pull-right">' + value['price'] + '</strong></td></tr>';
                    });
                    html += '</tbody></table>';
                    console.log(html);
                    $('#added_items_admin').html(html);
                    //$('#added_items').delay(2000).fadeIn('slow');
                    var totalhtml = '<table class="table table_summary">';
                    totalhtml += '<tbody>';
                    totalhtml += '<tr><td>';
                    totalhtml += 'Subtotal <span class="pull-right">KD ' + data['Order']['subtotal'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '<tr><td>';
                    totalhtml += '  Tax <span class="pull-right">KD ' + data['Order']['tax'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '<tr><td>';
                    totalhtml += '  TOTAL <span class="pull-right">KD ' + data['Order']['total'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '</tbody></table>';
                    $('#total_items_admin').html(totalhtml);
                    adminrmv();
                    // $('#total_items').delay(2000).fadeIn('slow');
                },
                error: function () {
                    alert('Error!');
                }
            });
            return false;
        });
        $('.cplusa').off("click").on('click', function () {
            //  alert('hello');
            $.ajax({
                type: "POST",
                url: "http://trenogmat.no/admin/shop/addremovecart",
                data: {
                    id: $(this).attr("id"),
                    tid: $(this).data('tid'),
                },
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    var html = '<table class="table table_summary">';
                    html += '<tbody>';
                    $.each(data['OrderItem'], function (index, value) {
                        html += '<tr><td><a id=' + index + ' data-tid = ' + value['tno'] + ' class="remove_itema"><i class="icon_minus_alt"></i></a> <strong>' + value['quantity'] + 'x</strong>' + value['name'] + '';
                        html += '<td style="width:47px"><a href="#" data-tid = ' + value['tno'] + ' class="cminsa" id=' + index + '><i class="icon_minus_alt"></i></a> <a href="#" data-tid = ' + value['tno'] + ' class="cplusa" id=' + index + '><i class="icon_plus_alt"></i></a>';
                        html += '<td><strong class="pull-right">' + value['price'] + '</strong></td></tr>';
                    });
                    html += '</tbody></table>';
                    console.log(html);
                    $('#added_items_admin').html(html);
                    //$('#added_items').delay(2000).fadeIn('slow');
                    var totalhtml = '<table class="table table_summary">';
                    totalhtml += '<tbody>';
                    totalhtml += '<tr><td>';
                    totalhtml += 'Subtotal <span class="pull-right">KD ' + data['Order']['subtotal'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '<tr><td>';
                    totalhtml += '  Tax <span class="pull-right">KD ' + data['Order']['tax'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '<tr><td>';
                    totalhtml += '  TOTAL <span class="pull-right">KD ' + data['Order']['total'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '</tbody></table>';
                    $('#total_items_admin').html(totalhtml);
                    adminrmv();
                    // $('#total_items').delay(2000).fadeIn('slow');
                },
                error: function () {
                    alert('Error!');
                }
            });
            return false;
        });
        $('.cminsa').off("click").on('click', function () {
            $.ajax({
                type: "POST",
                url: "http://trenogmat.no/admin/shop/minusremovecart",
                data: {
                    id: $(this).attr("id"),
                    tid: $(this).data('tid'),
                },
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    var html = '<table class="table table_summary">';
                    html += '<tbody>';
                    $.each(data['OrderItem'], function (index, value) {
                        html += '<tr><td><a id=' + index + ' data-tid = ' + value['tno'] + ' class="remove_itema"><i class="icon_minus_alt"></i></a> <strong>' + value['quantity'] + 'x</strong>' + value['name'] + '';
                        html += '<td style="width:47px"><a href="#" data-tid = ' + value['tno'] + ' class="cminsa" id=' + index + '><i class="icon_minus_alt"></i></a> <a href="#" data-tid = ' + value['tno'] + ' class="cplusa" id=' + index + '><i class="icon_plus_alt"></i></a>';
                        html += '<td><strong class="pull-right">' + value['price'] + '</strong></td></tr>';
                    });
                    html += '</tbody></table>';
                    console.log(html);
                    $('#added_items_admin').html(html);
                    //$('#added_items').delay(2000).fadeIn('slow');
                    var totalhtml = '<table class="table table_summary">';
                    totalhtml += '<tbody>';
                    totalhtml += '<tr><td>';
                    totalhtml += 'Subtotal <span class="pull-right">KD ' + data['Order']['subtotal'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '<tr><td>';
                    totalhtml += '  Tax <span class="pull-right">KD ' + data['Order']['tax'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '<tr><td>';
                    totalhtml += '  TOTAL <span class="pull-right">KD ' + data['Order']['total'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '</tbody></table>';
                    $('#total_items_admin').html(totalhtml);
                    adminrmv();
                    // $('#total_items').delay(2000).fadeIn('slow');
                },
                error: function () {
                    alert('Error!');
                }
            });
            return false;
        });
    }
});

function rmv() {
        $('.remove_item').off("click").on('click', function () {
            $.ajax({
                type: "POST",
                url: "http://trenogmat.no/shop/crtremove",
                data: {
                    id: $(this).attr("id"),
                },
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    var html = '<table class="table table_summary">';
                    html += '<tbody>';
                    $.each(data['OrderItem'], function (index, value) {
                        html += '<tr><td><a id=' + index + ' class="remove_item"><i class="icon_minus_alt"></i></a> <strong>' + value['quantity'] + 'x</strong>' + value['name'] + '';
                        html += '<td style="width:47px"><a href="#" class="cmins" id=' + index + '><i class="icon_minus_alt"></i></a> <a href="#" class="cplus" id=' + index + '><i class="icon_plus_alt"></i></a>';
                        html += '<td><strong class="pull-right">' + value['price'] + '</strong></td></tr>';
                    });
                    html += '</tbody></table>';
                    console.log(html);
                    $('#added_items').html(html);
                    //$('#added_items').delay(2000).fadeIn('slow');
                    var totalhtml = '<table class="table table_summary">';
                    totalhtml += '<tbody>';
                    totalhtml += '<tr><td>';
                    totalhtml += 'Subtotal <span class="pull-right">KD ' + data['Order']['subtotal'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '<tr><td>';
                    totalhtml += '  TOTAL <span class="pull-right">KD ' + data['Order']['total'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '</tbody></table>';
                    $('#total_items').html(totalhtml);
                    rmv();
                    // $('#total_items').delay(2000).fadeIn('slow');
                },
                error: function () {
                    alert('Error!');
                }
            });
            return false;
        });
        $('.cplus').off("click").on('click', function () {
             //alert('hellofffffffffffffff'); 
            $.ajax({
                type: "POST",
                url: "http://trenogmat.no/shop/addremovecart",
                data: {
                    id: $(this).attr("id"),
                },
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    var html = '<table class="table table_summary">';
                    html += '<tbody>';
                    $.each(data['OrderItem'], function (index, value) {
                        html += '<tr><td><a id=' + index + ' class="remove_item"><i class="icon_minus_alt"></i></a> <strong>' + value['quantity'] + 'x</strong>' + value['name'] + '';
                        html += '<td style="width:47px"><a href="#" class="cmins" id=' + index + '><i class="icon_minus_alt"></i></a> <a href="#" class="cplus" id=' + index + '><i class="icon_plus_alt"></i></a>';
                        html += '<td><strong class="pull-right">' + value['subtotal'] + '</strong></td></tr>';
                    });
                    html += '</tbody></table>';
                    console.log(html);
                    $('#added_items').html(html);
                    //$('#added_items').delay(2000).fadeIn('slow');
                    var totalhtml = '<table class="table table_summary">';
                    totalhtml += '<tbody>';
                    totalhtml += '<tr><td>';
                    totalhtml += 'Subtotal <span class="pull-right">KD ' + data['Order']['subtotal'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '<tr><td>';
                    totalhtml += '  TOTAL <span class="pull-right">KD ' + data['Order']['total'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '</tbody></table>';
                    $('#total_items').html(totalhtml);
                    rmv();
                    // $('#total_items').delay(2000).fadeIn('slow');
                },
                error: function () {
                    alert('Error!');
                }
            });
            return false;
        });
        $('.cmins').off("click").on('click', function () {
            $.ajax({
                type: "POST",
                url: "http://trenogmat.no/shop/minusremovecart",
                data: {
                    id: $(this).attr("id"),
                },
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    var html = '<table class="table table_summary">';
                    html += '<tbody>';
                    $.each(data['OrderItem'], function (index, value) {
                        html += '<tr><td><a id=' + index + ' class="remove_item"><i class="icon_minus_alt"></i></a> <strong>' + value['quantity'] + 'x</strong>' + value['name'] + '';
                        html += '<td style="width:47px"><a href="#" class="cmins" id=' + index + '><i class="icon_minus_alt"></i></a> <a href="#" class="cplus" id=' + index + '><i class="icon_plus_alt"></i></a>';
                        html += '<td><strong class="pull-right">' + value['price'] + '</strong></td></tr>';
                    });
                    html += '</tbody></table>';
                    console.log(html);
                    $('#added_items').html(html);
                    //$('#added_items').delay(2000).fadeIn('slow');
                    var totalhtml = '<table class="table table_summary">';
                    totalhtml += '<tbody>';
                    totalhtml += '<tr><td>';
                    totalhtml += 'Subtotal <span class="pull-right">KD ' + data['Order']['subtotal'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '<tr><td>';
                    totalhtml += '  TOTAL <span class="pull-right">KD ' + data['Order']['total'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '</tbody></table>';
                    $('#total_items').html(totalhtml);
                    rmv();
                    // $('#total_items').delay(2000).fadeIn('slow');
                },
                error: function () {
                    alert('Error!');
                }
            });
            return false;
        });
        $('#pincheck').off("click").on('click', function () {
            $.ajax({
                type: "POST",
                url: "http://trenogmat.no/shop/checkpin",
                data: {
                    id: $('#chpin').val(),
                    rid: $('#reid').val(),
                },
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    if(data.status == false){
                        $('#dlchrg').html('');
                        $('#dlchrg').html('not available on this pin please try again');
                    }else{
                        var cart = data.cart;
                        var totalhtml = '<table class="table table_summary">';
                        totalhtml += '<tbody>';
                        totalhtml += '<tr><td>';
                        totalhtml += 'Subtotal <span class="pull-right">KD ' + cart['Order']['subtotal'] + '</span>';
                        totalhtml += '</td></tr>';
                        totalhtml += '<tr><td>';
                        totalhtml += 'Tax <span class="pull-right">KD ' + cart['Order']['tax'] + '</span>';
                        totalhtml += '</td></tr>';
                        totalhtml += '<tr><td>';
                        totalhtml += 'Delivery Charge <span class="pull-right">KD ' + cart['Order']['dlcharge'] + '</span>';
                        totalhtml += '</td></tr>';
                        totalhtml += '<tr><td>';
                        totalhtml += '  TOTAL <span class="pull-right">KD ' + cart['Order']['total'] + '</span>';
                        totalhtml += '</td></tr>';
                        totalhtml += '</tbody></table>';
                        $('#total_items').html(totalhtml);
                        $('#dlchrg').html('');
                        $('#dlchrg').html('Delivery charge: KD ' + cart['Order']['dlcharge']+'<span id="confirmpin" onclick="displayPin('+cart['Order']['pin']+')">&nbsp; OK</span>');
                        $('#dlchrg').show();
                        //$('#chpin').hide();
                        $('#reid').hide();
                        localStorage.setItem('dlcharge', cart['Order']['dlcharge']);
                        rmv();
                    }
                    $('#total_items').delay(2000).fadeIn('slow');
                },
                error: function () {
                    alert('Error!');
                }
            });
            return false;
        });
        
//        $('#confirmpin').off("click").on("click", function () {
//            $('#chpin').replaceWith("<span>" + this.value + "</span>");
//            $('#chpin').hide();
//            $(this).hide();
//        })

        $('#deli').off("click").on("click", function () {
            if (this.checked) {
                $('#showdiv').show();
                $('#chpin').show();
                $('#chpin').val('');
                $('#pincheck').show();
                $('#selected_pin').hide();
                $('#dlchrg').hide();
            }
        });
       
        $('#tkway').off("click").on("click", function () {
            if (this.checked) {
                $('#showdiv').hide();
            }
            $.ajax({
                type: "POST",
                url: "http://trenogmat.no/shop/takeawaypin",
                data: {
                    id: $('#chpin').val(),
                    rid: $('#reid').val(),
                },
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    var totalhtml = '<table class="table table_summary">';
                    totalhtml += '<tbody>';
                    totalhtml += '<tr><td>';
                    totalhtml += 'Subtotal <span class="pull-right">KD ' + data['Order']['subtotal'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '<tr><td>';
                    totalhtml += 'Tax <span class="pull-right">KD ' + data['Order']['tax'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '<tr><td>';
                    totalhtml += '  TOTAL <span class="pull-right">KD ' + data['Order']['total'] + '</span>';
                    totalhtml += '</td></tr>';
                    totalhtml += '</tbody></table>';
                    $('#total_items_chk').html(totalhtml);
                    rmv();
                    // $('#total_items').delay(2000).fadeIn('slow');
                },
                error: function () {
                    alert('Error!');
                }
            });
           // return false;

        });
    }

function displayPin(pin){
    $('#chpin').after("<span id='selected_pin'>: " + pin + "</span>");
    $('#chpin').hide();
    $('#pincheck').hide();
    $('#confirmpin').hide();
    
    $.ajax({
        type: "GET",
        url: "http://trenogmat.no/shop/updateTotal",
        dataType: "json",
        success: function (data) {
            console.log(data);
            var cart = data.cart;
            var totalhtml = '<table class="table table_summary">';
            totalhtml += '<tbody>';
            totalhtml += '<tr><td>';
            totalhtml += 'Subtotal <span class="pull-right">KD ' + cart['Order']['subtotal'] + '</span>';
            totalhtml += '</td></tr>';
            totalhtml += '<tr><td>';
            totalhtml += 'Tax <span class="pull-right">KD ' + cart['Order']['tax'] + '</span>';
            totalhtml += '</td></tr>';
            totalhtml += '<tr><td>';
            totalhtml += 'Delivery Charge <span class="pull-right">KD ' + cart['Order']['dlcharge'] + '</span>';
            totalhtml += '</td></tr>';
            totalhtml += '<tr><td>';
            totalhtml += '  TOTAL <span class="pull-right">KD ' + cart['Order']['total'] + '</span>';
            totalhtml += '</td></tr>';
            totalhtml += '</tbody></table>';
            $('#total_items_chk').html(totalhtml);
            rmv();
            // $('#total_items').delay(2000).fadeIn('slow');
        },
        error: function () {
            alert('Error!');
        }
    });
}