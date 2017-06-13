<style>
.notPaid, .notPaid:hover,.notPaid:active, .notPaid:focus {
    background-color: #ff0033;
    border-radius: 3px;
    color: #fff;
    display: block;
    padding: 3px 0;
    width: 60%;
	margin:0 auto;
}
.paid, .paid:hover,.paid:active, .paid:focus {
    background-color: #ff0033;
    border-radius: 3px;
    color: #fff;
    display: block;
    padding: 3px 0;
    width: 60%;
	margin:0 auto;
}
</style>
<div class="smart-container">
<h2>Order</h2>
<table class="table-striped table-bordered table-condensed table-hover">
    <tr>
        <td>Id</td>
        <td><?php echo h($order['Order']['id']); ?></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?php echo h($order['Order']['first_name']); ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?php echo h($order['Order']['last_name']); ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo h($order['Order']['email']); ?></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><?php echo h($order['Order']['phone']); ?></td>
    </tr>
    <tr>
        <td>Shipping Address</td>
        <td><?php echo h($order['Order']['shipping_address']); ?></td>
    </tr>

    <tr>
        <td>Shipping City</td>
        <td><?php echo h($order['Order']['shipping_city']); ?></td>
    </tr>
    <tr>
        <td>Shipping Zip</td>
        <td><?php echo h($order['Order']['shipping_zip']); ?></td>
    </tr>

    <tr>
        <td>Order Item Count</td>
        <td><?php echo h($order['Order']['order_item_count']); ?></td>
    </tr>
	 <tr>
        <td>Coupon Discount</td>
        <td><?php if($order['Order']['coupon'] != ''){echo $order['Order']['coupon'].' %';}else{ echo 'Not Applied'; } ?></td>
    </tr>
	 <tr>
        <td>Vat On Food</td>
        <td><?php echo h($order['Order']['food_vat']); ?> %</td>
    </tr>
	 <tr>
        <td>Vat On Delivery</td>
        <td><?php echo h($order['Order']['delivery_vat']); ?> %</td>
    </tr>
	 <tr>
        <td>Delivery Cost</td>
        <td><?php echo h($order['Order']['delivery_charges']); ?></td>
    </tr>
    <tr>
        <td>Subtotal</td>
        <td><?php echo h($order['Order']['subtotal']); ?></td>
    </tr>


    <tr>
        <td>Total</td>
        <td>
		<?php

                                    if($order['Order']['coupon'] != 0){
									
									echo round($order['Order']['total'] + $order['Order']['delivery_charges'] - ($order['Order']['total'] * $order['Order']['coupon'])/100);
									}elseif($order['Order']['coupon'] == 0){
									
									echo round($order['Order']['total'] + $order['Order']['delivery_charges']);
									}else{
									
									echo round($order['Order']['total'] + $order['Order']['delivery_charges']);
									}

				?>
		
		</td>
    </tr>
	<tr>
        <td>Delivery Method</td>
        <td><?php if($order['Order']['delivery_charges'] != 0){ echo 'Bring'; }else{ echo 'TrenogMat'; } ?></td>
    </tr>
    <tr>
        <td>Order Type</td>
        <td><?php echo h($order['Order']['order_type']); ?></td>
    </tr>
	
	<tr>
        <td>User Note</td>
        <td><?php echo h($order['Order']['notes']); ?></td>
    </tr>
	
	
    <tr>
        <td>Status</td>
        <td>
		
		<?php
		if ($order['Order']['status'] == 0) {
			echo $this->Form->postLink(('Not Paid'), array('Controller' => 'Orders', 'action' => 'admin_paid', $order['Order']['id']), array('escape' => false, 'class' => 'notPaid', 'title' => 'Not Paid'));
		} else {
			echo $this->Form->postLink(('Paid'), array('controller' => 'Orders', 'action' => 'admin_notpaid', $order['Order']['id']), array('escape' => false, 'class' => 'paid', 'title' => 'Paid'));
		}
		?>
		
		
		
		</td>
    </tr>
    <tr>
        <td>Created</td>
        <td><?php echo h($order['Order']['created']); ?></td>
    </tr>
    <tr>
        <td>Modified</td>
        <td><?php echo h($order['Order']['modified']); ?></td>
    </tr>
	
</table>

