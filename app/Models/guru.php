<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    public $timestamps = false;

    // mendeklarasikan hubungan dua tabael nya contoh di tabel guru ada id_mapel dan
    // dan di tabel mapel ada id_mapel  di relasikan dengan seperti di bawah
    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel', 'id_mapel');
    }
    protected $fillable = [
        'nama_guru',
        'id_mapel',
    ];
}
