<div id="myacount_sec">
  <div class="container">
  <div class="myacount_sec_inner">
     <?php
                //$x = $this->Session->flash();
                //if ($x) {
                    //echo $x;
               // }
     ?>
    <div class="col-lg-6 col-md-offset-3">
    <?php echo $this->Form->create('User', array('id' => 'editform')); ?>
    <div class="editmycct" class="myacount_tbl">
        
  <h1>REDIGER PROFIL</h1>
<div class="myacctfld">
  <div class="col-sm-3">
 <label>Brukernavn</label>  
  </div>
    <div class="col-sm-9">
<input class="form-control" id="usr" name="data[User][username]" value="<?php echo $data['User']['username']; ?>" type="text" readonly maxlength="50" size="30"/> 
  </div>
</div>    

<div class="myacctfld">  
   <div class="col-sm-3">
  <label>Fullt navn</label>
  </div>
    <div class="col-sm-9">
<input class="form-control" id="usr" type="text" name="data[User][name]" value="<?php echo $data['User']['name']; ?>" maxlength="50" size="30" required="required">
  </div>
  </div>
  
 <div class="myacctfld">   
   <div class="col-sm-3">
  <label>E-post</label>
  </div>
    <div class="col-sm-9">
<input class="form-control" id="usr" name="data[User][email]" value="<?php echo $data['User']['email']; ?>" type="email"  maxlength="80" size="30"/>
  </div>
</div>  

<div class="myacctfld">
   <div class="col-sm-3">
 <label>  Adresse </label>
  </div>
    <div class="col-sm-9">
<input class="form-control" id="usr" type="text" name="data[User][address]" value="<?php echo $data['User']['address']; ?>" maxlength="50" size="30" required="required">
  </div>
 </div>
 <div class="myacctfld"> 
    <div class="col-sm-3">
  <label>Stedsnavn</label>
  </div>
    <div class="col-sm-9">
<input class="form-control" id="usr" type="text" name="data[User][city]" value="<?php echo $data['User']['city']; ?>" maxlength="50" size="30" required="required">
  </div>
  </div>
  
  <!--div class="myacctfld">
  
   <div class="col-sm-3">
 <label>  State</label>
  </div>
    <div class="col-sm-9">
<input class="form-control" id="usr" type="text" name="data[User][state]" value="<?php echo $data['User']['state']; ?>" maxlength="80" size="30" required="required">
  </div>
  </div>
  
  <div class="myacctfld">
  
   <div class="col-sm-3">
 <label> Country</label>
  </div>
    <div class="col-sm-9">
	<input class="form-control" id="usr" type="text" name="data[User][country]" value="<?php echo $data['User']['country']; ?>" maxlength="50" size="30" required="required">
  </div>
  </div-->

 <div class="myacctfld">
     <div class="col-sm-3">
 <label>Postnummer</label>
  </div>
    <div class="col-sm-9">
    <input class="field form-control" type="text" maxlength="6" name="data[User][zip]" value="<?php echo $data['User']['zip']; ?>" size="30" required="required" > 
  </div>
  </div>
  
 <div class="myacctfld"> 
       <div class="col-sm-3">
 <label> Mobilnummer</label>
  </div>
    <div class="col-sm-9">
<input class="field form-control" type="text" name="data[User][phone]" value="<?php echo $data['User']['phone']; ?>" maxlength="10" size="30" required="required">
  </div>
  </div>
  
  
  
  
<div class="myacctfld">
    <div class="col-sm-12">
     <div class="btn-group subtm_btn pull-right">      
    <button type="submit" class="btn defult_btn user_btn " value="Submit Button">
OPPDATER</button>
    </div>
</div>
</div>
  
    

   <div class="clearfix"></div>

</div>
<?php echo $this->Form->end(); ?>
    <div class="clearfix"></div>
    </div>
  <div class="clearfix"></div>
  </div><!--myacount_sec_inner-->
</div><!--container-->
</div><!--myacount_sec-->