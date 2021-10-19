<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Products
        </h2>
    </x-slot>

    
    <div id="app" class="container">
        <form method="POST" action="{{ route('product.store') }}">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Sản Phẩm</label-name>
                    <input-form name="name" value="{{old('name')}}"></input-form>
                </div>
                <div class="form-group col-md-6">
                    <label-name>Giá Sản Phẩm</label-name>
                    <input-form name="price" value="{{old('price')}}"></input-form>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Giá Giảm</label-name>
                    <input-form name="discount" value="{{old('discount')}}"></input-form>
                </div>
                <div class="form-group col-md-6">
                    <label-name>Mô Tả</label-name>
                    <text-area name="description"></text-area>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Trạng Thái</label-name>
                    <select name="status">
                        <option value="1">Hiển Thị</option>
                        <option value="0">Ẩn</option>
                    </select>
                </div>
            </div>
            <button-action>Thêm</button-action>
        </form>
    </div>
</x-app-layout>



