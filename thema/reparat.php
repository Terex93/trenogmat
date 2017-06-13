<div class="modal fade" id="myModalcal" role="dialog">  
    <div class="modal-dialog">
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
                       
            </div>
               
                <div class="form-row">
              <div class="col-xs-6 form-group ">
               <label>Høyde(cms)</label>
              
              <input class="form-control" type="text" name="cen" id="cen" size="4" onkeyup="con(cen)">
             
              </div>
                           
            </div>
			 <div class="form-row">
              <div class="col-xs-6 form-group ">
            <label>Aktivitetsnivå</label>
              
             	<select class="form-control" name="loa" id="loa"><option value="1">Lite eller ingen trening</option><option value="2">Lett trening</option><option value="3">Moderat trening</option><option value="4">Tung trening</option><option value="5">Veldig tung trening</option></select>
             
              </div>
                           
            </div>
				
                    <div class="form-group">
                     <div id="dc_results" class="alert alert-success msg_cal" style="display:none;">
						  <h4>For å møte vekten målet din, du trenger en tilsverende inntakk på&nbsp;**<strong><span id="calAmount"></span>&nbsp;kalorier per dag</strong>**<br/>*NB! Resultatet må kun anses som omtrentlig. Ingen kalkulator eller formel i verden kan ta høyde for individuelle forkjeller i benbygning, muskelmasse osv  <button type='button' class="btn btn-danger btn-xs" id='usecal' data-dismiss="modal">Bruk resultatet</button></h4>
					  </div>
                      </div>
					  
					  
					  
					  
					  
					  <table style='display:none;' align="center" border="0" class="frms noborders"><caption><b>Calorie Result</b></caption><tr><td align="right" style="color: #3D366F; font-size:13px;">Calorie Needed:</td><td><input type="text" id="rc" style="font-size:13px;" size="15" readonly></td><td><select name="caltype" id="caltype" onChange="convert()"><option value="g">Grams</option><option value="kg">Kilograms</option><option value="pounds">Pounds</option></select></td></tr></table><!--div style="color: #3D366F; font-size:13px;">You Must Intake The Following Daily</div--><table class="frms noborders" style='display:none;'><tr><td style="color: #3D366F; font-size:13px;">Fat:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rf" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l1"></label> per day</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Protein:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rp" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l2"></label> per day</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Carbohydrate:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="rh" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l3"></label> per day</font></td></tr><tr><td style="color: #3D366F; font-size:13px;">Alcohol:</td><td style="color: #3D366F; font-size:13px;"><input type="text" id="ra" style="font-size:13px;" size="10" readonly></td><td><font color="#3D366F" size="2" style='float:right'><label id="l4"></label> per day</font></td></tr></table>
					  
					  
                   
                     
                         <div class="col-xs-12 form-group ">
                        <input class='btn btn-sm defultblk_btn blue_button pull-right' type="button" value="Beregn" onclick="cc()">
                        </div>
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

 