<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mata_kuliah extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'mata_kuliah';
    protected $fillable = ['id', 'kode_mk', 'nama_mk'];
}
