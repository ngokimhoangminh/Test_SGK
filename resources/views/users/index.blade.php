<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Danh Sách Người Dùng
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
                <button-action redirect="{{ route('admin.users.create') }}">
                    Thêm
                </button-action>
            </div>
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
                        <th class="text-center">Tên Người Dùng</th>
                        <th>Email</th>
                        <th>Quyền</th>
                        <th style="width: 15%">Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                    <tr id="row_{{$user->id}}">
                        <td class="align-middle">{{ $key + 1 }}</td>
                        <td class="align-middle">{{ $user->name }}</td>
                        <td class="align-middle">{{ $user->email }}</td>
                        <td class="align-middle">{{ $user->role->name }}</td>
                        <td>
                            <button-action class-name="btn btn-success"
                                :redirect="`{{ route('admin.users.edit', $user) }}`">
                                <i class="fas fa-edit"></i>
                            </button-action>
                            <confirm-delete name="{{ $user->name }}" :id="{{ $user->id }}"
                                route="{{ route('admin.users.destroy', $user) }}">
                            </confirm-delete>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @push('after-script')
    <script type="text/javascript">
    $(function() {
        $('#data_tables').DataTable({
            "aLengthMenu": [
                [5, 10, 15, -1],
                [5, 10, 15, "Tất Cả"]
            ],
            "ordering": false,
            "iDisplayLength": 5,
            "language": {
                "sLengthMenu": "Hiển thị _MENU_ record trên 1 trang",
                "sZeroRecords": "Không tìm thấy dữ liệu",
                "info": "Hiển thị trang _PAGE_ trong tổng số _PAGES_ trang",
                "sInfoEmpty": "Không có dữ liệu nào",
                "sInfoFiltered": "(được lọc từ tổng sô _MAX_ trong dữ liệu)",
                "sSearch": "Tìm kiếm:",
                "sShow": "Hiển Thị:",
                "oPaginate": {
                    "sNext": "Sau",
                    "sPrevious": "Trước"
                },
            },
        });
    });
    </script>
    @endpush
</x-app-layout>