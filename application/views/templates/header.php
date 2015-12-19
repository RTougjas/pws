<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ditto</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>" rel="stylesheet">
		<link href="<?php echo base_url("css/styles.css");?>" rel="stylesheet">
		<?php $this->lang->load('tekst_lang', 'estonian')?>
    </head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url("/");?>">Ränduri pubi</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="<?php $locationID = $this->session->userdata('location'); echo site_url("/FrontPage/loadLocation/$locationID");?>">Home</a></li>
        <li><a href="<?php $locationID = $this->session->userdata('location'); echo site_url("/FrontPage/loadLocation/$locationID");?>">Page 1</a></li>
        <li><a href="<?php $locationID = $this->session->userdata('location'); echo site_url("/FrontPage/loadLocation/$locationID");?>">Page 2</a></li> 
        <li><a href="<?php $locationID = $this->session->userdata('location'); echo site_url("/FrontPage/loadLocation/$locationID");?>">Page 3</a></li> 
      </ul>
    </div>
  </div>
</nav>
	  

