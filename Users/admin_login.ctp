<div class="login_outer foodpatrn">
<div class="container">

    <div class="col-sm-4 col-sm-offset-4">
    <div class="login_frm">
    <h2>Login</h2>

        <?php echo $this->Form->create('User', array('action' => 'login')); ?>
        <?php echo $this->Form->input('username', array('class' => 'form-control', 'autofocus' => 'autofocus')); ?>
        <br />
        <?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->button('Login', array('class' => 'btn defult_btn btn-primary')); ?>
        <?php echo $this->Form->end(); ?>
        
</div>
    </div>
</div>
</div>