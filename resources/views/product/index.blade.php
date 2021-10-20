<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Danh Sách Sản Phẩm
        </h2>
    </x-slot>

    <div class="container">
        @if (session()->has('status'))
            <message-toast message="{{ session('status') }}"></message-toast>
        @endif
        <div class="card-header d-flex align-items-center ">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <message-toast class-name="alert alert-danger" message="{{ $error}}"></message-toast>
                @endforeach
            @endif
        </div>
        <div class ="max-w-7xl mx-auto py-3 sm:px-6 lg:px-0">
            <div class="flex flex-row-reverse pr-px-30">
                <button-action redirect="{{route('product.create')}}">
                    Thêm
                </button-action>
            </div>
        </div>
        <div class ="my-2">
            <div id="app">
                <table id="data_tables" class="table table-bordered 
                table-striped table-hover
                data_tables
                text-sm text-left
                border border-gray-900"
                style="width: 100%">
                <thead>
                <tr>
                    <th style="">#</th>
                    <th style="width: 15%">Sản Phẩm</th>
                    <th style="width: 15%">Giá Gốc</th>
                    <th style="width: 15%">Giảm Giá</th>
                    <th style="width: 15%">Mô Tả</th>
                    <th>Trạng Thái</th>
                    <th>Hành Động</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                    <tr id="row_{{$product->id}}">
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{number_format($product->price,0,',','.')}}&nbsp;đ</td>
                        <td>{{number_format($product->discount,0,',','.')}}&nbsp;đ</td>
                        <td>{{$product->description}}</td>
                        @if($product->status)
                            <td><button-action>Hiển Thị</button-action></td>
                        @else
                            <td><button-action class-name="btn btn-danger">Ẩn</button-action></td>
                        @endif
                        <td>
                            <button-action
                                class-name="btn btn-success"
                                :redirect="`{{ route('product.edit', $product) }}`"
                                ><i class="fas fa-edit"></i
                            ></button-action>
                            <confirm-delete
                                name="{{$product->name}}"
                                :id="{{$product->id}}"
                                route="{{route('product.destroy', $product)}}"
                            >
                            </confirm-delete>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</x-app-layout>

<script type="text/javascript">

    $(function () {
        $('#data_tables').DataTable({
            "aLengthMenu": [[5, 10, 15, -1], [5, 10, 15, "Tất Cả"]],
            "iDisplayLength": 5,
            "ordering": false,
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