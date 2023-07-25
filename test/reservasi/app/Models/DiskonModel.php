<?php

namespace App\Models;

use CodeIgniter\Model;

class DiskonModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'diskon';
  protected $primaryKey       = 'id_diskon';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = [
    'kode_diskon',
    'nama_diskon',
    'type',
    'besaran',
    'status',
  ];

  function getAll()
  {
    $builder = $this->db->table('diskon');
    $query = $builder->get();
    return $query->getResult();
  }

  public function cekDataDiskon($id = null)
  {
    $builder = $this->db->table('diskon');
    $builder->where('id_diskon', $id);
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
