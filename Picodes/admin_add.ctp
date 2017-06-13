<div class="smart-container">
<div class="row">
<div class="col-sm-3">
<div class="dishSubcats form">
<?php echo $this->Form->create('Picode'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Pincode'); ?></legend>
	<input type='hidden' name='data[Picode][res_id]' value='628'>
     <div class="form-group add-pincode">
	<?php
		
                echo $this->Form->input('pincode', array('class' => 'form-control'));
		echo $this->Form->input('price', array('class' => 'form-control'));
		echo $this->Form->input('deliverable', array(
                                  'type'=>'checkbox', 'value' => 'yes') 
  ) ;
	?>
    </div>
	
	</fieldset>
	<div class="submit"><input value="Submit" class='btn btn-primary' type="submit"></div>
</form>
</div>
</div>
<div class="col-sm-3">
<div class="actions action_menu">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pincodes'), array('action' => 'index')); ?></li>
	</ul>
</div>
</div>
</div>
</div>
