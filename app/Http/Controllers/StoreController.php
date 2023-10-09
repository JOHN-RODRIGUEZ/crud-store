<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use function Laravel\Prompts\search;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private const FOLDER_PATH_LOCAL = 'img/reservas/store';
    public function index(Request $request)
    {
        $search=$request->search;
        $stores=Store::where('name','like','%'.$request->search.'%')->latest('id')->paginate(8);
        return view('Store.index',compact('stores','search'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $stores = new store;
        $stores->name=$request->input('name');
        $stores->slug=$request->input('slug');
        $stores->front_page=$request->input('front_page');
        $stores->description=$request->input('description');
        $stores->location=$request->input('location');
        $stores->nit=$request->input('nit');
        $stores->status=$request->input('status');
        $stores->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $stores=store::find($id);
       
        $stores->name=$request->input('name');
        $stores->slug=$request->input('slug');
        $stores->front_page=$request->input('front_page');
        $stores->description=$request->input('description');
        $stores->location=$request->input('location');
        $stores->nit=$request->input('nit');
        $stores->status=$request->input('status');
        $stores->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $stores=store::find($id);
        $stores->delete();
        return redirect()->back();
    }
}
