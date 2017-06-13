
<div class="dishSubcats index">
	<h2><?php echo __('Ads List'); ?></h2>
    <div class="table-responsive">
	<table class="table table-bordered" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			

			<th><?php echo $this->Paginator->sort('name'); ?></th>
                        <th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
            
	<?php foreach ($dishSubcats as $dishSubcat): ?>
	<tr>
		
		
		<td><?php echo h($dishSubcat['Ad']['name']); ?>&nbsp;</td>
                <td><img src="<?php echo $this->webroot?>/files/ads/<?php echo h($dishSubcat['Ad']['image']); ?>" width="100px" height="100px"/>&nbsp</td>

		<td><?php echo h($dishSubcat['Ad']['created']); ?>&nbsp;</td>
		<td><?php echo h($dishSubcat['Ad']['modified']); ?>&nbsp;</td>
<!--		<td><?php //echo h($dishSubcat['DishSubcat']['status']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dishSubcat['Ad']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dishSubcat['Ad']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dishSubcat['DishSubcat']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dishSubcat['DishSubcat']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
    </div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

