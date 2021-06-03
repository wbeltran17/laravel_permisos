<?php

namespace Database\Seeders;

use App\Models\BookController;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookController::create([
            'id' => '1',
            'tittle' => 'Book1',
            'description' => 'Book Description'
        ]);

        BookController::create([
            'id' => '2',
            'tittle' => 'Book2',
            'description' => 'Book Description'
        ]);
    }
}
