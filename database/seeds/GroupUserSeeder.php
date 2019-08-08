<?php

use App\GroupUser;
use Illuminate\Database\Seeder;
use App\User;
use App\Group;

class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ask range for film per user needed
        $r = 0 . '-' . 10;
        $range = $this->command->ask('How many group user relations do you need ?', $r);

        // Create a range of users and groups relationship
        for ($i=0; $i < $this->count($range) ; $i++) { 
            GroupUser::firstOrCreate([
                'user_id' => User::inRandomOrder()->first()->id,
                'group_id' => Group::inRandomOrder()->first()->id
            ]);
        }

        $this->command->info('User added to Groups!');
    }

    // Return random value in given range
    public function count($range)
    {
        return rand(...explode('-', $range));
    }
}
