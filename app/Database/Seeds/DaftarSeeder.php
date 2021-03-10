<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class DaftarSeeder extends Seeder
{
        public function run()
        {
                $faker = \Faker\Factory::create('id_ID');
                for($i = 0; $i < 100; $i++){
                        $data = [
                                'name'          => $faker->name,
                                'email'         => $faker->safeEmail,
                                'address'       => $faker->address,
                                'number'        => $faker->randomDigitNotNull,
                                'destination'   => $faker->city,
                                'date'          => $faker->date
                        ];
                        $this->db->table('daftar')->insert($data);
                }
                // Simple Queries
                // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

                // Using Query Builder
                // $this->db->table('users')->insert($data);
        }
}