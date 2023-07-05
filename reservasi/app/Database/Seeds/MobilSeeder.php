<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MobilSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'identitas' => 'GS-001',
                'nopol' => 'B 7235 NAA',
            ],
            [
                'id' => 2,
                'identitas' => 'GS-002',
                'nopol' => 'B 7798 KDA',
            ],
            [
                'id' => 3,
                'identitas' => 'GS-003',
                'nopol' => 'B 7141 TDB',
            ],
            [
                'id' => 4,
                'identitas' => 'GS-004',
                'nopol' => 'DK 7450 FA',
            ],
            [
                'id' => 5,
                'identitas' => 'GS-005',
                'nopol' => 'N 7375 A',
            ],
            [
                'id' => 6,
                'identitas' => 'GS-006',
                'nopol' => 'F 7954 WA',
            ],
            [
                'id' => 7,
                'identitas' => 'GS-007',
                'nopol' => 'N 7804 US',
            ],
            [
                'id' => 8,
                'identitas' => 'GS-008',
                'nopol' => 'B 7084 TDB',
            ],
            [
                'id' => 9,
                'identitas' => 'GS-101',
                'nopol' => 'AE 7301 BB',
            ],
            [
                'id' => 10,
                'identitas' => 'GS-105',
                'nopol' => 'DK 7376 FA',
            ],
            [
                'id' => 11,
                'identitas' => 'GS-102',
                'nopol' => 'B 7401 TDA',
            ],
            [
                'id' => 12,
                'identitas' => 'GS-103',
                'nopol' => 'DK 7513 FA',
            ],
            [
                'id' => 13,
                'identitas' => 'GS-104',
                'nopol' => 'B 7644 FDA',
            ],
        ];

        $this->db->table('mobil')->insertBatch($data);
    }
}
