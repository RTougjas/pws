<?php $this->lang->load('tekst_lang', 'estonian')?>
<?php echo form_open("User/create_user");?>
<div class="container">
	<div class="row">
			<div class="col lg-4 col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col lg-4 col-md-4 col-sm-4 col-xs-12">
				<br>
				<?php echo validation_errors(); ?>
				<?php if ( strlen($this->session->flashdata('success') ) > 0) { ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php } ?>
				<br>
				<form>
		  			<div class="form-group">
		    			<label for="text"><?php echo $this->lang->line('first_name_req')?></label>
		    			<input type="text" class="form-control" name="first_name" placeholder="eesnimi" >
		  	  		</div>
		  			<div class="form-group">
		    			<label for="text"><?php echo $this->lang->line('last_name_req')?></label>
		    			<input type="text" class="form-control" name="last_name" placeholder="perekonnanimi" >
		  	  		</div>
		  			<div class="form-group">
		    			<label for="email"><?php echo $this->lang->line('email')?></label>
		    			<input type="email" class="form-control" name="email" placeholder="email" >
		  	  		</div>
					<div class="form-group">
						<label for="location">Asukoht</label>
						<select class="form-control" name="group">
						    <?php for( $i = 0; $i < sizeof($groups); $i++) { ?>
								<option value="<?php echo $groups[$i]->id?>"><?php echo $groups[$i]->name;?></option>
							<?php } ?>
						</select>
					</div>
		  			<div class="form-group">
		    			<label for="password"><?php echo $this->lang->line('password_req')?></label>
		    			<input type="password" class="form-control" name="password" placeholder="parool" >
		  	  		</div>
		  			<div class="form-group">
		    			<label for="password"><?php echo $this->lang->line('password_confirm_req')?></label>
		    			<input type="password" class="form-control" name="password_confirm" placeholder="parool uuesti" >
		  	  		</div>
					<button type="submit" class="btn btn-success btn-block"><?php echo $this->lang->line('btn_create_user');?></button>
					<br>
				</form>
			</div>
			<div class="col lg-4 col-md-4 col-sm-4 col-xs-12"></div>
		</div>
</div>	
<?php echo form_close();?>
