<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Http\Resources\PortfolioCollection;
use App\Http\Resources\PortfolioResource;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PortfolioCollection(Portfolio::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioRequest $request)
    {
        return new PortfolioResource(Portfolio::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        return new PortfolioResource($portfolio);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $portfolio->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
