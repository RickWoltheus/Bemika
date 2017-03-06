<?php 

// Report all PHP errors
error_reporting(-1);
ini_set("display_errors", 1); 

// Stel de instellingen in op Nederlands
setlocale(LC_ALL, 'nl_NL');

// definier functie __autoload, zodat de classes gevonden kunne worden zonder require
function __autoload($className) {
	
    if (file_exists('models/'.$className.'.php')) {
       
        require_once('models/'.$className.'.php');
    }
    else if (file_exists('helpers/'.$className.'.php')) {
	    
        require_once('helpers/'.$className.'.php');
    }
    else if (file_exists('controllers/'.$className.'.php')) {
	    
        require_once('controllers/'.$className.'.php');
    }
    else 
    {
	 	// foutafhandeling toevoegen
	 	exit('Class '.$className.' not found!');  
    }
}
