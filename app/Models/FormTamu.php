<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTamu extends Model
{
    use HasFactory;
    protected $table ="form_tamus";
    protected $fillable = [
        'nama', 
        'instansi',
        'jabatan', 
        'keperluan', 
        'no_telp', 
    ];
}
