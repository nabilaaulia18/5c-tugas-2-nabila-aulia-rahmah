<?php

namespace App\Http\Controllers;

use App\Models\mata_kuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mata_kuliahController extends Controller
{
    // Eloquent
public function insert(){
    mata_kuliah::create(
        [
            'id'=>1,
            'kode_mk'=>'1234',
            'nama_mk'=>'Kalkulus',
        ]
    );
    return "Berhasil di proses";
}

// Raw SQL
public function update(){
    $sql = DB::update(query: "UPDATE mata_kuliah SET kode_mk = 1233 where id = ?", bindings: [1]);
}

// Query Builder
public function delete(){
    $sql = DB::table(table:'mata_kuliah') -> where (column: 'kode_mk', operator:'1233') -> delete ();
    dump (var : $sql);
}

public function get(){
    $sql = DB::table(table:'mata_kuliah') -> get ();
    dump (var : $sql);
}
}
