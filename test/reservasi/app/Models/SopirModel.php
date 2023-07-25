<?php

namespace App\Models;

use CodeIgniter\Model;

class SopirModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'sopir';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = [
    'nama_sopir',
  ];
}
