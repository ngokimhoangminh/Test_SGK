<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Products
        </h2>
    </x-slot>
    <div id="app" class="container">
        <form>
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Sản Phẩm</label-name>
                    <input-form :name="name"></input-form>
                </div>
                <div class="form-group col-md-6">
                    <label-name>Giá Sản Phẩm</label-name>
                    <input-form :name="price"></input-form>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label-name>Giá Giảm</label-name>
                    <input-form :name="discount"></input-form>
                </div>
                <div class="form-group col-md-6">
                    <label-name>Mô Tả</label-name>
                    <text-area :name="description"></text-area>
                </div>
            </div>
            <button-action @handleSubmit="onSubmit">Thêm</button-action>
        </form>
    </div>
</x-app-layout>

<script src="https://unpkg.com/vue@2.5.16/dist/vue.js"></script>
<script type="text/javascript" defer>
    var app = new Vue({
        el: '#app',
        data: {
            name: 'name',
            price:'price',
            discount:'discount',
            description:'description'
        },
        methods:{
            onSubmit () {
                console.log("ADD PRODUCT");
            }
        }
    });
</script>

