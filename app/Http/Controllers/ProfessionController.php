<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{

    public function index()
    {       
        return Profession::search(request()->search)
            ->orderBy(
                request()->orderBy,
                request()->desc == 'true' ? 'DESC' : 'ASC')
            ->paginate();
    }

    public function store()
    {
        $profession = Profession::create(request()->all());
        $profession->save();

        return [
            'message' => trans('app.profession.store_message'),
            'id' => $profession->id,
        ];
    }


    public function show()
    {
        return Profession::all();
    }



    public function update($id)
    {
        $profession = Profession::find($id);
        $profession->fill(request()->all());
        $profession->save();

        return ['message' => trans('app.profession.update_message')];
    }


    public function destroy($id)
    {
        $profession->Profession::destroy($id);
        return ['message' => trans('app.profession.delete_message')];
    }
}
