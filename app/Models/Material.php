<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use softDeletes;

    protected $fillable = [
        'nama_materi',
        'kategori_id',
        'image',
        'audio'
    ];

    protected $hidden = [

    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'kategori_id', 'id');
    }
}