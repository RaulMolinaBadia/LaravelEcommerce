<?php

namespace App\Http\Controllers;

use App\Models\BankData;
use App\Http\Requests\StoreBankDataRequest;
use App\Http\Requests\UpdateBankDataRequest;

class BankDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBankDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBankDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankData  $bankData
     * @return \Illuminate\Http\Response
     */
    public function show(BankData $bankData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankData  $bankData
     * @return \Illuminate\Http\Response
     */
    public function edit(BankData $bankData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBankDataRequest  $request
     * @param  \App\Models\BankData  $bankData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBankDataRequest $request, BankData $bankData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankData  $bankData
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankData $bankData)
    {
        //
    }
}
