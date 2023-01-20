<?php

namespace App\Repositories;

use App\Entities\User;

class EmployerRepository extends ResourceRepository {

    public function __construct(User $user) {
        $this->model = $user;
    }

    public function getUsers() {

        $users = User::select('users.*')
                ->orderBy('id', 'DESC')
                ->orderBy('id', 'DESC')
              //  ->paginate(10)
                ->get();

        return $users;
    }

    public function getUsersByRole($role = 'Admin', $active = 1) {
        $users = User::where('users.active', $active)
                ->where('users.access', $role)
                ->orderBy('users.name')
                ->get();

        return $users;
    }

}
