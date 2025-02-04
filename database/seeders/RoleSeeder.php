<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'Padrão', 'description' => 'Usuário comum', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lojista', 'description' => 'Gerencia sua própria loja', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gerente', 'description' => 'Gerencia múltiplas lojas', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Administrador', 'description' => 'Acesso total ao sistema', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Desenvolvedor', 'description' => 'Acesso técnico e de manutenção', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
