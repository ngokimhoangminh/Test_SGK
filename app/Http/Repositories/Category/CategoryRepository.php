<?php

namespace App\Http\Repositories\Category;

use App\Http\Repositories\BaseRepository;
use App\Http\Repositories\Category\CategoryRepositoryInterface;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Category::class;
    }

    public function getAll()
    {
        return $this->model->orderBy('id', 'desc')->get();
    }
}