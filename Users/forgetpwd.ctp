 
 <div class="con_main">
     	<div class="container">
        
          <div class="page_inn clearfix">
        
        <div class="col-sm-3"></div>
     <div class="col-sm-12 col-md-6">
     <div class="clearfix">
        
       <?php  $x=$this->Session->flash('frgtpwd');
if($x){ ?> 


        <div class="alert alert-success">
   
<?php echo $x; ?>
 </div>


<?php }
	   ?>

         </div>
     
     <div class="login_box_m">
       
      
          <div class="panel panel-default">
          <div class="login_b"><h1>Glemt passord</h1></div>
                <div class="panel-body form-horizontal payment-form">
                
          
          <div class="login_b2">
   
  <div class="login_outer_frm">
   <div class="loign_form">
   
   <p class="Worry"> Ikke fortvil! Bare fyll inn din e-postadresse og vi vil hjelpe deg med å tilbakestille passordet ditt </p>
  
     <?php echo $this->Form->create('User');   ?>
      <div class="form-group">
      <label class="required-icon col-sm-4 control-label">Bruker-epost <i class="fa fa-asterisk" aria-hidden="true"></i></label> 
<div class="col-sm-8"> <input type="text" name="data[User][email]" class="form-control"  placeholder="Bruker-epost"  ></div>
       
      </div>
      
      
      
      </div>
      
   <div class="login_buttonn "><input type="submit" name="submit" value="SEND E-POST" class="defult_btn pull-right"></div>
   </div>
   </div>
    </div>
   </div>
   
    <?php $this->Form->end(); ?>
     </div> </div>
   
   <div class="col-sm-3"></div>
   

   </div></div>
     </div><!--page inn end-->