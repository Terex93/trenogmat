<div id="myacount_sec">
  <div class="container">
  <div class="myacount_sec_inner">
  <div class="col-sm-12">
  <div class=" lgbutn">
  <div class="pull-right">
                <a href="<?php echo $this->webroot ?>users/logout" class="btn defultblk_btn pull-right" >Logg ut</a>
                
    </div>            
    </div>          
  
  </div>
  
    <div class="col-sm-12 col-md-7 col-md-offset-2">
    
    <!--table width="100%" border="0" cellpadding="0" cellspacing="0" class="myacount_tbl">
  <tr>
    <th colspan="2">BRUKERPROFIL DETALJER</th>  
  </tr>
  <tr>
    <td>
	<div class="shipment1"><?php  if($data['User']['image']) { $image=$data['User']['image']; } else { $image="no-avatar.png"; }  ?>
    <img src="<?php echo $this->webroot; ?>files/profile_pic/<?php echo $image; ?>" width="380" height="500" alt="" class="img-rounded img-responsive" />
    </div>
    <div class="frm_shipm">
		<form action="<?php echo $this->webroot; ?>users/myaccount" method="POST" enctype= "multipart/form-data" class="upload_pic1" >
		<input type="file" name="data[User][image]" value=""/>
		<input style="margin-left:30px;" type="submit" name="submit" value="submit" class="upload_pic12">
		</form>
    </div>
	</td>
    <td>
    <table width="100%" border="0">
  <tr>
    <td colspan="2"><strong><?php echo $data['User']['name']; ?></strong> </td>    
  </tr>
  <tr>
    <td><strong>E-mail</strong></td>
    <td><span>: <?php echo $data['User']['email']; ?></span> </td>
  </tr>
  <tr>
   <td><strong>User</strong></td>
    <td><span>: <?php echo $data['User']['username']; ?></span> </td>
  </tr>
  <tr>
   <td><strong>City</strong></td>
    <td><span>: <?php echo $data['User']['city']; ?></span> </td>
  </tr>
</table>

    
    </td>
  </tr>
  <tr>
    <td colspan="2">
     <div class="btn-group">
      <a href="<?php echo $this->webroot; ?>users/edit" class="btn btn-info user_btn">Edit Profile</a>
     </div>
    </td>
    
  </tr>
   <div class="clearfix"></div>
</table--> 

<div class="myaccsucs">
       <?php  $x=$this->Session->flash('edit');
if($x){ ?> 


        <div class="alert alert-success">
   
<?php echo $x; ?>
 </div>


<?php }
	   ?>
   </div>  


        <div class="table-responsive g myaccnt">      
        
          
            
                 <h1 class="offers_hst">BRUKERPROFIL DETALJER</h1>
           
   
           
              
            
               
                <div class="col-sm-5">
                
                <div class="shipment1"><?php  if($data['User']['image']) { $image=$data['User']['image']; } else { $image="no-avatar.png"; }  ?>
                <img src="<?php echo $this->webroot; ?>files/profile_pic/<?php echo $image; ?>"  alt=""  id='userPic' class="img-rounded img-responsive center-block" />
                </div>
				 <div class="frm_shipm">
				 <form action="<?php echo $this->webroot; ?>users/myaccount" method="POST" enctype= "multipart/form-data" class="upload_pic1" >
                 <div class="col-xs-12 col-sm-12 form-group ">
					<div class="upload-btn">
						<span>Velg Fil</span>
						<input type="file" id='uploadFile' name="data[User][image]" class="uplod_btn" value=""/>
					</div>
                   </div>
                   <div class="col-xs-12 col-sm-12 form-group ">
				   <input  name="submit" value="Laste opp" class="upload_pic12 btn defult_btn" type="submit">
                   </div>
				</form>
				</div>
                </div>
              
               
                 <div class=" col-sm-7">
                <div class="detail_prf"><a href="#">
                <div class="text1 text3"><span><?php echo ucfirst($data['User']['name']); ?> </span></div></a> 
                <div class="text2 text4"><span>E-post:</span> <?php echo $data['User']['email']; ?> </div>
                
                <div class="text2 text4"><span>Adresse:</span> <?php if($data['User']['address'] != ''){ echo $data['User']['address']; }else{ echo 'Ikke definert'; } ?> </div>				
                <div class="text2 text4"><span>Stedsnavn:</span> <?php if($data['User']['city'] != ''){ echo $data['User']['city']; }else{ echo 'Ikke definert'; } ?> </div>
				<div class="text2 text4"><span>Mobilnummer:</span> <?php if($data['User']['phone'] != ''){ echo $data['User']['phone']; }else{ echo 'Ikke definert'; } ?> </div>
                </div>
                </div>
             
          
           
             <div class=" col-sm-12">
                <span class="pull-right ">
                  <a href="<?php echo $this->webroot; ?>users/edit" class="btn defult_btn">REDIGER PROFIL</a>
                  </span>
                  </div>
             
        </div>



   
    </div>
  
  </div><!--kundeopply_sec_inner-->
</div><!--container-->
</div><!--kundeopply_sec-->
<style>
/*table,
thead,
tbody,
tr,
th,
td{
	width:100%;
}
table thead tr{
	height:50px;
	line-height:normal;
	vertical-align:middle;
	padding:0px;
	
}
table thead tr th{
	padding:0px !important;
	line-height:normal !important;
	vertical-align:middle !important;
	padding-left:15px !important;
}*/





</style>
<script>
function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#userPic').attr('src', '');
			$('#userPic').attr('src', e.target.result);
            
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#uploadFile").change(function () {
    filePreview(this);
});
</script>