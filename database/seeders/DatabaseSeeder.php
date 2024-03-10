<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
           'name' => 'Test User',
           'email' => 'test@example.com',
           'password' => bcrypt('test@example.com'),
       ]);

        DB::table('kategori')->insert([
            'nama_kategori' => 'Nasional'
        ]);

        DB::table('berita')->insert([
            'judul_berita' => 'Lorem_Ipsum',
            'isi_berita' => 'Lorem_Ipsum',
            'gambar_berita' => 'Lorem.jpg',
            'id_kategori' => 1
        ]);
    }
}
