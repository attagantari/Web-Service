<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Http\Requests\StorebukuRequest;
use App\Http\Requests\UpdatebukuRequest;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data = buku::query()->get();
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
    public function store(StorebukuRequest $request)
    {
        // dd($request);
        $data = buku::create($request->all());
        return response()->json(['data' => $data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku,string $id)
    {
        $data = buku::query()->find($id);
        return response()->json(['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebukuRequest $request, buku $buku,string $id)
    {
        $data = buku::query()->find($id);
        $data->update($request->all());
        return response()->json(['data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku $buku,string $id)
    {
        $data = buku::find($id);
        $data->delete();
        return response()->json(['data' => $data]);
    }
}
