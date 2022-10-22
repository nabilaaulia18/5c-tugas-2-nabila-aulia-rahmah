<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use Illuminate\Support\Facades\DB;

class mahasiswaController extends Controller
{
// Eloquent
public function insert(){
    mahasiswa::create(
        [
            'id'=>1,
            'npm'=>'1234',
            'nama'=>'Nabila',
            'jenis_kelamin'=>'perempuan',
            'alamat'=>'Cikarang',
            'tempat_lahir'=>'Cikarang',
            'tanggal_lahir'=>'2002-04-18',
            'photo'=>'nabila.jpg'
        ]
    );
    return "Berhasil di proses";
}

// Raw SQL
public function update(){
    $sql = DB::update(query: "UPDATE mahasiswa SET npm = 1233 where id = ?", bindings: [1]);
}

// Query Builder
public function delete(){
    $sql = DB::table(table:'mahasiswa') -> where (column: 'npm', operator:'1233') -> delete ();
    dump (var : $sql);
}

public function get(){
    $sql = DB::table(table:'mahasiswa') -> get ();
    dump (var : $sql);
}
}
