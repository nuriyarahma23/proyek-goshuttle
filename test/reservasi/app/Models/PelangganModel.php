<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'pelanggan';
  protected $primaryKey       = 'id_pelanggan';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = [
    'no_telepon',
    'nama',
    'alamat',
    'jml_reservasi',
    'jml_reservasi_lunas',
    'status',
    
  ];

  // Dates
  protected $useTimestamps = false;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  // Validation
  protected $validationRules      = [];
  protected $validationMessages   = [];
  protected $skipValidation       = false;
  protected $cleanValidationRules = true;

  // Callbacks
  protected $allowCallbacks = true;
  protected $beforeInsert   = [];
  protected $afterInsert    = [];
  protected $beforeUpdate   = [];
  protected $afterUpdate    = [];
  protected $beforeFind     = [];
  protected $afterFind      = [];
  protected $beforeDelete   = [];
  protected $afterDelete    = [];



  
  function getAll()
  {
    $builder = $this->db->table('pelanggan');
    $query = $builder->get();
    return $query->getResult();
  }

  public function cekDataPelanggan($id = null)
  {
    $builder = $this->db->table('pelanggan');
    $builder->where('id_pelanggan', $id);
    $query = $builder->get();
    return $query->getRowArray();
  }

  function count($table)
  {
    $builder = $this->db->table($table);
    $query = $builder->countAllResults();
    return $query;
  }
}
