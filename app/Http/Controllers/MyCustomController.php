<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class MyCustomController extends Controller
{
    public function index() {

        $projects = Project :: all();

        return view('home', compact('projects'));
    }
}
