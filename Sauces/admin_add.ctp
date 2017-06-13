<div class="smart-container">
<h2>Add Sauce Source</h2>

<br />

<div class="row">
    <div class="col-sm-4">

        <?php echo $this->Form->create('Sauce');?>
    
        <br />
        <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->input('price', array('class' => 'form-control')); ?>
        <br />
       <?php echo $this->Form->input('protein', array('class' => 'form-control')); ?>
        <br />
		<?php echo $this->Form->input('carbs', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('fat', array('class' => 'form-control')); ?>
		<br/>
		<?php echo $this->Form->input('calorie', array('class' => 'form-control')); ?>
		<br/>
        <?php echo $this->Form->input('active', array('type' => 'checkbox')); ?>
        <br />
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
        <?php echo $this->Form->end(); ?>

    </div>
</div>
</div>