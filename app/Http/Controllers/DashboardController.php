<?php

namespace App\Http\Controllers;

use App\Models\Dash;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile', ['title' => 'Profile']);
    }
    public function dashboard()
    {
        return view('dash', ['title' => 'Dash']);
        // return 'lol';
    }
    public function post()
    {
        return view('poost', [
            'title' => 'Post'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dash  $dash
     * @return \Illuminate\Http\Response
     */
    public function show(Dash $dash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dash  $dash
     * @return \Illuminate\Http\Response
     */
    public function edit(Dash $dash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dash  $dash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dash $dash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dash  $dash
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dash $dash)
    {
        //
    }
}
