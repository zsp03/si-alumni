<?php

namespace App\Observers;

use App\Models\Alumni;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */

    public function created(User $user)
    {
        $alumni_id = Alumni::where('nim', '=', $user->nim)->get()->first();
        $alumni_id->name = $user->name;
        $alumni_id->email = $user->email;
        $alumni_id->user_id = $user->id;
        $alumni_id->save();

        $user->jurusan = $alumni_id->program_studi;
        $user->save();
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        $alumni = Alumni::where('user_id', '=', $user->id);

        $alumni->update([
            'name' => $user->name,
            'email' => $user->email,
            'show_email' => $user->show_email,
            'phone_number' => $user->phone_number,
            'show_phone_number' => $user->show_phone_number,
        ]);
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
