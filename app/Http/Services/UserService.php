<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\DB;
use App\Http\Repositories\User\UserRepository;
use App\Http\Repositories\Role\RoleRepository;

class UserService
{
    protected $userRepository;
    protected $roleRepository;

    public function __construct(
        UserRepository $userRepository,
        RoleRepository $roleRepository
    ) {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function getAll()
    {
        $users = $this->userRepository->getAll();

        return view('users.index', [
            "users" => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->roleRepository->getAll();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        try {
            DB::beginTransaction();
            $this->userRepository->store($request->validated());
            DB::commit();
            session()->flash('status', 'Thêm người dùng thành công');

            return redirect()->route('user.index');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $roles = $this->roleRepository->getAll();
            $user = $this->userRepository->find($id);
            if (empty($user)) {
                session()->flash('status', 'Người dùng không tồn tại');

                return redirect()->route('user.index');
            } else {
                return view('users.edit', compact('user', 'roles'));
            }
        } catch (\Exception $e) {
            return redirect()->route('user.index')->withErrors($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        try {
            DB::beginTransaction();
            $this->userRepository->update($id, $request->validated());
            DB::commit();
            session()->flash('status', 'Cập nhật người dùng thành công');

            return redirect()->route('user.index');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->withErrors($e->getMessage());
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
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}