<div class="smart-container">
<h2>Orders</h2>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-condensed table-hover">
        <tr>
            <th><?php echo $this->Paginator->sort('Store Name'); ?></th>

            <th><?php echo $this->Paginator->sort('All Delivery Orders'); ?></th>

          <?php if($loggeduser!=427 ){   ?>
            <th>Actions</th>
            <?php } ?>
        </tr>
<?php foreach ($alldata['Order'] as $order): ?>
            <tr>
                <td><?php echo h($order['name']); ?></td>
                <td><?php echo h($order['allorders']); ?></td>
                
                <td class="actions">
                        <?php echo $this->Html->link('View', array('action' => 'viewall', $order['id']), array('class' => 'btn btn-default btn-xs')); ?>                                 

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
</div>
