<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Http\Repositories\TaskRepository;


class TaskService
{
    protected $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function index()
    {
        return $this->taskRepository->index();
    }
}