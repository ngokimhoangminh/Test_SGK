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
        <div class ="max-w-7xl mx-auto py-3 sm:px-6 lg:px-0">
            <div class="flex flex-row-reverse pr-px-30">
                <button-action redirect="{{route('product.create')}}">
                    Thêm
                </button-actionredirect=>
            </div>
        </div>
        <div class ="mx-8 my-4">
            <div id="app">
                <table-form :products="{{$products}}"></table-form>
            </div>
        </div>
    </div>

</x-app-layout>