<?php

namespace App\Models;

use CodeIgniter\Model;

class SettlementPaketModel extends Model
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
    // Build the query using Query Builder
    $builder = $this->db->table('paket');
    $builder->select('reservasi.*, paket.*');
    $builder->join('reservasi', 'reservasi.id_reservasi = paket.id_reservasi', 'left');
    $builder->where('paket.id_user', 2);
    $builder->where('paket.tersettle IS NULL');

    // Get the result
    $result = $builder->get()->getResult();

    return $result;
  }

  public function cekDataMobil($id = null)
  {
    $builder = $this->db->table('settlement');
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
