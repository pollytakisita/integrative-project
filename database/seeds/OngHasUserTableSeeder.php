<?php

use Illuminate\Database\Seeder;
use App\OngHasUser;

class OngHasUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       // Ong Nova Mulher
        OngHasUser::create([
            'id_ong' => 1,
            'id_user' => 8,
            'permission_level' => 1,
        ]);

        OngHasUser::create([
            'id_ong' => 1,
            'id_user' => 6,
            'permission_level' => 0,
        ]);

        OngHasUser::create([
            'id_ong' => 1,
            'id_user' => 4,
            'permission_level' => 0,
        ]);

        OngHasUser::create([
            'id_ong' => 1,
            'id_user' => 1,
            'permission_level' => 0,
        ]);


        // Ong Cao sem dono
        OngHasUser::create([
            'id_ong' => 2,
            'id_user' => 2,
            'permission_level' => 1,
        ]);

        OngHasUser::create([
            'id_ong' => 2,
            'id_user' => 3,
            'permission_level' => 0,
        ]);

        OngHasUser::create([
            'id_ong' => 2,
            'id_user' => 7,
            'permission_level' => 0,
        ]);



         // Ong Casa do Zezinho
         OngHasUser::create([
            'id_ong' => 3,
            'id_user' => 9,
            'permission_level' => 1,
        ]);

        OngHasUser::create([
            'id_ong' => 3,
            'id_user' => 1,
            'permission_level' => 0,
        ]);

        OngHasUser::create([
            'id_ong' => 3,
            'id_user' => 2,
            'permission_level' => 0,
        ]);

        OngHasUser::create([
            'id_ong' => 3,
            'id_user' => 3,
            'permission_level' => 1,
        ]);

        OngHasUser::create([
            'id_ong' => 3,
            'id_user' => 4,
            'permission_level' => 0,
        ]);

        OngHasUser::create([
            'id_ong' => 3,
            'id_user' => 5,
            'permission_level' => 0,
        ]);

        OngHasUser::create([
            'id_ong' => 3,
            'id_user' => 6,
            'permission_level' => 0,
        ]);

        OngHasUser::create([
            'id_ong' => 3,
            'id_user' => 7,
            'permission_level' => 0,
        ]);

        OngHasUser::create([
            'id_ong' => 3,
            'id_user' => 8,
            'permission_level' => 0,
        ]);


    }
}
