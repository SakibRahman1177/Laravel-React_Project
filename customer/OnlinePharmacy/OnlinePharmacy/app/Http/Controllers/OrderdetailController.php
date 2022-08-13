<?php

namespace App\Http\Controllers;

use App\Models\orderdetail;
use App\Http\Requests\StoreorderdetailRequest;
use App\Http\Requests\UpdateorderdetailRequest;

class OrderdetailController extends Controller
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
     * @param  \App\Http\Requests\StoreorderdetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderdetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function show(orderdetail $orderdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(orderdetail $orderdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderdetailRequest  $request
     * @param  \App\Models\orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderdetailRequest $request, orderdetail $orderdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderdetail $orderdetail)
    {
        //
    }
}
