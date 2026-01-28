<?php

namespace App\Http\Controllers;

use App\Models\userProfiles;
use Illuminate\Http\Request;

class UserProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = userProfiles::all();
        return view('user-profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user-profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(userProfiles $userProfiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(userProfiles $userProfiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, userProfiles $userProfiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(userProfiles $userProfiles)
    {
        //
    }
}
