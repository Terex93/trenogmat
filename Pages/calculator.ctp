<div class="thumb" id="calculatr_sec">
  <div class="container">
    <div class="calculatr_sec_inner voffset5">      
    <div class="">
<h1>Daglig Kalorier Kalkulator</h1>

<div class="col-md-offset-3 col-md-6">
<div class="calcu_dietfrm">
            <form method="put">
                <div class="form-group">
            		<label for="age">Skriv inn daglig koloribehovet</label>					
                        <input type='text' id='cal_calc' class="form-control" >    					
					
                </div>
                 
                
                            
                   
                     <div class="modal-footer">
                      <div class="form-group">                       
                                             
                     <!-- <div class="checkbox checkbox-danger">
                        <input id="checkbox2" type="checkbox" checked="">
                        <label for="checkbox2">
                           Remember me
                        </label>
                    </div>-->
                     
                       
                        </div>
                        
                         <div class="form-group">                       
                           <div class="input-group">     
             <button type="button" id="calculate" name="calculate" class="btn btn-primary calcu_btn">Beregn</button>
             </div>
            
              </div>
			  
			   <div class="form-group">
              <div class="input-group voffset4 text-center">
              <div class="help_sec" id='help_sec'>
              <button type="button" class="btn defult_btn btn-xs active cal_btn" data-title='∅k I velt'>Beregn makros for vektøkning + 20%</button>
			  <button type="button" class="btn defult_btn btn-xs cal_btn" data-title='Vedlikehold'>Beregn makros for vedlikehold 0%</button>
			   </div>
			   <div class="help_sec" id='help_sec'>
			  <button type="button" class="btn defult_btn btn-xs cal_btn" data-title='Diet'>Beregn makros for diett – 20%</button>
			  <button type="button" class="btn defult_btn btn-xs cal_btn" data-title='Ekstreme Diet'>Beregn makros fro ekstrem-diett – 30%</button>
              </div>
              </div>
              </div>
			  
               <div class="form-group">
              <div class="input-group voffset4 text-center">
              <div class="help_sec">
              <button type="button" class="btn btn-info btn-lg hlp_btn" data-toggle="modal" data-target="#myModalcal">Hjelp meg å finne mitt daglige behov</button>  
              </div>
              </div>
              </div>
                     </div>
                  
                
                
                 </form>
                 </div><!--calcu_dietfrm-->
                 
				</div>

