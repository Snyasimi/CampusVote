<?php

namespace App\Http\Controllers;

use App\Models\positions;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    /**
     * Display all positions.
     */
    public function index()
    {
        $positions = positions::orderBy('name')->get();

        return view('admin-view.positions', compact('positions'));
    }

    /**
     * Store a new position.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100', 'unique:positions,name'],
        ]);

        positions::create(['name' => $request->name]);

        return back()->with('success', 'Position added successfully.');
    }

    /**
     * Remove a position.
     */
    public function destroy(positions $position)
    {
        $position->delete();

        return back()->with('success', 'Position removed.');
    }
}
