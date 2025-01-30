<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'id'    => "1",
            'status'  => "Aberto",
            'created_at' => "NOW",
            'updated_at' => "NOW",
        ]);

        Status::create([
            'id'    => "2",
            'status'  => "Em andamento",
            'created_at' => "NOW",
            'updated_at' => "NOW",
        ]);

        Status::create([
            'id'    => "3",
            'status'  => "Atrasado",
            'created_at' => "NOW",
            'updated_at' => "NOW",
        ]);

        Status::create([
            'id'    => "4",
            'status'  => "Resolvido",
            'created_at' => "NOW",
            'updated_at' => "NOW",
        ]);
    }
}
