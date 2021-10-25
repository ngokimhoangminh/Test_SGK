<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Log;
use App\Http\Repositories\User\UserRepositoryInterface;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAll()
    {
        return $this->userRepository->getAll();
    }

    public function store($data)
    {
        try {
            $result = $this->userRepository->store($data);

            return $result;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }

    public function findUserById($id)
    {
        try {
            $user = $this->userRepository->find($id);

            return $user;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }

    public function update($data, $id)
    {
        try {
            $result = $this->userRepository->update($id, $data);

            return $result;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $result = $this->userRepository->destroy($id);

            return $result;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw $e;
        }
    }
}