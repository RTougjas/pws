<?php $locationID = $this->session->userdata( 'location' );?>
<div class="col lg-3 col-md-3 col-sm-12 col-xs-12"></div>
<div class="col lg-6 col-md-6 col-sm-12 col-xs-12">
<?php for( $j = 0; $j < sizeOf($categories); $j++ ) { ?>
	<?php echo '<h3>'.$categories[$j]->category_name.'</h3>'; ?>
	<?php for( $i = 0; $i < sizeOf($menu_items); $i++ ) { ?>
		<?php if( $menu_items[$i]->category_id == $categories[$j]->category_id ) { ?>
			<ul class="list-group">
	  	  	  <li class="list-group-item">
			  	<?php echo $menu_items[$i]->menuItem_name;?>
			  	<?php echo $menu_items[$i]->menuItem_price;?>
			  	<?php echo $this->lang->line('euro');?>
	  		</li>
			</ul>
		<?php } ?>
	<?php } ?> <!-- for( $i = .... )  -->
<?php } ?> <!-- for( $j = ... ) -->
</div>
<div class="col lg-3 col-md-3 col-sm-12 col-xs-12"></div>