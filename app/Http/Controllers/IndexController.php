<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function viewIndex(){
    	return view('index');
    }

    function showProjects(){
    	$projects = \App\Projects::all();

    	return view('index',compact('projects'));
    }
}
