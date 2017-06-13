<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
			</br></br>
	
            </div>
            <div class="pull-left info">
                <p><?php echo $loggedusername; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">      
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><?php echo $this->Html->link('Orders', array('controller' => 'orders', 'action' => 'index', 'admin' => true), array('class' => 'orders_autorizemenu')); ?></li>          
                </ul>
            </li> 
           <?php if($loggedUserRole!='rest_admin') {?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Users</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index', 'admin' => true), array('class' => 'users_autorizemenu')); ?></li>  
                    <li class="active"><?php echo $this->Html->link('User Add', array('controller' => 'users', 'action' => 'add', 'admin' => true), array('class' => 'users_autorizemenu')); ?></li>   
                </ul>
            </li>
           <?php } ?>			
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-secret"></i> <span>Store</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                 <li>  <?php echo $this->Html->link('Store', array('controller' => 'restaurants', 'action' => 'admin_index', 'admin' => true), array('class' => 'restaurants_autorizemenu')); ?> </li>    

                </ul>
            </li>   
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-object-group"></i> <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><?php echo $this->Html->link('Dish Categories', array('controller' => 'dish_categories', 'action' => 'index', 'admin' => true), array('class' => 'dish_categories_autorizemenu')); ?></li>     
                    <?php if($loggedUserRole!='rest_admin') {?>
					<li class="active"><?php echo $this->Html->link('Add Category', array('controller' => 'dish_categories', 'action' => 'add', 'admin' => true), array('class' => 'dish_categories_autorizemenu')); ?></li>
                    <?php } ?>
				</ul>
            </li> 

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-inbox"></i> <span>Orders</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><?php echo $this->Html->link('Orders', array('controller' => 'orders', 'action' => 'index', 'admin' => true), array('class' => 'orders_autorizemenu')); ?></li>  
                  
                    
                </ul>
            </li>  

                  <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-o"></i> <span>Page</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><?php echo $this->Html->link('Static Page', array('controller' => 'staticpages', 'action' => 'index', 'admin' => true), array('class' => 'staticpages_autorizemenu')); ?></li>     
                    <li class="active"><?php echo $this->Html->link('Add Static Page', array('controller' => 'staticpages', 'action' => 'add', 'admin' => true), array('class' => 'staticpages_autorizemenu')); ?></li>
                </ul>
            </li> 
		

  
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Vat On Items</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
						
                    </span>
                </a> 
                <ul class="treeview-menu">
                    <li class="active"><?php echo $this->Html->link('Vat On Items', array('controller' => 'products', 'action' => 'addvat', 'admin' => true), array('class' => 'socials_autorizemenu')); ?></li>
     
                </ul>                                      
            </li>   


            <li class="treeview">
                <a href="#">
                   <i class="fa fa-map-marker"></i> <span>Postal Codes</span> 
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><?php echo $this->Html->link('Postal Codes', array('controller' => 'picodes', 'action' => 'add', 'admin' => true), array('class' => 'socials_autorizemenu')); ?></li> 
                </ul>
            </li> 
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Discount</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><?php echo $this->Html->link('Discount', array('controller' => 'coupons', 'action' => 'add', 'admin' => true), array('class' => 'socials_autorizemenu')); ?></li> 
                </ul>
            </li> 
			
			 <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Additional Charges</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><?php echo $this->Html->link('Additional Charges', array('controller' => 'additionalcharges', 'action' => 'add', 'admin' => true), array('class' => 'socials_autorizemenu')); ?></li> 
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-map-marker"></i> <span>Bring Postal</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><?php echo $this->Html->link('Bring Postal', array('controller' => 'services', 'action' => 'add', 'admin' => true), array('class' => 'socials_autorizemenu')); ?></li> 
                </ul>
            </li> 			
			
			 <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text-o"></i> <span>Partners Promocodes</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><?php echo $this->Html->link('Partners Promocodes', array('controller' => 'partnerpromocodes', 'action' => 'index', 'admin' => true), array('class' => 'socials_autorizemenu')); ?></li>    
                    <li class="active"><?php echo $this->Html->link("Add Partner's Promocode", array('controller' => 'partnerpromocodes', 'action' => 'add', 'admin' => true), array('class' => 'staticpages_autorizemenu')); ?></li>
				</ul>
            </li>
			
			
			<li class="treeview">
                <a href="#">
                    <i class="fa fa-cutlery"></i> <span>Customize Meal</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><?php echo $this->Html->link('Customize Meal', array('controller' => 'products', 'action' => 'customizemeal', 'admin' => true), array('class' => 'socials_autorizemenu')); ?></li>    
                    
				</ul>
            </li>
			
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>