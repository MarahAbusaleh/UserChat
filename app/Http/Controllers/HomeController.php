<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use App\Models\Partner;
use App\Models\Volanteer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $categories = Category::all();
        // $jobs = Job::all();
        // $partners = Partner::all();

        // dd($categories, $jobs, $partners);

        return view('Pages.index');

    }


}