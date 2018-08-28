<?php

namespace App\Http\Controllers;

use App\Models\Source;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class SourceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
	{
	    //$this->middleware('auth');
	}
    
    public function getAll()
    {
        return Source::all();
    }

    

}
