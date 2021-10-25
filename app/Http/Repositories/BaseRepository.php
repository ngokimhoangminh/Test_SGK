<?php

namespace App\Http\Repositories;

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
        return $this->model->find($id);
    }

    public function store($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        return $this->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->find($id)->delete();
    }
}