<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuBesarModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'bukubesar';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = [
    'tanggal',
    'kategori',
    'keterangan',
    'tipe',
    'nominal',
    'id_transaksi',
  ];

  function getAll()
  {
    $builder = $this->db->table('bukubesar');
    $item = $builder->orderBy('tanggal', 'DESC');
    $query = $item->get();
    return $query->getResult();
  }

  public function cekDataBukuBesar($id = null)
  {
    $builder = $this->db->table('bukubesar');
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
