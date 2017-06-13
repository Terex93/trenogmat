<div class="smart-container">
<h2>Admin Edit Product</h2>


<div class="row">
    <div class="col-sm-5">
    <div class="add_dish edt_prdct">

        <?php echo $this->Form->create('Product',array('type'=>'file')); ?>
        <?php echo $this->Form->input('id'); ?>

        <?php echo $this->Form->input('dishcategory_id', ['options' => $DishCategory, 'label' => 'Dish Category:', 'id' => "dishcatname", 'empty' => 'Choose Dish category', 'class' => 'form-control']); ?> <br />

        <?php echo $this->Form->input('res_id', ['options' => $restaurants, 'label' => 'Restaurant Name:', 'class' => 'form-control']); ?>

        <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
        <div class="margntp20">
        <?php echo $this->Form->input('description', array('class' => 'form-control ckeditor')); ?>
        </div>
         <div class="col-sm-12">
         <div class="margntp20">
        <?php echo $this->Form->input('vat', array('class' => 'form-control')); ?>
        </div>
        </div>
        <div class="col-sm-12">
        <div class="btn btn-default btn-file imgupld">
        <?php
        echo $this->Html->Image('/files/product/' . $product['Product']['image'], array('width' => 100, 'height' => 100, 'alt' => $product['Product']['image'], 'class' => 'image'));
        echo $this->Form->input('image', array('type' => 'file', 'class' => 'form-control'));
        ?>
        </div>
        
        </div>
        
        
        <?php if($loggeduser!=427){  ?>
        

           
         <input type="hidden" name="rid" id="rid" value="<?php echo $id; ?>">
		<div class="input number flds">
			<!--<input id="small" type="checkbox">Small-->
            <div class="col-sm-6">
            <div class="margntp20">
            <label>Small Price</label>
			<input id="small_price" name="data[Product][small_price]" placeholder="Small Price" type="text" class="form-control" value="<?php echo $product['Product']['small_price'];  ?>">
            </div>
            </div>
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Small Cal</label>
			<input id="small_cal" name="data[Product][small_cal]" placeholder="Calories" type="text" class="form-control" value="<?php echo $product['Product']['small_cal'];  ?>">
            </div>
            </div>
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Small Carbo</label>
			<input id="small_carbo" name="data[Product][small_carbo]" placeholder="Carbohydrates"  type="text" class="form-control" value="<?php echo $product['Product']['small_carbo'];  ?>">
            </div>
            </div>
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Small Protein </label>
			<input id="small_nutri" name="data[Product][small_nutri]" placeholder="Nutients" type="text"  class="form-control" value="<?php echo $product['Product']['small_nutri'];  ?>">
            </div>
            </div>
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Small Fat</label>
			<input id="small_fat" name="data[Product][small_fat]" placeholder="Fat" type="text" class="form-control" value="<?php echo $product['Product']['small_fat'];  ?>">
            </div>
            </div>
			 <div class="col-sm-6">
			 <div class="margntp20">
            <label>Small Quantity</label>
			<input id="small_fat" max="" min="0" name="data[Product][small_qty]" placeholder="Quantity" type="number" class="form-control" value="<?php echo $product['Product']['small_qty'];  ?>">
            </div>
			</div>
        </div>
		
		<div class="input number flds">
			<!--<input id="medium" type="checkbox">Medium-->
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Medium Price</label>
			<input id="medium_price" name="data[Product][medium_price]" placeholder="Medium Price"  type="text" class="form-control" value="<?php echo $product['Product']['medium_price'];  ?>">
            </div>
            </div>
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Medium Cal</label>
			<input id="medium_cal" name="data[Product][medium_cal]" placeholder="Calories" type="text" class="form-control" value="<?php echo $product['Product']['medium_cal'];  ?>">
            </div>
            </div>
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Medium Carbo </label>
			<input id="medium_carbo" name="data[Product][medium_carbo]" placeholder="Carbohydrates" type="text" class="form-control" value="<?php echo $product['Product']['medium_carbo'];  ?>">
            </div>
            </div>
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Medium Protein </label>
			<input id="medium_nutri" name="data[Product][medium_nutri]" placeholder="Nutients" type="text" class="form-control" value="<?php echo $product['Product']['medium_nutri'];  ?>">
            </div>
            </div>
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Medium Fat</label>
			<input id="medium_fat" name="data[Product][medium_fat]" placeholder="Fat" type="text" class="form-control" value="<?php echo $product['Product']['medium_fat'];  ?>">
            </div>
            </div>
			<div class="col-sm-6">
			<div class="margntp20">
            <label>Medium Quantity</label>
			<input id="small_fat" max="" min="0" name="data[Product][medium_qty]" placeholder="Quanty" type="number" class="form-control" value="<?php echo $product['Product']['medium_qty'];  ?>">
            </div>
			</div>
        </div>
		
		<div class="input number flds">
			<!--<input id="large" type="checkbox">Large-->
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Large Price</label>
			<input id="large_price" name="data[Product][large_price]" placeholder="Large Price" type="text" class="form-control" value="<?php echo $product['Product']['large_price'];  ?>"> 
            </div>
            </div>
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Large Cal</label>
			<input id="large_cal" name="data[Product][large_cal]" placeholder="Calories" type="text" class="form-control" value="<?php echo $product['Product']['large_cal'];  ?>">
            </div>
            </div>
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Large Carbo </label>
			<input id="large_carbo" name="data[Product][large_carbo]" placeholder="Carbohydrates" type="text" class="form-control" value="<?php echo $product['Product']['large_carbo'];  ?>">
            </div>
            </div>
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Large Protein</label>
			<input id="large_nutri" name="data[Product][large_nutri]" placeholder="Nutients" type="text" class="form-control" value="<?php echo $product['Product']['large_nutri'];  ?>">
            </div>
            </div>
             <div class="col-sm-6">
              <div class="margntp20">
            <label>Large Fat</label>
			<input id="large_fat" name="data[Product][large_fat]" placeholder="Fat" type="text" class="form-control" value="<?php echo $product['Product']['large_fat'];  ?>">
            </div>
            </div>
			<div class="col-sm-6">
			<div class="margntp20">
            <label>Large Quantity</label>
			<input id="small_fat" max="" min="0" name="data[Product][large_qty]" placeholder="Quantity" type="number" class="form-control" value="<?php echo $product['Product']['large_qty'];  ?>">
            </div>
			</div>
        </div>
           <?php }?>
  
   <div class="col-sm-12">         
<?php echo $this->Form->button('Submit'); ?> 
</div>
<?php echo $this->Form->end(); ?>

       

    </div>
</div>
</div>
</div>

<?php echo $this->Html->script('ckeditor/ckeditor', array('inline' => false)); ?>

<script type="text/javascript">

    var basePath = "<?php echo Router::url('/'); ?>";

    CKEDITOR.replace('ProductDescription', {
        filebrowserBrowseUrl: basePath + 'js/kcfinder/browse.php?type=files',
        filebrowserImageBrowseUrl: basePath + 'js/kcfinder/browse.php?type=images',
        filebrowserFlashBrowseUrl: basePath + 'js/kcfinder/browse.php?type=flash',
        filebrowserUploadUrl: basePath + 'js/kcfinder/upload.php?type=files',
        filebrowserImageUploadUrl: basePath + 'js/kcfinder/upload.php?type=images',
        filebrowserFlashUploadUrl: basePath + 'js/kcfinder/upload.php?type=flash'
    });

</script>


<br />
<br />
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