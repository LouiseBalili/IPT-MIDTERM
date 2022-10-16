<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'acct_name' => 'Acejoy M. Savings Account',
                'init_invest' => 150000,
                'start_date' => '2017-08-10',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Acejoy Isdaan Funds',
                'init_invest' => 215000,
                'start_date' => '2021-05-12',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Balili L.D. Savings Account',
                'init_invest' => 50000,
                'start_date' => '2012-02-14',
                'remarks' => 'Done with normal transaction'
            ],
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}
