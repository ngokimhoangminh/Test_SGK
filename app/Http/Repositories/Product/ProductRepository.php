<?php

namespace App\Http\Repositories\Product;

use App\Http\Repositories\BaseRepository;
use App\Http\Repositories\Product\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Product::class;
    }

    public function getAll()
    {
        return $this->model->with('category')->latest('id')->get();
    }
}