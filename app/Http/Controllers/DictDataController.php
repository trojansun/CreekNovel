<?php

namespace App\Http\Controllers;

use App\Models\DictData;
use App\Http\Requests\StoreDictDataRequest;
use App\Http\Requests\UpdateDictDataRequest;
use App\Models\DictType;
use Inertia\Inertia;

class DictDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 获取请求query的id
        $dict_type = request()->query('dict_type');
        return Inertia::render('system/dictData/index', [
            'dictDataList' => DictData::where('dict_type', $dict_type)->get()->map(function ($dictData) {
                return $dictData;
            })
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
    public function store(StoreDictDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DictData $dictData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DictData $dictData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDictDataRequest $request, DictData $dictData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DictData $dictData)
    {
        //
    }
}
