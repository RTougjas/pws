<?php $this->lang->load('tekst_lang', 'estonian')?>
<?php echo form_open("User/change_password");?>

<div class="container">
	<div class="row">
		<div class="text-center">
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
		    			<label for="password"><?php echo $this->lang->line('old_password')?></label>
		    			<input type="password" class="form-control" name="old_password" placeholder="vana parool" >
		  	  		</div>
		  			<div class="form-group">
		    			<label for="password"><?php echo $this->lang->line('new_password')?></label>
		    			<input type="password" class="form-control" name="new_password" placeholder="uus parool" >
		  	  		</div>
		  			<div class="form-group">
		    			<label for="password"><?php echo $this->lang->line('new_password_confirm')?></label>
		    			<input type="password" class="form-control" name="new_password_confirm" placeholder="uus parool" >
		  	  		</div>
					<button type="submit" class="btn btn-success btn-block"><?php echo $this->lang->line('btn_change_password');?></button>
					<br>
				</form>
			</div>
			<div class="col lg-4 col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>
</div>	
<?php echo form_close();?>
