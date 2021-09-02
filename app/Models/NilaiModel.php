<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NilaiModel extends Model
{

    public function calldata()
    {
        return DB::table('grade_nilai')
        ->leftJoin('mahasiswa', 'mahasiswa.id_nilai', '=', 'grade_nilai.id_nilai')
        ->get();

    }

    public function detailData($id_nilai)
    {
        return DB::table('grade_nilai')->where('id_nilai', $id_nilai)->first();

    }
    
    public function addData($data)
    {
         DB::table('grade_nilai')->insert($data);
    }



    public function deleteData($id_nilai)
    {
         DB::table('grade_nilai')
         ->where('id_nilai',$id_nilai)
         ->delete();
    }

    public function editData($id_nilai,$data)
    {
         DB::table('grade_nilai')
         ->where('id_nilai',$id_nilai)
         ->update($data);
    }


}
