<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
class admin extends Authenticatable
{
    use HasFactory, Notifiable;

    public function index()
    {
        $admin = Auth::guard('admin')->user(); // Mendapatkan pengguna yang sedang login

        if ($admin) {
            $username = $admin->username; // Ganti 'username' dengan kolom yang sesuai
            return "Nama login: " . $username;
        } else {
            return "Pengguna belum login.";
        }
    }
    /**
     * The attributes that are mass assignable.
     *nama_lengkap	username	username_verified_at	password	remember_token	created_at	updated_at	
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'username',
        'username_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
