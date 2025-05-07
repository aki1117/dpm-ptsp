<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisLapor extends Model
{
    use HasFactory;

    protected $table = 'jenis_lapors';
    protected $fillable = [ 
        'id', 'name'
    ];

    public function jenis()
    {
        return $this->hasMany(lapor::class,  'jenis_Lapor_id');
    }
}
