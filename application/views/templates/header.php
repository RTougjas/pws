<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ditto</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>" rel="stylesheet">
		<link href="<?php echo base_url("css/styles.css");?>" rel="stylesheet">
		<?php $this->lang->load( 'tekst_lang', 'estonian' )?>
		<?php $locationID = $this->session->userdata( 'location' );?>
    </head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="<?php echo base_url("/");?>">Ränduri pubi</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
		<?php if( $locationID == 1 ) { ?>
			<li><a href="<?php echo site_url("/FrontPage/loadLocation/$locationID");?>"><?php echo $this->lang->line('menuu');?></a></li>
			<li><a href="<?php echo site_url("/FrontPage/loadLocation/$locationID");?>"><?php echo $this->lang->line('joogid');?></a></li>
		<?php } else { ?>
			<li class="dropdown">
                <a href="<?php echo site_url("/FrontPage/loadLocation/$locationID");?>" class="dropdown-toggle" data-toggle="dropdown">
                    <?php echo $this->lang->line('menuu');?>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><?php echo $this->lang->line('soogid');?></a></li>
                    <li><a href="#"><?php echo $this->lang->line('joogid');?></a></li>
				</ul>
			</li>
		<?php } ?>
        <li><a href="<?php echo site_url("/FrontPage/loadLocation/$locationID");?>"><?php echo $this->lang->line('galerii');?></a></li> 
        <?php if( $locationID == 1 ) { ?>
			<li><a href="<?php echo site_url("/FrontPage/loadLocation/$locationID");?>"><?php echo $this->lang->line('broneering');?></a></li>
		<?php } else { ?>
			<li><a href="<?php echo site_url("/FrontPage/loadLocation/$locationID");?>"><?php echo $this->lang->line('toad');?></a></li>
			<li class="dropdown">
                <a href="<?php echo site_url("/FrontPage/loadLocation/$locationID");?>" class="dropdown-toggle" data-toggle="dropdown">
                    <?php echo $this->lang->line('broneering');?>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><?php echo $this->lang->line('broneering_tuba');?></a></li>
                    <li><a href="#"><?php echo $this->lang->line('broneering_laud');?></a></li>
				</ul>
			</li>
		<?php } ?>
		<li><a href="<?php $locationID = $this->session->userdata('location'); echo site_url("/FrontPage/loadLocation/$locationID");?>"><?php echo $this->lang->line('tagasiside');?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		  <!-- Siia tuleb lahtioleku aeg -->
      </ul>
    </div>
  </div>
</nav>


	  

