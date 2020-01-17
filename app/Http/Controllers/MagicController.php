<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagicController extends Controller
{
	    function __invoke($id=99999)
	    {
	    	echo "MEthod CAll : $id ";
	    }

	    function show()
	    {
	    	echo "EVS";
	    }
}