<br />

<h3>Actions</h3>

<?php echo $this->Html->link('Edit Order', array('action' => 'edit', $order['Order']['id']), array('class' => 'btn btn-default')); ?>

<br />
<br />

<?php 
 if($loggedUserRole!='rest_admin') {
echo $this->Form->postLink('Delete Order', array('action' => 'delete', $order['Order']['id']), array('class' => 'btn btn-default btn-danger'), __('Are you sure you want to delete # %s?', $order['Order']['id']));
}
?>

<br />
<br />

<h3>Related Order Items</h3>

<?php if (!empty($items)): ?>
<table class="table-striped table-bordered table-condensed table-hover reltd-order">
    <tr>
        <th>Order Id</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Size</th>
        <th>Price</th>
        <th>Subtotal</th>

    </tr>
    <?php foreach ($items['Products'] as $orderItems): ?>
    <tr>
        
        <td><?php echo $orderItems['OrderItem']['orderId']; ?></td>
        <td><?php echo $orderItems['OrderItem']['name']; ?></td>
        <td><?php echo $orderItems[0]['qty']; ?></td>
        <td><?php echo $orderItems['OrderItem']['size']; ?></td>
        <td><?php echo $orderItems['OrderItem']['price']; ?></td>
        <td><?php echo $orderItems[0]['total']; ?></td>

    </tr>
    <?php endforeach; ?>
	<?php
if(!empty($items['Customize'])){
	foreach ($items['Customize'] as $orderItem): ?>
    <tr>
        
        <td><?php echo $orderItem['OrderItem']['order_id']; ?></td>
        <td><?php echo $orderItem['OrderItem']['name'].'<br/>'; 
		
		if($orderItem['OrderItem']['protein_source'] != ''){
		echo 'Protein Source : '.$orderItem['OrderItem']['protein_source'].'<br/>';
		echo 'Protein Portion : '.$orderItem['OrderItem']['protein_portion'].'<br/>';
		echo 'Protein Price : '.$orderItem['OrderItem']['protein_price'].'<br/>';
		}
		if($orderItem['OrderItem']['carb_source'] != ''){
		echo 'Carb Source : '.$orderItem['OrderItem']['carb_source'].'<br/>';
		echo 'Carb Portion : '.$orderItem['OrderItem']['carb_portion'].'<br/>';
		echo 'Carb Price : '.$orderItem['OrderItem']['carb_price'].'<br/>';
		}
		if($orderItem['OrderItem']['vegetable_source'] != ''){
		echo 'Vegetable Source : '.$orderItem['OrderItem']['vegetable_source'].'<br/>';
		echo 'Vegetable Portion : '.$orderItem['OrderItem']['vegetable_portion'].'<br/>';
		echo 'Vegetable Price : '.$orderItem['OrderItem']['vegetable_price'].'<br/>';
		}
		if($orderItem['OrderItem']['fat_source'] != ''){
		echo 'Fat Source : '.$orderItem['OrderItem']['fat_source'].'<br/>';
		}
		if($orderItem['OrderItem']['sauce_30ml'] != ''){
		echo 'Sauce Source (30ML) : '.$orderItem['OrderItem']['sauce_30ml'].'<br/>';
		echo 'Sauce Source (30ML) Price : '.$orderItem['OrderItem']['sauce_price'].'<br/>';
		}
		echo 'Total Calorie : '.$orderItem['OrderItem']['total_calorie'].'<br/>';
		echo 'Total fat : '.$orderItem['OrderItem']['total_fat'].'<br/>';
		echo 'Total Carbs : '.$orderItem['OrderItem']['total_carbs'].'<br/>';
		echo 'Total Protein : '.$orderItem['OrderItem']['total_protein'].'<br/>';
		
		?></td>
        <td><?php echo $orderItem['OrderItem']['quantity']; ?></td>
        <td><?php echo $orderItem['OrderItem']['size']; ?></td>
        <td><?php echo $orderItem['OrderItem']['subtotal']; ?></td>
        <td><?php echo $orderItem['OrderItem']['subtotal']; ?></td>

    </tr>
    <?php endforeach; 
}
?>
</table>

<?php endif; ?>
</div>

<style>
table.reltd-order tr td:nth-child(3) {
    text-align: left;
}

</style>