<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    
    public function run()
    {
        Berita::factory()->count(50)->create();
    }
}
