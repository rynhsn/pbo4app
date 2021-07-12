<?php

use Illuminate\Database\Seeder;
use App\sysuser;
use App\sysmenu;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        sysuser::insert([
            'uname' => 'admin',
            'namalengkap' => 'Administrator',
            'email' => 'admin@pbo3.com',
            'upass' => sha1('admin')
        ]);
        sysmenu::insert([
            'namamenu' => 'Home',
            'sysmenus_id' => '0',
            'linkmenu' => '#'
        ]);
        sysmenu::insert([
            'namamenu' => 'Administrasi',
            'sysmenus_id' => '0',
            'linkmenu' => '#'
        ]);
        sysmenu::insert([
            'namamenu' => 'User Administrator',
            'sysmenus_id' => '2',
            'linkmenu' => 'user'
        ]);
        sysmenu::insert([
            'namamenu' => 'Master',
            'sysmenus_id' => '0',
            'linkmenu' => '#'
        ]);
        sysmenu::insert([
            'namamenu' => 'Mahasiswa',
            'sysmenus_id' => '4',
            'linkmenu' => 'mahasiswa'
        ]);
    }
}
