<div class="smart-container">
<h2>Orders</h2>
<div class="table-responsive">    
    <?php
     if($loggedUserRole!='rest_admin'){ //print_r($orders); exit;
    echo $this->Form->create('Order', array());
    ?>
<div class="head-menu">
<ul class="search-item">
    <li>
        <?php        
        echo $this->Form->input('filter', array(
            'label' => false,
            'class' => 'form-control',
            'options' => array(
                'id' => 'Order ID',
                'phone' => 'Phone',
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
            ),'empty' => 'Choose Keywords',
            'selected' => $all['filter']
        ));
        ?>
    </li>    

    <li>
<?php echo $this->Form->input('name', array('label' => false, 'id' => 'orderSearch', 'class' => 'form-control', 'placeholder'=>'Search by keywords','value' => $all['name'])); ?>
    </li>
    <li>
    <div class="col-sm-3">
        <?php echo $this->Form->button('Search', array('class' => 'btn btn-danger serachOrder')); ?>
       </div>
       <div class="col-sm-2">
<?php echo $this->Html->link('Reload', array('controller' => 'orders', 'action' => 'reset', 'admin' => true), array('class' => 'btn btn-default')); ?>
</div>
<div class="col-sm-4">
<select id='orderFilter' class='form-control' placeholder='Select Status'>
<option value=''>Select Status</option>
<option value='1' <?php if(isset($_GET['status']) && $_GET['status'] == 1){ echo 'selected';} ?>>Paid</option>
<option value='0' <?php if(isset($_GET['status']) && $_GET['status'] == 0){ echo 'selected';} ?>>Non Paid</option>
</select>
</div>
<div class="col-sm-3">
<a href="javascript:void(0)" class="btn btn-default" id='export'>Export Orders</a>
</div>

    </li>
    </ul>
    </div>
    <?php }?>
    <table class="table table-striped table-bordered table-condensed table-hover" id='table2excel'>
        <tr>
            <th><?php echo $this->Paginator->sort('Order ID'); ?></th>
			<th><?php echo $this->Paginator->sort('shipping_city'); ?></th>
            <th><?php echo $this->Paginator->sort('Store Name'); ?></th>
            <th><?php echo $this->Paginator->sort('first_name'); ?></th>
            <th><?php echo $this->Paginator->sort('last_name'); ?></th>
            <th><?php echo $this->Paginator->sort('email'); ?></th>
            <th><?php echo $this->Paginator->sort('phone'); ?></th>
           
<!--            <th><?php echo $this->Paginator->sort('billing_city'); ?></th>
          <th><?php echo $this->Paginator->sort('billing_zip'); ?></th>
          <th><?php echo $this->Paginator->sort('billing_state'); ?></th>
          <th><?php echo $this->Paginator->sort('billing_country'); ?></th>
          <th><?php echo $this->Paginator->sort('shipping_city'); ?></th>
          <th><?php echo $this->Paginator->sort('shipping_zip'); ?></th>
          <th><?php echo $this->Paginator->sort('shipping_state'); ?></th>
          <th><?php echo $this->Paginator->sort('shipping_country'); ?></th>
          <th><?php echo $this->Paginator->sort('weight'); ?></th>-->
		    <th>Coupon Discount</th>
			<th>Coupon Code</th>
            <th>Vat On Food</th>
			<th>Vat On Delivery</th>
			<th>Delivery Cost</th>
            <th><?php echo $this->Paginator->sort('subtotal'); ?></th> 
            <th>Provisjon 10%</th>
            <th><?php echo $this->Paginator->sort('total'); ?></th>
			<th>Delivery Method</th>
            <th>Order Type</th>
			<th>Status</th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th>Actions</th>
        </tr>