</div>

   
    </div><!--col-lg-6 col-md-6-->
    

  </div><!--container-->
  
  <div class="container voffset5">
	<div class="row">
		                                <div class="col-md-12">
										<div class="calcu_ragn">
                                         <h2>Velg ditt mål:  </h2>
										 </div>
                                        
                                    <!-- Nav tabs --><div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" data-title='∅k I velt'>50/30/20 (Vektøkning)</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" data-title='Vedlikehold'>40/40/20 (Vedlikehold)</a></li>
                                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" data-title='Diet'>40/30/30 (Diett)</a></li>
                                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab" data-title='Ekstreme Diet'>25/45/30 (Ektrem-diett)</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active table-responsive" data-title='∅k I velt' id="home" data-carbo="50" data-pro='30' data-fat='20' data-macro='1.2'>
                                       
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="calc_tbl table">
                                          <tr>
                                            <td colspan="2"></td>
                                            
                                            <td>Gram per dag</td>
                                          </tr>
                                          <tr>
                                            <td><strong>karbohydrater:</strong>:</td>
                                            <td>
           <input type="text" class="percent carbo" readonly /> 
		   <div class="bar"></div>
      </td>
                                            <td><b class='carbo_per_day'>0</b></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Protein</strong>:</td>
                                            <td> 
                                             <input type="text" class="percent pro" readonly />
                                            <div class="bar"></div>
                                            </td>
                                            <td><b class='pro_per_day'>0</b></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Fett</strong>:</td>
                                            <td> 
                                            <input type="text" class="percent fat" readonly />
											<div class="bar"></div>
                                            </td>
                                            <td><b class='fat_per_day'>0</b></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Kalorier</strong>:</td>
                                            <td colspan="2"> 
                                            <strong class='calc_under'>0</strong>
                                            </td>
                                            
                                          </tr>
                                        </table>                                        
                                        </div>
                                        <div role="tabpanel" class="tab-pane" data-title='Vedlikehold' id="profile" data-carbo="40" data-pro='40' data-fat='20' data-macro='1'>
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="calc_tbl table">
                                          <tr>
                                            <td colspan="2"></td>
                                            
                                            <td>Grams per Day</td>
                                          </tr>
                                          <tr>
                                            <td><strong>karbohydrater</strong>:</td>
                                            <td>
          <input type="text" class="percent carbo" readonly />
    <div class="bar"></div>
      </td>
                                            <td><b class='carbo_per_day'>0</b></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Protein</strong>:</td>
                                            <td> 
                                             <input type="text" class="percent pro" readonly />
											 <div class="bar"></div>
                                            </td>
                                            <td><b class='pro_per_day'>0</b></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Fett</strong>:</td>
                                            <td> 
                                             <input type="text" class="percent fat" readonly />
                                            <div class="bar"></div>
                                            </td>
                                            <td><b class='fat_per_day'>0</b></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Kalorier</strong>:</td>
                                            <td colspan="2"> 
                                            <strong class='calc_under'>0</strong>
                                            </td>
                                            
                                          </tr>
                                        </table>
                                        
                                        
                                        
                                        </div>
                                        <div role="tabpanel" class="tab-pane" data-title='Diet' id="messages" data-carbo="40" data-pro='30' data-fat='30' data-macro='0.8'>
                                        
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="calc_tbl table">
                                          <tr>
                                            <td colspan="2"></td>
                                            
                                            <td>Grams per Day</td>
                                          </tr>
                                          <tr>
                                            <td><strong>karbohydrater:</strong>:</td>
                                            <td>
         <input type="text" class="percent carbo" readonly />
    <div class="bar"></div>
      </td>
                                            <td><b class='carbo_per_day'>0</b></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Protein</strong>:</td>
                                            <td>  
                                           <input type="text" class="percent fat" readonly />
                                            <div class="bar"></div>
                                            </td>
                                            <td><b class='pro_per_day'>0</b></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Fett</strong>:</td>
                                            <td> 
                                            <input type="text" class="percent fat" readonly />
											<div class="bar"></div>
                                            </td>
                                            <td><b class='fat_per_day'>0</b></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Kalorier</strong>:</td>
                                            <td colspan="2"> 
                                            <strong class='calc_under'>0</strong>
                                            </td>
                                            
                                          </tr>
                                        </table>
                                        
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="settings" data-title='Ekstreme Diet' data-carbo="25" data-pro='45' data-fat='30' data-macro='0.65'>
                                        
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="calc_tbl table">
                                          <tr>
                                            <td colspan="2"></td>
                                            
                                            <td>Grams per Day</td>
                                          </tr>
                                          <tr>
                                            <td><strong>karbohydrater:</strong>:</td>
                                            <td>
       <input type="text" class="percent carbo" readonly />
    <div class="bar"></div>
      </td>
                                            <td><b class='carbo_per_day'>0</b></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Protein</strong>:</td>
                                            <td> 
                                            <input type="text" class="percent pro" readonly />
											<div class="bar"></div>
                                            </td>
                                            <td><b class='pro_per_day'>0</b></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Fett</strong>:</td>
                                            <td>  
                                           <input type="text" class="percent fat" readonly />
                                            <div class="bar"></div>
                                            </td>
                                            <td><b class='fat_per_day'>0</b></td>
                                          </tr>
                                          <tr>
                                            <td><strong>Kalorier</strong>:</td>
                                            <td colspan="2"> 
                                            <strong class='calc_under'>0</strong>
                                            </td>
                                            
                                          </tr>
                                        </table>
										
                                        
                                        </div>
                                    </div>
									<div class="panel panel-default">
    <div class="panel-footer"><button type="button" class="btn defult_btn" id='useCaloriesVal'>Bruk disse verdiene</button></div>
  </div>
</div>
                                </div>
								
	</div>
</div>
   
  
</div>


