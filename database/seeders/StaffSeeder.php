<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::factory(8)->create();
        // Staff::create([
        //     'nip' => '231402122',
        //     'email' => 'pujiartisusi@gmail.com',
        //     'nama' => 'Susi Pujiarti',
        //     'tanggal_lahir' => '2004-09-14',
        //     'no_hp' => '082283466666'
        // ]);
    }
}
