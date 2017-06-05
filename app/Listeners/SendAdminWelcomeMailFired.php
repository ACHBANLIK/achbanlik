<?php

namespace App\Listeners;

use App\Events\SendAdminWelcomeMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


use App\Admin;
use Mail;
use Log;

class SendAdminWelcomeMailFired
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendAdminWelcomeMail  $event
     * @return void
     */
    public function handle(SendAdminWelcomeMail $event)
    {
       $admin = Admin::find($event->adminId);
       Mail::send('emails.admin.welcome',$admin->toArray() , function ($message) use($admin)
        {

            $message->from('aachbanlik@gmail.com', 'Hamid');

            $message->to($admin->email);

        });

    }
}
