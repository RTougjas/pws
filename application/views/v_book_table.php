<?php $locationID = $this->session->userdata( 'location' );?>
<div class="col lg-3 col-md-4 col-sm-3 col-xs-2"></div>
<div class="col lg-6 col-md-4 col-sm-6 col-xs-8">
		<?php if (strlen(validation_errors()) > 0) { ?>
			<div class="alert alert-danger" role="alert">
			<?php echo validation_errors(); ?>
			</div> 
		<?php } ?>
	<?php if( $locationID == 1 ) { ?>
		<?php echo form_open('Book/table/'.$locationID)?>
		<div class="row">
			<form>
				</select>
	  			<div class="form-group">
	    			<label for="text"><?php echo $this->lang->line('first_name')?></label>
	    			<input type="text" class="form-control" name="first_name" value="<?php echo set_value('first_name');?>" placeholder="<?php echo $this->lang->line('first_name')?>">
	  	  		</div>
	  	  		<div class="form-group">
	    			<label for="text"><?php echo $this->lang->line('last_name')?></label>
	    			<input type="text" class="form-control" name="last_name" value="<?php echo set_value('last_name');?>" placeholder="<?php echo $this->lang->line('last_name')?>">
	 	   		</div>
	  	  		<div class="form-group">
	    			<label for="text"><?php echo $this->lang->line('phone')?></label>
	    			<input type="text" class="form-control" name="phone" value="<?php echo set_value('phone');?>" placeholder="<?php echo $this->lang->line('phone')?>">
	 	   		</div>
	  	  		<div class="form-group">
	    			<label for="email"><?php echo $this->lang->line('email')?></label>
	    			<input type="email" class="form-control" name="email" value="<?php echo set_value('email');?>" placeholder="<?php echo $this->lang->line('email')?>">
	 	   		</div>
	  	  		<div class="form-group">
	    			<label for="text"><?php echo $this->lang->line('people')?></label>
	    			<input type="text" class="form-control" name="people" value="<?php echo set_value('people');?>" placeholder="<?php echo $this->lang->line('people')?>">
	 	   		</div>
		  		<div class="form-group">
		  			<label for="text"><?php echo $this->lang->line('additional_notes')?></label>
					<textarea class="form-control" type="text" rows="5" name="additional_notes"  placeholder="<?php echo $this->lang->line('additional_notes')?>" ><?php echo set_value('additional_notes');?></textarea>
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
														<td>
															<div id="amount">10</div>
														</td>
													</tr>
												</table>
												<button type="button-xs" class="btn btn-success">+</button>
												<button type="button-xs" class="btn btn-danger">-</button>
											</li>
										<?php } ?>
									<?php } ?>
					      	  	</ul>
					    	</div>
					  	</div>
					</div>
				<?php } ?>
	  	  		<button type="submit" class="btn btn-primary">Salvesta</button>
			</form>
		</div>
	<? } else if( $locationID == 2 ) { ?>
		<div class="row" id="book_table">
			<form>
	  			<div class="form-group">
	    			<label for="text">Eesnimi</label>
	    			<input type="text" class="form-control" id="first_name" name="first_name" placeholder="eesnimi">
	  	  		</div>
	  	  		<div class="form-group">
	    			<label for="text">Perekonnanimi</label>
	    			<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Perekonnanimi">
	 	   		</div>
	  	  		<div class="form-group">
	    			<label for="text">Telefon</label>
	    			<input type="text" class="form-control" id="phone" name="phone" placeholder="telefon">
	 	   		</div>
	  	  		<div class="form-group">
	    			<label for="email">Email</label>
	    			<input type="email" class="form-control" id="email" name="email" placeholder="email">
	 	   		</div>
	  	  		<button type="submit" class="btn btn-primary">Logi sisse</button>
			</form>
		</div>
	<? } ?>	
</div>
<div class="col lg-3 col-md-4 col-sm-3 col-xs-2"></div>