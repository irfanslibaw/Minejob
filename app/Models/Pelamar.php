<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'email', 'password', 'umur', 'no_handphone'];
    protected $table = 'pelamars';
    public $timestamps = true;
}
