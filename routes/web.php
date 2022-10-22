<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(uri:'/dosen', action:function(){
    $list_dosen = ["Alifya Rizky, M.Kom.", "Zahra Aini, S.Si.", "Andini Kharisma, M.Kom.",
    "Laniazi, M.Kom.", "Andriana, M.Kom", "Fahrizal Afi, M.Kom.", "Indah Zara, M.Kom.",
    "Nadien, M.Kom", "Ana Lady, M.kom.", "Farra Anna, M.Kom."];
    return view(view:'dosen')->with(key:'dosens', value:$list_dosen);
});

Route::get(uri:'/mahasiswa', action:function(){
    $list_mahasiswa = ["Lestari Zulfa", "Handayani", "Adrian", "Adinda Virna", "Muhammad Bagas",
    "Kelvin", "Narra", "Aulia Zahra", "Amelia", "Putri Dina"];
    return view(view:'mahasiswa')->with(key:'mahasiswas', value:$list_mahasiswa);
});

Route::get(uri:'/matakuliah', action:function(){
    $list_matakuliah = ["Basis Data", "Cloud Computing", "Blockchain", "Fisika Dasar", "Metode Numerik",
    "Data Mining", "Matematika Diskrit", "Sistem Operasi", "Kalkulus", "Rekayasa Perangkat Lunak"];
    return view(view:'matakuliah')->with(key:'matakuliahs', value:$list_matakuliah);
});

