<?php

namespace App\Http\Repositories\User;

use App\Http\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    public function getModel()
    {
        return \App\Models\User::class;
    }

    public function getAll()
    {
        return $this->model->with('role')->orderBy('id', 'desc')->get();
    }
}