<?php

function __autoload($class){
	$file = $class.".php";
	if(is_file($file)){
		require $file;
	}
}

$b = new b;
$b->show();