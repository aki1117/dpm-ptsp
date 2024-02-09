<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    public const Published = 1;
    public const Draft = 0;

    protected $fillable = ['gallery_id', 'category_id', 'title','description','is_publish'];

    public function gallery(){
        return $this->belongsTo(Gallery::class);
    }

    public function category(){
        return $this->belongsTo(category::class);
    }

     
}
