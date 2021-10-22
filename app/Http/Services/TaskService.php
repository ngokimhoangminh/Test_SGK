<?php

namespace App\Http\Services;

use File;
use Session;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Tasks;
use App\Http\Repositories\TaskRepositories;


class TaskService
{
    protected $taskRepositories;

    public function __construct(TaskRepositories $taskRepositories) {
        $this->taskRepositories = $taskRepositories;
    }

    public function index()
    {
        $tasks = $this->taskRepositories->index();

        return view('task.index', compact('tasks'));
    }

}
