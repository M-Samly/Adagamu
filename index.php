<?php include('includes/header.php'); ?>

  <div class="content_wrapper">
  
  <?php if(!isset($_GET['action'])){ ?>
  
    
	
	<div id="content_area">
	
	<?php cart();?>
	
	  <div id="products_box">	    
		
		<?php getPro();?>
		
		<?php get_pro_by_cat_id();	?>		
		
		<?php get_pro_by_brand_id(); ?>		
		
	  </div>
	  
	</div>
	
	<?php }else{ ?>
	
	<?php 
	include('login.php'); 
	} 
	?>
	
  </div>
  <?php include ('includes/footer.php'); ?>
  
  
