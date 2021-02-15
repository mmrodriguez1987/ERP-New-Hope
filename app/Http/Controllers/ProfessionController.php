<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$profession = Profession::all();
        // Return Json Response
        //return response()->json(['professions' => $profession],200);
        
        return Profession::search(request()->search)
            ->orderBy(
                request()->orderBy, 
                request()->desc == 'true' ? 'DESC' : 'ASC'
                )
            ->paginate();
    }


    /**
     * Store a newly created Profession in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profession = Profession::create(request()->all());
        $profession->save();

         return response()->json(['professions' => $profession],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function show(Profession $profession)
    {
        return Profession::all();
    }

  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profession $profession)
    {       
        $profession->update(request()->all());    
        return ['message' => trans('Profession Updated')];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profession $profession)
    {
        $profession->delete();
        return ['message' => trans('Profession destroyed')];
    }
}
