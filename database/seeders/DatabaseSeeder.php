<?php

namespace Database\Seeders;

use App\Modules\Auth\Domain\Models\User;
use App\Modules\Customer\Domain\Models\Customer;
use App\Modules\Customer\Domain\Models\FollowUpStatus;
use App\Modules\History\Domain\Models\FollowUpHistory;
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
        User::factory(10)->create();
        FollowUpStatus::factory(4)
            ->create();
        Customer::factory(10)
            ->create();
        FollowUpHistory::factory(10)->create();
    }
}
