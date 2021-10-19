<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Danh Sách Sản Phẩm
        </h2>
    </x-slot>

    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class ="max-w-7xl mx-auto py-3 sm:px-6 lg:px-0">
            <div class="flex flex-row-reverse pr-px-30">
                <button-action redirect="{{route('product.create')}}">
                    Thêm
                </button-actionredirect=>
            </div>
        </div>
        <div class ="mx-8 my-4">
            <div id="app">
                <table-form :datas="{{$product}}"></table-form>
            </div>
        </div>
    </div>

</x-app-layout>