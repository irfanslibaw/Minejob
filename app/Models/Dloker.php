<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dloker extends Model
{
    use HasFactory;
    protected $fillable = ['datapt_id','bagian_pekerjaan', 'tanggal_akhir', 'deskripsi_pekerjaan', 'persyaratan', 'tingkat_pekerjaan', 'minimal_kelulusan', 'pengalaman', 'jenis_pekerjaan'];
    protected $table = 'dlokers';
    public $timestamps = true;

    public function scopeFilter($query)
    {
        if (request('search')){
            return $query = Dloker::where('bagian_pekerjaan', 'like', '%'. request('search') . '%' );
        }

    }

    public function datapt()
    {
        return $this->belongsTo(Datapt::class);
    }

    public function lamaran()
    {
        return $this->hasMany(Lamaran::class);
    }
}
