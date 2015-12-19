<?php $locationID = $this->session->userdata( 'location' );?>
<div class="col lg-3 col-md-4 col-sm-3 col-xs-2"></div>
<div class="col lg-6 col-md-4 col-sm-6 col-xs-8">
	<?php if( $locationID == 1 ) { ?>
		<div class="row">
			<form>
	  			<div class="form-group">
	    			<label for="text">Eesnimi</label>
	    			<input type="text" class="form-control" id="first_name" name="first_name" placeholder="eesnimi">
	  	  		</div>
	  	  		<div class="form-group">
	    			<label for="text">Perekonnanimi</label>
	    			<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Perekonnanimi">
	 	   		</div>
	  	  		<div class="form-group">
	    			<label for="text">Telefon</label>
	    			<input type="text" class="form-control" id="phone" name="phone" placeholder="telefon">
	 	   		</div>
	  	  		<div class="form-group">
	    			<label for="email">Email</label>
	    			<input type="email" class="form-control" id="email" name="email" placeholder="email">
	 	   		</div>
	  	  		<button type="submit" class="btn btn-primary">Logi sisse</button>
			</form>
		</div>
	<? } else if( $locationID == 2 ) { ?>
		<div class="row" id="book_table">
			<form>
	  			<div class="form-group">
	    			<label for="text">Eesnimi</label>
	    			<input type="text" class="form-control" id="first_name" name="first_name" placeholder="eesnimi">
	  	  		</div>
	  	  		<div class="form-group">
	    			<label for="text">Perekonnanimi</label>
	    			<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Perekonnanimi">
	 	   		</div>
	  	  		<div class="form-group">
	    			<label for="text">Telefon</label>
	    			<input type="text" class="form-control" id="phone" name="phone" placeholder="telefon">
	 	   		</div>
	  	  		<div class="form-group">
	    			<label for="email">Email</label>
	    			<input type="email" class="form-control" id="email" name="email" placeholder="email">
	 	   		</div>
	  	  		<button type="submit" class="btn btn-primary">Logi sisse</button>
			</form>
		</div>
	<? } ?>	
</div>
<div class="col lg-3 col-md-4 col-sm-3 col-xs-2"></div>