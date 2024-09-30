<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'siswas';
    public function kelasku()
    {
        return $this->belongsTo(kelas::class, 'id_kelas', 'id_kelas');
    }
    public function siswasku()
    {
        return $this->hasMany(siswa::class, 'id_kelas', );
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    protected $fillable = [
        'nama_siswa',
        'id_kelas',
    ];
}
