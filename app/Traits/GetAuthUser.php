<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

trait GetAuthUser
{
    /**
     * Get an auth user.
     *
     * @param  mixed  $parameters
     * @return App\Models\Model\User
     */

    public function getAuthUser()
    {
        return Auth::user();
    }
}
