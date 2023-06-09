<?php

namespace Database\Seeders;

use App\Models\OptionType;
use Illuminate\Database\Seeder;

class OptionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OptionType::created([
            'name' => 'type1'
        ]);
    }
}
