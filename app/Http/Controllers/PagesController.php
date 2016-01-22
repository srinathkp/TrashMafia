<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.homepage');
    }

    public function makecomplaint(){
    	return view('pages.complaint');
    }

    public function registercomplaint(Request $request){

    	 Complaint::create($request->all());
    	 return redirect('/complaint');
    }

}
