<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['id' => '1', 'name' => 'Administração', 'guard_name' => 'web'],
            ['id' => '2', 'name' => 'Padrão', 'guard_name' => 'web'],
            ['id' => '3', 'name' => 'Lojista', 'guard_name' => 'web'],
            ['id' => '4', 'name' => 'Gerente', 'guard_name' => 'web'],
            ['id' => '5', 'name' => 'Desenvolvedor', 'guard_name' => 'web'],
        ];

        foreach ($roles as $role) {
            Roles::create($role);
        }
    }
}
