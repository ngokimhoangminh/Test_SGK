<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:users|string|min:3|max:255',
            'email' => 'required|unique:users|email|string',
            'password' => 'required|confirmed|min:6',
            'role_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Yêu cầu nhập tên đăng nhập',
            'name.unique' => 'Tên đăng nhập đã tồn tại, vùi lòng chọn tên khác',
            'name.min' => 'Tên đăng nhập có ít nhất 3 ký tự',
            'email.required' => 'Bạn không được bỏ trống Email',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email này đã được sử dụng',
            'password.required' => 'Bạn không được bỏ trống mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp',
            'role_id.required' => 'Bạn chưa chọn quyền cho người dùng',
        ];
    }
}