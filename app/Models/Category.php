<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use softDeletes;

    protected $fillable = [
        'nama_kategori',
        'kelas_id'
    ];

    protected $hidden = [

    ];

    public function classes()
    {
        return $this->belongsTo(Classes::class, 'kelas_id', 'id');
    }

    public function materials()
    {
        return $this->hasMany(Material::class, 'kategori_id', 'id');
    }
}