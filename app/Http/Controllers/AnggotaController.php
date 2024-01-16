<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Http\Requests\StoreanggotaRequest;
use App\Http\Requests\UpdateanggotaRequest;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = anggota::query()->get();
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
    public function store(StoreanggotaRequest $request)
    {
        $data = anggota::create($request->all());
        return response()->json(['data' => $data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(anggota $anggota, string $id)
    {
        $data = anggota::query()->find($id);
        return response()->json(['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateanggotaRequest $request, anggota $anggota, string $id)
    {
        $data = anggota::query()->find($id);
        $data->update($request->all());
        return response()->json(['data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(anggota $anggota,string $id)
    {
        $data = anggota::find($id);
        $data->delete();
        return response()->json(['data' => $data]);
    }
}
