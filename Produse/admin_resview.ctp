<div class="smart-container">
<h2>Product</h2>
<?php //debug($assoproduct);
//debug($product);
?>
<table class="table-striped table-bordered table-condensed table-hover admres_tbl">
    <tr>
        <td>Id</td>
        <td><?php echo h($product['Product']['id']); ?></td>
    </tr>

    <tr>
        <td>Name</td>
        <td><?php echo h($product['Product']['name']); ?></td>
    </tr>

    <tr>
        <td>Description</td>
        <td><?php echo h($product['Product']['description']); ?></td>
    </tr>
    <tr>
        <td>Image</td>
        <td>
            <?php echo $this->Html->Image('/files/product/' . $product['Product']['image'], array('width' => 100, 'height' => 100, 'alt' => $product['Product']['image'], 'class' => 'image')); ?>
            </td>
    </tr>

     <?php if($loggeduser!=427){  ?>


     <?php } ?>
    <tr>
        <td>Dish Category</td>
        <td><?php echo h($product['DishCategory']['name']); ?></td>
    </tr>

    <tr>
        <td>Created</td>
        <td><?php echo h($product['Product']['created']); ?></td>
    </tr>
    <tr>
        <td>Modified</td>
        <td><?php echo h($product['Product']['modified']); ?></td>
    </tr>
</table>

<div class='proReviews margntp20'>

<table class="table-striped table-bordered table-condensed table-hover admres_tbl">
  <thead>
    <tr>
      <th>#</th>
      <th>User Id</th>
      <th>Review</th>
	  <th>Ratings</th>
      <th>Created</th>
    </tr>
  </thead>
  <tbody>
  <?php if(empty($reviews)){ ?>
  <tr><td colspan='5'>There is no reviews of this product.</td></tr>
  <?php }else{ ?>
  <?php $i=1; foreach($reviews as $review){ ?>
      <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $review['Review']['uid']; ?></td>
      <td><?php if($review['Review']['review'] != ''){ echo $review['Review']['review']; }else{ echo 'Empty'; } ?></td>
	  <td><?php echo $review['Review']['ratings']; ?></td>
      <td><?php echo $review['Review']['created']; ?></td>
    </tr>
  <?php $i++; } } ?>


  </tbody>
</table>

</div>

 <?php if($loggeduser!=427){  ?>
<h3>Actions</h3>
<?php echo $this->Html->link('Edit Product', array('action' => 'resedit', $product['Product']['id']), array('class' => 'btn btn-default')); ?>
&nbsp; &nbsp;
<?php echo $this->Form->postLink('Delete Product', array('action' => 'resdelete', $product['Product']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>

 <?php   } ?>
 
 </div>