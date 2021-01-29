<?php 
namespace Miya\Dd;

if (! function_exists('dd')) {
	function dd ()
	{
	    array_map(function ($x) {
            (new VarDumper)->dump($x);
        }, func_get_args());

        die(1);
	}
}


 ?>