<?php

namespace App\Controllers;

use App\Models\ModelSetuppiutang;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Setuppiutang extends ResourceController
{
    // INISIALISASI OBJECT DATA
    function __construct()
    {
        $this->objSetuppiutang = new ModelSetuppiutang();
        $this->db = \Config\Database::connect();
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data['dtsetuppiutang'] = $this->objSetuppiutang->findAll();
        return view('setuppiutang/index', $data);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        $builder = $this->db->table('setuppiutang1');
        $query = $builder->get();
        $data['dtsetuppiutang'] = $query->getResult();
        return view('setuppiutang/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $data = $this->request->getPost();
        $data = [
            'id_setuppiutang' => $this->request->getVar('id_setuppiutang'),
            'kode_piutang' => $this->request->getVar('kode_piutang'),
            'nama_piutang' => $this->request->getVar('nama_piutang'),
            'lokasi_piutang' => $this->request->getVar('lokasi_piutang'),
            'tanggal_piutang' => $this->request->getVar('tanggal_piutang'),
            'saldo_piutang' => $this->request->getVar('saldo_piutang'),
        ];
        $this->db->table('setuppiutang1')->insert($data);

        return redirect()->to(site_url('setuppiutang'))->with('Sukses', 'Data Berhasil Disimpan');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $this->db->table('setuppiutang1')->where(['id_setuppiutang' => $id])->delete();
        return redirect()->to(site_url('setuppiutang'))->with('Sukses', 'Data Berhasil Dihapus');
    }
}