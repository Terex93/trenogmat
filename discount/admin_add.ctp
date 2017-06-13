<div class="smart-container">
<h2>Admin Add Discount</h2>

<br />

<div class="row">
    <div class="col-sm-4">

        <?php echo $this->Form->create('Coupon');?>
         
        <?php echo $this->Form->input('universal_promocode', array('class' => 'form-control', 'value' => $coupon[0]['Coupon']['universal_promocode'])); ?>
        <br />
        <?php echo $this->Form->input('promocode', array('class' => 'form-control', 'value' => $coupon[0]['Coupon']['promocode'])); ?>
		
        <br />
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>  
        <?php echo $this->Form->end(); ?>

    </div>
</div> 
</div>