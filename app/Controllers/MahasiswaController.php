<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    public function index()
    {
        //
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();

        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];

        return view('mahasiswa/list', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Create Mahasiswa'
        ];
        return view('mahasiswa/create',$data);
    }
    public function store(){
        $mahasiswaModel = new Mahasiswa();
        if(!$this->validate([
            'npm' => 'required|is_unique[mahasiswa.npm]',
            'nama' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required'
        ])){
            $data = [
                'title' => 'Create Mahasiswa',
                'validation' => $this->validator
            ];
            return redirect()->to('/create')->withInput();
        }
        $mahasiswaModel->save([
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect()->to('/mahasiswa');
    }
    public function delete($id){
        $mahasiswaModel = new Mahasiswa();
        $mahasiswaModel->delete($id);
        return redirect()->to('/mahasiswa');
    }
    public function edit($id){
        $mahasiswaModel = new Mahasiswa();
        $data = [
            'title' => 'Edit Mahasiswa',
            'mahasiswa' => $mahasiswaModel->find($id)
        ];
        return view('mahasiswa/edit', $data);
    }
    public function update($id){
        $mahasiswaModel = new Mahasiswa();
        return var_dump($this->request->getVar());
        if(!$this->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required'
        ])){
            $data = [
                'title' => 'Edit Mahasiswa',
                'validation' => $this->validator,
                'mahasiswa' => $mahasiswaModel->find($id)
            ];
            return redirect()->to('/edit/'.$id)->withInput();
        }
        $data = [
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $mahasiswaModel->update($id, $data);
        return redirect()->to('/mahasiswa');
    }
}