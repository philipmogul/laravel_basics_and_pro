<?php

namespace App\Http\Controllers;

use App\Models\crud_system;
use Illuminate\Http\Request;

class CrudSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud_systems = crud_system::all();
        return view('crud_system.index', compact('crud_systems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud_system.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'quantity' => 'required|integer',
        ]);

        crud_system::create($validatedData);

        return redirect()->route('crud_system.index')->with('success', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(crud_system $crud_system)
    {
        return view('crud_system.show', compact('crud_system'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $crud_system = crud_system::findOrFail($id);
        return view('crud_system.edit', compact('crud_system'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'quantity' => 'required|integer',
        ]);

        $crud_system = crud_system::findOrFail($id);
        $crud_system->update($validatedData);

        return redirect()->route('crud_system.index')->with('success', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $crud_system = crud_system::findOrFail($id);
        $crud_system->delete();
        return redirect()->route('crud_system.index')->with('success', 'Item deleted successfully.');
    }
}
