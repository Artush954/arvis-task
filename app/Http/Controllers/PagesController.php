<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Company;
use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function index(){
         return view('layouts.app');
     }

}
