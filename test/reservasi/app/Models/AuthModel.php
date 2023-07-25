<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
  protected $table = "user";
  protected $primaryKey = "id";
  protected $returnType = "object";
  protected $allowedFields = [
    'nama',
    'username',
    'password',
    'role',
  ];

  function query_validasi_username($username)
  {
    $result = $this->db->query("SELECT * FROM user WHERE username='$username'");
    return $result;
  }

  function query_validasi_password($username, $password)
  {
    $result = $this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1");
    return $result;
  }

  public function verifikasi_email($email)
  {
    $builder = $this->db->table('user');
    $builder->where('email', $email);
    $result = $builder->get();
    if ($result->getRowArray() > 0) {
      return $result->getRowArray();
    } else {
      return FALSE;
    }
  }
}
