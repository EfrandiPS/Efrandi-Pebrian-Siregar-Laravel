<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi
    protected $fillable = ['nama', 'umur', 'bio'];
}
    