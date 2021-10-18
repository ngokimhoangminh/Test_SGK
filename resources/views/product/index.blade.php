<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Product
        </h2>
    </x-slot>
    <div id="app">
        
        <div class="form-group">
            <label-name>Tên Sản Phẩm</label-name>
            <input-form ></input-form>
        </div>
        <div class="form-group">
            <label-name>Giá Sản Phẩm</label-name>
            <input-form :name=" {{ __('price') }} "></input-form>
        </div>
        <div class="form-group">
            <label-name>Giá Giảm</label-name>
            <input-form ></input-form>
        </div>
        <div class="form-group">
            <label-name>Mô Tả</label-name>
            <input-form ></input-form>
        </div>
    </div>
</x-app-layout>