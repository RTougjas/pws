<?php $locationID = $this->session->userdata( 'location' );?>

<?php for( $i = 0; $i < count($menuItemsChecked); $i++) {
	echo $menuItemsChecked[$i];
}?>