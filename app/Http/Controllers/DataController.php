<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DataModel;


class DataController extends Controller
{
 
    public function __construct() {
        $this->DataModel = new DataModel();
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data =[
            'guru'=> $this ->DataModel->calldata(),
        ];
        return view ('v_home', $data);
    }




//    ------------------------------------------ 

    public function detail($id_guru)
    {
        $data = [
            'guru'=> $this ->DataModel->detailData($id_guru),
        ];
        return view ('v_detail', $data);
    }

//    ------------------------------------------ 
    public function add()
    {
       return view ('v_add');
    }

    public function insert()
    {
        request()->validate([
            'nim' => 'required|unique:mahasiswa,nim|min:11|max:11',
            'nama' => 'required',
            'program_studi' => 'required',
            'no_hp' => 'required',
            'id_matakuliah' => 'required',
            'id_nilai' => 'required|unique:mahasiswa,id_nilai',
        ],[
            'nim.required' => 'nim wajib diisi !!',
            'nim.unique' => 'nim ini sudah ada !!',
            'id_nilai.unique' => 'nim ini sudah ada !!',
            'nim.min' => 'minimal 11 angka',
            'nim.max' => 'maximal 11 angka',
            'nama.required' => 'nama wajib diisi !!',
            'program_studi.required' => 'nilai wajib diisi !!',
            'no_hp.required' => 'No Hp wajib diisi !!',
            'no_hp.min' => 'minimal 11 angka',
            'no_hp.max' => 'maximal 11 angka',
            'id_matakuliah.required' => 'id wajib diisi !!',
            'id_nilai.required' => 'id wajib diisi !!',
        ]
    );

        $data =[
            'nim' => Request()->nim,
            'nama' => Request()->nama,
            'program_studi' => Request()->program_studi,
            'no_hp' => Request()->no_hp,
            'id_matakuliah' => Request()->id_matakuliah,
            'id_nilai' => Request()->id_nilai,
        ];

        $this -> DataModel->addData($data);
        return redirect()->route('siswa')->with('pesan','Data Berhasil Di tambah....');


    }

   //    ------------------------------------------ 
    
    public function delete($nim)
    {
        $this -> DataModel->deleteData($nim);
        return redirect()->route('siswa')->with('pesan','Data Berhasil Di hapus....');
    }

//    ------------------------------------------ 

    public function edit($id_guru)
    {
        if (!$this->DataModel->detailData($id_guru)) {
            abort(404);
        }
        $data =[
            'siswa' => $this->DataModel->detailData($id_guru),
       ];
       return view('v_edit', $data);
       
    }

    public function update($nim)
    {
        request()->validate([
            
            'nama' => 'required',
            'program_studi' => 'required',
            'no_hp' => 'required',
            
        ],[
            'nim.required' => 'nim wajib diisi !!',
            'nim.min' => 'minimal 11 angka',
            'nim.max' => 'maximal 11 angka',
            'nama.required' => 'nama wajib diisi !!',
            'no_hp.required' => 'no handphone wajib diisi !!',
            'no_hp.min' => 'minimal 11 angka',
            'no_hp.max' => 'maximal 11 angka',
            'program_studi.required' => 'program studi wajib diisi !!',
            'id_matakuliah.required' => 'id wajib diisi !!',
            'id_nilai.required' => 'id wajib diisi !!',
        ]
        );

    
        $data =[
            'nim' => Request()->nim,
            'nama' => Request()->nama,
            'program_studi' => Request()->program_studi,
            'no_hp' => Request()->no_hp,
            'id_matakuliah' => Request()->id_matakuliah,
            'id_nilai' => Request()->id_matakuliah,
        ];
            $this -> DataModel->editData($nim, $data);
        
        return redirect()->route('siswa')->with('pesan','Data Berhasil Di update....');
    }
   



}
