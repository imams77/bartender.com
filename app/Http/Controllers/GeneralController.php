<?php

namespace GreenvilleGofur\Http\Controllers;

use Illuminate\Http\Request;

use GreenvilleGofur\Http\Requests;

class GeneralController extends Controller
{
    public function __construct()
    {

    }
    public function home()
    {
    	return view('homes.index');
    }
}
