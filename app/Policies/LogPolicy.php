<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Log;
use Illuminate\Auth\Access\HandlesAuthorization;

class LogPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function delete(User $user, Log $log)
    {
        return $user->id === $log ->user_id;
    }
}
