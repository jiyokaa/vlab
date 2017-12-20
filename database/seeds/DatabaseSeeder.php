<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    $user = new App\User();
    $user->name = 'Songpol Tempiam';
    $user->email = 'songpol@siit.tu.ac.th';
    $user->password = Hash::make('1234');
    $user->type = 'Admin';
    $user->timestamps;
    $user->save();


    $lab = new App\Lab();
    $lab->name = 'BKD3201';
    $lab->type = 'Windows lab';
    $lab->max_coms = '60';
    $lab->save();

    $computer = new App\Computer();
    $computer->name = 'Computer 1';
    $computer->ip = '10.10.99.2';
    $computer->link = '#';
    $computer->lab_id = '1';
    $computer->save();

    }

}
