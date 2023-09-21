<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\KelasRequest;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();

        return response()->json([
            "success" => true,
            "message" => "Kelas List",
            "data" => $kelas
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
    public function store(KelasRequest $request)
    {
        $kelas = Kelas::create($request->validated());

        return response()->json([
            "success" => true,
            "message" => "Kelas created successfully.",
            "data" => $kelas
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KelasRequest $request, Kelas $kelas)
    {
        $kelas->update($request->validated());

        return response()->json([
            "success" => true,
            "message" => "Kelas updateds successfully.",
            "data" => $kelas
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();

        return response()->json([
            "success" => true,
            "message" => "Kelas updateds successfully.",
            "data" => $kelas
        ]);
    }
}
