<?php

namespace App\Jobs;

use App\Mail\GroupInvite;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendGroupInvite implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    protected $invite_code;
    protected $group;
    protected $message;
    protected $name;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $code, $group, $message, $name)
    {
        $this->email = $email;
        $this->invite_code = $code;
        $this->group = $group;
        $this->message = $message;
        $this->name = $name;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)
            ->queue(new GroupInvite(
                $this->invite_code, 
                $this->group,
                $this->message,
                $this->name,
            )
        );
    }
}