<?php if(!empty($orders)) foreach ($orders as $order): ?>
            <tr>
                <td><?php echo h($order['Order']['id']); ?></td>
				<td><?php echo h($order['Order']['shipping_city']); ?></td>
                <td><?php echo h($order['Restaurant']['name']); ?></td>
                <td><?php echo h($order['Order']['first_name']); ?></td>
                <td><?php echo h($order['Order']['last_name']); ?></td>
                <td><?php echo h($order['Order']['email']); ?></td>
                <td><?php echo h($order['Order']['phone']); ?></td>

    <!--                <td><?php //echo h($order['Order']['billing_city']);  ?></td>
                <td><?php //echo h($order['Order']['billing_zip']);  ?></td>
                <td><?php //echo h($order['Order']['billing_state']);  ?></td>
                <td><?php //echo h($order['Order']['billing_country']);  ?></td>
                <td><?php //echo h($order['Order']['shipping_city']);  ?></td>
                <td><?php //echo h($order['Order']['shipping_zip']);  ?></td>
                <td><?php //echo h($order['Order']['shipping_state']);  ?></td>
                <td><?php //echo h($order['Order']['shipping_country']);  ?></td>
                <td><?php //echo h($order['Order']['weight']);  ?></td>-->
				<td><?php if($order['Order']['coupon'] != ''){echo $order['Order']['coupon'].' %';}else{ echo 'Not Applied'; } ?> </td>
				<td><?php if($order['Order']['coupon'] != ''){echo $order['Order']['coupon_name'];}else{ echo 'Not Applied'; } ?> </td>
				<td><?php echo h($order['Order']['food_vat']); ?> %</td>
				<td><?php echo h($order['Order']['delivery_vat']); ?> %</td>
				<td><?php echo h($order['Order']['delivery_charges']); ?></td>
                <td><?php echo h($order['Order']['subtotal']); ?></td>
				<td>
				
				<?php

                                    if($order['Order']['coupon'] != 0){
									
									$a1 =  round($order['Order']['total'] + $order['Order']['delivery_charges'] - ($order['Order']['total'] * $order['Order']['coupon'])/100);
									$a2 = $a1 -  $order['Order']['delivery_charges'];
                                    $a3	= $a2 * 0.75;
                                    $provsnfloat = $a3 * 0.10;
									$provsn = number_format((float)$provsnfloat, 2, '.', '');
                                    echo str_replace('.', ',', $provsn);									
									}elseif($order['Order']['coupon'] == 0){
									
									$a1 = round($order['Order']['total'] + $order['Order']['delivery_charges']);
									$a2 = $a1 -  $order['Order']['delivery_charges'];
                                    $a3	= $a2 * 0.75;
                                    $provsnfloat = $a3 * 0.10;
									$provsn = number_format((float)$provsnfloat, 2, '.', '');
									echo str_replace('.', ',', $provsn);
									}else{
									
									$a1 = round($order['Order']['total'] + $order['Order']['delivery_charges']);
									$a2 = $a1 -  $order['Order']['delivery_charges'];
                                    $a3	= $a2 * 0.75;
                                    $provsnfloat = $a3 * 0.10;
									$provsn = number_format((float)$provsnfloat, 2, '.', '');
									echo str_replace('.', ',', $provsn);
									}

				?>
				
				</td>
    <!--                <td><?php //echo h($order['Order']['tax']); ?></td>
                <td><?php //echo h($order['Order']['shipping']);  ?></td>-->
                <td><?php

                                    if($order['Order']['coupon'] != 0){
									
									echo round($order['Order']['total'] + $order['Order']['delivery_charges'] - ($order['Order']['total'] * $order['Order']['coupon'])/100);
									}elseif($order['Order']['coupon'] == 0){
									
									echo round($order['Order']['total'] + $order['Order']['delivery_charges']);
									}else{
									
									echo round($order['Order']['total'] + $order['Order']['delivery_charges']);
									}

				?></td>
				<td><?php if($order['Order']['delivery_charges'] != 0){
				echo 'Bring';
				}else{ echo 'TrenogMat'; } ?></td>
                <td><?php echo h($order['Order']['order_type']);  ?></td>
								<td><?php if($order['Order']['status'] == 1){ ?><i class="fa fa-check alert alert-success" aria-hidden="true"></i>
<?php }else{ ?><i class="fa fa-times alert alert-danger" aria-hidden="true"></i>
<?php }  ?></td>
                <td><?php echo h($order['Order']['created']); ?></td>
                <td class="actions">
                        <?php echo $this->Html->link('View', array('action' => 'view', $order['Order']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                        <?php echo $this->Html->link('Edit', array('action' => 'edit', $order['Order']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                    <select name="dlsts" class="dlsts">
                        <?php if ($order['Order']['dl_status'] == 0) { ?>
                            <option value="<?php echo $order['Order']['uid'] . '-' . $order['Order']['id']; ?>-0" selected>Pending</option>
                        <?php } if ($order['Order']['dl_status'] == 1) { ?>
                            <option value="<?php echo $order['Order']['uid'] . '-' . $order['Order']['id']; ?>-1" selected>Confirmed</option>
                        <?php } else { ?>
                            <option value="<?php echo $order['Order']['uid'] . '-' . $order['Order']['id']; ?>-1">Confirmed</option>
                        <?php } if ($order['Order']['dl_status'] == 2) { ?>
                            <option value="<?php echo $order['Order']['uid'] . '-' . $order['Order']['id']; ?>-2" selected>Cancelled</option>
    <?php } else { ?>
                            <option value="<?php echo $order['Order']['uid'] . '-' . $order['Order']['id']; ?>-2">Cancelled</option>
    <?php } if ($order['Order']['dl_status'] == 3) { ?>
                            <option value="<?php echo $order['Order']['uid'] . '-' . $order['Order']['id']; ?>-3" selected>Delivered</option>
            <?php } else { ?>
                            <option value="<?php echo $order['Order']['uid'] . '-' . $order['Order']['id']; ?>-3">Delivered</option>
    <?php } if($order['Order']['dl_status'] == 4){?>
          <option value="<?php echo $order['Order']['uid'] . '-' . $order['Order']['id']; ?>-4" selected>Dispatched</option>
	<?php }else{ ?>
	       <option value="<?php echo $order['Order']['uid'] . '-' . $order['Order']['id']; ?>-4">Dispatched</option>
	<?php } ?>

                    </select>

                </td>
            </tr>
<?php endforeach; ?>
    </table>
</div>
<br />
<?php //echo $this->element('pagination-counter'); ?>
<?php //echo $this->element('pagination'); ?>
<br />
<br />
<script type="text/javascript">
    $(".dlsts").change(function () {
        var a = $(this).val();
        $.post('http://trenogmat.no/admin/orders/dlstas', {id: a}, function (d) {
            console.log(d);
        });
        //alert(a);
    });
$('#orderFilter').change(function(){
var status = $(this).val();
window.location.href='<?php echo $this->webroot; ?>admin/orders?status='+status;
});

</script>
</div>