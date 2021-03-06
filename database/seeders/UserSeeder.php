<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        User::factory()->times(5)->create();
        DB::table('users')->insert(
             [
                 'name' => 'Leonardo',
                 'email' => 'admin@admin.com',
                 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                 'document' => '99999999999',
                 'balance' => 50000,
                 'account_type' => 0,
         ],
        );

        DB::table('users')->insert(
            [
                'name' => 'Mateus',
                'email' => 'admin@admin.com.br',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'document' => '99999999999999',
                'balance' => 50000,
                'account_type' => 1,
            ],
        );
    }
}
