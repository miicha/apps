<?php
/**
 * Copyright (c) 2011 Bart Visscher <bartv@thisnet.nl>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

// Init owncloud
 

$l=OC_L10N::get('calendar');

// Check if we are a user
OC_JSON::checkLoggedIn();
OC_JSON::checkAppEnabled('calendar');

// Get data
if( isset( $_POST['timezone'] ) ){
	$timezone=$_POST['timezone'];
	OC_Preferences::setValue( OCP\USER::getUser(), 'calendar', 'timezone', $timezone );
	OC_JSON::success(array('data' => array( 'message' => $l->t('Timezone changed') )));
}else{
	OC_JSON::error(array('data' => array( 'message' => $l->t('Invalid request') )));
}

?>
