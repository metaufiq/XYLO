<?php

namespace Database\Seeders;

use App\Modules\Auth\Domain\Models\User;
use App\Modules\Customer\Domain\Models\Customer;
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
        Customer::factory(10)
            ->create();
        User::factory(10)->create();
    }
}
