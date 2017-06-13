<div class="dishSubcats form">
<?php echo $this->Form->create('Ad',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Ads'); ?></legend>
	<?php
		echo $this->Form->input('id');
		
		echo $this->Form->input('name');
	
	?>
                 <img src="<?php echo $this->webroot;?>files/ads/<?php echo $this->request->data['Ad']['image']; ?>" width="100" height="100"/>
                <input type="hidden" value="<?php echo $this->request->data['Ad']['image']; ?>" name="data[Ad][img]"/>	
                <?php 
        
        echo $this->Form->input('image',array('type'=>'file'));
        ?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

