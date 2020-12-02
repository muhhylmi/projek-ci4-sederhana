<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class orangSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama' => 'darth',
        //         'alamat'    => 'kemit. kwaren',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama' => 'hylmi',
        //         'alamat'    => 'kwaren',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama' => 'caper ganteng',
        //         'alamat'    => 'Bayi land',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ]

        // ];

        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama' => $faker->name,
                'alamat'    => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];
            $this->db->table('orang')->insert($data);
        }


        // Simple Queries
        // $this->db->query(
        //     "INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
        //     $data
        // );

        // Using Query Builder untuk 1 data
        // $this->db->table('orang')->insert($data);

        //query untuk banyak data

    }
}
