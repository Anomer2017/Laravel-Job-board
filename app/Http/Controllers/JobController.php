<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{

     public function index(): View
    {
        $jobs = Job::all();
        return view('Jobs.index',['jobs' => $jobs ,'name'=>'Yahya']);
    }
    
}
