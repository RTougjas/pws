<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ditto</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>" rel="stylesheet">
		<link href="<?php echo base_url("css/styles.css");?>" rel="stylesheet">
    </head>
<body>
	<?php $this->lang->load('tekst_lang', 'estonian')?>
	<?php echo form_open("User/login");?>
<div class="container">
	<div class="row">
		<div class="text-center">
			<div class="col lg-4 col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col lg-4 col-md-4 col-sm-4 col-xs-12">
				<br>
				<?php echo validation_errors(); ?>
				<?php if ( strlen($this->session->flashdata('error') ) > 0) { ?>
					<div class="alert alert-danger" role="alert">
						<?php echo $this->session->flashdata('error'); ?>
					</div>
				<?php } ?>
				<br>
				<form>
	  				<div class="form-group">
	    				<label for="text"><?php echo $this->lang->line('first_name_req')?></label>
	    				<input type="text" class="form-control" name="username" placeholder="<?php echo $this->lang->line('username')?>">
	  	  			</div>
	  	  			<div class="form-group">
	    				<label for="password"><?php echo $this->lang->line('last_name_req')?></label>
	    				<input type="password" class="form-control" name="password" placeholder="<?php echo $this->lang->line('password')?>">
	 	   			</div>
					<button type="submit" class="btn btn-success btn-block"><?php echo $this->lang->line('btn_login');?></button>
				</form>
			</div>
			<div class="col lg-4 col-md-4 col-sm-4 col-xs-12"></div>
			<div id="pin_field">&nbsp</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="text-center">
	  		<button type="button" class="btn btn-info btn-pin" onClick="selectNumber(1)">
	  			<h3>1<br><small>&nbsp</small></h3>
	  		</button>
	  		<button type="button" class="btn btn-info btn-pin" onClick="selectNumber(2)">
	  			<h3>2<br><small>abc</small></h3>
	  		</button>
	  		<button type="button" class="btn btn-info btn-pin" onClick="selectNumber(3)">
	  			<h3>3<br><small>def</small></h3>
	  		</button>
		</div>
	</div>
	<div class="row">
		<div class="text-center">
	  		<button type="button" class="btn btn-info btn-pin" onClick="selectNumber(4)">
	  			<h3>4<br><small>ghi</small></h3>
	  		</button>
	  		<button type="button" class="btn btn-info btn-pin" onClick="selectNumber(5)">
	  			<h3>5<br><small>jkl</small></h3>
	  		</button>
	  		<button type="button" class="btn btn-info btn-pin" onClick="selectNumber(6)">
	  			<h3>6<br><small>mno</small></h3>
	  		</button>
		</div>
	</div>
	<div class="row">
		<div class="text-center">
	  		<button type="button" class="btn btn-info btn-pin" onClick="selectNumber(7)">
	  			<h3>7<br><small>pqrs</small></h3>
	  		</button>
	  		<button type="button" class="btn btn-info btn-pin" onClick="selectNumber(8)">
	  			<h3>8<br><small>tuv</small></h3>
	  		</button>
	  		<button type="button" class="btn btn-info btn-pin" onClick="selectNumber(9)">
				<h3>9<br><small>wxyz</small></h3>
			</button>
		</div>
	</div>
	<div class="row">
		<div class="text-center">
  			<button type="button" class="btn btn-danger btn-pin" onClick="clearSilk('1')">
  				<h3><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><br><small></small></h3>
  			</button>
			<button type="button" class="btn btn-info btn-pin" onClick="selectNumber(0)">
				<h3>0<br><small></small></h3>
			</button>
			<button type="button" class="btn btn-success btn-pin" onClick="sendSilk()">
				<h3><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><br><small></small></h3>
			</button>
		</div>
	</div>
	<br>
</div>
