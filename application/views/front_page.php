<?php $locationID = $this->session->userdata( 'location' );?>

<div class="col lg-3 col-md-3 col-sm-12 col-xs-12"></div>
<div class="col lg-6 col-md-6 col-sm-12 col-xs-12">
	<div class="row">
		<?php if( $locationID == 1 ) { ?>
			<div class="row">
				<p><?php echo $this->lang->line('info_tartu');?></p>
			</div>
		<? } else if ( $locationID == 2 ) { ?>
			<div class="row" id="voru_info">
				<p><?php echo $this->lang->line('info_voru');?></p>
			</div>
		<? } else { ?>
			<?php redirect('/') ?>
		<?php } ?>
	</div>
</div>
<div class="col lg-3 col-md-3 col-sm-12 col-xs-12"></div>
