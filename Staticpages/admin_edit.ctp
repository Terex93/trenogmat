<div class="content">
    <div class="header">

        <h1 class="page-title">Edit Staticpage</h1>
        <ul class="breadcrumb">
            <li><a href="<?php echo $this->Html->url(array('controller' => 'Staticpages', 'action' => 'admin_index')); ?>">Staticpage Management</a> </li>
            <li class="active">Edit Staticpage</li>
        </ul>

    </div>
    <?php //print_r($admin_edit); ?>
    <div class="main-content">  

        <div class="row">
            <?php echo $this->Form->create('Staticpage',array('id'=>'tab','type'=>'file')); ?>
            <div class="col-md-4">                
                    <div class="form-group"> 
                          <?php echo $this->Form->select('position',array('our_vision'=>'Our vision', 'about_us' => 'About Us','t&c'=>'Term & Conditions','faq' => 'Faq', 'slider' => 'Header Slider', 'banner_heading' => 'Banner Heading','front_heading' => 'Front Page Heading')
                                  ,array('class'=>'form-control','empty' => '--Select position--','required'))
                          ?>

                                         
                    </div>
                    

                    
                    
                    <div class="form-group">
                        <?php echo $this->Form->input('title',array('class'=>'form-control'));?>
                    </div>
                    
                    
                    <?php if($admin_edit['Staticpage']['position']!='faq'){ ?>
                    <div class="form-group">
                        <?php echo $this->Form->input('image',array('type'=>'file'));?>      
                    </div>
                    <?php }?>
                    <div class="form-group">
                        <?php echo $this->Form->input('description',array('class'=>'form-control','type'=>'textarea'));?>
                    </div>
                    <div class="form-group">
                      <label>Status</label><br>
                      <?php echo $this->Form->select('status',array('1'=>'Active','0'=>'Deactive'),
                       array('label'=>"",'class'=>'form-control','data-placeholder'=>'Choose a Name')); ?>
                    </div>
                    <input type="hidden" name="data[Staticpage][created]" value="<?php echo date('Y-m-d H:i:s'); ?>">
                   

                <div class="btn-toolbar list-toolbar">
                    <button class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Update</button>
                    <a href="<?php echo $this->Html->url(array('controller' => 'Staticpages', 'action' => 'admin_index')); ?>" data-toggle="modal" class="btn btn-danger">Cancel</a>
                </div>
            </div>
             <?php echo $this->Form->end();?>
        </div>
    </div>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.1.6/tinymce.min.js"></script>
    <script type="text/javascript">
    tinymce.init({
             selector: "textarea",
             plugins : "media"
    });
    </script>