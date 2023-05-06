<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStockExchangeRequest;
use App\Http\Requests\UpdateStockExchangeRequest;
use App\Models\Exchange;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(StoreStockExchangeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Exchange $stockExchange)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exchange $stockExchange)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStockExchangeRequest $request, Exchange $stockExchange)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exchange $stockExchange)
    {
        //
    }
}
