<!DOCTYPE html><link rel="stylesheet" href="assets/style.css">

<h1>Tracy Fatal Error demo</h1>

<?php

require __DIR__ . '/../../Nette/loader.php';

use Tracy\Debugger;


Debugger::enable(Debugger::DETECT, __DIR__ . '/log');



function first($arg1, $arg2)
{
	second(TRUE, FALSE);
}



function second($arg1, $arg2)
{
	third(array(1, 2, 3));
}


function third($arg1)
{
	echo html_special_chars($arg1); // this function doesn't exist
}


first(10, 'any string');
