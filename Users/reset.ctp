 <div id="reset_pge" class="con_main">
     	<div class="container">
        
          <div class="page_inn"><!--page inn start-->
        
        <div class="col-sm-3"></div>
     <div class="col-sm-6">
     <div class="clearfix">
        
       <?php  $x=$this->Session->flash('resetpwd');
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
   <div class="loign_form">
   
     <?php echo $this->Form->create('User',array('id'=>'reset'));   ?>
      <div class="form-group">
       <label class="col-sm-3 control-label">Passord <i class="fa fa-asterisk" aria-hidden="true"></i></label>
       <div class="col-sm-9">
       <input type="password" class="form-control"  id="pass5" name="data[User][password]" required >
       </div>
       <div class="clearfix"></div>
       </div>
        <div class="form-group">
      <label class="col-sm-3 control-label">Bekreft Passord <i class="fa fa-asterisk" aria-hidden="true"></i></label>
      <div class="col-sm-9">
      <input type="password" class="form-control"   name="data[User][password_confirm]" required>
      </div>
       <div class="clearfix"></div>
       </div>
        
       
      </div>
    <div class="form-group"> 
    <div class="col-md-12">
   <div class="login_buttonn ">
   <input type="submit" name="submit" value="SENDE INN" class="defult_btn pull-right" >
   </div>
   </div> 
    <div class="clearfix"></div>
   </div>
   
     <?php $this->Form->end(); ?>
     <div class="clearfix"></div>
     </div> </div>
   
   <div class="col-sm-3"></div>
   
</div>
   </div>
   </div>
     </div>
     <!--page inn end-->
     <script type="text/javascript">
          $(document).ready(function() {
                $("#reset").validate({
                    errorElement: 'span',
                    rules: {
                      "data[User][password]": "required",
                        "data[User][password_confirm]": {
                            required: true,
                            minlength: 8,
                            equalTo: "#pass5"
                        }
                    },
                    messages: {
                           "data[User][password_confirm]": {
                            required: "Please Enter confirm password",
                            equalTo: "Confirm Password is not matching your Password"
                        }
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });
            });
            
         </script>