<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Donation::search(request()->search)
            ->orderBy(request()->orderBy, request()->desc == 'true' ? 'DESC' : 'ASC')
            ->paginate(5);
    }

  
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show(Donation $donation)
    {
        //
    }

   
    public function edit(Donation $donation)
    {
        //
    }

  
    public function update(Request $request, Donation $donation)
    {
        //
    }

  
 
}
