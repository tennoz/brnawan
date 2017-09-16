<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class file_controller extends Controller
{
    public function index () {
    	$files = File::all();
    	
    	return view ('table-donate', compact('files'));
    }
    
}
