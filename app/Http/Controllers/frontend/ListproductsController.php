<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\ListproductModel;
use Illuminate\Http\Request;

class ListproductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.listproducts');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ListproductModel $listproductModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListproductModel $listproductModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ListproductModel $listproductModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListproductModel $listproductModel)
    {
        //
    }
}