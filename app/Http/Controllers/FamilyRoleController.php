<?php

namespace App\Http\Controllers;

use App\Models\FamilyRole;
use Illuminate\Http\Request;

class FamilyRoleController extends Controller
{
    
    public function index()
    {
        return FamilyRole::search(request()->search)
            ->orderBy(request()->orderBy, request()->desc == 'true' ? 'DESC' : 'ASC')
            ->paginate(10);
    }

  
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Familyrole  $familyrole
     * @return \Illuminate\Http\Response
     */
    public function show(Familyrole $familyrole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Familyrole  $familyrole
     * @return \Illuminate\Http\Response
     */
    public function edit(Familyrole $familyrole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Familyrole  $familyrole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Familyrole $familyrole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Familyrole  $familyrole
     * @return \Illuminate\Http\Response
     */
    public function destroy(Familyrole $familyrole)
    {
        //
    }
}
