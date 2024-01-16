<?php

namespace App\Http\Controllers;

use App\Models\pinjam;
use App\Http\Requests\StorepinjamRequest;
use App\Http\Requests\UpdatepinjamRequest;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pinjam::query()->get();
        return response()->json(['data' => $data]);
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
    public function store(StorepinjamRequest $request)
    {
        $data = pinjam::create($request->all());
        return response()->json(['data' => $data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(pinjam $pinjam,string $id)
    {
        $data = pinjam::query()->find($id);
        return response()->json(['data' => $data]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pinjam $pinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepinjamRequest $request, pinjam $pinjam,string $id)
    {
        $data = pinjam::query()->find($id);
        $data->update($request->all());
        return response()->json(['data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pinjam $pinjam,string $id)
    {
        $data = pinjam::find($id);
        $data->delete();
        return response()->json(['data' => $data]);
    }


}
