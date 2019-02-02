<?php
//config.php

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Sara";

//echo THIS_PAGE;

//die;

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

$title = THIS_PAGE;
$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){
    
    case 'index.php':
        $title = 'Jerrel Singleton SCC WEB120 Portal';
        $logo = "fa-home";
    break;
        
    case 'contact.php':
        $title = 'Jerrel Singleton Contact Me';
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:green"';
    break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default 

}

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LfJVosUAAAAAA1VWBlZ3Li5Z3yPNT8Zf3ytAfwp";
$secretKey = "6LfJVosUAAAAAIs8NVsa5yQ3g378uuk2vm6bBMXJ";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>