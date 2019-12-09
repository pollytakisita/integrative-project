<?php

use Illuminate\Database\Seeder;
use App\ActionEventHasUser;

class ActionEventHasUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActionEventHasUser::create([
            'id_action_event' => 1 ,
            'id_user' => 3

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 1 ,
            'id_user' => 4

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 1 ,
            'id_user' => 5

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 1 ,
            'id_user' => 9

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 1 ,
            'id_user' =>1

        ]);




        ActionEventHasUser::create([
            'id_action_event' => 2 ,
            'id_user' => 8

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 2 ,
            'id_user' => 6

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 2 ,
            'id_user' => 4

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 2 ,
            'id_user' => 2

        ]);




        ActionEventHasUser::create([
            'id_action_event' => 3 ,
            'id_user' => 1

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 3 ,
            'id_user' => 2

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 3 ,
            'id_user' => 3

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 3 ,
            'id_user' => 4

        ]);    ActionEventHasUser::create([
            'id_action_event' => 3 ,
            'id_user' => 5

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 3 ,
            'id_user' => 6

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 3 ,
            'id_user' => 7

        ]);

        ActionEventHasUser::create([
            'id_action_event' => 3 ,
            'id_user' => 8

        ]);
    }
}
