<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Account;
use App\Models\LabCase;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $account = Account::create(['name' => fake()->company()]);

        \App\Models\User::factory(10)->create([
            'account_id'=>$account->id]
         );

//        LabCase::factory(5)->create([
//            'account_id'=>$account->id,
//            'user_case_id' => LabCase::where('account_id', $account->id)->max('user_case_id')+1,
//        ]);

        $latestUserCaseId = 1000;

        LabCase::factory(5)->create([
            'account_id' => $account->id,
            'user_case_id' => function () use (&$latestUserCaseId) {
                $latestUserCaseId++;
                return $latestUserCaseId;
            },
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
