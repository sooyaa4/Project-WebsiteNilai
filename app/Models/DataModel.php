<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DataModel extends Model
{
    public function calldata()
    {
        return DB::table('mahasiswa')
        ->leftJoin('grade_nilai', 'grade_nilai.id_nilai', '=', 'mahasiswa.id_nilai')
        ->get();

    }

    public function addData($data)
    {
         DB::table('mahasiswa')->insert($data);
    }



    public function deleteData($nim)
    {
         DB::table('mahasiswa')
         ->where('nim',$nim)
         ->delete();
    }

    public function detailData($id_siswa)
    {
        return DB::table('mahasiswa')->where('id_siswa', $id_siswa)->first();

    }

    public function editData($nim,$data)
    {
         DB::table('mahasiswa')
         ->where('nim',$nim)
         ->update($data);
    }


   

    


}
