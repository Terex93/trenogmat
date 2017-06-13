<div class="addmeal_sec">
  <div class="container">
    <div class="addmeal_inner">
      <div class="col-sm-12">
       
          <h1>OPPSUMMERING</h1>
          <!--div class="addmeal-msg">
            <p> Purchase this Product and Earn 6 Reward Points ($0.06)</p>
          </div-->
          
        </div>
      
      <div class="add-meal-scdl">
      <div class="col-sm-12">
      <div class="row">
      	<div class="col-sm-6">
        	<div class="img-addmeal"><img src="https://musclechow.co.nz/wp-content/uploads/2016/10/13662282_1091709880923117_2155296923874764318_o-510x510.jpg" alt=""  class=" img-responsive">
        </div>
        </div>
        
        <div class="col-sm-6">
        	<h2>Lag ditt eget måltid</h2>
       
        <div class="addmeal-price">Kr 39<br>
		<span>Pris fra 39kr</span>

        </div>
        <p class="creat-admeal">Lag en måltid tilpasset din behov</p>
        <p class="selct-admeal">Velg <span>PROTEIN</span> ⇒ Velg <span>KARBS</span> ⇒ Velg <span>Grønnsaker</span> ⇒ Velg </span>tillegg</span></p>
      
      
      <div class="addmeal-frm">
      <div class="row">
      <form class="frmadmeal">
      <div class="form-group col-sm-6">
      <label>Protein Kilde *</label>
      <select class="form-control" id='protein' required>
      <option value="">Velg Alternativ...</option>
	  <?php

  foreach($proteins as $protein){ ?>
	    
		<option data-80price="<?php echo $protein['Protein']['price_for_80']; ?>"
        data-80protein="<?php echo $protein['Protein']['protein_for_80']; ?>" data-80carbs="<?php echo $protein['Protein']['carbs_for_80']; ?>" 
		data-80fat="<?php echo $protein['Protein']['fat_for_80']; ?>" data-80calorie="<?php echo $protein['Protein']['calorie_for_80']; ?>"
        data-100price="<?php echo $protein['Protein']['price_for_100']; ?>"
        data-100protein="<?php echo $protein['Protein']['protein_for_100']; ?>" data-100carbs="<?php echo $protein['Protein']['carbs_for_100']; ?>" 
		data-100fat="<?php echo $protein['Protein']['fat_for_100']; ?>" data-100calorie="<?php echo $protein['Protein']['calorie_for_100']; ?>"
		data-120price="<?php echo $protein['Protein']['price_for_120']; ?>"
        data-120protein="<?php echo $protein['Protein']['protein_for_120']; ?>" data-120carbs="<?php echo $protein['Protein']['carbs_for_120']; ?>" 
		data-120fat="<?php echo $protein['Protein']['fat_for_120']; ?>" data-120calorie="<?php echo $protein['Protein']['calorie_for_120']; ?>"
		data-150price="<?php echo $protein['Protein']['price_for_150']; ?>"
        data-150protein="<?php echo $protein['Protein']['protein_for_150']; ?>" data-150carbs="<?php echo $protein['Protein']['carbs_for_150']; ?>" 
		data-150fat="<?php echo $protein['Protein']['fat_for_150']; ?>" data-150calorie="<?php echo $protein['Protein']['calorie_for_150']; ?>"
		data-180price="<?php echo $protein['Protein']['price_for_180']; ?>"
        data-180protein="<?php echo $protein['Protein']['protein_for_180']; ?>" data-180carbs="<?php echo $protein['Protein']['carbs_for_180']; ?>" 
		data-180fat="<?php echo $protein['Protein']['fat_for_180']; ?>" data-180calorie="<?php echo $protein['Protein']['calorie_for_180']; ?>"
		data-200price="<?php echo $protein['Protein']['price_for_200']; ?>"
        data-200protein="<?php echo $protein['Protein']['protein_for_200']; ?>" data-200carbs="<?php echo $protein['Protein']['carbs_for_200']; ?>" 
		data-200fat="<?php echo $protein['Protein']['fat_for_200']; ?>" data-200calorie="<?php echo $protein['Protein']['calorie_for_200']; ?>"
		data-250price="<?php echo $protein['Protein']['price_for_250']; ?>"
        data-250protein="<?php echo $protein['Protein']['protein_for_250']; ?>" data-250carbs="<?php echo $protein['Protein']['carbs_for_250']; ?>" 
		data-250fat="<?php echo $protein['Protein']['fat_for_250']; ?>" data-250calorie="<?php echo $protein['Protein']['calorie_for_250']; ?>"
		value="<?php echo $protein['Protein']['id']; ?>"><?php echo $protein['Protein']['name']; ?></option>

	  <?php } ?>
         
      </select>
      </div>
      <div class="form-group col-sm-6">
      <label>Protein Porsjon *</label>
	  
	  <select class="form-control" id='protein_portion' required>
      <option value="">Velg Alternativ...</option>
      <option value="80">80g</option>
      <option value="100">100g</option>
      <option value="120">120g</option>
      <option value="150">150g</option>
      <option value="180">180g</option>
      <option value="200">200g</option>
	  <option value="250">250g</option>  
      </select>
	  

      </div>
      <div class="clearfix"> 
      <div class="form-group col-sm-6">
      <label>Karbs Kilde *</label>
      <select class="form-control" id='carb' required>
      <option value="">Velg Alternativ...</option>
	  <option value="no_carb">Ingen</option>
	  <?php foreach($carbs as $Carb){ ?>
	    
		<option data-50price="<?php echo $Carb['Carb']['price_for_50']; ?>"
        data-50protein="<?php echo $Carb['Carb']['protein_for_50']; ?>" data-50carbs="<?php echo $Carb['Carb']['carbs_for_50']; ?>" 
		data-50fat="<?php echo $Carb['Carb']['fat_for_50']; ?>" data-50calorie="<?php echo $Carb['Carb']['calorie_for_50']; ?>" 
		data-80price="<?php echo $Carb['Carb']['price_for_80']; ?>"
        data-80protein="<?php echo $Carb['Carb']['protein_for_80']; ?>" data-80carbs="<?php echo $Carb['Carb']['carbs_for_80']; ?>" 
		data-80fat="<?php echo $Carb['Carb']['fat_for_80']; ?>" data-80calorie="<?php echo $Carb['Carb']['calorie_for_80']; ?>"
        data-100price="<?php echo $Carb['Carb']['price_for_100']; ?>"
        data-100protein="<?php echo $Carb['Carb']['protein_for_100']; ?>" data-100carbs="<?php echo $Carb['Carb']['carbs_for_100']; ?>" 
		data-100fat="<?php echo $Carb['Carb']['fat_for_100']; ?>" data-100calorie="<?php echo $Carb['Carb']['calorie_for_100']; ?>"
		data-120price="<?php echo $Carb['Carb']['price_for_120']; ?>"
        data-120protein="<?php echo $Carb['Carb']['protein_for_120']; ?>" data-120carbs="<?php echo $Carb['Carb']['carbs_for_120']; ?>" 
		data-120fat="<?php echo $Carb['Carb']['fat_for_120']; ?>" data-120calorie="<?php echo $Carb['Carb']['calorie_for_120']; ?>"
		data-150price="<?php echo $Carb['Carb']['price_for_150']; ?>"
        data-150protein="<?php echo $Carb['Carb']['protein_for_150']; ?>" data-150carbs="<?php echo $Carb['Carb']['carbs_for_150']; ?>" 
		data-150fat="<?php echo $Carb['Carb']['fat_for_150']; ?>" data-150calorie="<?php echo $Carb['Carb']['calorie_for_150']; ?>"
		data-180price="<?php echo $Carb['Carb']['price_for_180']; ?>"
        data-180protein="<?php echo $Carb['Carb']['protein_for_180']; ?>" data-180carbs="<?php echo $Carb['Carb']['carbs_for_180']; ?>" 
		data-180fat="<?php echo $Carb['Carb']['fat_for_180']; ?>" data-180calorie="<?php echo $Carb['Carb']['calorie_for_180']; ?>"
		data-200price="<?php echo $Carb['Carb']['price_for_200']; ?>"
        data-200protein="<?php echo $Carb['Carb']['protein_for_200']; ?>" data-200carbs="<?php echo $Carb['Carb']['carbs_for_200']; ?>" 
		data-200fat="<?php echo $Carb['Carb']['fat_for_200']; ?>" data-200calorie="<?php echo $Carb['Carb']['calorie_for_200']; ?>"
		data-250price="<?php echo $Carb['Carb']['price_for_250']; ?>"
        data-250protein="<?php echo $Carb['Carb']['protein_for_250']; ?>" data-250carbs="<?php echo $Carb['Carb']['carbs_for_250']; ?>" 
		data-250fat="<?php echo $Carb['Carb']['fat_for_250']; ?>" data-250calorie="<?php echo $Carb['Carb']['calorie_for_250']; ?>"
		data-300price="<?php echo $Carb['Carb']['price_for_300']; ?>"
        data-300protein="<?php echo $Carb['Carb']['protein_for_300']; ?>" data-300carbs="<?php echo $Carb['Carb']['carbs_for_300']; ?>" 
		data-300fat="<?php echo $Carb['Carb']['fat_for_300']; ?>" data-300calorie="<?php echo $Carb['Carb']['calorie_for_300']; ?>"
		value="<?php echo $Carb['Carb']['id']; ?>"><?php echo $Carb['Carb']['name']; ?></option>

	  <?php } ?>
         
      </select>
      </div>
      <div class="form-group col-sm-6">
      <label>Karbs Porsjon *</label>
	  <select class="form-control" id='carb_portion' required>
      <option value="">Velg Alternativ...</option>
	  <option value="50">50g</option>
      <option value="80">80g</option>
      <option value="100">100g</option>
      <option value="120">120g</option>
      <option value="150">150g</option>
      <option value="180">180g</option>
      <option value="200">200g</option>
	  <option value="250">250g</option>  
      <option value="300">300g</option> 	  
      </select>
      </div>
	  </div>
      
	  <div class="clearfix">
      <div class="form-group col-sm-6">
      <label>Grønnsaker Kilde *</label>
      <select class="form-control" id='vegetable' required>
      <option value="">Velg Alternativ...</option>
	  <option value="no_veg">Ingen</option>
	  <?php foreach($vegetables as $Vegetable){ ?>
	    
		<option data-50price="<?php echo $Vegetable['Vegetable']['price_for_50']; ?>"
        data-50protein="<?php echo $Vegetable['Vegetable']['protein_for_50']; ?>" data-50carbs="<?php echo $Vegetable['Vegetable']['carbs_for_50']; ?>" 
		data-50fat="<?php echo $Vegetable['Vegetable']['fat_for_50']; ?>" data-50calorie="<?php echo $Vegetable['Vegetable']['calorie_for_50']; ?>" 
        data-100price="<?php echo $Vegetable['Vegetable']['price_for_100']; ?>"
        data-100protein="<?php echo $Vegetable['Vegetable']['protein_for_100']; ?>" data-100carbs="<?php echo $Vegetable['Vegetable']['carbs_for_100']; ?>" 
		data-100fat="<?php echo $Vegetable['Vegetable']['fat_for_100']; ?>" data-100calorie="<?php echo $Vegetable['Vegetable']['calorie_for_100']; ?>"
		data-150price="<?php echo $Vegetable['Vegetable']['price_for_150']; ?>"
        data-150protein="<?php echo $Vegetable['Vegetable']['protein_for_150']; ?>" data-150carbs="<?php echo $Vegetable['Vegetable']['carbs_for_150']; ?>" 
		data-150fat="<?php echo $Vegetable['Vegetable']['fat_for_150']; ?>" data-150calorie="<?php echo $Vegetable['Vegetable']['calorie_for_150']; ?>"
		data-200price="<?php echo $Vegetable['Vegetable']['price_for_200']; ?>"
        data-200protein="<?php echo $Vegetable['Vegetable']['protein_for_200']; ?>" data-200carbs="<?php echo $Vegetable['Vegetable']['carbs_for_200']; ?>" 
		data-200fat="<?php echo $Vegetable['Vegetable']['fat_for_200']; ?>" data-200calorie="<?php echo $Vegetable['Vegetable']['calorie_for_200']; ?>"
		data-250price="<?php echo $Vegetable['Vegetable']['price_for_250']; ?>"
        data-250protein="<?php echo $Vegetable['Vegetable']['protein_for_250']; ?>" data-250carbs="<?php echo $Vegetable['Vegetable']['carbs_for_250']; ?>" 
		data-250fat="<?php echo $Vegetable['Vegetable']['fat_for_250']; ?>" data-250calorie="<?php echo $Vegetable['Vegetable']['calorie_for_250']; ?>"
		value="<?php echo $Vegetable['Vegetable']['id']; ?>"><?php echo $Vegetable['Vegetable']['name']; ?></option>

	  <?php } ?>
         
      </select>
      </div>
      <div class="form-group col-sm-6">
      <label>Grønnsaker Porsjon *</label>
	  <select class="form-control" id='vegetable_portion' required>
      <option value="">Velg Alternativ...</option>
	  <option value="50">50g</option>
      <option value="100">100g</option>
      <option value="150">150g</option>
      <option value="200">200g</option>
	  <option value="250">250g</option>  	  
      </select>
      </div>
      </div>
      
      
      
    
      
        <div class="form-group col-sm-6">
        <label>Legg til Fett </label>
        </div>
        
         <div class="form-group col-sm-6" id='fat'>
		        
				<label><input type="checkbox" data-price="7" data-calorie="115" 
				data-carbs="4.4" data-protein="4.2"
				data-fat="10"
				value='20g Mandler (kr 7)' id='almond'> 20g Mandler (Kr 7)</label>
				<label><input type="checkbox" data-price="7" data-calorie="80" 
				data-carbs="4.5" data-protein="1"
				data-fat="7.5"
				value='50g Avokado (kr 7)' id='avocado'> 50g Avokado (Kr 7)</label>

        </div>
        
         <div class="form-group col-sm-6">
      <label>Legg til Saus (30ML)</label>
     
      </div>
      
       <div class="form-group col-sm-6">
      <select class="form-control" id='sauce'>
      <option value="">Velg Alternativ...</option>
	  <?php foreach($sauces as $sauce){ ?>
	  <option value="<?php echo $sauce['Sauce']['id']; ?>" data-price="<?php echo $sauce['Sauce']['price']; ?>" data-calorie="<?php echo $sauce['Sauce']['calorie']; ?>"
	  data-carbs="<?php echo $sauce['Sauce']['carbs']; ?>" data-protein="<?php echo $sauce['Sauce']['protein']; ?>" data-fat="<?php echo $sauce['Sauce']['fat']; ?>"
	  ><?php echo $sauce['Sauce']['name']; ?>(<?php echo $sauce['Sauce']['price']; ?>)</option>
	  <?php } ?>   
      </select>
      </div>
 
   <div class="clearfix" style='display:none;'> 
  <div class="form-group col-sm-6">
	<label>Total Tillegg :</label>
  </div>
  
  <div class="form-group col-sm-6">
	Kr <b id='customOptionalPrice'>0</b>
  </div>
    </div>
  
   <div class="clearfix">
  <div class="form-group col-sm-6">
	<label>Grand Total :</label>
  </div>
  
  <div class="form-group col-sm-6">
	Kr <b id='grandPrice'>39</b>
  </div>
    </div>
	  
	  
       <div class="form-group col-sm-12">
              <div class="addmeal-shw">
              	<ul>
                	<li>Total Kalorier: <b id='cal_custom'>0</b></li>
                    <li>Total Fett: <b id='fat_custom'>0</b></li>
                    <li>Total Karbs: <b id='carbs_custom'>0</b></li>
                    <li>Total Protein: <b id='protein_custom'>0</b></li>
                </ul>
              </div>
       </div>
       
        <div class="form-group col-sm-12">
        <div class="subtaddmeals">
        <input step="1" min="1" max="" name="quantity" value="1" title="Qty" id='customQty' class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric" type="number">
        <button type="submit" class="btn btn-danger btn-md" id='addCart'>Legg i handlevogn</button>
        </div>
        </div>
        <div class='nb'><b>NB:</b> Alle gram er veid kokt.</div>
          </form>
      
      </div>
      </div>
      
      </div>
      
      </div>
      </div>
      </div>
     
    </div>
    <!--contact_sec_inner--> 
  </div>
  <!--container--> 
