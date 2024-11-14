<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenjualan extends Model
{
    protected $table            = 'penjualan1';
    protected $primaryKey       = 'id_penjualan';
    // protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['tanggal',
    'nota',
    'id_pelanggan',
    'TOP',
    'tgl_jatuhtempo',
    'id_setupsalesman',
    'id_lokasi',
    'no_fp',
    'nama_stock',
    'id_satuan',
    'qty_1',
    'qty_2',
    'harga_satuan',
    'jml_harga',
    'disc_1',
    'disc_2',
    'total',
    'pembayaran',
    'tipe',
    'sub_total',
    'disc_cash',
    'ppn',
    'grand_total',
    'npwp',
    'terbilang'];

    function getAll()
    {
            $builder = $this->db->table('penjualan1 p');
            
            // Pilih kolom dari tabel utama dan tabel terkait
            $builder->select('
                p.*, 
                l1.nama_lokasi AS lokasi_asal, 
                sp.nama_pelanggan AS nama_pelanggan, 
                s.kode_satuan AS kode_satuan,
                sm.nama_setupsalesman AS nama_setupsalesman
            ');
            
            // Join dengan tabel 'lokasi1' untuk mendapatkan nama lokasi
            $builder->join('lokasi1 l1', 'p.id_lokasi = l1.id_lokasi', 'left');
            
            // Join dengan tabel 'setuppelanggan1' untuk mendapatkan nama pelanggan
            $builder->join('setuppelanggan1 sp', 'p.id_pelanggan = sp.id_pelanggan', 'left');
            
            // Join dengan tabel 'satuan1' untuk mendapatkan kode satuan
            $builder->join('satuan1 s', 'p.id_satuan = s.id_satuan', 'left');
            
            // Join dengan tabel 'setupsalesman1' untuk mendapatkan nama salesman
            $builder->join('setupsalesman1 sm', 'p.id_setupsalesman = sm.id_setupsalesman', 'left');
            
            return $builder->get()->getResult();
    
            return $this->findAll();
    }
    
    
        function getById($id) {
            
            $builder = $this->db->table('penjualan1 p');
            
            // Pilih kolom dari tabel utama dan tabel terkait
            $builder->select('
                p.*, 
                l1.nama_lokasi AS lokasi_asal, 
                sp.nama_pelanggan AS nama_pelanggan, 
                s.kode_satuan AS kode_satuan,
                sm.nama_setupsalesman AS nama_setupsalesman
            ');
            
            // Join dengan tabel 'lokasi1' untuk mendapatkan nama lokasi
            $builder->join('lokasi1 l1', 'p.id_lokasi = l1.id_lokasi', 'left');
            
            // Join dengan tabel 'setuppelanggan1' untuk mendapatkan nama pelanggan
            $builder->join('setuppelanggan1 sp', 'p.id_pelanggan = sp.id_pelanggan', 'left');
            
            // Join dengan tabel 'satuan1' untuk mendapatkan kode satuan
            $builder->join('satuan1 s', 'p.id_satuan = s.id_satuan', 'left');
            
            // Join dengan tabel 'setupsalesman1' untuk mendapatkan nama salesman
            $builder->join('setupsalesman1 sm', 'p.id_setupsalesman = sm.id_setupsalesman', 'left');
            
            // Tambahkan kondisi where untuk id
            $builder->where('p.id_penjualan', $id);
            
            return $builder->get()->getRow();
        }
    

    // protected bool $allowEmptyInserts = false;
    // protected bool $updateOnlyChanged = true;

    // protected array $casts = [];
    // protected array $castHandlers = [];

    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
