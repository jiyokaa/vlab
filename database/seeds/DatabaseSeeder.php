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

    $user = new App\User();
    $user->name = 'User';
    $user->email = 'user@user.com';
    $user->password = Hash::make('1234');
    $user->type = 'User';
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
    $computer->link = 'http://192.168.10.102/vcl/#/client/TGFiMDEAYwBub2F1dGg=';
    $computer->is_available = '1';
    $computer->lab_id = '1';
    $computer->save();

    $computer = new App\Computer();
    $computer->name = 'Computer 2';
    $computer->ip = '10.10.99.2';
    $computer->link = 'http://192.168.10.102/vcl/#/client/TGFiMDIAYwBub2F1dGg=';
    $computer->is_available = '1';
    $computer->lab_id = '1';
    $computer->save();
    }

}
