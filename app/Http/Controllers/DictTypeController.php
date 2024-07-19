<?php

namespace App\Http\Controllers;

use App\Models\DictType;
use App\Http\Requests\StoreDictTypeRequest;
use App\Http\Requests\UpdateDictTypeRequest;
use Inertia\Inertia;

class DictTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('system/dictType/index', [
            'dictTypeList' => DictType::all()
        ]);
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
    public function store(StoreDictTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DictType $dictType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DictType $dictType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDictTypeRequest $request, DictType $dictType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DictType $dictType)
    {
        //
    }
}
