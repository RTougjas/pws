<?php $locationID = $this->session->userdata( 'location' );?>
<div class="col lg-3 col-md-4 col-sm-3 col-xs-2"></div>
<div class="col lg-6 col-md-4 col-sm-6 col-xs-8">
	<?php echo validation_errors(); ?>
	<?php if ( strlen($this->session->flashdata('success') ) > 0) { ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php } ?>
	<?php echo '<h3>'.$this->lang->line('tagasiside_tekst').'</h3>';?>
	<?php echo form_open('FeedBack/giveFeedBack/'.$locationID)?>
	<div class="row">
		<br>
		<form>
  			<div class="form-group">
    			<label for="text"><?php echo $this->lang->line('first_name_req')?></label>
    			<input type="text" class="form-control" name="first_name" value="<?php echo set_value('first_name');?>" placeholder="<?php echo $this->lang->line('first_name')?>">
  	  		</div>
  			<div class="form-group">
    			<label for="text"><?php echo $this->lang->line('last_name')?></label>
    			<input type="text" class="form-control" name="last_name" value="<?php echo set_value('last_name');?>" placeholder="<?php echo $this->lang->line('last_name')?>">
  	  		</div>
  	  		<div class="form-group">
    			<label for="text"><?php echo $this->lang->line('phone')?></label>
    			<input type="text" class="form-control" name="phone" value="<?php echo set_value('phone');?>" placeholder="<?php echo $this->lang->line('feedback_phone_placeholder')?>">
 	   		</div>
  	  		<div class="form-group">
    			<label for="email"><?php echo $this->lang->line('email')?></label>
    			<input type="email" class="form-control" name="email" value="<?php echo set_value('email');?>" placeholder="<?php echo $this->lang->line('feedback_email_placeholder')?>">
 	   		</div>
	  		<div class="form-group">
	  			<label for="text"><?php echo $this->lang->line('feedback_notes_req')?></label>
				<textarea class="form-control" type="text" rows="5" name="feedback_notes"  placeholder="<?php echo $this->lang->line('feedback_notes_placeholder')?>" ><?php echo set_value('feedback_notes');?></textarea>
	    	</div>
			<button type="submit" class="btn btn-success btn-block"><?php echo  $this->lang->line('btn_tagasiside');?></button>
			<br>
		</form>
	</div>
</div>
<div class="col lg-3 col-md-4 col-sm-3 col-xs-2"></div>