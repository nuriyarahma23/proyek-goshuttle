<?php

namespace App\Models;

use CodeIgniter\Model;

class SettlementTiketModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'mobil';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = [
    'harga',
    'tanggal_pembayaran',
    'nomor_telepon',
    'nama',
    'nomor_kursi',
    'point_keberangkatan',
    'tujuan',
    'metode_pembayaran',
  ];

  function getAll()
  {
    $iduser = session()->get('id');  // dapatkan id user yg login
    return $this->db->table('pembayaran')
      ->join('kursi_penumpang', 'kursi_penumpang.id_kursi=pembayaran.id_kursi')
      ->join('reservasi', 'reservasi.id_reservasi=kursi_penumpang.id_reservasi')
      ->where('id_user', $iduser)
      //  ->where('set', 0)
      ->where('pembayaran.status_pembayaran', 'Sudah membayar')
      ->where('pembayaran.tersettle IS NULL')
      ->get()->getResult();
  }

  function getRekap()
  {
    $iduser = session()->get('id');  // dapatkan id user yg login
    $hasil = $this->db->table('pembayaran')
      ->join('kursi_penumpang', 'kursi_penumpang.id_kursi=pembayaran.id_kursi')
      ->join('reservasi', 'reservasi.id_reservasi=kursi_penumpang.id_reservasi')
      ->where('id_user', $iduser)
      //  ->where('set', 0)
      ->where('pembayaran.status_pembayaran', 'Sudah membayar')
      ->where('pembayaran.tersettle IS NULL')
      ->get()->getResult();


    return  $hasil;
  }


  function count($table)
  {
    $builder = $this->db->table($table);
    $query = $builder->countAllResults();
    return $query;
  }
}
