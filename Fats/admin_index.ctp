<div class="smart-container">
<h2>Fat Source</h2>
<div class="table-responsive">
<div class="addprotein">
<?php echo $this->Html->link('Add Fat Source', array('action' => 'add'), array('class' => 'btn btn-default btn-xs')); ?>
</div>
<table class="table table-striped table-bordered table-condensed table-hover protein-source" style="width:600px">
    <tr>

        
        <th>name</th>    
        <th>status</th>
        <th>created</th>
        <th>modified</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($proteins as $Fat): ?>
    <tr>
        <td><?php echo $Fat['Fat']['name']; ?></td>
        <td><?php echo $Fat['Fat']['active']; ?></td>
        <td><?php echo $Fat['Fat']['created']; ?></td>
        <td><?php echo $Fat['Fat']['modified']; ?></td>
        <td>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $Fat['Fat']['id'])); ?>
           <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete',  $Fat['Fat']['id']), array('confirm' => __('Are you sure you want to delete # %s?',  $Fat['Fat']['id']))); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>

</div>
<style>
.addprotein { width:100%; float:left; margin-bottom:20px;}
table.protein-source tr th{ text-transform:capitalize;}
table.protein-source tr td:nth-child(1),table.protein-source tr th:nth-child(1) {
    text-align: left;
}
</style>
