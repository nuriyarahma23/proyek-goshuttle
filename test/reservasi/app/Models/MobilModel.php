<?php

namespace App\Models;

use CodeIgniter\Model;

class MobilModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'mobil';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = [
    'identitas',
    'nopol',
    'km_terakhir',
    'status',
  ];

  function getAll()
  {
    $builder = $this->db->table('mobil');
    $item = $builder->orderBy('identitas', 'DESC');
    $query = $item->get();
    return $query->getResult();
  }

  public function cekDataMobil($id = null)
  {
    $builder = $this->db->table('mobil');
    $builder->where('id', $id);
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
