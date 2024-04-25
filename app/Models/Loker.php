<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pembuat','nama_perusahaan', 'email_kantor', 'no_hpkantor', 'bagian_pekerjaan', 'tempat_kantor','deskripsi_pekerjaan', 'kualifikasi', 'pengalaman', 'jenis_pekerjaan'];
    protected $table = 'lokers';
    public $timestamps = true;
}
