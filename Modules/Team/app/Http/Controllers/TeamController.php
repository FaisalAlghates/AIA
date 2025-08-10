<?php

namespace Modules\Team\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leadershipTeam = TeamMember::active()->leadership()->ordered()->get();
        $coreTeam = TeamMember::active()->coreTeam()->ordered()->get();
        
        return view('team::index', compact('leadershipTeam', 'coreTeam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('team::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $member = TeamMember::findOrFail($id);
        return view('team::show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('team::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}
}
