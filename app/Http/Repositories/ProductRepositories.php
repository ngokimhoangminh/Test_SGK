<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;

class ProductRepositories
{
    protected $products;

    public function __construct(Product $products)
    {
        $this->products = $products;
    }
    
    public function index()
    { 
        return $this->products::with('categories')->orderBy('id','desc')->get();
    }

    public function create()
    {
        return $this->categories::orderBy('id','desc')->get();
    }

    public function store($data)
    {
        return $this->products::create($data);
    }

    public function update($id, $data)
    {
        return $this->products::find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->products::find($id)->delete();
    }
}