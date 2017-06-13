<div class="content">
    <div class="header">

        <h1 class="page-title">Add bring services</h1>
    </div>
    <div class="main-content">
        <p>
            <?php $x=$this->Session->flash(); ?>
                    <?php if($x){ ?>
                    <div class="alert success">
                        <span class="icon"></span>
                    <strong>Success!</strong><?php echo $x; ?>
                    </div>
                    <?php } ?>
        </p>
        <div class="row">
         <div class="smart-container">
            <div class="col-md-4">
                <?php echo $this->Form->create('Service',array('id'=>'tab','type'=>'file')); ?>
                    <div class="form-group">
                        <label>From postal</label>
                        <input type="text" name="data[Service][from_zip]" value="<?php echo $services[0]['Service']['from_zip']; ?>" class="form-control span12">                        
                    </div>
                    <div class="form-group">
                    <label>Description about meals</label> 
                    
                    </div>
                    <div class="form-group">
                        <label>Weight for 12 meals (KG)</label> 
                        <input type="text" name="data[Service][wght_for_12]" value="<?php echo $services[0]['Service']['wght_for_12']; ?>" class="form-control span12">
                    </div>
                    <div class="form-group">
                        <label>Length for 12 meals (CM)</label> 
                        <input type="text" name="data[Service][len_for_12]" value="<?php echo $services[0]['Service']['len_for_12']; ?>" class="form-control span12">
                    </div>
					<div class="form-group">
                        <label>Width for 12 meals (CM)</label> 
                        <input type="text" name="data[Service][width_for_12]" value="<?php echo $services[0]['Service']['width_for_12']; ?>" class="form-control span12">
                    </div>
					<div class="form-group">
                        <label>Height for 12 meals (CM)</label> 
                        <input type="text" name="data[Service][hght_for_12]" value="<?php echo $services[0]['Service']['hght_for_12']; ?>" class="form-control span12">
                    </div>
					
					
					
					<div class="form-group">
                        <label>Weight for 13-24 meals (KG)</label> 
                        <input type="text" name="data[Service][wght_for_13_24]" value="<?php echo $services[0]['Service']['wght_for_13_24']; ?>" class="form-control span12">
                    </div>
					<div class="form-group">
                        <label>Length for 13-24 meals (CM)</label> 
                        <input type="text" name="data[Service][len_for_13_24]" value="<?php echo $services[0]['Service']['len_for_13_24']; ?>" class="form-control span12">
                    </div>
					<div class="form-group">
                        <label>Width for 13-24 meals (CM)</label> 
                        <input type="text" name="data[Service][width_for_13_24]" value="<?php echo $services[0]['Service']['width_for_13_24']; ?>" class="form-control span12">
                    </div>
					<div class="form-group">
                        <label>Height for 13-24 meals (CM)</label> 
                        <input type="text" name="data[Service][hght_for_13_24]" value="<?php echo $services[0]['Service']['hght_for_13_24']; ?>" class="form-control span12">
                    </div>
					
					
					
					<div class="form-group">
                        <label>Weight for 25-36 meals (KG)</label> 
                        <input type="text" name="data[Service][wght_for_25_36]" value="<?php echo $services[0]['Service']['wght_for_25_36']; ?>" class="form-control span12">
                    </div>
					<div class="form-group">
                        <label>Length for 25-36 meals (CM)</label> 
                        <input type="text" name="data[Service][len_for_25_36]" value="<?php echo $services[0]['Service']['len_for_25_36']; ?>" class="form-control span12">
                    </div>
					<div class="form-group">
                        <label>Width for 25-36 meals (CM)</label> 
                        <input type="text" name="data[Service][width_for_25_36]" value="<?php echo $services[0]['Service']['width_for_25_36']; ?>" class="form-control span12">
                    </div>
					<div class="form-group">
                        <label>Height for 25-36 meals (CM)</label> 
                        <input type="text" name="data[Service][hght_for_25_36]" value="<?php echo $services[0]['Service']['hght_for_25_36']; ?>" class="form-control span12">
                    </div>
					
					
					<div class="form-group">
                        <label>Weight for 37-42 meals (KG)</label> 
                        <input type="text" name="data[Service][wght_for_37_42]" value="<?php echo $services[0]['Service']['wght_for_37_42']; ?>" class="form-control span12">
                    </div>
					<div class="form-group">
                        <label>Length for 37-42 meals (CM)</label> 
                        <input type="text" name="data[Service][len_for_37_42]" value="<?php echo $services[0]['Service']['len_for_37_42']; ?>" class="form-control span12">
                    </div>
					<div class="form-group">
                        <label>Width for 37-42 meals (CM)</label> 
                        <input type="text" name="data[Service][width_for_37_42]" value="<?php echo $services[0]['Service']['width_for_37_42']; ?>" class="form-control span12">
                    </div>
					<div class="form-group">
                        <label>Height for 37-42 meals (CM)</label> 
                        <input type="text" name="data[Service][hght_for_37_42]" value="<?php echo $services[0]['Service']['hght_for_37_42']; ?>" class="form-control span12">
                    </div>
					  
					<div class="btn-toolbar list-toolbar">
						<button class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Save</button>
					</div>
                    </form>
            </div>
            </div>
        </div>
   </div>
     </div>
    