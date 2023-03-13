<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // jika cuman 1 data
        // $data = [
        //     'name_user' => 'Administrator',
        //     'email_user' => 'administrator@gmail.com',
        //     'password_user' => password_hash('12345', PASSWORD_BCRYPT),
        // ];
        // $this->db->table('users')->insert($data);

        // jika multiple data (lebih dari satu)
        $data = [
            [
                'name_user' => 'Lohe',
                'email_user' => 'lohe@gmail.com',
                'password_user' => password_hash('54321', PASSWORD_BCRYPT),
            ],
            [
                'name_user' => 'Admin',
                'email_user' => 'admin@gmail.com',
                'password_user' => password_hash('12345', PASSWORD_BCRYPT),
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
