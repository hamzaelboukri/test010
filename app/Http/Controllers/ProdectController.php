<?php

namespace App\Http\Controllers;

use App\Models\prodect;
use App\Http\Requests\StoreprodectRequest;
use App\Http\Requests\UpdateprodectRequest;

class ProdectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = prodect::table('product')->orderBy('prix');
        return view('index');

    }
// select * from prodect count(prix)
// orderby desc prix



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprodectRequest $request)
    {
        $request=['product','desc','prix'];
    }

    /**
     * Display the specified resource.
     */
    public function show(prodect $prodect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prodect $prodect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprodectRequest $request, prodect $prodect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prodect $prodect)
    {
        //
    }
}
