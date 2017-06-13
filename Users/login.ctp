<div id="login_sec">
<div class="container">
<div class="form_login clearfix">
    <div class="col-sm-4 col-sm-offset-4 col-md-4">
    <div class="login_frm  clearfix">
	       <?php  $x=$this->Session->flash('loginIncorrect');
if($x){ ?> 



        <div class="alert alert-success">
   
<?php echo $x; ?>
 </div>


<?php }
	   ?>
    <h1>Logg Inn</h1>
        <?php echo $this->Form->create('User', array('action' => 'login')); ?>
        <?php echo $this->Form->input('username', array('class' => 'form-control', 'autofocus' => 'autofocus', 'label' => 'Bruker-epost')); ?>
        <br />
        <?php echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'Passord')); ?>
         <input type="hidden" name="data[User][server]" value="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
        <br />
        <div class="col-md-12 text-right">
		<div class="text-left">
          <a href="<?php echo $this->webroot; ?>users/forgetpwd">Glemt passord?</a>
         </div>
        <div class="row">
        <?php echo $this->Form->button('Logg Inn', array('class' => 'btn btn-primary btn-md defult_btn pull-right')); ?>
        </div>
		<span class="acountSignup">Hvis du ikke har en konto kan du klikke her <a href="#register" data-toggle="modal" data-dismiss="modal">For å opprettekonto</a></span>
        </div>
        <?php echo $this->Form->end(); ?>        
</div><!--login_frm-->
</div>
</div><!--form_login-->
</div>
</div><!--loginsec-->