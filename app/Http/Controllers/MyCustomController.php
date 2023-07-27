<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use illuminate\Support\Facades\Storage;

class MyCustomController extends Controller
{
    public function index() {

        $projects = Project :: all();

        return view('home', compact('projects'));
    }

    public function store(Request $request){
        $data['cover'] = Storage::put('uploads', $data['cover']);
    }
}
