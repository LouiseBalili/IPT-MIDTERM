<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'lname'=>'DiCapri',
                'fname'=>'Acejoy',
                'address'=>'California, USA',
                'phone'=>'09488764429',
                'email'=>'aj_dicaprio@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Calunia',
                'fname'=>'Lester',
                'address'=>'Guiwanon, Tubigon, Bohol.',
                'phone'=>'0936434459',
                'email'=>'cal_lesterj@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Encina',
                'fname'=>'Altair',
                'address'=>'Potohan, Tubigon, Bohol.',
                'phone'=>'0935648394',
                'email'=>'alt_enci@gmail.com',
                'password'=>bcrypt('password123')
            ],
        ];

        foreach($data as $user) {
            \App\User::create($user);
        }
    }
}
