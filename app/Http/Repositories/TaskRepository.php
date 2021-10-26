<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskRepository
{
    protected $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function index()
    {
        return $this->task->with('user')->orderBy('id', 'desc')->paginate(config('constants.paginate'));
    }
}