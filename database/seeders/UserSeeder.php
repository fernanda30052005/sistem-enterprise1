<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $adi = User::updateOrCreate([
        'name' =>'adi',
        'email'=>'adi@gmail.com',
        'password'=>bcrypt('password')
       ]);
       $adi->assignRole('admin');

       $budi = User::updateOrCreate([
        'name' =>'budi',
        'email' =>'budi@gmail.com',
        'password' =>bcrypt('password')
       ]);
       $budi->assignRole('operator');

       $cindy = User::updateOrCreate([
        'name' =>'cindy',
        'email' =>'cindy@gmail.com',
        'password' =>bcrypt('password')
       ]);
       $cindy->assignRole('operator');
       $cindy->givePermissionTo('delete users');//memberikan akses permission lansung
    }
}
