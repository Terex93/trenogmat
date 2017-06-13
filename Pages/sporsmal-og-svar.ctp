<div class="faq_sec">
  <div class="container">
  <div class="faq_sec_inner">
    <h1>Frakt Sporsmal</h1>
	<?php $i = 1;
	foreach($faqs as $faq){
		if($faq['Staticpage']['title']!="" && $faq['Staticpage']['description']!=""){
		 ?>
	<div class="heading"><?php echo $i.'.'; ?>	<?php echo $faq['Staticpage']['title']; ?></div>
    <?php echo $faq['Staticpage']['description']; ?>
	<?php $i++; 
	
	}
	}
	
	 ?>
    </div><!--</div>-->
    <!--col-md-12--> 
  </div>
</div>

