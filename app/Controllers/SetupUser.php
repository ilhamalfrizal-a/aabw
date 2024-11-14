<?php

namespace App\Controllers;

use App\Models\ModelSetupuser;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class SetupUser extends ResourceController
{
    function __construct()
    {
        $this->objSetupuser = new ModelSetupuser();
        $this->db = \Config\Database::connect();
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data['dtsetupuser'] = $this->objSetupuser->findAll();
        return view('setupuser/index', $data);
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
        $builder = $this->db->table('setupuser1');
        $query = $builder->get();
        $data['dtsetupuser'] = $query->getResult();
        return view('setupuser/new', $data);
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
            'id_setupuser' => $this->request->getVar('id_setupuser'),
            'kode_setupuser' => $this->request->getVar('kode_setupuser'),
            'nama_setupuser' => $this->request->getVar('nama_setupuser'),
            'check_setupuser' => $this->request->getVar('check_setupuser'),
        ];
        $this->db->table('setupuser1')->insert($data);

        return redirect()->to(site_url('setupuser'))->with('Sukses', 'Data Berhasil Disimpan');
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
        $this->db->table('setupuser1')->where(['id_setupuser' => $id])->delete();
        return redirect()->to(site_url('setupuser'))->with('Sukses', 'Data Berhasil Dihapus');
    }
}