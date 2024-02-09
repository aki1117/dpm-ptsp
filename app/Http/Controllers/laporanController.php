<?php

namespace App\Http\Controllers;

use App\Models\lapor;
use Illuminate\Http\Request;
use App\Models\jenisLapor;
use DB;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporans = jenisLapor::all();
        // return view('auth/posts/create')->with('categories', $categories);
        return view('website.laporan',['laporans'=>$laporans]);
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
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

        $request->validate([
            'email' => ['required','email'],
            'ktp' => ['required'],
        ]);

        lapor::create([
            'jenis_Lapor_id'=>$request->jenis_Lapor_id,
            'name'=> $request->nama, 
            'jk '=> $request->jenisKelamin,
            'rumah'=> $request->alamat_rumah,
            'pekerjaan'=> $request->pekerjaan,
            'kantor'=> $request->alamat_kantor,
            'email'=> $request->email,
            'ktp'=> $request->ktp,
            'phone_number'=> $request->tlp,
            'subjek'=> $request->subjek,
            'isian'=> $request->isian,
            'tanggal_kejadian'=> $request->tanggal_kejadian,
            'lokasi'=> $request->lokasi,
            'tujuan_pengaduan'=> $request->tujuan_pengaduan
        ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
        }

        DB::commit();
        $request->session()->flash('success','Post Created Successfully');
        
        return to_route('laporan.index');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
