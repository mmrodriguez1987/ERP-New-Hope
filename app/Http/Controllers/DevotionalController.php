<?php

namespace App\Http\Controllers;

use App\Models\Devotional;
use Illuminate\Http\Request;

class DevotionalController extends Controller
{
    
    public function index()
    {
        return Devotional::search(request()->search)
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

   
    public function show(Devotional $devotional)
    {
        //
    }

    
    public function edit(Devotional $devotional)
    {
        //
    }

   
    public function update(Request $request, Devotional $devotional)
    {
        //
    }

   
    public function destroy(Devotional $devotional)
    {
        //
    }
}
