<div class="smart-container">
<h2>Edit Protein Source</h2>

<br />

<div class="row">
    <div class="col-sm-4">

        <?php echo $this->Form->create('Protein');?>
    
        <br />
        <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->input('price_for_80', array('class' => 'form-control')); ?>
        <br />
       <?php echo $this->Form->input('protein_for_80', array('class' => 'form-control')); ?>
        <br />
		<?php echo $this->Form->input('carbs_for_80', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('fat_for_80', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('calorie_for_80', array('class' => 'form-control')); ?>
		<br/>
	    <?php echo $this->Form->input('price_for_100', array('class' => 'form-control')); ?>
        <br />
       <?php echo $this->Form->input('protein_for_100', array('class' => 'form-control')); ?>
        <br />
		<?php echo $this->Form->input('carbs_for_100', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('fat_for_100', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('calorie_for_100', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('price_for_120', array('class' => 'form-control')); ?>
        <br />
       <?php echo $this->Form->input('protein_for_120', array('class' => 'form-control')); ?>
        <br />
		<?php echo $this->Form->input('carbs_for_120', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('fat_for_120', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('calorie_for_120', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('price_for_150', array('class' => 'form-control')); ?>
        <br />
       <?php echo $this->Form->input('protein_for_150', array('class' => 'form-control')); ?>
        <br />
		<?php echo $this->Form->input('carbs_for_150', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('fat_for_150', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('calorie_for_150', array('class' => 'form-control')); ?>
		<br/>
	    <?php echo $this->Form->input('price_for_180', array('class' => 'form-control')); ?>
        <br />
       <?php echo $this->Form->input('protein_for_180', array('class' => 'form-control')); ?>
        <br />
		<?php echo $this->Form->input('carbs_for_180', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('fat_for_180', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('calorie_for_180', array('class' => 'form-control')); ?>
		<br/>
	   <?php echo $this->Form->input('price_for_200', array('class' => 'form-control')); ?>
        <br />
       <?php echo $this->Form->input('protein_for_200', array('class' => 'form-control')); ?>
        <br />
		<?php echo $this->Form->input('carbs_for_200', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('fat_for_200', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('calorie_for_200', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('price_for_250', array('class' => 'form-control')); ?>
        <br />
       <?php echo $this->Form->input('protein_for_250', array('class' => 'form-control')); ?>
        <br />
		<?php echo $this->Form->input('carbs_for_250', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('fat_for_250', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('calorie_for_250', array('class' => 'form-control')); ?>
		<br/>
		
        <?php echo $this->Form->input('active', array('type' => 'checkbox')); ?>
        <br />
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
        <?php echo $this->Form->end(); ?>

    </div>
</div>
</div>