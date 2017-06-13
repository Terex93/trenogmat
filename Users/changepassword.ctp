<style> 
.venue-detailsnew {
    color: #d71f26;
    font-size: 22px;
    font-weight: 500;
    letter-spacing: 0.4px;
    margin: 0 0 6px;
    padding: 0;
    text-transform: uppercase;
}
.venue-detailsnew1 {
    font-size: 13px;
    line-height: 31px;
    margin: 10px 0 0;
}

 @media (max-width: 980px) {
.banner_slide {
    height: 547px !important;
    margin-bottom: 4%;
}

 }

 @media (max-width: 800px) {
.banner_slide {
    height: 452px !important;
}

 }
 @media (max-width: 768px) {
.banner_slide {
    height: 433px !important;
}

 }
  @media (max-width: 360px) {
.banner_slide {
    height: 280px !important;
}
.venue-detailsnew {
    margin: -36px 0 6px;
}
  }

 @media (max-width: 320px) {
.venue-detailsnew {
    color: #d71f26;
    font-size: 22px;
    font-weight: 500;
    letter-spacing: 0.4px;
    margin: -58px 0 6px;
    padding: 0;
    text-transform: uppercase;
}
.venue-detailsnew1 {
    font-size: 13px;
    line-height: 31px;
    margin: 10px 0 0;
}

.nomargin_top {
    color: #d71f26 !important;
    font-size: 25px !important;
    margin-top: -22px !important;
}	 
.path1 > img {
    float: left !important;
    left: 0 !important;
    position: relative!important;
    top: 0;
    width: 100% !important;
}
.newsletter-cta-text {
    font-size: 13px;
    padding: 0 8px;
    width: 95%;
}

.neigh {
    margin: 0 41%;
    width: 17%;
}
.newsletter-cta-text {
    font-size: 13px;
}
.banner_slide h2 {
    color: #fff;
    font-size: 21px;
    left: 39%;
    position: absolute;
    top: 17%;
}
.login_shw.active11 {
    box-shadow: 0 0 1px #c5c5c5 !important;
    display: block;
   
     font-size: 11px !important;
    line-height: 39px !important;
    padding: 0 24px !important;
    width: 78px !important;
}
ul.btn_log {
    float: right;
    position: absolute;
    right: 1%;
    top: 24%;
    width: 50%;
}
.newsletter-cta{
	  background-color: #d71f26;
    border: 1px solid #e9e9eb;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    float: left;
    font-size: 12px;
    margin: 5px 0 7px 23%;
    outline: medium none;
    padding: 12px 4.2rem;
}

 }
 .img-responsive1 {
    margin-top: 30px;
}
.Menu{box-shadow: 0 0 1px #c5c5c5;}
.banner_slide h2 {

    top: 40% !important;
}
.account_child{
	z-index:999999;
}
.banner_slide h2 {

    z-index: 2 !important;
}
</style>

<div class="banner_slide banner_slide1" style="width: 100% ! important; position: relative; overflow: hidden; height: 246px !important;"> 
	<img style="width: 100% ! important; position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; margin: auto;" src="<?php echo $this->webroot ?>files/restaurants/r2.jpg" class="banner_img" />
   <h2>Change Password</h2>
   <div class="abcdef"> </div>
</div>


<!-- Content ================================================== -->

<div class="spacer"> </div>

<div class="container"> 
	<div class="row"> 
    	<div class="col-md-6 col-md-offset-3 pwd_chg"> 
        	<div class="chg_pwd">
           <h3> Change your Password</h3>
           </div><!--chg_pwd-->
          <!--<ul class="cyp"> 
          	<li> Password are case-sensitive and must be at least 6 characters. </li>
            <li> A good password should contain a mix of capital and lower-case letter, number and symbols.</li>
          </ul>--> 
          
          <h4><?php
                $x = $this->Session->flash();
                if ($x) {
                    echo $x;
                }
                ?></h4>
          
           		<div class="frm_pwdchg"> 
 <?php echo $this->Form->create('User', array('id' => 'changepassword')); ?>
    <div class="login-form">
        <div class="form-group">
            <input name="data[User][old_password]" type="password" class="form-control login-field focus_frm" value="" placeholder="Old Password" id="login-name" />
            <label class="login-field-icon fui-user" for="login-name"></label>
        </div>
 
        <div class="form-group">
            <input name="data[User][new_password]" type="password" class="form-control login-field focus_frm" value="" placeholder="New Password" id="login-pass" />
            <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>
        
        <div class="form-group">
            <input name="data[User][cpassword]" type="password" class="form-control login-field focus_frm" value="" placeholder="Confirm New Password" id="login-pass" />
            <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>
        <ul class="btn-change_pwd">
        
       
        <li><input class="btn btn-primary btn-md btn_chdpwd" name="submit" type="submit" value="CHANGE PASSWORD" /></li>
        
         	<!--<li>      
            	<input class="btn btn-primary btn-md btn_chdpwd" type="submit"  name="dlf_submit" value="CANCEL" />
            </li>-->
  <?php echo $this->Form->end(); ?>
		
	</ul>		</div>
        </div>
    </div>
</div>

</div>


<div class="spacer"> </div>












<!-- footer start -->
<div class="search_res1 rec ">  	
<div class="container">
  <div class="row">
  		<div class="col-75">
        	<img src="/cart_new/abc/img/icon-neighborhood-transparent.svg" class="neigh">
      <p class="newsletter-cta-text">Want recommendations, chef insights, local tips and more sent straight to your inbox?</p>
        </div>
        <div class="col-25n"> 
        	 <a href="http://trenogmat.no/pages/contact" class="newsletter-cta">Yes, Please!</a>
        </div>
  </div><!--row-->
  </div>
  </div>

<br/><br/><br/><br/><br/><br/>


<!--

<div class="con_main">
    <div class="container">
        <div class="edit">
            <h2>Change Password</h2>
            <h4><?php
                /*$x = $this->Session->flash();
                if ($x) {
                    echo $x;
                }*/
                ?></h4>
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="edit_box">
                    <?php //echo $this->Form->create('User', array('id' => 'changepassword')); ?>
                    <label>Old password</label>
                    <input type="password" name="data[User][old_password]" value="" type="text"/><br/>

                    <label>New Password</label>
                    <input type="password" name="data[User][new_password]" id="pass1" value="" type="text"/><br/>
                    <label>Confirm Password</label>
                    <input type="password" name="data[User][cpassword]" value="" type="text"/><br/>
                </div>
                <input name="submit" type="submit" value="Submit"/>
            </div>
        </div>
        <?php //echo $this->Form->end(); ?>
        <div class="col-sm-3"></div>
    </div>
</div>
</div>
</div>-->
<script type="text/javascript">
    $(document).ready(function() {
                $("#changepassword").validate({
                    errorElement: 'span',
                    rules: {
                        "data[User][old_password]": "required",
                         "data[User][new_password]": "required",
                        "data[User][cpassword]": {
                            required: true,
                            minlength: 8,
                            equalTo: "#pass1"
                        }

                    },
                    messages: {
                        "data[User][old_password]": "Please Enter Old password",
                        "data[User][new_password]": "Please Enter New password",
                        "data[User][cpassword]": {
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