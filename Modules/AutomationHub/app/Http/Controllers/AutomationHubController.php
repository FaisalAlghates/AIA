<?php

namespace Modules\AutomationHub\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutomationHubController extends Controller
{
    /**
     * Display the automation hub page
     */
    public function index()
    {
        return view('automationhub::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('automationhub::create');
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
        return view('automationhub::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('automationhub::edit');
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
