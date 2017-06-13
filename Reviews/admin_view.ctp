<div class="times view">
<h2><?php echo __('Review'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($time['Review']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Restaurant'); ?></dt>
		<dd>
			<?php echo $time['Restaurant']['name']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($time['Review']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($time['Review']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($time['Review']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food Quality'); ?></dt>
		<dd>
			<?php echo h($time['Review']['food_quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Punctuality'); ?></dt>
		<dd>
			<?php echo h($time['Review']['punctuality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($time['Review']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Courtesy'); ?></dt>
		<dd>
			<?php echo h($time['Review']['courtesy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($time['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('created'); ?></dt>
		<dd>
			<?php echo h($time['Review']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('modified'); ?></dt>
		<dd>
			<?php echo h($time['Review']['modified']); ?>
			&nbsp;
		</dd>
		
           
	</dl>
</div>

