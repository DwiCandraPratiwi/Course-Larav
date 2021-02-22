<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mata_Kuliah;
use DB;

class DosenController extends Controller
{
    public function getDosen(){
        $data = DB::table('dosen')->where('nama', 'LIKE', '%Sintya%')->get();
        return [$data];
    }

    public function getDosenModel(){
        $data = Dosen::where('nama', 'LIKE', '%Sintya%')->get();
        return [$data];
    }




    //TUGASS --HANYA MENGGUNAKAN DosenController.php dan route(web.php)


    //get semua data dosen
    public function getDataDosen(){
        $data = DB::table('dosen')->get();
        return $data;
    }

    //get semua data mahasiswa
    public function getMahasiswa(){
        $data = DB::table('mahasiswa')->get();
        return $data;
    }

    //get semua data mata kuliah
    public function getMataKuliah(){
        $data = DB::table('mata_kuliah')->get();
        return $data;
    }

    //get semua data dosen berdasarkan id
    public function getDosenById($id){
        $data = DB::table('dosen')->where('id', $id)->get();
        return [($data)];
    }

    //get semua data nama mata kuliah saja
    public function getMatkulModel(){
        $data = Mata_Kuliah::where('nama_mata_kuliah', 'LIKE', '%huassy%')->get();
        return [$data];
    }

    //get 5 data mahasiswa
    public function getDataMahasiswa(){
        $data = DB::table('mahasiswa')->where('id', '<', 6)->get();
        return [($data)];
    }

}
