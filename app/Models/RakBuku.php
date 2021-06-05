<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RakBuku extends Model
{
    use HasFactory;

    protected $table = 'rak_buku';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_buku',
        'id_jenis_buku',
    ];
}
