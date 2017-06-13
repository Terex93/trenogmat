<div class="dishSubcats view">
<h2><?php echo __('Ads View'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dishSubcat['Ad']['id']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dishSubcat['Ad']['name']); ?>
			&nbsp;
		</dd>
                 <dd>
                    <dt><?php echo __('Image'); ?></dt>
                    <img src="<?php echo $this->webroot;?>files/ads/<?php echo $dishSubcat['Ad']['image']; ?>" width="100" height="100"/>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dishSubcat['Ad']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dishSubcat['Ad']['modified']); ?>
			&nbsp;
		</dd>

                
	</dl>
</div>

