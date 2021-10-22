<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TaskRepositories
{
    protected $tasks;

    public function __construct(Tasks $tasks)
    {
        $this->tasks = $tasks;
    }
    
    public function index()
    { 
        return $this->tasks->with('user')->orderBy('id','desc')->get();
    }

}
