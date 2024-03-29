<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Supplier::factory()
        ->times(9)
        ->create();
        
    }
}
