<?php $locationID = $this->session->userdata( 'location' );?>
<div class="col lg-3 col-md-3 col-sm-12 col-xs-12"></div>
<div class="col lg-6 col-md-6 col-sm-12 col-xs-12">
	<div class="row" id="welcome_page_logo">
		<?php if( $locationID == 1 ) { ?>
			<p><?php echo $this->lang->line('info_tartu');?></p>
		<? } else { ?>
			<p><?php echo $this->lang->line('info_voru');?></p>
		<? } ?>
	</div>
</div>
<div class="col lg-3 col-md-3 col-sm-12 col-xs-12"></div>
