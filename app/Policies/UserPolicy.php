<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function admin(User $user) {
        return $user->role === 0;
    }

    public function recruiter(User $user) {
        return $user->role === 1;
    }

    public function user(User $user) {
        return $user->role === 2;
    }

    public function owner(?User $user, User $profile) {
        return optional($user)->id === $profile->id;
    }
}
