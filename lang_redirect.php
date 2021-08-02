<?php
/*
   Plugin Name: Awesomeness Creator
   Plugin URI: http://my-awesomeness-emporium.com
   description: >-
  a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: Mr. Awesome
   Author URI: http://mrtotallyawesome.com
   License: GPL2
  */


// Program to display complete URL	
	
//htmlspecialchars($_GET["name"]) .
add_action();   

if(isset($_SERVER['HTTPS']) &&
			$_SERVER['HTTPS'] === 'on')
	$link = "https";
	else
		$link = "http";

// Here append the common URL
// characters.
$link .= "://";
	
// Append the host(domain name,
// ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

$link .= '/';
	
$link .= $_GET["language"];


// Append the requested resource
// location to the URL
$link .= $_SERVER['PHP_SELF'];
	
// Display the link
echo $link;
?>
