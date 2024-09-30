<?php

namespace App\Http\Controllers;
use App\Models\admin;
use App\Models\mapel;
use App\Models\guru;
use App\Models\siswa;
use App\Models\kelas;
use Illuminate\Http\Request;

class AdminShowController extends Controller
{
    public function ShowDataMapel()
    {
        $mapel = mapel::all(); // Ambil semua data siswa
        return view('admin.datamapel', compact('mapel'));
    }
    public function ShowDataGuru()
    {
        $mapel = mapel::all(); // Ambil semua data siswa
        $guru = Guru::with('mapel')->get();
        return view('admin.dataguru', compact('guru', 'mapel'));
    }
    public function ShowDataSiswa()
    {
        $siswa = siswa::with('kelasku')->get();
        $kelas = kelas::all();
        return view('admin.datasiswa', compact('siswa', 'kelas'));
    }
    public function ShowDataKelas()
    {
        // Menghitung jumlah siswa per kelas
        $kelas = Kelas::withCount('countkelas')->get(); // Ambil semua kelas dengan jumlah siswa

        return view('admin.datakelas', compact('kelas'));
    }

    public function ShowDataKelasBelajar()
    {
        // Ambil data guru dan siswa
        $mapel = mapel::all(); // Ambil semua data siswa
        $kelas = kelas::all();
        $guru = Guru::with('mapel')->get();
        $siswa = siswa::with('kelasku')->get();

        // Gabungkan data guru dan siswa ke dalam satu variabel
        $dbku = [
            'guru' => $guru,
            'siswa' => $siswa,
            'mapel' => $mapel,
            'kelas' => $kelas
        ];
        // Kembalikan view dengan data gabungan
        return view('admin.datakelasbelajar', compact('dbku'));
    }
    public function ShowDataAdmin()
    {
        return view('admin.dataadmin');
    }
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function ShowRegisterForm()
    {
        return view('admin.register');
    }
    public function ShowAdminHome()
    {
        return view('admin.home');
    }
    public function ShowAdminJadwal()
    {
        return view('admin.jadwal');
    }
    public function index()
    {
        $siswa = Siswa::all(); // Ambil semua data siswa
        return view('siswa.index', compact('siswa'));
    }
}
