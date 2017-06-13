 <div class="smart-container">
 <h2>Add Dishes</h2>
<br />
<div class="row">
    <div class="col-sm-5">
        <div class="add_dish">
         <div class="adddis">   
        <?php echo $this->Form->create('Product', array('type' => 'file', 'id' => 'addpro')); ?>
        </div>
        <div class="adddis">
        <?php echo $this->Form->input('dishcategory_id', ['options' => $DishCategory, 'label' => 'Dish Category:', 'id' => "dishcatname", 'empty' => 'Choose Dish category','required']); ?>  
        </div>
        <div class="adddis">        
        <?php echo $this->Form->input('res_id', array('class' => 'form-control', 'type' => 'hidden')); ?>
        </div>
        <div class="adddis">
        <?php echo $this->Form->input('name', array('class' => 'form-control','required')); ?>     
        </div>           
		<div class="adddis">
        <?php echo $this->Form->input('description', array('class' => 'form-control')); ?>
        </div>
        <div class="adddis">
        <?php echo $this->Form->input('vat', array('class' => 'form-control')); ?>
        </div>
        <!--div class="adddis">
		<?php echo $this->Form->input('quantity', array('class' => 'form-control')); ?>
        </div-->
        <div class="adddis">
        <div class="fileUpload btn btn-default">
        <span>Upload Image</span>
        <?php echo $this->Form->input('image', array('type' => 'file', 'class' => 'form-control upload')); ?>
        </div>
		</div>
        
        <?php if($loggeduser!=427){  ?>
        
        <input type="hidden" name="rid" id="rid" value="<?php echo $id; ?>">
        
		
       
		<div class="input number adddis">
			
			<input id="small_price" name="data[Product][small_price]" placeholder="Small Price" type="text" class="form-control">
            
			<input id="small_cal" name="data[Product][small_cal]" placeholder="Calories" type="text" class="form-control">
			<input id="small_carbo" name="data[Product][small_carbo]" placeholder="Carbohydrates" type="text" class="form-control">
			<input id="small_nutri" name="data[Product][small_nutri]" placeholder="Nutients" type="text" class="form-control">
			<input id="small_fat" name="data[Product][small_fat]" placeholder="Fat" type="text" class="form-control">
			<input id="small_qty" name="data[Product][small_qty]" placeholder="Small Quantity" type="number" class="form-control pqty" max="" min="0">
        </div>
     
		
		<div class="input number adddis">
			
			<input id="medium_price" name="data[Product][medium_price]" placeholder="Medium Price" type="text" class="form-control">
			<input id="medium_cal" name="data[Product][medium_cal]" placeholder="Calories" type="text" class="form-control">
			<input id="medium_carbo" name="data[Product][medium_carbo]" placeholder="Carbohydrates" type="text" class="form-control">
			<input id="medium_nutri" name="data[Product][medium_nutri]" placeholder="Nutients" type="text" class="form-control">
			<input id="medium_fat" name="data[Product][medium_fat]" placeholder="Fat" type="text" class="form-control">
			<input id="medium_qty" name="data[Product][medium_qty]" placeholder="Medium Quantity" type="number" class="form-control pqty" max="" min="0">
        </div>
		
		<div class="input number adddis">
			
			<input id="large_price" name="data[Product][large_price]" placeholder="Large Price" type="text" class="form-control">
			<input id="large_cal" name="data[Product][large_cal]" placeholder="Calories" type="text" class="form-control">
			<input id="large_carbo" name="data[Product][large_carbo]" placeholder="Carbohydrates" type="text" class="form-control">
			<input id="large_nutri" name="data[Product][large_nutri]" placeholder="Nutients" type="text" class="form-control">
			<input id="large_fat" name="data[Product][large_fat]" placeholder="Fat" type="text" class="form-control">
			<input id="large_qty" name="data[Product][large_qty]" placeholder="Large Quantity" type="number" class="form-control pqty" max="" min="0">
        </div>
		
		<?php } ?>
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
        <?php echo $this->Form->end(); ?>
            <br />
            <br />
        </div>
    </div>
</div>
</div>
<br />
<br />

<!--<h3>Actions</h3>-->

<?php //echo $this->Html->link('Lsit of Products', array('action' => 'index'), array('class' => 'btn btn-default')); ?>

<br />
<br />
<script type="text/javascript">
    $('#sbtn').off("click").on("click", function () {
        $('#proassociate').val('');
        $('#proassociate').val($('#tokenize').tokenize().toArray());
        
    });
    $('#sbtna').off("click").on("click", function () {
        $('#proassociatea').val('');
        $('#proassociatea').val($('#tokenizea').tokenize().toArray());
       
    });

</script>
<style type="text/css">
    #sbtn,#sbtna {
        background: #fff !important;
        border: 1px solid #ddd;
        border-radius: 5px;
        height: auto !important;
        margin: 14px 0 0 !important;
        padding: 5px;
        width: 42% !important;
        white-space: nowrap;
        font-weight: 700;
        box-shadow: 0 2px 0 #ccc;
        cursor: pointer;
    }
    #sbtn:hover,#sbtna:hover{
        box-shadow: none !important;
    }

</style>