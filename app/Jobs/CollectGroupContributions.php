<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CollectGroupContributions implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $list;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($groupList)
    {
        $this->list = $groupList;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Charge all members
        foreach ($this->list as $key => $member) {
            dispatch(function($member){
               // Charge the member;
            });
        }
    }
}
