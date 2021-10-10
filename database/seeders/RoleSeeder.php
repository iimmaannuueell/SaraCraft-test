<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Admin user role',
        ]);

        Role::firstOrCreate([
            'name' => 'Nurse',
            'slug' => 'nurse',
            'description' => 'Nurse user role',
        ]);
        
        Role::firstOrCreate([
            'name' => 'Doctor',
            'slug' => 'doc',
            'description' => 'Doctor user role',
        ]);
    }
}
