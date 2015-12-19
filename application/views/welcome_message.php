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
<div class="col lg-3 col-md-3 col-sm-12 col-xs-12"></div>
<div class="col lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="row" id="welcome_page_logo">
		</div>
		<div class="thumbnail" id="welcome_page_logo_thumbnail">
			<img src="<?php echo base_url("images/logo.png")?>" alt="Võru" >
		</div>
		<div class="row">
  	  		<div class="col lg-6 col-md-6 col-sm-6 col-xs-6">
				<a href="<?php echo site_url("/FrontPage/loadLocation/2");?>" class="thumbnail">
					<img src="<?php echo base_url("images/voru.png")?>" alt="Võru" >
	   			</a>
				<span class="text-center">
					<p><?php echo $this->lang->line('aadress_voru');?></p>
				</span>
			</div>
			<div class="col lg-6 col-md-6 col-sm-6 col-xs-6">
				<a href="<?php echo site_url("/FrontPage/loadLocation/1");?>" class="thumbnail" >
					<img src="<?php echo base_url("images/tartu.png");?>" alt"Tartu" >
			   	</a>
				<span class="text-center">
					<p><?php echo $this->lang->line('aadress_tartu');?></p>
				</span>
			</div>
		</div>
</div>
<div class="col lg-6 col-md-6 col-sm-12 col-xs-12"></div>