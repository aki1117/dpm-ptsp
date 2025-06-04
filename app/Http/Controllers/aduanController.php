<?php

namespace App\Http\Controllers;

use App\Models\jenisLapor;
use App\Exports\LaporansExport;
use App\Models\lapor;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class aduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporans = lapor::with(['jenis'])->get();
        return view('auth.aduan.index', ['laporans' => $laporans]);
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
    public function store(request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $date = \Carbon\Carbon::today()->subDays(7);

        $startOfWeek = \Carbon\Carbon::now()->startOfWeek();
        $endOfWeek = \Carbon\Carbon::now()->endOfWeek();

        $laporans = JenisLapor::withCount([
            'jenis',
            'jenis as jenis_week_count' => function ($query) use ($startOfWeek, $endOfWeek) {
                $query->whereBetween('created_at', [$startOfWeek, $endOfWeek]);
            }
        ])->get();

        return view('auth.aduan.recap', compact('laporans',));
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
        $aduan = lapor::findOrFail($id);

        $request->validate([
        'status' => 'required|in:received,progress,done',
        ]);

        $aduan->status = $request->status;
        $aduan->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $laporan = lapor::findOrFail($id);
        $laporan->delete();

        return redirect()->back()->with('success', 'Laporan deleted successfully.');
    }



    public function aduanShow(lapor $jenis)
    {
        $laporans = lapor::where('jenis_Lapor_id', $jenis->id)->get();
        return view('auth.aduan.recapShow', compact('laporans', 'jenis'));
    }


    public function exportExcel()
    {
        return Excel::download(new LaporansExport, 'laporans.xlsx');
    }

    public function exportPdf(lapor $jenis)
    {
        $laporans = Lapor::where('jenis_Lapor_id', $jenis->id)->get();
        return Pdf::loadView('auth.aduan.recapPdf', compact('laporans', 'jenis'))->setPaper('a4', 'landscape')->download('laporan.pdf');
    }
}
