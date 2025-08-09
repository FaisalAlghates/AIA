<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Show login form
     */
    public function login()
    {
        return view('auth::login');
    }

    /**
     * Show registration form
     */
    public function register()
    {
        return view('auth::register');
    }

    /**
     * Handle logout
     */
    public function logout()
    {
        // Handle logout logic here
        return redirect('/');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('auth::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('auth::edit');
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
