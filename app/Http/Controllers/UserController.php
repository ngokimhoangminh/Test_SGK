<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Http\Services\RoleService;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;

class UserController extends Controller
{
    protected $userService;
    protected $roleService;

    public function __construct(
        UserService $userService,
        RoleService $roleService
    ) {
        $this->userService = $userService;
        $this->roleService = $roleService;
    }

    public function index()
    {
        $users = $this->userService->getAll();

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
        $roles = $this->roleService->getAll();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        try {
            $this->userService->store($request->validated());
            session()->flash('status', 'Thêm người dùng thành công');

            return redirect()->route('user.index');
        } catch (\Exception $e) {
            return abort(500);
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
            $roles = $this->roleService->getAll();
            $user = $this->userService->findUserById($id);
            if (empty($user)) {
                session()->flash('status', 'Người dùng không tồn tại');

                return redirect()->route('user.index');
            } else {
                return view('users.edit', [
                    "user" => $user,
                    "roles" => $roles
                ]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request,  $id)
    {
        try {
            $this->userService->update($request->validated(), $id);
            session()->flash('status', 'Cập nhật người dùng thành công');

            return redirect()->route('user.index');
        } catch (\Exception $e) {
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
            $result = $this->userService->destroy($id);

            return $result;
        } catch (\Exception $e) {
            return abort(500);
        }
    }
}