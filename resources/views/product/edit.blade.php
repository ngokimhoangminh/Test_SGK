<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Cập Nhật Products
        </h2>
    </x-slot>

    
    <div id="app" class="container">
        <form method="POST" action="{{ route('product.update',$product->id) }}">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Sản Phẩm</label-name>
                    <input-form name="name" value="{{ $product->name }}"></input-form>
                    @error('name')
                        <message-toast className="alert alert-danger mt-1" message="{{ $message  }}"></message-toast>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label-name>Giá Sản Phẩm</label-name>
                    <input-form name="price" value="{{ $product->price }}"></input-form>
                    @error('price')
                        <message-toast className="alert alert-danger mt-1" message="{{ $message  }}"></message-toast>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Giá Giảm</label-name>
                    <input-form name="discount" value="{{ $product->discount }}"></input-form>
                    @error('discount')
                        <message-toast className="alert alert-danger mt-1" message="{{ $message  }}"></message-toast>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label-name>Mô Tả</label-name>
                    <text-area name="description" value="{{ $product->description }}"></text-area>
                    @error('description')
                        <message-toast className="alert alert-danger mt-1" message="{{ $message  }}"></message-toast>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Trạng Thái</label-name>
                    <select name="status">
                        <option value="1" {{($product->status) ? 'selected' : ' '}}>Hiển Thị</option>
                        <option value="0" {{(!$product->status) ? 'selected' : ' '}}>Ẩn</option>
                    </select>
                    @error('status')
                        <message-toast className="alert alert-danger mt-1" message="{{ $message  }}"></message-toast>
                    @enderror
                </div>
            </div>
            <button-action className="btn btn-success">Cập Nhật</button-action>
        </form>
    </div>
</x-app-layout>



