<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\Log;
use App\Http\Repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        try {
            return $this->model->find($id);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }

    public function store($data)
    {
        try {
            return $this->model->create($data);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }

    public function update($id, $data)
    {
        try {
            $result = $this->find($id);
            if ($result) {
                $result->update($data);

                return $result;
            }

            return false;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }

    public function destroy($id)
    {
        try {
            $data = $this->find($id);
            if ($data) {
                $data->delete();

                return true;
            }

            return false;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }
}