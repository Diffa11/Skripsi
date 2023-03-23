<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
    use softDeletes;

    protected $fillable = [
        'nama_kelas',
        'image',
        'description'
    ];

    protected $hidden = [

    ];

    public function kategori()
    {
        return $this->hasMany(Category::class, 'kelas_id', 'id');
    }
}