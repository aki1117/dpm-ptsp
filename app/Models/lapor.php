<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lapor extends Model
{
    use HasFactory;

    protected $fillable = ['jenis_Lapor_id', 'name', 'jenisKelamin','rumah','pekerjaan','kantor','email','ktp','phone_number','subjek','isian','tanggal_kejadian','lokasi','tujuan_pengaduan'];
    public function jenis(){
        return $this->belongsTo(jenisLapor::class);
    }
}
