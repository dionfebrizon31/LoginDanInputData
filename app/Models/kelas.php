<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'kelass';

    public function countkelas()
    {
        return $this->hasMany(siswa::class, 'id_kelas', 'id_kelas');
    }
    protected $fillable = [
        'nama_kelas',
        'muatan_kelas',
    ];
}
