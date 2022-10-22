<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosen;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Operator;

class dosenController extends Controller
{
    // Eloquent
    public function insert(){
        dosen::create(
            [
                'id'=>1,
                'nidn'=>'1234',
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
        $sql = DB::update(query: "UPDATE dosen SET nidn = 1233 where id = ?", bindings: [1]);
    }

    // Query Builder
    public function delete(){
        $sql = DB::table(table:'dosen') -> where (column: 'nidn', operator:'1233') -> delete ();
        dump (var : $sql);
    }

    public function get(){
        $sql = DB::table(table:'dosen') -> get ();
        dump (var : $sql);
    }
}
