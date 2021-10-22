<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Cập Nhật Nhiệm Vụ
        </h2>
    </x-slot>

    <div class="container">
        <form method="POST" action = "{{ route('task.update',$task) }}">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Nhiệm Vụ</label-name>
                    <input-form name="name" value = "{{ $task->name }}"></input-form>
                    @error('name')
                        <message-toast class-name="alert alert-danger mt-1" message = "{{ $message  }}"></message-toast>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label-name>Mô Tả</label-name>
                    <text-area name="description" value = "{{ $task->description }}"></text-area>
                    @error('description')
                        <message-toast class-name="alert alert-danger mt-1" message = "{{ $message  }}"></message-toast>
                    @enderror
                </div>
            </div>

            <button-action class-name="btn btn-success">Cập Nhật</button-action>
        </form>
    </div>
</x-app-layout>



