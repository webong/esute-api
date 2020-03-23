<?php

namespace App\Actions;

use App\Group;
use App\Jobs\CollectGroupContributions;
use Carbon\Carbon;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Console\Scheduling\Schedule;
use App\GroupContributionOrder;

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
        $group->update([
            'status' => 'active',
            'start_date' => Carbon::now(),
        ]);

        $set_arrangement = $this->contributionOrder($group);
        $group_order = $this->saveContributionOrder($set_arrangement, $group);

        $job = new CollectGroupContributions($group_order);

        $this->schedule->job($job)->weekly();
    }

    /**
     * @param Group $group
     * @return array
     */
    private function contributionOrder($group)
    {
        $members = $group->members()->where('pivot.status', 'active');
        foreach ($members as $member) {
            $arrange[] = $member->id;
        }
        shuffle($arrange);
        return $arrange;
    }

    /**
     * @param array $arranged
     * @param Group $group
     * @return array
     */
    private function saveContributionOrder($arranged, $group)
    {
        $id = $group->id;
        $current_cycle = $group->completed_cycle + 1;
        $start_date = $group->start_date->toDateString();
        $list = [];

        foreach($arranged as $key => $value) {
            $position = $key + 1;
            $date = $start_date->addMonths($position);
            // $dates[] = $date;
            $list[] = [
                'order' => $position,
                'group_id' => $id,
                'user_id' => $value,
                'current_cycle' => $current_cycle,
                'schedule_date' => $date,
                'status' => false,
            ];
        }

        GroupContributionOrder::newQuery()->insert($list);
        // DB::table('group_contribution_orders')->insert($list);
        return $list;
    }
}
