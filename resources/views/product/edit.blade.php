<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Cập Nhật Sản Phẩm | {{ $product->name_price }}
        </h2>
    </x-slot>

    <div class="container">
        <form method="POST" action = "{{ route('product.update',$product->id) }}" enctype='multipart/form-data'>
            @method('PUT')
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Sản Phẩm</label-name>
                    <input-form name="name" value = "{{ $product->name }}"></input-form>
                    @error('name')
                        <message-toast class-name="alert alert-danger mt-1" message = "{{ $message  }}"></message-toast>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label-name>Danh Mục</label-name>
                    <select class="form-control"  name="category_id">
                        @foreach( $categories as $key => $category )
                          <option value = "{{ $category->id }}" {{ $category->id == $product->categories->id ? 'selected' : '' }}> {{ $category->name }} </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <message-toast class-name="alert alert-danger mt-1" message = "{{ $message  }}"></message-toast>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Giá Sản Phẩm</label-name>
                    <input-form name="price" value = "{{ $product->price }}"></input-form>
                    @error('price')
                        <message-toast class-name="alert alert-danger mt-1" message = "{{ $message  }}"></message-toast>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label-name>Giá Giảm</label-name>
                    <input-form name="discount" value = "{{ $product->discount }}"></input-form>
                    @error('discount')
                        <message-toast class-name="alert alert-danger mt-1" message = "{{ $message  }}"></message-toast>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Mô Tả</label-name>
                    <text-area name="description" value = "{{ $product->description }}"></text-area>
                    @error('description')
                        <message-toast class-name="alert alert-danger mt-1" message = "{{ $message  }}"></message-toast>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <el-upload 
                    name="image" 
                    url-image = "{{ ($product->image=='default.png') ? asset('libs/uploads/'.$product->image) : asset('storage/'.$product->image) }}"></el-upload>
                    @error('image')
                        <message-toast class-name="alert alert-danger mt-1" message = "{{ $message  }}"></message-toast>
                    @enderror
                </div>      
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Trạng Thái</label-name>
                    <select name="status">
                        <option value="1" {{ ($product->status) ? 'selected' : ' ' }}>Hiển Thị</option>
                        <option value="0" {{ (!$product->status) ? 'selected' : ' ' }}>Ẩn</option>
                    </select>
                    @error('status')
                        <message-toast class-name="alert alert-danger mt-1" message = "{{ $message  }}"></message-toast>
                    @enderror
                </div>
            </div>
            <button-action class-name="btn btn-success">Cập Nhật</button-action>
        </form>
    </div>
</x-app-layout>



