<?php $locationID = $this->session->userdata( 'location' );?>
<div class="col lg-3 col-md-4 col-sm-3 col-xs-2"></div>
<div class="col lg-6 col-md-4 col-sm-6 col-xs-8">
	<?php echo validation_errors(); ?>
	<?php if ( strlen($this->session->flashdata('success') ) > 0) { ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php } ?>
	<?php echo form_open('Book/table/'.$locationID)?>
		<div class="row">
			<form>
	  			<div class="form-group">
	    			<label for="text"><?php echo $this->lang->line('first_name_req')?></label>
	    			<input type="text" class="form-control" name="first_name" value="<?php echo set_value('first_name');?>" placeholder="<?php echo $this->lang->line('first_name')?>">
	  	  		</div>
	  	  		<div class="form-group">
	    			<label for="text"><?php echo $this->lang->line('last_name_req')?></label>
	    			<input type="text" class="form-control" name="last_name" value="<?php echo set_value('last_name');?>" placeholder="<?php echo $this->lang->line('last_name')?>">
	 	   		</div>
	  	  		<div class="form-group">
	    			<label for="text"><?php echo $this->lang->line('phone_req')?></label>
	    			<input type="text" class="form-control" name="phone" value="<?php echo set_value('phone');?>" placeholder="<?php echo $this->lang->line('phone')?>">
	 	   		</div>
	  	  		<div class="form-group">
	    			<label for="email"><?php echo $this->lang->line('email')?></label>
	    			<input type="email" class="form-control" name="email" value="<?php echo set_value('email');?>" placeholder="<?php echo $this->lang->line('email')?>">
	 	   		</div>
	  	  		<div class="form-group">
	    			<label for="text"><?php echo $this->lang->line('people_req')?></label>
	    			<input type="number" class="form-control" name="people" value="<?php echo set_value('people');?>" placeholder="<?php echo $this->lang->line('people')?>">
	 	   		</div>
		  		<div class="form-group">
		  			<label for="text"><?php echo $this->lang->line('notes')?></label>
					<textarea class="form-control" type="text" rows="5" name="notes"  placeholder="<?php echo $this->lang->line('notes')?>" ><?php echo set_value('notes');?></textarea>
		    	</div>
				<div class="alert alert-info" role="alert">
					<?php echo $this->lang->line('b_lisa_tooteid')?>
				</div>
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
												<table class="table">
													<tr>
														<td>
															<input type="checkbox" name="menuItemsChecked[]" value="<?php echo $menu_items[$j]->menuItem_id?>">
														</td>
														<td>
															<?php echo $menu_items[$j]->menuItem_name;?>
														</td>
														<td>
															<?php echo $menu_items[$j]->menuItem_price;?>
														</td>
														<td>
															<?php echo $this->lang->line('euro');?>
														</td>
													</tr>
												</table>
												<button type="button-xs" class="btn btn-info">+</button>
												<button type="button-xs" class="btn btn-danger">-</button>
												<div id="amount">10</div>
											</li>
										<?php } ?>
									<?php } ?>
					      	  	</ul>
					    	</div>
					  	</div>
					</div>
				<?php } ?>
	  	  		<button type="submit" class="btn btn-success btn-block"><?php echo $this->lang->line('btn_broneeri');?></button>
				<br>
			</form>
		</div>
</div>
<div class="col lg-3 col-md-4 col-sm-3 col-xs-2"></div>