</div>
<!--contact_sec-->
<input type='hidden' id='total_price_protein' value='0'>
<input type='hidden' id='total_calorie_protein' value='0'>
<input type='hidden' id='total_fat_protein' value='0'>
<input type='hidden' id='total_carb_protein' value='0'>
<input type='hidden' id='total_protein_protein' value='0'>

<input type='hidden' id='total_price_carb' value='0'>
<input type='hidden' id='total_calorie_carb' value='0'>
<input type='hidden' id='total_fat_carb' value='0'>
<input type='hidden' id='total_carb_carb' value='0'>
<input type='hidden' id='total_protein_carb' value='0'>

<input type='hidden' id='total_price_vegetable' value='0'>
<input type='hidden' id='total_calorie_vegetable' value='0'>
<input type='hidden' id='total_fat_vegetable' value='0'>
<input type='hidden' id='total_carb_vegetable' value='0'>
<input type='hidden' id='total_protein_vegetable' value='0'>

<input type='hidden' id='total_price_fat_almond' value='0'> 
<input type='hidden' id='total_calorie_fat_almond' value='0'>
<input type='hidden' id='total_fat_fat_almond' value='0'>
<input type='hidden' id='total_carb_fat_almond' value='0'>
<input type='hidden' id='total_protein_fat_almond' value='0'>

