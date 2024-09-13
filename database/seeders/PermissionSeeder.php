<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Permission untuk mengelola users
       Permission::updateOrCreate(['name' =>'show users']);
       Permission::updateOrCreate(['name' =>'add users']);
       Permission::updateOrCreate(['name' =>'edit users']);
       Permission::updateOrCreate(['name' =>'delete users']);
    }
}
