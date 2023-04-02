<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)->create();

        DB::table('users')->insert([
            [
                'name' => 'Maylinda Eka Christy',
                'email' => 'maylindaekachristy2002@gmail.com',
                'role'=> '0',
                'jurusan' => 'Teknik Informatika',
                'instagram_account' => '@may_eka.c',
                'password' => '$2y$10$Q/C16uk00XFVBfuAStj2i.pVOVmh9UeejRAQoWZbC3IMqqmEqcObq',
            ],
            [
                'name' => 'Zulfiqry Saadputra',
                'email' => 'zsp301@gmail.com',
                'role'=> '0',
                'jurusan' => 'Teknik Informatika',
                'instagram_account' => '@zsp03',
                'password' => '$2y$10$LBEx1bkYswPRYqnul/0Mu.hF50UaIy5AfzUhkL1DbGxV0xYiyTeOC',
            ]
        ]);

        DB::table('users')->insert([
            [
                'name' => 'Andhika Rama',
                'email' => 'andhika.ramak@gmail.com',
                'role'=> '0',
                'jurusan' => 'Teknik Informatika',
                'password' => '$2y$10$/I9G.SHSUaTBu99r32N0aOOhWlXLfxTxnvTScQ7eVWkQ8zK2pO0ya',
            ]
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