<!--Script by hscripts.com-->
<!-- Free javascripts @ https://www.hscripts.com -->
<!-- Script by hscripts.com -->
<!--div class='resp_code align='center''>
<table id ='tab' align='center' cellspacing='0' cellpadding='0' style="width:100%;">
<tr><td align=center><br><b>Calorie Calculator</b><br><br><form name="frm" action="" class='frms noborders'><table><tr><td style="color: #3D366F; font-size:13px;">Age:</td><td><input type="text" name="age" id="age" align="left" size="3" maxlength="2" onkeypress="return cknum(event,age)"></td><td><font color="#3D366F" size="2">years</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Gender:</td><td><input type="radio" name="gen" id="gen" checked><font color="#3D366F" size="0.7">Male</font><input type="radio" name="gen" id="gen"><font color="#3D366F" size="0.7">Female</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Height:</td><td><select style='width:50%;' name="foot" id="foot" onchange="hcon()"><option value="1">1'</option><option value="2">2'</option><option value="3">3'</option><option value="4">4'</option><option value="5">5'</option><option value="6">6'</option><option value="7">7'</option></select><select style='width:40%;'name="inch" id="inch" onchange="hcon()"><option value="1">1"</option><option value="2">2"</option><option value="3">3"</option><option value="4">4"</option><option value="5">5"</option><option value="6">6"</option><option value="7">7"</option><option value="8">8"</option><option value="9">9"</option><option value="10">10"</option><option value="11">11"</option></select></td></tr><tr><td style="color: #3D366F; font-size:13px;">Cms :</td><td><input type="text" name="cen" id="cen" size="4" onkeyup="con(cen)"></td></tr><tr><td style="color: #3D366F; font-size:13px;">Weight:</td><td><input type="text" name="weight" id="weight" maxlength="3" size="3" onkeyup="isNumberKey(this.id)"></td><td><select name="wtype" id="wtype"><option value="kg">Kg</option><option value="pounds">Pounds</option></select></td></tr><tr><td style="color: #3D366F; font-size:13px;">Activeness:</td><td><select style='width:100px;' name="loa" id="loa"><option value="1">Sedentary</option><option value="2">Light Active</option><option value="3">Moderately Active</option><option value="4">Very Active</option><option value="5">Extra Active</option></select></td></tr><tr><td colspan='2' align="center"><input class='blue_button' type="button" value="Calculate The Calorie" onclick="cc()"><span id="dumdiv" align="center" style=" font-size: 10px;color: #dadada;"><a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;" href="https://www.hscripts.com">©h</a></span></td></tr></table></form>
<br><table align="center" border="0" class="frms noborders"><caption><b>Calorie Result</b></caption><tr><td align="right" style="color: #3D366F; font-size:13px;">Calorie Needed:</td><td><input type="text" id="rc" style="font-size:13px;" size="15" readonly></td><td><select name="caltype" id="caltype" onChange="convert()"><option value="g">Grams</option><option value="kg">Kilograms</option><option value="pounds">Pounds</option></select></td></tr></table><div style="color: #3D366F; font-size:13px;">You Must Intake The Following Daily</div><table class="frms noborders"><tr><td style="color: #3D366F; font-size:13px;">Fat:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rf" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l1"></label> per day</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Protein:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rp" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l2"></label> per day</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Karbohydrater:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rh" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l3"></label> per day</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Alcohol:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="ra" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l4"></label> per day</font></td></tr></table>
</tr></td>
</table>
</div>-->



<!-- <style>
.blue_button{background: none repeat scroll 0 0 #468CD2;border-bottom: 3px solid #3277BC;text-shadow: 1px 1px 0 #214D73;border: medium none;border-radius: 0.3em;color: #FFFFFF;cursor: pointer;font-weight: bold;margin: 10px 0;padding: 7px 14px;}
.frms input[type="text"], [type="password"], [type="file"], textarea, select {background: none repeat scroll 0 0 #fff;border: 1px solid #ddd;border-radius: 0.35em;height: 35px;margin-bottom: 15px;margin-top: 5px;padding: 0 0.5%;width: 99%;
}
.resp_code {background: none repeat scroll 0 0 #f8f8f8;border: 1px solid #ddd;border-radius: 0.25em;color: #333;font: 1em/1.3em Tahoma,Geneva,sans-serif;margin: 5px 10px 10px 20%;overflow: auto;padding: 10px 20px;width:50%;
}
@media only screen and (max-width:650px) {.resp_code {margin: 5px 1px 10px !important;width:auto !important;}
}
</style> -->

