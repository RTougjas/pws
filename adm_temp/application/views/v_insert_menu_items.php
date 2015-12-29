<div class="container">
	<div class="row">
		<div class="col lg-6 col-md-6 col-sm-6 col-xs-12">
			<h1>
				<?php if ( strlen($title) > 0) { ?>
					<span class="label label-info"><?php echo $title; ?>
					<small>
						<?php echo ' '.$menu_items[0]->location_name; ?>
					</small>
					</span>
				<?php } ?>
			</h1>
			<br>
			<?php for( $i = 0; $i < sizeOf($categories); $i++ ) { ?>
				<div class="panel-group">
				  	<div class="panel panel-default">
				    	<div class="panel-heading">
				      	  	<h4 class="panel-title">
				        		<a data-toggle="collapse" href="#collapse<?php echo $i?>"><?php echo $categories[$i]->category_name;?></a>
				      	  	</h4>
				    	</div>
				    	<div id="collapse<?php echo $i?>" class="panel-collapse collapse">
				      	  	<ul class="list-group">
				       		 	<?php for( $j = 0; $j < sizeOf($menu_items); $j++) { ?>
									<?php if( $menu_items[$j]->category_id == $categories[$i]->category_id ) { ?>
										<li class="list-group-item">
											<?php echo form_open("Menu/updateMenuItem/".$menu_items[$j]->location_id);?>
											<form class="form-inline">
												<input type="hidden" value="<?php echo $menu_items[$j]->menuItem_id;?>" name="menuItem_id">
												<div class="form-group">
											    	<label for="nimetus">Nimetus</label>
											    	<input type="text" class="form-control" value="<?php echo $menu_items[$j]->menuItem_name;?>" name="menuItem_name">
											  	</div>
											  	<div class="form-group">
											    	<label for="hind">Hind</label>
											    	<input type="email" class="form-control" value="<?php echo $menu_items[$j]->menuItem_price;?>" name="menuItem_price">
											  	</div>
											  	<div class="form-group">
											    	<label for="category">Kategooria</label>
											    	<select class="form-control" name="selected_category">
											      	  	<?php for($k = 0; $k < sizeOf($categories); $k++) { ?>
															<?php if( $menu_items[$j]->category_id == $categories[$k]->category_id) { ?>
																<option value="<?php echo $categories[$k]->category_id?>" selected><?php echo $categories[$k]->category_name; ?></option>
															<?php } else { ?>
																<option value="<?php echo $categories[$k]->category_id?>"><?php echo $categories[$k]->category_name; ?></option>
															<?php } ?>
														<?php } ?>
											    	</select>
											  	</div>
											  <button type="submit" class="btn btn-primary btn-block">Uuenda</button>
											</form>
										</li>
									<?php } ?>
								<?php } ?>
				      	  	</ul>
				    	</div>
				  	</div>
				</div>
			<?php } ?>
		</div>
		<div class="col lg-6 col-md-6 col-sm-6 col-xs-12"></div>
	</div>
</div>