<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PositionController extends Controller
{
     public function create()
    {
    	return view('admin.position.create',[
    		'pagetitle' => 'position',
    		'title' => 'position'
    	]);
    }
     public function index()
    {
    	return view('admin.position.index',[
    		'pagetitle' => 'position',
    		'title' => 'position'
    	]);
    }
}
