<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'jadwal';
  protected $primaryKey       = 'id_jadwal';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = [
    'dari_tgl',
    'sampai_tgl',
    'tujuan',
    'jml_kursi',
    'harga_tiket',
    'point_keberangkatan',
    'jam'
  ];

  function getAll()
  {
    $builder = $this->db->table('jadwal');
    $item = $builder->orderBy('dari_tgl', 'DESC');
    $query = $item->get();
    return $query->getResult();
  }

  public function cekJadwal($id = null)
  {
    $builder = $this->db->table('jadwal');
    $builder->where('id_jadwal', $id);
    $query = $builder->get();
    return $query->getRowArray();
  }
}
