<div class="smart-container">




<div class="row">
    <div class="col-sm-5 admvt">
    <h2>Admin Vat On Product</h2>
    <div class="add_dish">

        <?php echo $this->Form->create('Product',array('type'=>'file')); ?>
		<div class="col-sm-12 margntp20">
        Vat on each product : <input type='text' name='data[Product][vat]' class='form-control' value='<?php if($vat[0]['Product']['vat']){ echo $vat[0]['Product']['vat']; } ?>'>
        </div>
        <div class="col-sm-12 margntp20">
        Do you you want to display vat on ordering page : <input type='checkbox' name='data[Product][vat_display]'  value='yes' <?php if($vat[0]['Product']['vat_display'] == 'Yes'){ echo 'checked'; } ?>>
        </div>  
        <div class="col-sm-12 margntp20"> 
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
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