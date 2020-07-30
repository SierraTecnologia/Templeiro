<?php

namespace Templeiro\Http\Policies;

use App\Models\User;

/**
 * Class TempleiroPolicy.
 *
 * @package Finder\Http\Policies
 */
class TempleiroPolicy
{
    /**
     * Create a templeiro.
     *
     * @param  User   $authUser
     * @param  string $templeiroClass
     * @return bool
     */
    public function create(User $authUser, string $templeiroClass)
    {
        if ($authUser->toEntity()->isAdministrator()) {
            return true;
        }

        return false;
    }

    /**
     * Get a templeiro.
     *
     * @param  User  $authUser
     * @param  mixed $templeiro
     * @return bool
     */
    public function get(User $authUser, $templeiro)
    {
        return $this->hasAccessToTempleiro($authUser, $templeiro);
    }

    /**
     * Determine if an authenticated user has access to a templeiro.
     *
     * @param  User $authUser
     * @param  $templeiro
     * @return bool
     */
    private function hasAccessToTempleiro(User $authUser, $templeiro): bool
    {
        if ($authUser->toEntity()->isAdministrator()) {
            return true;
        }

        if ($templeiro instanceof User && $authUser->id === optional($templeiro)->id) {
            return true;
        }

        if ($authUser->id === optional($templeiro)->created_by_user_id) {
            return true;
        }

        return false;
    }

    /**
     * Update a templeiro.
     *
     * @param  User  $authUser
     * @param  mixed $templeiro
     * @return bool
     */
    public function update(User $authUser, $templeiro)
    {
        return $this->hasAccessToTempleiro($authUser, $templeiro);
    }

    /**
     * Delete a templeiro.
     *
     * @param  User  $authUser
     * @param  mixed $templeiro
     * @return bool
     */
    public function delete(User $authUser, $templeiro)
    {
        return $this->hasAccessToTempleiro($authUser, $templeiro);
    }
}
