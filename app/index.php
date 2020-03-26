<?
 

spl_autoload_register(function($classes){

	if (file_exists($classes.'.php') ) {
			include $classes.'.php';
	}
}); 


include 'libs/Database.php';
$data = new libs\Database;
