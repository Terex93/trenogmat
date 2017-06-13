<div class="smart-container">
<div class="row">
<div class="col-sm-3">
<div class="dishSubcats form">
<?php echo $this->Form->create('Picode'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Picode'); ?></legend>
        <div class="form-group">
		<input type='hidden' name='data[Picode][res_id]' class="form-control" value='628'>
	<?php
		echo $this->Form->input('id');
		
        echo $this->Form->input('pincode',array('class' => 'form-control'));
		echo $this->Form->input('price',array('class' => 'form-control'));
	?>
    </div>
	<label> Deliverable : <input type='checkbox' name='data[Picode][deliverable]' value='yes' <?php if($deliver['Picode']['deliverable'] == 'yes'){ echo 'checked'; } ?>></label>
	</fieldset>
	<div class="submit"><input value="Submit" class='btn btn-primary' type="submit"></div>
</form>
</div>
</div>
<div class="col-sm-3">
<div class="actions action_menu">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Picode.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Picode.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Picodes'), array('action' => 'index')); ?></li>
	</ul>
</div>
</div>
</div>
</div>