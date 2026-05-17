<?php

namespace App\Policies;

use App\Models\Note;
use App\Models\User;


class NotePolicy
{
    /**
     * Create a new policy instance.
     */
    public function list(User $user): bool
    {
        return $user->role == "It_Staff" ||
            $user->role == "Student";
    }
    public function create(User $user): bool
    {
        return $user->role == "It_Staff" ||
            $user->role == "Student";
    }
    public function update(User $user, Note $note): bool
    {
        return $user->role == "It_Staff" ||
            $user->role == "Student";
    }
    public function view(User $user, Note $note): bool
    {
        return $user->role == "It_Staff" ||
            $user->role == "Student";
    }
    public function delete(User $user, Note $note): bool
    {
        return $user->role == "Student" || 
            $user->role == "It_Staff";
    }
}
