<div class="smart-container">
<h2>Admin Add Additional Charges</h2>

<br />

<div class="row">
    <div class="col-sm-6">
 
        <?php echo $this->Form->create('Additionalcharge');?>
     <div class="form-group">  <label class="control-label col-sm-12"> Do you want to add "halal" charge on the front end : <input type='checkbox' id='halal_admin' name='data[Additionalcharge][halal_display]' value='yes' <?php if($addcharges[0]['Additionalcharge']['halal_display'] == 'Yes'){ echo 'checked'; } ?>>  </label> <div class="col-sm-11"><input id='halal_ad' class="form-control" type='number' name='data[Additionalcharge][halal_price]' value='<?php if($addcharges[0]['Additionalcharge']['halal_price']){ echo $addcharges[0]['Additionalcharge']['halal_price']; } ?>'> </div> <div class="col-sm-1 "> <span class="percnt">%</span></div>
     </div>
       
      
       <div class="form-group">
       <label class="control-label col-sm-12"> Do you want to add "gluten" charge on the front end : <input type='checkbox' id='gluten_admin' name='data[Additionalcharge][gluten_display]' value='yes' <?php if($addcharges[0]['Additionalcharge']['gluten_display'] == 'Yes'){ echo 'checked'; } ?>> </label> <div class="col-sm-11"><input id='gluten_ad' class="form-control" type='number' name='data[Additionalcharge][gluten_price]' value='<?php if($addcharges[0]['Additionalcharge']['gluten_price']){ echo $addcharges[0]['Additionalcharge']['gluten_price']; } ?>'></div><div class="col-sm-1"> <span class="percnt">%</span></div>
		
 </div>
 <div class="form-group">
 <div class="col-sm-12 ">
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary sbmt')); ?>  
        <?php echo $this->Form->end(); ?>
</div>
  </div>  </div>
</div>
</div>

<script>
$(document).ready(function(){
	$('#AdditionalchargeAdminAddForm').submit(function(event){
		if($('#halal_admin').is(':checked')){
			if($('#halal_ad').val() == ''){
			    event.preventDefault();
				alert('Please fill the halal charge');
			}
		}
		if($('#gluten_admin').is(':checked')){
			if($('#gluten_ad').val() == ''){
			    event.preventDefault();
				alert('Please fill the gluten charge');
			}
		}
	});
});
</script> 