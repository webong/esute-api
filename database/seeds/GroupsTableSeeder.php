<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many groups you need, defaulting to 10
        $count = (int)$this->command->ask('How many groups do you need ?', 10);

        $this->command->info("Creating {$count} groups.");

        // Create the Genre
        factory(Group::class, $count)->create();

        $this->command->info('Groups Created!');
    }
}
