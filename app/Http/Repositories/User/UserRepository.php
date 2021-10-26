<?php

namespace App\Http\Repositories\User;

use App\Http\Repositories\BaseRepository;
use App\Http\Repositories\User\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
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