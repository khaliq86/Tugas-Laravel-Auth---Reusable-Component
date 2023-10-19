<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use App\Models\Tag;
use Carbon\Carbon;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $user = Auth::user();
        $dataUser = User::all();

        $newFormatDates = [];

        foreach ($dataUser as $item) {
            $date = $item->created_at;
            $formattedDate = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d F Y');
            $newFormatDates[] = $formattedDate;
        }

        return view('content.admin', compact('projects', 'user', 'dataUser', 'newFormatDates'));
    }

    public function userDelete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user');
    }
}