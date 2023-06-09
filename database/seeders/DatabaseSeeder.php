<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ProviderSeeder::class,
            CategorySeeder::class,
            ManufacturerSeeder::class,
            ProductSeeder::class,
            ProductCategorySeeder::class,
            // OptionTypeSeeder::class,
            // OptionSeeder::class,
            ProductOptionSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class
        ]);
    }
}
