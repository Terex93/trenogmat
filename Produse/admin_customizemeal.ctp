<div class="foodpatrn">
<div class="content">
<h3 class="dash_brd">Customize Meal</h3>
<?php //print_r($data); 
//foreach($data)
?>


	<div class="row">
    <div class="boxb">
    	<div class="col-sm-4">
        	<div class="icn">
        	<i class="fa fa-user" aria-hidden="true"></i>
            <a href="<?php echo $this->webroot;?>admin/proteins">Protein Source</a>
        	</div>
        </div>
        
        <div class="col-sm-4">
            <div class="icn">
        	<i class="fa fa-cutlery" aria-hidden="true"></i>
            <a href="<?php echo $this->webroot;?>admin/carbs">Carbs Source</a>
        	</div>
        </div>
        
        <div class="col-sm-4">
            <div class="icn">
        	<i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <a href="<?php echo $this->webroot;?>admin/vegetables">Vegetable Source</a>
        	</div>
        </div>
        
        <div class="col-sm-4" >
            <div class="icn">
        	<i class="fa fa-university" aria-hidden="true"></i>
            <a href="<?php echo $this->webroot;?>admin/fats">Fat Source</a>
        	</div>
        </div>
		
		<div class="col-sm-4">
            <div class="icn">
        	<i class="fa fa-university" aria-hidden="true"></i>
            <a href="<?php echo $this->webroot;?>admin/sauces">Sauce (30ML)</a>
        	</div>
        </div>
		
        </div>
    </div>
</div>
</div>

<style>
.main-footer {
    margin-left: 230px;
}

.boxb {
   
    width: 70%;
}

.icn {
    background-color: #fff;
    border-radius: 6px;
    box-shadow: 0 0 12px -6px #000;
    float: left;
    margin-bottom: 24px;
    padding: 11px;
    text-align: center;
    width: 268px;
	height: 100%;
}

.icn a{
	float: left;
	width: 100%;
	}

.icn i {
    font-size: 125px;
    padding: 22px 0;
}

.icn i:hover {
    font-size: 132px;
    transition: all 0.5s ease-in-out 0s;
}

.foodpatrn {
    background: url("http://ravinder.crystalbiltech.com/lunchworthy/img/foodblue.png");
}

.dash_brd{background: #fff none repeat scroll 0 0;
    border-radius: 7px;
    box-shadow: 0 0 12px -10px #000;
    color: #3c8dbc;
    margin-bottom: 23px;
    margin-top: 0;
    padding: 13px 13px 16px 20px;}

</style>

 


