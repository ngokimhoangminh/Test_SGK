<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cập Nhật Người Dùng
        </h2>
    </x-slot>

    <div class="container">
        <form method="POST" action="{{ route('user.update',$user) }}">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name> Tên Người Dùng </label-name>
                    <input-form name="name" value="{{ $user->name }}"></input-form>
                    @error('name')
                    <message-toast class-name="alert alert-danger mt-1" message="{{ $message  }}"></message-toast>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label-name> Email </label-name>
                    <input-form name="email" value="{{ $user->email }}"></input-form>
                    @error('email')
                    <message-toast class-name="alert alert-danger mt-1" message="{{ $message  }}"></message-toast>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label-name> Mật Khẩu </label-name>
                    <el-password name="password" value="{{ $user->password }}"></el-password>
                    <span class="help-block m-b-none">
                        <i class="fa fa-info-circle"></i>
                        Bạn có thể để trống, mặc định là mật khẩu gốc
                    </span>
                    @error('password')
                    <message-toast class-name="alert alert-danger mt-1 @error('password') is-invalid @enderror"
                        message="{{ $message  }}"></message-toast>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label-name> Xác Nhận Mật Khẩu </label-name>
                    <el-password name="password_confirmation" value="{{ $user->password }}"></el-password>
                </div>
                <div class="form-group col-md-6">
                    <label-name> Quyền </label-name>
                    <select class="select2" name="role_id">
                        @foreach($roles as $key => $role)
                        <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? 'selected' : '' }}>
                            {{ $role->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button-action>Cập Nhật</button-action>
        </form>
    </div>
</x-app-layout>