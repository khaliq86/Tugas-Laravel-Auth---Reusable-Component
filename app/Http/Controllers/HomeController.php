<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth()->user();
        if ($user->role == 'admin') {
            $projects = Project::all();
            return view('dashboard', compact('projects', 'user'));
        } else {
            $projects = Project::where('id_user', $user->id)->get();
            return view('dashboard', compact('projects', 'user'));
        }
    }
}