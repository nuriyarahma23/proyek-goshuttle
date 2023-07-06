<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MobilSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                
                'identitas' => 'GS-001',
                'nopol' => 'B 7235 NAA',
            ],
            [
                
                'identitas' => 'GS-002',
                'nopol' => 'B 7798 KDA',
            ],
            [
                
                'identitas' => 'GS-003',
                'nopol' => 'B 7141 TDB',
            ],
            [
                
                'identitas' => 'GS-004',
                'nopol' => 'DK 7450 FA',
            ],
            [
                
                'identitas' => 'GS-005',
                'nopol' => 'N 7375 A',
            ],
            [
                
                'identitas' => 'GS-006',
                'nopol' => 'F 7954 WA',
            ],
            [
                
                'identitas' => 'GS-007',
                'nopol' => 'N 7804 US',
            ],
            [
                
                'identitas' => 'GS-008',
                'nopol' => 'B 7084 TDB',
            ],
            [
                
                'identitas' => 'GS-101',
                'nopol' => 'AE 7301 BB',
            ],
            [
                
                'identitas' => 'GS-105',
                'nopol' => 'DK 7376 FA',
            ],
            [
                
                'identitas' => 'GS-102',
                'nopol' => 'B 7401 TDA',
            ],
            [
                
                'identitas' => 'GS-103',
                'nopol' => 'DK 7513 FA',
            ],
            [
                
                'identitas' => 'GS-104',
                'nopol' => 'B 7644 FDA',
            ],
        ];

        $this->db->table('mobil')->insertBatch($data);
    }
}
