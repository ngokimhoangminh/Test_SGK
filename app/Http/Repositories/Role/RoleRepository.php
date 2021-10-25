<?php

namespace App\Http\Repositories\Role;

use App\Http\Repositories\BaseRepository;

class RoleRepository extends BaseRepository
{
    public function getModel()
    {
        return \App\Models\Role::class;
    }
}