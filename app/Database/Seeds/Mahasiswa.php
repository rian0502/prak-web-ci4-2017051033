<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Mahasiswa extends Seeder{
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 50 ; $i++){
            $data = [
                'npm' => $faker->numberBetween(100000, 999999),
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}