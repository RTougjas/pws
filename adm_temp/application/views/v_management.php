<?php $this->lang->load('tekst_lang', 'estonian')?>
<?php echo form_open("User/login");?>
<div class="container">
	<div class="row">
			<div class="col lg-4 col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col lg-4 col-md-4 col-sm-4 col-xs-12">
					<table class="table">
						<tr>
							<th>Eesnimi</th>
							<th>Perenimi</th>
							<th>Õigused</th>
							<th></th>
						</tr>
						<?php for( $i = 0; $i < sizeOf($users); $i++) { ?>
							<tr>
								<td><?php echo $users[$i]->first_name; ?></td>
								<td><?php echo $users[$i]->last_name; ?></td>
								<!-- <td><a href="<?php echo site_url('User/edit_group/'.$users[$i]->user_id)?>"><?php echo $users[$i]->name; ?></td> -->
								<td><a href=""><?php echo $users[$i]->name; ?></td>
								<td><a href="<?php echo site_url('User/deleteUser/'.$users[$i]->user_id) ;?>" class="btn btn-danger" role="button">Kustuta</a></td>
							</tr>
						<?php } ?>
					</table>
			<div class="col lg-4 col-md-4 col-sm-4 col-xs-12"></div>
		</div>
</div>