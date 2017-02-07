<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
    	$name = array(
    		'first' => 'Jay',
    		'last' => 'Damo'
    		);
    	return view('pages.about', $name);
    }

    public function contact()
    {
    	return 'Contact me';
    }
}
