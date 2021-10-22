<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesRepositories
{
    protected $categories;

    public function __construct(Categories $categories)
    {
        $this->categories = $categories;
    }
    
    public function index()
    { 
        return $this->categories::orderBy('id','desc')->get();
    }

}
