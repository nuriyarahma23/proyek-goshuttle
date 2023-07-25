<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'username',
        'email',
        'password',
        'role',
        'no_telepon',
        'point',
    ];


    // public function kursiPenumpang()
    // {
    //     return $this->belongsTo('App\Models\KursiPenumpangModel', 'kursi_travel_id');
    // }
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
        $builder = $this->db->table('user');
        $query = $builder->get();
        return $query->getResult();
    }

    function getTiket()
    {
        $builder = $this->db->table('user');
        $query = $builder->get();
        return $query->getResult();
    }
}
