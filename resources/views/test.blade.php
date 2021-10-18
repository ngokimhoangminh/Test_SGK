<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- deferが付かない：先に読み込ませるため -->
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

		<!-- jQueryUI -->
        <link rel="stylesheet" href="{{ asset('jquery-ui-1.12.1/jquery-ui.min.css') }}">
        <script src="{{ asset('jquery-ui-1.12.1/jquery-ui.min.js') }}" defer></script>
        
        <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
        <script src="{{ asset('DataTables/datatables.min.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                顧客登録
            </h2>
        </x-slot>

        <div class ="mx-auto max-w-7xl py-2 px-4">
            <div class="grid grid-cols-12 gap-2 items-center">

                <!-- 確認用 -->
                <div class="col-span-1 text-center bg-blue-100">01</div>
                <div class="col-span-1 text-center bg-blue-300">02</div>
                <div class="col-span-1 text-center bg-blue-100">03</div>
                <div class="col-span-1 text-center bg-blue-300">04</div>
                <div class="col-span-1 text-center bg-blue-100">05</div>
                <div class="col-span-1 text-center bg-blue-300">06</div>
                <div class="col-span-1 text-center bg-blue-100">07</div>
                <div class="col-span-1 text-center bg-blue-300">08</div>
                <div class="col-span-1 text-center bg-blue-100">09</div>
                <div class="col-span-1 text-center bg-blue-300">10</div>
                <div class="col-span-1 text-center bg-blue-100">11</div>
                <div class="col-span-1 text-center bg-blue-300">12</div>

                <!-- 1段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row1_1">顧客役割</label>
                    <span class="text-red-500">*</span>
                </div>
                <div class="col-span-8 bg-blue-100">
                    <input type="radio" id="row1_1" name="row1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                    <label class="leading-10 mr-3" for="row1_1">契約先</label>
                    <input type="radio" id="row1_2" name="row1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                    <label class="leading-10 mr-3" for="row1_2">請求先</label>
                    <input type="radio" id="row1_3" name="row1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                    <label class="leading-10 mr-3" for="row1_3">入金元</label>
                </div>

                <!-- 2段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row2">顧客コード</label>
                    <span class="text-red-500">*</span>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row2" name="row2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 3段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row3">顧客名</label>
                    <span class="text-red-500">*</span>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row3" name="row3" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 4段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row4">顧客略称</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row4" name="row4" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 5段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row5">顧客カナ</label>
                    <span class="text-red-500">*</span>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row5" name="row5" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 6段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row6">法人格コード</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row6" name="row6" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 7段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row7">ホームページ</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row7" name="row7" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 8段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row8">業種</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <select id="row8" name="row8" class="w-full border rounded bg-white px-3 py-2 outline-none">
                        <option value=""></option>
                        <option value="1">テスト1</option>
                        <option value="2">テスト2</option>
                        <option value="3">テスト3</option>
                    </select>
                </div>

                <!-- 9段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row9_1">代表者役名</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row9_1" name="row9_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>
                <div class="col-start-1 col-end-5 md:col-start-6 md:col-end-8 bg-blue-200 p-1">
                    <label class="leading-10" for="row9_2">代表者氏名</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row9_2" name="row9_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 10段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row10">信用情報</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row10" name="row10" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 11段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row11">郵便番号</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row11" name="row11" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>
                <div class="col-start-5 col-end-13 md:col-start-6 md:col-end-8 p-1">
                    <button type="button" id="row11_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                        郵便番号検索
                    </button>
                </div>

                <!-- 12段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row12_1">都道府県</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row12_1" name="row12_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>
                <div class="col-start-1 col-end-5 md:col-start-6 md:col-end-8 bg-blue-200 p-1">
                    <label class="leading-10" for="row12_2">市区町村</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row12_2" name="row12_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 13段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row13_1">町域</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row13_1" name="row13_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>
                <div class="col-start-1 col-end-5 md:col-start-6 md:col-end-8 bg-blue-200 p-1">
                    <label class="leading-10" for="row13_2">町域以下</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row13_2" name="row13_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 14段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 bg-blue-200 p-1">
                    <label class="leading-10" for="row14_1">建物名</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row14_1" name="row14_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>
                <div class="col-start-1 col-end-5 md:col-start-6 md:col-end-8 bg-blue-200 p-1">
                    <label class="leading-10" for="row14_2">階数・号数</label>
                </div>
                <div class="col-span-8 md:col-span-3">
                    <input type="text" id="row14_2" name="row14_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

            </div>
        </div>
    </x-app-layout>




<!--
        <div class="grid grid-cols-12 gap-2">

            <div class="col-span-2">
                <label class="leading-10" for="inquiry_date">問合せ日</label><span class="text-red-500">*</span>
            </div>
            <div class="col-span-2">
                <input type='date' id="inquiry_date" name="inquiry_date" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-span-8"></div>

            <div class="col-span-2">
                <label class="leading-10" for="sales_contact_id">営業担当者</label>
            </div>
            <div class="col-span-2">
                <select id="sales_contact_id" name="sales_contact_id" class="w-full border rounded bg-white px-3 py-2 outline-none">
                    <option value=""></option>
                    <option value="1">テスト</option>
                </select>
            </div>
            <div class="col-span-8"></div>

            <div class="col-span-2">
                <label class="leading-10" for="inquiry_contents">問合せ内容</label>
            </div>
            <div class="col-span-3">
                <input type='text' id="inquirer_prefecture" name="inquirer_prefecture" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-span-7"></div>

            <div class="col-span-2">
                <label class="leading-10" for="inquiry_remarks">備考</label>
            </div>
            <div class="col-span-3">
                <textarea id="inquiry_remarks" name="inquiry_remarks" value="" class="w-full border rounded focus:outline-none focus:border-green-500" rows="4"></textarea>
            </div>
            <div class="col-span-7"></div>

            <div class="col-span-2">
                <label class="leading-10" for="burnable_waste_existence">可燃ごみ</label>
            </div>
            <div class="col-span-2">
                <input type="radio" id="" name="burnable_waste_existence" value="" class="h-2 w-2 px-2 py-2 mr-2">
                <label class="leading-10 mr-3" for="burnable_waste_existence">テスト</label>  
            </div>
            <div class="col-span-8"></div>
        </div>
-->
    </body>
</html>
