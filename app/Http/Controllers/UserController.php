<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    protected $user;
    public function index()
    {
        $user = Auth::user();
        return view('content.profile', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('form.user', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $input = $request->all();
        $user = User::find($id);

        $user->name = $input['name'];
        $user->email = $input['email'];
        $request->file('image')->storeAs('public/images', $user->image);

        $user->save();

        return redirect()->route('profile');
    }
}