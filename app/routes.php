<?php
	
$w_routes = array(
	['GET', '/', 'Default#home', 'default_home'],
	['GET', '/contact', 'Default#contact', 'default_contact'],
	['POST|GET', '/register', 'Default#register', 'default_register'],
	['POST|GET', '/login', 'Default#login', 'default_login'],
	['POST|GET', '/logout', 'Default#logout', 'default_logout']
);