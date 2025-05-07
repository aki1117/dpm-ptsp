<?php

namespace App\Exports;

use App\Models\lapor;
use Maatwebsite\Excel\Concerns\FromCollection;

class LaporansExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return lapor::all();
    }
}
