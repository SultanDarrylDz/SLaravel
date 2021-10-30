<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Memberi Perintah Model Ini Akan Digunakan Oleh Table Tersebut
    protected $table = 'posts';
}
