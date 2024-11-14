<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLunasSalesman extends Model
{
    protected $table            = 'lunassalesman1';
    protected $primaryKey       = 'id_lunashusalesman';
    // protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['nota', 'id_setupsalesman', 'tanggal', 'id_setupbank', 'saldo', 'nilai_pelunasan', 'diskon', 'pdpt'];

    // protected bool $allowEmptyInserts = false;
    // protected bool $updateOnlyChanged = true;

    // protected array $casts = [];
    // protected array $castHandlers = [];

    // // Dates
    // protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    function getAll()
    {
        // Memulai builder untuk tabel 'tutangusaha1' dengan alias 'p'
        $builder = $this->db->table('lunassalesman1 p');
        
        // Memilih kolom yang diperlukan dengan alias yang sesuai
        $builder->select('
            p.*, 
            sp.nama_setupsalesman AS nama_setupsalesman, 
            sb.nama_setupbank AS nama_setupbank
        ');
        
        // Melakukan JOIN dengan tabel 'setuppelanggan1' untuk mendapatkan nama pelanggan
        $builder->join('setupsalesman1 sp', 'p.id_setupsalesman = sp.id_setupsalesman', 'left');
        
        // Melakukan JOIN dengan tabel 'setupbank1' untuk mendapatkan nama bank
        $builder->join('setupbank1 sb', 'p.id_setupbank = sb.id_setupbank', 'left');
        
        // Eksekusi query
        $query = $builder->get();
        
        // Mengembalikan hasil query sebagai array objek
        return $query->getResult();

        return $this->findAll();
    }

    function getById($id)
    {
        // Memulai builder untuk tabel 'tutangusaha1' dengan alias 'p'
        $builder = $this->db->table('tutangusaha1 p');
        
        // Pilih kolom yang diperlukan, dengan join yang sesuai
        $builder->select('p.*, sp.nama_setupsalesman AS nama_setupsalesman, sb.nama_setupbank AS nama_setupbank');
        
        // Melakukan JOIN dengan tabel 'setuppelanggan1' untuk mendapatkan nama pelanggan
        $builder->join('setupsalesman1 sp', 'p.id_setupsalesman = sp.id_setupsalesman', 'left');
        
        // Melakukan JOIN dengan tabel 'setupbank1' untuk mendapatkan nama bank
        $builder->join('setupbank1 sb', 'p.id_setupbank = sb.id_setupbank', 'left');
        
        // Tambahkan kondisi where untuk id_lunashusaha
        $builder->where('p.id_lunashusalesman', $id);
        
        // Eksekusi query
        $query = $builder->get();
        
        // Mengembalikan satu baris sebagai objek
        return $query->getRow();
    }

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