<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $administrativeRole = Role::firstOrCreate([
            'name' => 'Administrative',
        ]);

        $teacherRole = Role::firstOrCreate([
            'name' => 'Teacher',
        ]);

        $studentRole = Role::firstOrCreate([
            'name' => 'Student',
        ]);

        User::updateOrCreate(
            ['email' => 'admon@robotics.com'],
            [
                'name' => 'Admon',
                'password' => Hash::make('Adm@2022'),
                'role_id' => $administrativeRole->id,
                'group_id' => null,
            ]
        );

        User::updateOrCreate(
            ['email' => 'tecmilenio@robotics.com'],
            [
                'name' => 'Tecmilenio',
                'password' => Hash::make('Adm@2022'),
                'role_id' => $teacherRole->id,
                'group_id' => null,
            ]
        );

        User::updateOrCreate(
            ['email' => 'student@robotics.com'],
            [
                'name' => 'Student',
                'password' => Hash::make('Adm@2022'),
                'role_id' => $studentRole->id,
                'group_id' => null,
            ]
        );
    }
}
