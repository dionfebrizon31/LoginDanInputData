<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\mapel;
use App\Models\guru;
use App\Models\siswa;
use App\Models\kelas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'], // Ubah 'username' menjadi 'string'
            'password' => ['required'],
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');

        }
        return back()->withErrors([
            'message' => 'Username atau password yang Anda masukkan salah.', // Pastikan 'message' di sini benar
        ])->withInput(); // Tambahkan ini untuk mengembalikan input sebelumnya
    }

    public function InsertDataMapel(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required|string|max:255',
        ]);

        mapel::create([
            'nama_mapel' => $request->nama_mapel,
        ]);
        return redirect()->to(url('admin/data-mapel'))->with('success', 'Registration successful!');
    }
    public function InsertDataGuru(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:255',
            'matapelajaran' => 'required|integer',
        ]);

        guru::create([
            'nama_guru' => $request->nama_guru,
            'id_mapel' => $request->matapelajaran,
        ]);
        return redirect()->to(url('admin/data-guru'))->with('success', 'Registration successful!');
    }
    public function InsertDataKelas(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'muatankelas' => 'required|integer',
        ]);

        kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'muatan_kelas' => $request->muatankelas,
        ]);
        return redirect()->to(url('admin/data-kelas'))->with('success', 'Registration successful!');
    }
    public function InsertDataSiswa(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'kelassiswa' => 'required|integer',
        ]);

        siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'id_kelas' => $request->kelassiswa,
        ]);
        return redirect()->to(url('admin/data-siswa'))->with('success', 'Registration successful!');
    }
}
