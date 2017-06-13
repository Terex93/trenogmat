<?php
//echo $resid;
//print_r($DishCategory);
//print_r($DishSubcat);
//exit;
echo $this->Html->css(array('bootstrap-editable.css', '/select2/select2.css'), 'stylesheet', array('inline' => false)); ?>
<?php echo $this->Html->script(array('bootstrap-editable.js', '/select2/select2.js'), array('inline' => false)); ?>
<div class="smart-container">
<h2>Products</h2>
<div class="row">
    <?php echo $this->Form->create('Product', array()); ?>
    <?php echo $this->Form->hidden('search', array('value' => 1)); ?>


       <div class="col-sm-2">
        <?php  echo $this->Form->input('dish_catid', ['options' => $DishCategory, 'label' =>false,'class' => 'form-control','empty'=>'Choose category']);  ?>

    </div>

    <div class="col-sm-1">
        <?php echo $this->Form->input('filter', array(
            'label' => false,
            'class' => 'form-control',
            'options' => array(
                'name' => 'Name',
                'description' => 'Description',
                'price' => 'Price',
                'created' => 'Created',
            ),
            'selected' => $all['filter']
        )); ?>

    </div>

    <div class="col-sm-2">
        <?php echo $this->Form->input('name', array('label' => false, 'id' => false, 'class' => 'form-control', 'value' => $all['name'])); ?>

    </div>

    <div class="col-sm-2">
        <?php echo $this->Form->button('Search', array('class' => 'btn btn-default')); ?>
        &nbsp; &nbsp;
        <?php echo $this->Html->link('View All', array('controller' => 'products', 'action' => 'resreset',$resid, 'admin' => true), array('class' => 'btn btn-danger')); ?>

    </div>
<div class="col-sm-3">
<a href="javascript:void(0)" class="btn btn-default" id='export_product'>Export Products</a>
</div>
    <?php //echo $this->Form->end(); ?>

</div>


<br />
 <div class="button_outer">
                   

 <?php echo $this->Html->link('Add new item for sale', array('controller' => 'restaurants','action' => 'addproduct', $resid), array('class' => 'btn btn-xs btn-default')); ?>                  
 <?php echo $this->Html->link('Add new category', array('controller' => 'dish_categories', 'action' => 'add'), array('class' => 'btn btn-xs btn-default')); ?>

                </div>
<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />

<table class="table-striped table-bordered table-condensed table-hover admres_tbl" id='table2excel2'>
    <tr>
        <th><?php echo $this->Paginator->sort('image'); ?></th>
        <th><?php echo $this->Paginator->sort('dishcategory_id'); ?></th>
        <th><?php echo $this->Paginator->sort('name'); ?></th>
        <!--th><?php echo $this->Paginator->sort('description'); ?></th--> 
		<th style='display:none'>Small Quantity</th>
		<th style='display:none'>Medium Quantity</th>
		<th style='display:none'>Large Quantity</th>
        <th><?php echo $this->Paginator->sort('created'); ?></th>
        <th><?php echo $this->Paginator->sort('modified'); ?></th>
        <th class="actions">Actions</th>
    </tr>
    <?php foreach ($products as $product):
	//print_r($product);
	?>
    <tr>
        <td width="100" height="100">
		<img width="80" height="80" class="image" alt="<?php echo $product['Product']['image']; ?>" src="http://trenogmat.no/files/product/<?php echo $product['Product']['image']; ?>">
        </td>
        <td width="100" height="100"><span class="category" data-value="<?php echo $product['DishCategory']['id']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo $product['DishCategory']['name']; ?></span></td>
        <td width="100" height="100"><span class="name" data-value="<?php echo $product['Product']['name']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo $product['Product']['name']; ?></span></td>
        <!--td><span class="description" data-value="<?php echo $product['Product']['description']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo $product['Product']['description']; ?></span></td-->
        <td width="100" height="100" style='display:none'><?php echo h($product['Product']['small_qty']); ?></td>
		<td width="100" height="100" style='display:none'><?php echo h($product['Product']['medium_qty']); ?></td>
		<td width="100" height="100" style='display:none'><?php echo h($product['Product']['large_qty']); ?></td>
		<td width="100" height="100"><?php echo h($product['Product']['created']); ?></td>
        <td width="100" height="100"><?php echo h($product['Product']['modified']); ?></td>
        <td width="100" height="100" class="actions">
            <?php echo $this->Html->link('View', array('action' => 'resview', $product['Product']['id']), array('class' => 'btn btn-default btn-xs')); ?>
            <?php echo $this->Html->link('Edit', array('action' => 'resedit', $product['Product']['id']), array('class' => 'btn btn-default btn-xs')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />
<br />
</div>