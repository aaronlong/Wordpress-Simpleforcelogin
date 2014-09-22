<?php

/**
 * Plugin Name: Simple Force user Login
 * Plugin URI: www.aaronlong.co.uk
 * Description: A Plugin to force users to login to view the site 
 * Version: 1.0
 * Author: Aaron Long
 */

function checkUserLoggedIn(){

	if(!(is_user_logged_in())){
	auth_redirect();
	exit;
	}
}

add_action("template_redirect" , "checkUserLoggedIn");

?>