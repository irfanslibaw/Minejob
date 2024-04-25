<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;
    protected $fillable = ['datapt_id', 'dloker_id','user_id', 'pdf_file'];
    protected $table = 'lamarans';
    public $timestamps = true;

    public function dloker()
    {
        return $this->belongsTo(Dloker::class);
    }

    public function datapt()
    {
        return $this->belongsTo(Datapt::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
