<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {

        $levels = $this->userModel->getLevels();
        $admin = $this->userModel->findAll();
        $status = $this->userModel->getStatus();
        $search = $this->request->getGet('search');
        $perPage = $this->request->getGet('perPage') ?? 5;

        $query = $this->userModel->select('*');

        if (!empty($search)) {
            $query->like('nama', $search)
                ->orLike('username', $search)
                ->orLike('email', $search);
        }

        $data = [
            'admin' => $query->paginate($perPage),
            'level' => $levels,
            'status' => $status,
            'pager' => $query->pager,
            'perPage' => $perPage,
            'search' => $search
        ];

        return view('/admin', $data);
    }

    public function update()
    {
        $admin = $this->userModel->first();
        $id = $this->request->getPost('id_user');
        $data = [
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'level' => $this->request->getPost('level'),
            'status' => $this->request->getPost('status'),
            'created_at' => $this->request->getPost('tgl'),
            'foto' => $this->request->getFile('foto'),
        ];
        // dd($admin);
        $foto = $this->request->getFile('foto');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move('uploads/', $newName);
            $data['foto'] = 'uploads/' . $newName;
        } else {
            $data['foto'] = $admin['foto'];
        }

        if ($this->userModel->updateUser($id, $data)) {
            return redirect()->to(base_url('/admin'))->with('success', 'Data berhasil diperbarui');
        } else {
            return redirect()->to(base_url('/'))->with('error', 'Gagal memperbarui data');
        }
    }

    public function create()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'level' => $this->request->getPost('level'),
            'status' => $this->request->getPost('status'),
            'created_at' => date('Y-m-d H:i:s'),
            'foto' => $this->request->getFile('foto'),
        ];

        $foto = $this->request->getFile('foto');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move('uploads/', $newName);
            $data['foto'] = 'uploads/' . $newName;
        }

        if ($this->userModel->insert($data)) {
            return redirect()->to(base_url('/admin'))->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->to(base_url('/admin'))->with('error', 'Gagal menambahkan data');
        }
    }

    public function delete()
    {
        $id = $this->request->getPost('id_user');

        if ($this->userModel->find($id)) {
            $this->userModel->delete($id);
            session()->setFlashdata('success', 'Data berhasil dihapus!');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus data! Data tidak ditemukan.');
        }

        return redirect()->to(base_url('/admin'));
    }
}
