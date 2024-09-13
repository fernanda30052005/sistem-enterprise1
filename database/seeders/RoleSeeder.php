<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $admin = Role::updateOrCreate(['name' =>'admin']);
       $operator = Role::updateOrCreate(['name' =>'operator']);

       //memberikan akses ke role admin
       $admin->givePermissionTo(Permission::all());

       //operator
       $operator->givePermissionTo('show users','add users','edit users');

    }
}
