<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_anggota","id_buku","tgl_pinjam","tgl_kembali"

    ];
}
