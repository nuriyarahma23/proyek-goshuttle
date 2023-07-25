<?php

namespace App\Models;

use CodeIgniter\Model;

class SettlementModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'settlement';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = [
    'id_user',
    'tanggal',
    'total',
    'status',
    'catatan',
  ];

  function getAll()
  {
    $builder = $this->db->table('settlement');
    $item = $builder->orderBy('tanggal', 'DESC');
    $query = $item->get();
    return $query->getResult();
  }

  // public function cekDataMobil($id = null)
  // {
  //   $builder = $this->db->table('settlement');
  //   $builder->where('id', $id);
  //   $query = $builder->get();
  //   return $query->getRowArray();
  // }

  // function count($table)
  // {
  //   $builder = $this->db->table($table);
  //   $query = $builder->countAllResults();
  //   return $query;
  // }
}
