<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User => =>factory(10)->create();

        // \App\Models\User => =>factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => "Admin",
        //     'email' => "admin@cpci.com",
        //     'password' => "admin",
        //     'gender' => "male",
        //     'birthday' => "1967-01-01 00:00:00",
        //     'phone' => "1234567890",
        //     'address' => "christ preachers church international street",
        //     'branch' => "accra",
        //     'fellowship' => "men",
        //     'role' => "admin",
        // ]);

        Branch::create([
            'name' => 'accra',
            'branch_head' => 'admin',
            'country' => 'ghana',
            'state' => 'accra',
            'address' => 'christ preachers church international street'
        ]);
    }
}
