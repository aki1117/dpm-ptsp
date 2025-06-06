<?php

namespace App\Exports;

use App\Models\lapor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LaporanByJenisExport implements FromCollection, WithHeadings, WithMapping
{
    protected $jenis_id;

    public function __construct($jenis_id)
    {
        $this->jenis_id = $jenis_id;
    }

    public function collection()
    {
        return lapor::with('jenis')
            ->where('jenis_Lapor_id', $this->jenis_id)
            ->get();
    }

    public function map($laporan): array
    {
        return [
            $laporan->name,
            $laporan->jenisKelamin == 1 ? 'Perempuan' : 'Laki-laki',
            $laporan->rumah,
            $laporan->pekerjaan,
            $laporan->email,
            $laporan->subjek,
            $laporan->status ?? 'received',
            optional($laporan->jenis)->name,
            $laporan->created_at->format('d-m-Y'),
        ];
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Jenis Kelamin',
            'Alamat Rumah',
            'Pekerjaan',
            'Email',
            'Judul Laporan',
            'Status',
            'Jenis Aduan',
            'Tanggal Dibuat',
        ];
    }
}
