<?php

namespace App\Controllers;

use App\Models\ModelKelompok;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Kelompok extends ResourceController
{
    // INISIALISASI OBJECT DATA
    function __construct()
    {
        $this->objKelompok = new ModelKelompok();
        $this->db = \Config\Database::connect();
    }
    
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data['dtkelompok'] = $this->objKelompok->findAll();
        return view('kelompok/index', $data);
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
        $builder = $this->db->table('kelompok1');
        $query = $builder->get();
        $data['dtkelompok'] = $query->getResult();
        return view('kelompok/new', $data);
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
            'id_kelompok' => $this->request->getVar('id_kelompok'),
            'kode_kelompok' => $this->request->getVar('kode_kelompok'),
            'nama_kelompok' => $this->request->getVar('nama_kelompok'),
        ];
        $this->db->table('kelompok1')->insert($data);

        return redirect()->to(site_url('kelompok'))->with('Sukses', 'Data Berhasil Disimpan');
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
        $this->db->table('kelompok1')->where(['id_kelompok' => $id])->delete();
        return redirect()->to(site_url('kelompok'))->with('Sukses', 'Data Berhasil Dihapus');
    }
}
