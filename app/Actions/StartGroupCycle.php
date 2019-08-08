<?php

namespace App\Actions;

use App\Group;
use App\Jobs\ScheduleGroupContributions;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Console\Scheduling\Schedule;

class StartGroupCycle
{
    use QueueableAction;

    protected $schedule;

    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }

    public function execute(Group $group)
    {
        $job = new ScheduleGroupContributions($group);
        
        $this->schedule->job($job)->daily()->when(function () {
            return now();
        });
    }
}
