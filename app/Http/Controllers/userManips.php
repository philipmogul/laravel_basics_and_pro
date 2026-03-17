<?php

namespace App\Http\Controllers;
// include users model 
use App\Models\User;
use Illuminate\Http\Request;

class userManips extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('usermanips', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edituser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        return redirect()->route('usermanips.index')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('usermanips.index')->with('success', 'User deleted successfully');
    }

}
