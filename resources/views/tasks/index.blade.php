<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Danh Sách Nhiệm Vụ
        </h2>
    </x-slot>

    <div class="container">
        @if (session()->has('status'))
        <message-toast message="{{ session('status') }}"></message-toast>
        @endif
        <div class="card-header d-flex align-items-center ">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <message-toast class-name="alert alert-danger" message="{{ $error }}"></message-toast>
            @endforeach
            @endif
        </div>
        <div class="max-w-7xl mx-auto py-3 sm:px-6 lg:px-0">
            <div class="flex flex-row-reverse pr-px-30">
                @can('create', \App\Models\Task::class)
                <button-action redirect="{{ route('admin.tasks.create') }}">
                    Thêm
                </button-action>
            </div>
            @endcan
        </div>
        <div class="my-2">
            <table id="data_tables" class="table table-bordered 
                table-striped table-hover
                data_tables
                text-sm text-left
                border border-gray-900" style="width: 100%">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Nhiệm Vụ</th>
                        <th>Mô Tả</th>
                        <th>Người Dùng</th>
                        <th style="width: 15%">Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $key => $task)
                    <tr id="row_{{ $task->id }}">
                        <td class="align-middle">{{ $key + 1 }}</td>
                        <td class="align-middle">{{ $task->name }}</td>
                        <td class="align-middle">{{ $task->description }}</td>
                        <td class="align-middle">{{ $task->user->name }}</td>
                        <td>
                            @can('update', $task)
                            <button-action class-name="btn btn-success"
                                :redirect="`{{ route('admin.tasks.edit', $task) }}`"><i class="fas fa-edit"></i>
                            </button-action>
                            @endcan
                            @can('delete', $task)
                            <confirm-delete name="{{ $task->name }}" :id="{{ $task->id }}"
                                route="{{ route('admin.tasks.destroy', $task) }}">
                            </confirm-delete>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer" id="card-footer">
            <div class="row">
                {!! $tasks->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>

<script type="text/javascript">
</script>