<input type='hidden' id='total_price_fat_avocado' value='0'>
<input type='hidden' id='total_calorie_fat_avocado' value='0'>
<input type='hidden' id='total_fat_fat_avocado' value='0'>
<input type='hidden' id='total_carb_fat_avocado' value='0'>
<input type='hidden' id='total_protein_fat_avocado' value='0'>

 
<input type='hidden' id='total_price_sauce' value='0'>
<input type='hidden' id='total_calorie_sauce' value='0'>
<input type='hidden' id='total_fat_sauce' value='0'>
<input type='hidden' id='total_carb_sauce' value='0'>
<input type='hidden' id='total_protein_sauce' value='0'>

<input type='hidden' id='option_p' value='0'>
<input type='hidden' id='real_p' value='0'>
<style>
.nb {
    float: left;
    font-size: 18px;
    width: 100%;
	padding-left: 14px;
}
@media screen only and (max-width: 768px){
	.add-meal-scdl h2,.addmeal-price span { font-size:25px;}
	.subtaddmeals {
    float: left;
    margin-bottom: 20px;
    width: 100%;
}
	
}
</style>
		<div class="modal fade modal-dialog_pop" id="zip" tabindex="-1" role="dialog" aria-labelledby="myZip" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-popup">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <a href="#" class="close-link guri" data-dismiss="modal" aria-label="Close"><i class="icon_close_alt2"></i></a>
                   
                    <form action="" method="post"class="popup-form" id="myZip">
                        <div class="login_icon"><i class="icon_lock_alt"></i></div>
                        <input type="text" name="data[Picode][zip]" class="form-control form-white" placeholder="Skriv inn postnummer">
                        <button  type="submit" class="btn btn-submit defult_btn btnwale">Sende inn</button>
                    </form>
                </div>
            </div>

        </div>