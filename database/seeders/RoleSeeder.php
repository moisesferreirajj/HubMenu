<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Administração', 'guard_name' => 'web'],
            ['name' => 'Padrão', 'guard_name' => 'web'],
            ['name' => 'Lojista', 'guard_name' => 'web'],
            ['name' => 'Gerente', 'guard_name' => 'web'],
            ['name' => 'Desenvolvedor', 'guard_name' => 'web'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
