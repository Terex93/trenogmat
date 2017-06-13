<div class="taxes form">
<?php echo $this->Form->create('Partnerpromocode'); ?>
	<fieldset>
		<legend><?php echo __('Add Partner promocode'); ?></legend>
	<?php
             
		        echo $this->Form->input('promocode',array('type'=>'text'));
                echo $this->Form->input('res_id',array('type'=>'hidden','value'=>'628'));
                echo $this->Form->input('percentage');
                
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>   
	<ul>

		<li>
                <?php echo $this->Html->link('View all Partner promocode', array('controller' => 'partnerpromocodes', 'action' => 'index', $resid), array('class' => 'btn btn-default btn-xs')); ?>     
                </li>    
	</ul>
</div>
