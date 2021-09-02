<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NilaiModel;
use App\Models\DataModel;

class NilaiController extends Controller
{
    
    public function __construct() {
        $this->NilaiModel = new NilaiModel();
        $this->DataModel = new DataModel();
    }

    
    public function pagenilai()
    {
        $data =[
            'nilai'=> $this ->NilaiModel->calldata(),
        ];
        return view ('v_nilai', $data);
    }

    public function detail($id_nilai)
    {
        $data = [
            'nilai'=> $this ->DataModel->detailData($id_nilai),
        ];
        return view ('v_detailnilai', $data);
    }

//    ------------------------------------------ 
    public function add()
    {
       return view ('v_addnilai');
    }

    public function insert()
    {
        request()->validate([
            'nim' => 'required|min:11|max:11',
            'matkul' => 'required',
            'nilai_angka' => 'required',
            'nilai_huruf' => 'required',
            'id_matakuliah' => 'required|min:1|max:25',
            'id_nilai' => 'required|min:1|max:25',
        ],[
            'nim.required' => 'nim wajib diisi !!',
            'id_nilai.unique' => 'id ini sudah ada !!',
            'nim.min' => 'minimal 11 angka',
            'nim.max' => 'maximal 11 angka',
            'matkul.required' => 'nama wajib diisi !!',
            'nilai_huruf.required' => 'nilai wajib diisi !!',
            'nilai_angka.required' => 'nilai wajib diisi !!',
            'id_matakuliah.required' => 'id wajib diisi !!',
            'id_nilai.required' => 'id wajib diisi !!',
        ]
    );

        $data =[
            'nim' => Request()->nim,
            'matkul' => Request()->matkul,
            'nilai_angka' => Request()->nilai_angka,
            'nilai_huruf' => Request()->nilai_huruf,
            'id_matakuliah' => Request()->id_matakuliah,
            'id_nilai' => Request()->id_nilai,
        ];

        $this -> NilaiModel->addData($data);
        return redirect()->route('nilai')->with('pesan','Data Berhasil Di tambah....');


    }

   //    ------------------------------------------ 
    
    public function delete($id_nilai)
    {
        $this -> NilaiModel->deleteData($id_nilai);
        return redirect()->route('nilai')->with('pesan','Data Berhasil Di hapus....');
    }

//    ------------------------------------------ 

    public function ganti($id_nilai)
    {
        if (!$this->NilaiModel->detailData($id_nilai)) {
            abort(404);
        }
        $data =[
            'nilai' => $this->NilaiModel->detailData($id_nilai),
       ];
       return view('v_editnilai', $data);
       
    }

    public function update($nim)
    {
        request()->validate([
            'nim' => 'required|min:11|max:11',
            'matkul' => 'required',
            'nilai_angka' => 'required',
            'nilai_huruf' => 'required',
            'id_matakuliah' => 'required',
            'id_nilai' => 'required',
        ],[
            'nim.required' => 'nim wajib diisi !!',
            'nim.min' => 'minimal 11 angka',
            'nim.max' => 'maximal 11 angka',
            'matkul.required' => 'nama wajib diisi !!',
            'nilai_huruf.required' => 'nilai wajib diisi !!',
            'nilai_angka.required' => 'nilai wajib diisi !!',
            'id_matakuliah.required' => 'id wajib diisi !!',
            'id_nilai.required' => 'id wajib diisi !!',
        ]
    );

        $data =[
            'nim' => Request()->nim,
            'matkul' => Request()->matkul,
            'nilai_angka' => Request()->nilai_angka,
            'nilai_huruf' => Request()->nilai_huruf,
            'id_matakuliah' => Request()->id_matakuliah,
            'id_nilai' => Request()->id_nilai,
        ];

        $this -> NilaiModel->addData($data);
        return redirect()->route('nilai')->with('pesan','Data Berhasil Di tambah....');

    }
   



   

}
