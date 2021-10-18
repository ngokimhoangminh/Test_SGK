<!-- タイトル -->
<title>案件登録 - {{config('const.Product.NAME')}}</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            案件登録
        </h2>
    </x-slot>

    <form method="POST" action="">
        @csrf

        <div class ="mx-auto border border-gray-600 max-w-7xl py-2 px-4">
            <!-- 問合せ情報 -->
            <div class="grid md:grid-cols-12 gap-2 items-center m-2">
                <h4 class="border-l-8 border-blue-400 p-2 font-semibold mb-2 md:col-span-4">問合せ情報</h4>

                <!-- 1段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="h_row1">問合せ日</label>
                </div>
                <div class="col-span-8 md:col-span-4 mt-1">
                    <label id="h_row1" name="h_row1" class="text-gray-600 font-light">xxxxx</label>
                </div>

                <!-- 2段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="h1_row2">問合せ顧客名</label>
                </div>
                <div class="col-span-8 md:col-span-4 mt-1">
                    <label id="h_row2" name="h_row2" class="text-gray-600 font-light">xxxxx</label>
                </div>
            </div>
        </div>

        <div class="w-full mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex" id="tabs">
                <div class="w-full">
                    <!-- Tabs -->
                    <ul class="list-reset flex border-b">
                        <li class="-mb-px mr-1">
                            <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold" onclick="changeAtiveTab(event,'tab-1')">顧客情報</a>
                        </li>
                        <li class="-mb-px mr-1">
                            <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab(event,'tab-2')">排出事業者情報</a>
                        </li>
                        <li class="-mb-px mr-1">
                            <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab(event,'tab-3')">排出事業場情報</a>
                        </li>
                        <li class="-mb-px mr-1">
                            <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab(event,'tab-4')">案件情報</a>
                        </li>
                        <li class="-mb-px mr-1">
                            <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab(event,'tab-5')">見積情報</a>
                        </li>
                        <li class="-mb-px mr-1">
                            <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab(event,'tab-6')">契約書作成</a>
                        </li>
                    </ul>

                    <!-- Tab Contents -->
                    <div class="tab-content tab-space m-3">

                        <!-- 顧客情報タブ -->
                        <div class="block" id="tab-1">
                            <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

                                <!-- ボタンエリア -->
                                <div class="col-start-1 col-end-12 md:col-start-1 md:col-end-3 p-1">
                                    <button type="button" id="search_customer_button" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                        顧客選択
                                    </button>
                                </div>

                                <!-- タイトルエリア -->
                                <div class="col-start-1 col-end-12 md:col-start-1 md:col-end-3 p-1">
                                    <h4 class="border-l-8 border-blue-400 p-2 font-semibold mb-2 md:col-span-4">顧客情報</h4>
                                </div>

                                <!-- 1段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_customer_code">顧客コード</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_customer_code" name="t1_customer_code" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 2段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_customer_name">顧客名</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_customer_name" name="t1_customer_name" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 3段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_customer_abbreviation">顧客略称</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_customer_abbreviation" name="t1_customer_abbreviation" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 4段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_customer_kana">顧客カナ</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_customer_kana" name="t1_customer_kana" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 5段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_postal_code">郵便番号</label>
                                </div>
                                <div class="col-span-8 md:col-span-2 mt-1">
                                    <label id="t1_postal_code" name="t1_postal_code" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 6段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_prefecture">都道府県</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_prefecture" name="t1_prefecture" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_municipality">市区町村</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_municipality" name="t1_municipality" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 7段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_town_area">町域</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_town_area" name="t1_town_area" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_following_town_area">町域以下</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_following_town_area" name="t1_following_town_area" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 8段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_building_name">建物名</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_building_name" name="t1_building_name" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_floor_number">階数・号数</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_floor_number" name="t1_floor_number" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 9段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_department_name">担当部署</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_department_name" name="t1_department_name" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_contact_name">担当者氏名</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_contact_name" name="t1_contact_name" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 10段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_contact_remarks">担当者備考</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_contact_remarks" name="t1_contact_remarks" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 11段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_tel">電話番号</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_tel" name="t1_tel" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_extension_number">内線番号</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_extension_number" name="t1_extension_number" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 12段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_fax">FAX番号</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_fax" name="t1_fax" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_mobile_number">携帯番号</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_mobile_number" name="t1_mobile_number" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 13段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_email_address">メールアドレス</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_email_address" name="t1_email_address" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t1_sales_contact_id">営業担当者</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t1_sales_contact_id" name="t1_sales_contact_id" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                            </div>
                        </div>

                        <!-- 排出事業者情報タブ -->
                        <div class="hidden" id="tab-2">
                            <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

                                <!-- ボタンエリア -->
                                <div class="col-start-1 col-end-12 md:col-start-1 md:col-end-3 p-1">
                                    <button type="button" id="" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                    排出事業者選択
                                    </button>
                                </div>

                                <!-- タイトルエリア -->
                                <div class="col-start-1 col-end-12 md:col-start-1 md:col-end-3 p-1">
                                    <h4 class="border-l-8 border-blue-400 p-2 font-semibold mb-2 md:col-span-4">排出事業者情報</h4>
                                </div>

                                <!-- 1段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row1">排出事業者コード</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row1" name="t2_row1" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 2段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row2">排出事業者名</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row2" name="t2_row2" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 3段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row3">排出事業者略称</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row3" name="t2_row3" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 4段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row4">排出事業者カナ</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row4" name="t2_row4" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 5段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row5">郵便番号</label>
                                </div>
                                <div class="col-span-8 md:col-span-2 mt-1">
                                    <label id="t2_row5" name="t2_row5" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 6段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row6_1">都道府県</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row6_1" name="t2_row6_1" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row6_2">市区町村</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row6_2" name="t2_row6_2" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 7段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row7_1">町域</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row7_1" name="t2_row7_1" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row7_2">町域以下</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row7_2" name="t2_row7_2" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 8段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row8_1">建物名</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row8_1" name="t2_row8_1" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row8_2">階数・号数</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row8_2" name="t2_row8_2" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 9段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row9_1">担当部署</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row9_1" name="t2_row9_1" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row9_2">担当者氏名</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row9_2" name="t2_row9_2" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 10段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row10">担当者備考</label>
                                </div>
                                <div class="col-span-8 md:col-span-10 mt-1">
                                    <label id="t2_row10" name="t2_row10" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 11段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row11_1">電話番号</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row11_1" name="t2_row11_1" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row11_2">内線番号</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row11_2" name="t2_row11_2" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 12段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row12_1">FAX番号</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row12_1" name="t2_row12_1" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row12_2">メールアドレス</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row12_2" name="t2_row12_2" class="text-gray-600 font-light">xxxxx</label>
                                </div>

                                <!-- 13段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row13_1">加入者番号</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row13_1" name="t2_row13_1" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                                <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t2_row13_2">EDI利用確認キー</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <label id="t2_row13_2" name="t2_row13_2" class="text-gray-600 font-light">xxxxx</label>
                                </div>
                            </div>
                        </div>

                        <!-- 排出事業場情報タブ -->
                        <div class="hidden" id="tab-3">
                            <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

                                <!-- ボタンエリア -->
                                <div class="col-start-1 col-end-12 md:col-start-1 md:col-end-3 p-1">
                                    <button type="button" id="" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                    排出事業場選択
                                    </button>
                                </div>

                                <!-- 基本情報 -->
                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">基本情報</div>

                                    <div class="grid grid-cols-12 m-4">
                                        <!-- 1段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row1">排出事業場コード</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <label id="t3_1_row1" name="t3_1_row1" class="text-gray-600 font-light">xxxxx</label>
                                        </div>

                                        <!-- 2段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row2">排出事業場名称</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row2" name="t3_1_row2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 3段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row3">排出事業場略称</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row3" name="t3_1_row3" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 4段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row4">排出事業場カナ</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row4" name="t3_1_row4" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 5段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row5">郵便番号</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-2 mt-1">
                                            <input type="text" id="t3_1_row5" name="t3_1_row5" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-5 col-end-13 md:col-start-5 md:col-end-7 p-1">
                                            <button type="button" id="t3_1_row5_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                                郵便番号検索
                                            </button>
                                        </div>

                                        <!-- 6段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row6_1">都道府県</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row6_1" name="t3_1_row6_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row6_2">市区町村</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row6_2" name="t3_1_row6_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 7段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row7_1">町域</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row7_1" name="t3_1_row7_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row7_2">町域以下</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row7_2" name="t3_1_row7_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 8段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row8_1">建物名</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row8_1" name="t3_1_row8_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row8_2">階数・号数</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row8_2" name="t3_1_row8_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 9段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row9_1">担当部署</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row9_1" name="t3_1_row9_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row9_2">担当者</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row9_2" name="t3_1_row9_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 10段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row10">担当者役職</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row10" name="t3_1_row10" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 11段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row11">担当者備考</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-10 mt-1">
                                            <input type="text" id="t3_1_row11" name="t3_1_row11" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 12段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row12_1">電話番号</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row12_1" name="t3_1_row12_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row12_2">内線番号</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row12_2" name="t3_1_row12_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 13段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row13_1">FAX番号</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row13_1" name="t3_1_row13_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row13_2">携帯番号</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row13_2" name="t3_1_row13_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 14段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row14">メールアドレス</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row14" name="t3_1_row14" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 15段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row15">地区</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-2 mt-1">
                                            <label id="t3_1_row15" name="t3_1_row15" class="text-gray-600 font-light">xxxxx</label>
                                        </div>
                                        <div class="col-start-5 col-end-13 md:col-start-5 md:col-end-7 p-1">
                                            <button type="button" id="t3_1_row15_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                                地区検索
                                            </button>
                                        </div>

                                        <!-- 16段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row16">管轄自治体</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-2 mt-1">
                                            <label id="t3_1_row16" name="t3_1_row16" class="text-gray-600 font-light">xxxxx</label>
                                        </div>
                                        <div class="col-start-5 col-end-13 md:col-start-5 md:col-end-7 p-1">
                                            <button type="button" id="t3_1_row16_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                                管轄自治体検索
                                            </button>
                                        </div>

                                        <!-- 17段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_1_row17">管轄警察署</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_1_row17" name="t3_1_row17" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 建物情報 -->
                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">建物情報</div>

                                    <div class="grid grid-cols-12 m-4">
                                        <!-- 1段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_2_row1">外観-画像</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="file" id="t3_2_row1" name="t3_2_row1" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded">
                                            <div id="t3_2_row1_preview"></div>
                                        </div>

                                        <!-- 2段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_2_row2">備考</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-10 mt-1">
                                            <input type="text" id="t3_2_row2" name="t3_2_row2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 3段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_2_row3">現場規模</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_2_row3" name="t3_2_row3" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">戸</option>
                                                <option value="2">棟</option>
                                            </select>
                                        </div>

                                        <!-- 4段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_2_row4_1">床面積</label>
                                        </div>
                                        <div class="col-span-7 md:col-span-2 mt-1">
                                            <input type="text" id="t3_2_row4_1" name="t3_2_row4_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-span-1 md:col-span-2 mt-5">㎡</div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_2_row4_2">延べ床面積</label>
                                        </div>
                                        <div class="col-span-7 md:col-span-2 mt-1">
                                            <input type="text" id="t3_2_row4_2" name="t3_2_row4_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-span-1 md:col-span-2 mt-5">㎡</div>

                                        <!-- 5段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_2_row5_1">地上階数</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_2_row5_1" name="t3_2_row5_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_2_row5_2">地下階数</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_2_row5_2" name="t3_2_row5_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 6段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_2_row6_1">エレベーター使用可否</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_2_row6_1" name="t3_2_row6_1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">可</option>
                                                <option value="2">不可または無</option>
                                            </select>
                                        </div>

                                        <!-- 7段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_2_row7_1">エレベーター種別</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_2_row7_1" name="t3_2_row7_1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">貨物用</option>
                                                <option value="2">乗用</option>
                                            </select>
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_2_row7_2">エレベーター間口</label>
                                        </div>
                                        <div class="col-span-7 md:col-span-2 mt-1">
                                            <input type="text" id="t3_2_row7_2" name="t3_2_row7_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-span-1 md:col-span-2 mt-5">㎝</div>
                                    </div>
                                </div>

                                <!-- 施錠情報 -->
                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">施錠情報</div>

                                    <div class="grid grid-cols-12 m-4">
                                        <!-- 1段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_3_row1">施錠有無</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_3_row1" name="t3_3_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">無</option>
                                                <option value="2">有</option>
                                            </select>
                                        </div>

                                        <!-- 2段目 -->
                                        <div class="col-start-1 col-end-13 md:col-end-4 mt-4">
                                            <button class="w-full px-2 py-1 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500">施錠箇所登録</button>
                                        </div>

                                        <!-- 3段目 -->
                                        <div class="col-span-12 mt-2">
                                            <table class="data_tables stripe row-border table-auto text-sm text-left border border-gray-900">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 40%;">施錠箇所</th>
                                                        <th style="width: 15%;">鍵の種類</th>
                                                        <th style="width: 15%;">鍵の所在</th>
                                                        <th style="width: 15%;">貸与日</th>
                                                        <th style="width: 15%;">備考</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                    </tr>
                                                    <tr>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                    </tr>
                                                    <tr>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                    </tr>
                                                    <tr>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                        <td>〇〇〇〇〇</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- 駐車場 -->
                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">駐車場</div>

                                    <div class="grid grid-cols-12 m-4">
                                        <!-- 1段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_4_row1">駐車場有無</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_4_row1" name="t3_4_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">無</option>
                                                <option value="2">有</option>
                                            </select>
                                        </div>

                                        <!-- 2段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_4_row2_1">駐車場位置</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_4_row2_1" name="t3_4_row2_1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">地上</option>
                                                <option value="2">地下</option>
                                            </select>
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_4_row2_2">駐車場階数</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_4_row2_2" name="t3_4_row2_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 3段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_4_row3">駐車場種別</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_4_row3" name="t3_4_row3" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">平面(屋根無)</option>
                                                <option value="2">平面(屋根有)</option>
                                                <option value="3">立体(自走式)</option>
                                                <option value="4">立体(機械式)</option>
                                            </select>
                                        </div>

                                        <!-- 4段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_4_row4">駐車場-画像</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="file" id="t3_4_row4" name="t3_4_row4" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded">
                                        </div>

                                        <!-- 5段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_4_row5">備考</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-10 mt-1">
                                            <input type="text" id="t3_4_row5" name="t3_4_row5" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 6段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_4_row6_1">駐車制限-総重量</label>
                                        </div>
                                        <div class="col-span-7 md:col-span-2 mt-1">
                                            <input type="text" id="t3_4_row6_1" name="t3_4_row6_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-span-1 md:col-span-2 mt-5">kg</div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_4_row6_2">駐車制限-全長</label>
                                        </div>
                                        <div class="col-span-7 md:col-span-2 mt-1">
                                            <input type="text" id="t3_4_row6_2" name="t3_4_row6_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-span-1 md:col-span-2 mt-5">m</div>

                                        <!-- 7段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_4_row7_1">駐車制限-全幅</label>
                                        </div>
                                        <div class="col-span-7 md:col-span-2 mt-1">
                                            <input type="text" id="t3_4_row7_1" name="t3_4_row7_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-span-1 md:col-span-2 mt-5">m</div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_4_row7_2">駐車制限-全高</label>
                                        </div>
                                        <div class="col-span-7 md:col-span-2 mt-1">
                                            <input type="text" id="t3_4_row7_2" name="t3_4_row7_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-span-1 md:col-span-2 mt-5">m</div>
                                    </div>
                                </div>

                                <!-- 廃棄場所 -->
                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">廃棄場所</div>

                                    <div class="grid grid-cols-12 m-4">
                                        <!-- 1段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_5_row1">集積所有無</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_5_row1" name="t3_5_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">無（路上）</option>
                                                <option value="2">有（共用ごみ庫）</option>
                                                <option value="3">有（専用ごみ庫）</option>
                                            </select>
                                        </div>

                                        <!-- 2段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_5_row2_1">廃棄位置</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_5_row2_1" name="t3_5_row2_1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">車道接面</option>
                                                <option value="2">車道非接面</option>
                                            </select>
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_5_row2_2">容器有無</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_5_row2_2" name="t3_5_row2_2" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">無</option>
                                                <option value="2">有（記名有）</option>
                                                <option value="3">有（記名無）</option>
                                            </select>
                                        </div>

                                        <!-- 3段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_5_row3">廃棄場所-画像</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="file" id="t3_5_row3" name="t3_5_row3" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded">
                                        </div>

                                        <!-- 4段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_5_row4">備考</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-10 mt-1">
                                            <input type="text" id="t3_5_row4" name="t3_5_row4" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                    </div>
                                </div>

                                <!-- 荷捌場 -->
                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">荷捌場</div>

                                    <div class="grid grid-cols-12 m-4">
                                        <!-- 1段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_6_row1">荷捌場有無</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_6_row1" name="t3_6_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">無</option>
                                                <option value="2">有</option>
                                            </select>
                                        </div>

                                        <!-- 2段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_6_row2_1">荷捌場位置</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_6_row2_1" name="t3_6_row2_1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">地上</option>
                                                <option value="2">地下</option>
                                            </select>
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_6_row2_2">荷捌場階数</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t3_6_row2_2" name="t3_6_row2_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 3段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_6_row3">荷捌場-画像</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="file" id="t3_6_row3" name="t3_6_row3" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded">
                                        </div>

                                        <!-- 4段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_6_row4">備考</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-10 mt-1">
                                            <input type="text" id="t3_6_row4" name="t3_6_row4" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                    </div>
                                </div>

                                <!-- 周辺道路事情 -->
                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">周辺道路事情</div>

                                    <div class="grid grid-cols-12 m-4">
                                        <!-- 1段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_7_row1">通行規制有無</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t3_7_row1" name="t3_7_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">無</option>
                                                <option value="2">有</option>
                                            </select>
                                        </div>

                                        <!-- 2段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_7_row2_1">通行規制-車体総重量</label>
                                        </div>
                                        <div class="col-span-7 md:col-span-2 mt-1">
                                            <input type="text" id="t3_7_row2_1" name="t3_7_row2_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-span-1 md:col-span-2 mt-5">kg</div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_7_row2_2">通行規制-全長</label>
                                        </div>
                                        <div class="col-span-7 md:col-span-2 mt-1">
                                            <input type="text" id="t3_7_row2_2" name="t3_7_row2_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-span-1 md:col-span-2 mt-5">m</div>

                                        <!-- 3段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_7_row3_1">通行規制-全幅</label>
                                        </div>
                                        <div class="col-span-7 md:col-span-2 mt-1">
                                            <input type="text" id="t3_7_row3_1" name="t3_7_row3_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-span-1 md:col-span-2 mt-5">m</div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t3_7_row3_2">通行規制-全高</label>
                                        </div>
                                        <div class="col-span-7 md:col-span-2 mt-1">
                                            <input type="text" id="t3_7_row3_2" name="t3_7_row3_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-span-1 md:col-span-2 mt-5">m</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 案件情報タブ -->
                        <div class="hidden" id="tab-4">
                            <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

                                <!-- 基本情報 -->
                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">基本情報</div>

                                    <div class="grid grid-cols-12 m-4">
                                        <!-- 1段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row1">案件種別</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t4_1_row1" name="t4_1_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">定期</option>
                                                <option value="2">日付指定</option>
                                                <option value="3">持込定期（処分のみ）</option>
                                                <option value="4">小口粗大</option>
                                                <option value="5">臨時</option>
                                                <option value="6">持込粗大（処分のみ）</option>
                                                <option value="7">溜まり次第</option>
                                            </select>
                                        </div>

                                        <!-- 2段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row2">諸口区分</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t4_1_row2" name="t4_1_row2" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">通常</option>
                                                <option value="2">諸口</option>
                                            </select>
                                        </div>

                                        <!-- 3段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row3">諸口親案件コード</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-2 mt-1">
                                            <label id="t4_1_row3" name="t4_1_row3" class="text-gray-600 font-light">xxxxx</label>
                                        </div>
                                        <div class="col-start-5 col-end-13 md:col-start-5 md:col-end-7 p-1">
                                            <button type="button" id="t4_1_row3_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                                案件検索
                                            </button>
                                        </div>

                                        <!-- 4段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row4">自社担当者</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t4_1_row4" name="t4_1_row4" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">テスト１</option>
                                                <option value="2">テスト２</option>
                                            </select>
                                        </div>

                                        <!-- 5段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row5">配車担当者</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t4_1_row5" name="t4_1_row5" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">テスト１</option>
                                                <option value="2">テスト２</option>
                                            </select>
                                        </div>

                                        <!-- 6段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row6">見積承認担当者</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t4_1_row6" name="t4_1_row6" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">テスト１</option>
                                                <option value="2">テスト２</option>
                                            </select>
                                        </div>

                                        <!-- 7段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row7">時間帯</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t4_1_row7" name="t4_1_row7" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">午前中</option>
                                                <option value="2">午後</option>
                                                <option value="3">夕方</option>
                                                <option value="4">その他</option>
                                            </select>
                                        </div>

                                        <!-- 8段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row8_1">開始日指定</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="radio" id="t4_1_row8_1" name="t4_1_row8_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                            <label class="leading-10 mr-3" for="t4_1_row8_1">有</label>
                                            <input type="radio" id="t4_1_row8_1" name="t4_1_row8_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                            <label class="leading-10 mr-3" for="t4_1_row8_1">無</label>
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row8_2">開始日</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type='date' id="t4_1_row8_2" name="t4_1_row8_2" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                        </div>

                                    <!-- 9段目 -->
                                    <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row9_1">終了日指定</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="radio" id="t4_1_row9_1" name="t4_1_row9_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                            <label class="leading-10 mr-3" for="t4_1_row9_1">有</label>
                                            <input type="radio" id="t4_1_row9_1" name="t4_1_row9_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                            <label class="leading-10 mr-3" for="t4_1_row9_1">無</label>
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row9_2">終了日</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type='date' id="t4_1_row9_2" name="t4_1_row9_2" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                        </div>

                                        <!-- 10段目 -->
                                    <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row10_1">時間指定-開始</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="radio" id="t4_1_row10_1" name="t4_1_row10_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                            <label class="leading-10 mr-3" for="t4_1_row10_1">有</label>
                                            <input type="radio" id="t4_1_row10_1" name="t4_1_rowt4_1_row10_19_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                            <label class="leading-10 mr-3" for="t4_1_row10_1">無</label>
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row10_2">開始時刻</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type='time' id="t4_1_row10_2" name="t4_1_row10_2" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                        </div>

                                        <!-- 11段目 -->
                                    <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row11_1">時間指定-終了</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="radio" id="t4_1_row11_1" name="t4_1_row11_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                            <label class="leading-10 mr-3" for="t4_1_row11_1">有</label>
                                            <input type="radio" id="t4_1_row11_1" name="t4_1_row11_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                            <label class="leading-10 mr-3" for="t4_1_row11_1">無</label>
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row11_2">終了時刻</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type='time' id="t4_1_row11_2" name="t4_1_row11_2" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                        </div>

                                        <!-- 12段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row12_1">前業者有無</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="radio" id="t4_1_row12_1" name="t4_1_row12_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                            <label class="leading-10 mr-3" for="t4_1_row12_1">有</label>
                                            <input type="radio" id="t4_1_row12_1" name="t4_1_row12_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                            <label class="leading-10 mr-3" for="t4_1_row12_1">無</label>
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row12_2">前業者</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type='text' id="t4_1_row12_2" name="t4_1_row12_2" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                        </div>

                                        <!-- 13段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row13">収集形態-契約前</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t4_1_row13" name="t4_1_row13" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">テスト１</option>
                                                <option value="2">テスト２</option>
                                            </select>
                                        </div>

                                        <!-- 14段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row14">数量の確定者</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <select id="t4_1_row14" name="t4_1_row14" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                <option value="1">テスト１</option>
                                                <option value="2">テスト２</option>
                                            </select>
                                        </div>

                                        <!-- 15段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_1_row15">備考</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-10 mt-1">
                                            <input type="text" id="t4_1_row15" name="t4_1_row15" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                    </div>
                                </div>

                                <!-- 廃棄物概要 -->
                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">廃棄物概要</div>

                                    <div class="grid grid-cols-12 m-4">
                                        <!-- 1段目 -->
                                        <div class="col-span-12 md:col-span-10 mt-1">
                                            <h2 class="w-full bg-purple-400 text-lg text-white">　定期　</h2>
                                        </div>

                                        <!-- 2段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_2_row2_1">可燃ごみ</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <label id="t4_2_row2_1" name="t4_2_row2_1" class="text-gray-600 font-light">xxxxx</label>
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_2_row2_2">可燃ごみ-予定排出量（45L袋／週）</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <label id="t4_2_row2_2" name="t4_2_row2_2" class="text-gray-600 font-light">xxxxx</label>
                                        </div>

                                        <!-- 3段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_2_row3_1">不燃ごみ</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <label id="t4_2_row3_1" name="t4_2_row3_1" class="text-gray-600 font-light">xxxxx</label>
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_2_row3_2">不燃ごみ-予定排出量（45L袋／週）</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <label id="t4_2_row3_2" name="t4_2_row3_2" class="text-gray-600 font-light">xxxxx</label>
                                        </div>

                                        <!-- 4段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_2_row4_1">資源ごみ</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <label id="t4_2_row4_1" name="t4_2_row4_1" class="text-gray-600 font-light">xxxxx</label>
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_2_row4_2">資源ごみ-予定排出量（45L袋／週）</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <label id="t4_2_row4_2" name="t4_2_row4_2" class="text-gray-600 font-light">xxxxx</label>
                                        </div>

                                        <!-- 5段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_2_row5">資源ごみ-種類</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <label id="t4_2_row5" name="t4_2_row5" class="text-gray-600 font-light">xxxxx</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 廃棄物情報 -->
                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">廃棄物情報</div>

                                    <div class="grid grid-cols-12 m-4">
                                        <!-- 1段目 -->
                                        <div class="col-start-1 col-end-13 md:col-end-4 mt-4">
                                            <button class="w-full px-2 py-1 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500">廃棄物情報選択</button>
                                        </div>

                                        <!-- 2段目 -->
                                        <div class="col-span-12 mt-2">
                                            <table class="data_tables stripe row-border table-auto text-sm text-left border border-gray-900">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10%;">品目</th>
                                                        <th style="width: 10%;">形状</th>
                                                        <th style="width: 10%;">廃棄物の数量</th>
                                                        <th style="width: 10%;">廃棄物の単位</th>
                                                        <th style="width: 10%;">有害物質</th>
                                                        <th style="width: 10%;">放射性物質</th>
                                                        <th style="width: 10%;">放射性物質検出区分</th>
                                                        <th style="width: 10%;">放射線値</th>
                                                        <th style="width: 10%;">放射線値単位</th>
                                                        <th style="width: 10%;">処分場</th>
                                                        <th style="width: 10%;">備考</th>
                                                        <th style="width: 10%;">WDS画像</th>
                                                        <th style="width: 10%;">削除</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>〇〇〇〇〇</td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td><input type="file" id="" name="" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded"></td>
                                                        <td><button type="button" id="" class="w-full bg-red-500 text-gray-100 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">削除</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>〇〇〇〇〇</td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td><input type="file" id="" name="" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded"></td>
                                                        <td><button type="button" id="" class="w-full bg-red-500 text-gray-100 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">削除</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>〇〇〇〇〇</td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td><input type="file" id="" name="" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded"></td>
                                                        <td><button type="button" id="" class="w-full bg-red-500 text-gray-100 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">削除</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- 商品情報 -->
                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">商品情報</div>

                                    <div class="grid grid-cols-12 m-4">
                                        <!-- 1段目 -->
                                        <div class="col-start-1 col-end-13 md:col-end-4 mt-4">
                                            <button class="w-full px-2 py-1 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500">商品情報選択</button>
                                        </div>

                                        <!-- 2段目 -->
                                        <div class="col-span-12 mt-2">
                                            <table class="data_tables stripe row-border table-auto text-sm text-left border border-gray-900">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10%;">品名</th>
                                                        <th style="width: 10%;">荷姿</th>
                                                        <th style="width: 10%;">荷姿の数量</th>
                                                        <th style="width: 10%;">荷姿の単位</th>
                                                        <th style="width: 10%;">品目</th>
                                                        <th style="width: 10%;">スケジュール</th>
                                                        <th style="width: 10%;">運搬原単価</th>
                                                        <th style="width: 10%;">運搬原価合計</th>
                                                        <th style="width: 10%;">単価</th>
                                                        <th style="width: 10%;">金額</th>
                                                        <th style="width: 10%;">削除</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>商品〇〇〇</td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><button type="button" id="" class="w-full bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">品目</button></td>
                                                        <td><button type="button" id="" class="w-full bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">スケジュール</button></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td>xxxxx</td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td>xxxxx</td>
                                                        <td><button type="button" id="" class="w-full bg-red-500 text-gray-100 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">削除</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>商品〇〇〇</td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><button type="button" id="" class="w-full bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">品目</button></td>
                                                        <td><button type="button" id="" class="w-full bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">スケジュール</button></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td>xxxxx</td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td>xxxxx</td>
                                                        <td><button type="button" id="" class="w-full bg-red-500 text-gray-100 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">削除</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>商品〇〇〇</td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td><button type="button" id="" class="w-full bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">品目</button></td>
                                                        <td><button type="button" id="" class="w-full bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">スケジュール</button></td>
                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                        <td>xxxxx</td>
                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                        <td>xxxxx</td>
                                                        <td><button type="button" id="" class="w-full bg-red-500 text-gray-100 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">削除</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- 請求先 -->
                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">請求先</div>

                                    <div class="grid grid-cols-12 m-4">
                                        <!-- 1段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_5_row1">顧客名</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type='text' id="t4_5_row1" name="t4_5_row1" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                        </div>

                                        <!-- 2段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_5_row2">郵便番号</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-2 mt-1">
                                            <input type="text" id="t4_5_row2" name="t4_5_row2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-5 col-end-13 md:col-start-5 md:col-end-7 p-1">
                                            <button type="button" id="t4_5_row2_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                                郵便番号検索
                                            </button>
                                        </div>

                                        <!-- 3段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_5_row3_1">都道府県</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t4_5_row3_1" name="t4_5_row3_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_5_row3_2">市区町村</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t4_5_row3_2" name="t4_5_row3_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 4段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_5_row4_1">町域</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t4_5_row4_1" name="t4_5_row4_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_5_row4_2">町域以下</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t4_5_row4_2" name="t4_5_row4_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 5段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_5_row5_1">建物名</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t4_5_row5_1" name="t4_5_row5_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_5_row5_2">階数・号数</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t4_5_row5_2" name="t4_5_row5_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 6段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_5_row6_1">電話番号</label>
                                            <span class="text-red-500">*</span>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t4_5_row6_1" name="t4_5_row6_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>
                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_5_row6_2">担当者氏名</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type="text" id="t4_5_row6_2" name="t4_5_row6_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                        </div>

                                        <!-- 7段目 -->
                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                            <label class="leading-10" for="t4_5_row7">メールアドレス</label>
                                        </div>
                                        <div class="col-span-8 md:col-span-4 mt-1">
                                            <input type='text' id="t4_5_row7" name="t4_5_row7" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 見積情報タブ -->
                        <div class="hidden" id="tab-5">

                            <div class="flex" id="tabs2">
                                <div class="w-full">
                                    <!-- Tabs2 -->
                                    <ul class="list-reset flex border-b">
                                        <li class="-mb-px mr-1">
                                            <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold" onclick="changeAtiveTab2(event,'tab2-1')">No3（2021/08/03）</a>
                                        </li>
                                        <li class="-mb-px mr-1">
                                            <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab2(event,'tab2-2')">No2（2021/08/02）</a>
                                        </li>
                                        <li class="-mb-px mr-1">
                                            <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab2(event,'tab2-3')">No1（2021/08/01）</a>
                                        </li>
                                    </ul>

                                    <!-- Tab Contents -->
                                    <div class="tab-content2 tab-space m-3">

                                        <!-- No3（2021/08/03）タブ -->
                                        <div class="block" id="tab2-1">
                                            <div class="grid grid-cols-12 gap-2 mx-2 mb-3">
                                                <!-- 基本情報 -->
                                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">基本情報</div>

                                                    <div class="grid grid-cols-12 m-4">
                                                        <!-- 1段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row1">案件種別</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <select id="t4_1_row1" name="t4_1_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                                <option value="1">定期</option>
                                                                <option value="2">日付指定</option>
                                                                <option value="3">持込定期（処分のみ）</option>
                                                                <option value="4">小口粗大</option>
                                                                <option value="5">臨時</option>
                                                                <option value="6">持込粗大（処分のみ）</option>
                                                                <option value="7">溜まり次第</option>
                                                            </select>
                                                        </div>

                                                        <!-- 2段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row2">諸口区分</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <select id="t4_1_row2" name="t4_1_row2" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                                <option value="1">通常</option>
                                                                <option value="2">諸口</option>
                                                            </select>
                                                        </div>

                                                        <!-- 3段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row3">諸口親案件コード</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-2 mt-1">
                                                            <label id="t4_1_row3" name="t4_1_row3" class="text-gray-600 font-light">xxxxx</label>
                                                        </div>
                                                        <div class="col-start-5 col-end-13 md:col-start-5 md:col-end-7 p-1">
                                                            <button type="button" id="t4_1_row3_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                                                案件検索
                                                            </button>
                                                        </div>

                                                        <!-- 4段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row4">自社担当者</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <select id="t4_1_row4" name="t4_1_row4" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                                <option value="1">テスト１</option>
                                                                <option value="2">テスト２</option>
                                                            </select>
                                                        </div>

                                                        <!-- 5段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row5">配車担当者</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <select id="t4_1_row5" name="t4_1_row5" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                                <option value="1">テスト１</option>
                                                                <option value="2">テスト２</option>
                                                            </select>
                                                        </div>

                                                        <!-- 6段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row6">見積承認担当者</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <select id="t4_1_row6" name="t4_1_row6" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                                <option value="1">テスト１</option>
                                                                <option value="2">テスト２</option>
                                                            </select>
                                                        </div>

                                                        <!-- 7段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row7">時間帯</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <select id="t4_1_row7" name="t4_1_row7" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                                <option value="1">午前中</option>
                                                                <option value="2">午後</option>
                                                                <option value="3">夕方</option>
                                                                <option value="4">その他</option>
                                                            </select>
                                                        </div>

                                                        <!-- 8段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row8_1">開始日指定</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="radio" id="t4_1_row8_1" name="t4_1_row8_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                                            <label class="leading-10 mr-3" for="t4_1_row8_1">有</label>
                                                            <input type="radio" id="t4_1_row8_1" name="t4_1_row8_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                                            <label class="leading-10 mr-3" for="t4_1_row8_1">無</label>
                                                        </div>
                                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row8_2">開始日</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type='date' id="t4_1_row8_2" name="t4_1_row8_2" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                                        </div>

                                                    <!-- 9段目 -->
                                                    <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row9_1">終了日指定</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="radio" id="t4_1_row9_1" name="t4_1_row9_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                                            <label class="leading-10 mr-3" for="t4_1_row9_1">有</label>
                                                            <input type="radio" id="t4_1_row9_1" name="t4_1_row9_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                                            <label class="leading-10 mr-3" for="t4_1_row9_1">無</label>
                                                        </div>
                                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row9_2">終了日</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type='date' id="t4_1_row9_2" name="t4_1_row9_2" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                                        </div>

                                                        <!-- 10段目 -->
                                                    <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row10_1">時間指定-開始</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="radio" id="t4_1_row10_1" name="t4_1_row10_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                                            <label class="leading-10 mr-3" for="t4_1_row10_1">有</label>
                                                            <input type="radio" id="t4_1_row10_1" name="t4_1_rowt4_1_row10_19_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                                            <label class="leading-10 mr-3" for="t4_1_row10_1">無</label>
                                                        </div>
                                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row10_2">開始時刻</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type='time' id="t4_1_row10_2" name="t4_1_row10_2" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                                        </div>

                                                        <!-- 11段目 -->
                                                    <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row11_1">時間指定-終了</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="radio" id="t4_1_row11_1" name="t4_1_row11_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                                            <label class="leading-10 mr-3" for="t4_1_row11_1">有</label>
                                                            <input type="radio" id="t4_1_row11_1" name="t4_1_row11_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                                            <label class="leading-10 mr-3" for="t4_1_row11_1">無</label>
                                                        </div>
                                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row11_2">終了時刻</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type='time' id="t4_1_row11_2" name="t4_1_row11_2" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                                        </div>

                                                        <!-- 12段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row12_1">前業者有無</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="radio" id="t4_1_row12_1" name="t4_1_row12_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                                            <label class="leading-10 mr-3" for="t4_1_row12_1">有</label>
                                                            <input type="radio" id="t4_1_row12_1" name="t4_1_row12_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                                                            <label class="leading-10 mr-3" for="t4_1_row12_1">無</label>
                                                        </div>
                                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row12_2">前業者</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type='text' id="t4_1_row12_2" name="t4_1_row12_2" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                                        </div>

                                                        <!-- 13段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row13">収集形態-契約前</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <select id="t4_1_row13" name="t4_1_row13" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                                <option value="1">テスト１</option>
                                                                <option value="2">テスト２</option>
                                                            </select>
                                                        </div>

                                                        <!-- 14段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row14">数量の確定者</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <select id="t4_1_row14" name="t4_1_row14" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                                <option value="1">テスト１</option>
                                                                <option value="2">テスト２</option>
                                                            </select>
                                                        </div>

                                                        <!-- 15段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row15">備考</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-10 mt-1">
                                                            <input type="text" id="t4_1_row15" name="t4_1_row15" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 廃棄物概要 -->
                                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">廃棄物概要</div>

                                                    <div class="grid grid-cols-12 m-4">
                                                        <!-- 1段目 -->
                                                        <div class="col-span-12 md:col-span-10 mt-1">
                                                            <h2 class="w-full bg-purple-400 text-lg text-white">　定期　</h2>
                                                        </div>

                                                        <!-- 2段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_2_row2_1">可燃ごみ</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <label id="t4_2_row2_1" name="t4_2_row2_1" class="text-gray-600 font-light">xxxxx</label>
                                                        </div>
                                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_2_row2_2">可燃ごみ-予定排出量（45L袋／週）</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <label id="t4_2_row2_2" name="t4_2_row2_2" class="text-gray-600 font-light">xxxxx</label>
                                                        </div>

                                                        <!-- 3段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_2_row3_1">不燃ごみ</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <label id="t4_2_row3_1" name="t4_2_row3_1" class="text-gray-600 font-light">xxxxx</label>
                                                        </div>
                                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_2_row3_2">不燃ごみ-予定排出量（45L袋／週）</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <label id="t4_2_row3_2" name="t4_2_row3_2" class="text-gray-600 font-light">xxxxx</label>
                                                        </div>

                                                        <!-- 4段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_2_row4_1">資源ごみ</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <label id="t4_2_row4_1" name="t4_2_row4_1" class="text-gray-600 font-light">xxxxx</label>
                                                        </div>
                                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_2_row4_2">資源ごみ-予定排出量（45L袋／週）</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <label id="t4_2_row4_2" name="t4_2_row4_2" class="text-gray-600 font-light">xxxxx</label>
                                                        </div>

                                                        <!-- 5段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_2_row5">資源ごみ-種類</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <label id="t4_2_row5" name="t4_2_row5" class="text-gray-600 font-light">xxxxx</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 廃棄物情報 -->
                                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">廃棄物情報</div>

                                                    <div class="grid grid-cols-12 m-4">
                                                        <!-- 1段目 -->
                                                        <div class="col-start-1 col-end-13 md:col-end-4 mt-4">
                                                            <button class="w-full px-2 py-1 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500">廃棄物情報選択</button>
                                                        </div>

                                                        <!-- 2段目 -->
                                                        <div class="col-span-12 mt-2">
                                                            <table class="data_tables stripe row-border table-auto text-sm text-left border border-gray-900">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 10%;">品目</th>
                                                                        <th style="width: 10%;">形状</th>
                                                                        <th style="width: 10%;">廃棄物の数量</th>
                                                                        <th style="width: 10%;">廃棄物の単位</th>
                                                                        <th style="width: 10%;">有害物質</th>
                                                                        <th style="width: 10%;">放射性物質</th>
                                                                        <th style="width: 10%;">放射性物質検出区分</th>
                                                                        <th style="width: 10%;">放射線値</th>
                                                                        <th style="width: 10%;">放射線値単位</th>
                                                                        <th style="width: 10%;">処分場</th>
                                                                        <th style="width: 10%;">備考</th>
                                                                        <th style="width: 10%;">WDS画像</th>
                                                                        <th style="width: 10%;">削除</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>〇〇〇〇〇</td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td><input type="file" id="" name="" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded"></td>
                                                                        <td><button type="button" id="" class="w-full bg-red-500 text-gray-100 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">削除</button></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>〇〇〇〇〇</td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td><input type="file" id="" name="" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded"></td>
                                                                        <td><button type="button" id="" class="w-full bg-red-500 text-gray-100 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">削除</button></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>〇〇〇〇〇</td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td><input type="file" id="" name="" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded"></td>
                                                                        <td><button type="button" id="" class="w-full bg-red-500 text-gray-100 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">削除</button></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 商品情報 -->
                                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">商品情報</div>

                                                    <div class="grid grid-cols-12 m-4">
                                                        <!-- 1段目 -->
                                                        <div class="col-start-1 col-end-13 md:col-end-4 mt-4">
                                                            <button class="w-full px-2 py-1 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500">商品情報選択</button>
                                                        </div>

                                                        <!-- 2段目 -->
                                                        <div class="col-span-12 mt-2">
                                                            <table class="data_tables stripe row-border table-auto text-sm text-left border border-gray-900">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 10%;">品名</th>
                                                                        <th style="width: 10%;">荷姿</th>
                                                                        <th style="width: 10%;">荷姿の数量</th>
                                                                        <th style="width: 10%;">荷姿の単位</th>
                                                                        <th style="width: 10%;">品目</th>
                                                                        <th style="width: 10%;">スケジュール</th>
                                                                        <th style="width: 10%;">運搬原単価</th>
                                                                        <th style="width: 10%;">運搬原価合計</th>
                                                                        <th style="width: 10%;">単価</th>
                                                                        <th style="width: 10%;">金額</th>
                                                                        <th style="width: 10%;">削除</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>商品〇〇〇</td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><button type="button" id="" class="w-full bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">品目</button></td>
                                                                        <td><button type="button" id="" class="w-full bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">スケジュール</button></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td>xxxxx</td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td>xxxxx</td>
                                                                        <td><button type="button" id="" class="w-full bg-red-500 text-gray-100 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">削除</button></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>商品〇〇〇</td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><button type="button" id="" class="w-full bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">品目</button></td>
                                                                        <td><button type="button" id="" class="w-full bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">スケジュール</button></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td>xxxxx</td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td>xxxxx</td>
                                                                        <td><button type="button" id="" class="w-full bg-red-500 text-gray-100 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">削除</button></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>商品〇〇〇</td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td><button type="button" id="" class="w-full bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">品目</button></td>
                                                                        <td><button type="button" id="" class="w-full bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">スケジュール</button></td>
                                                                        <td><select id="" name="" class="w-full border rounded bg-white px-3 py-2 outline-none"></select></td>
                                                                        <td>xxxxx</td>
                                                                        <td><input type="text" id="" name="" value="" class="w-full border rounded focus:outline-none focus:border-green-500"></td>
                                                                        <td>xxxxx</td>
                                                                        <td><button type="button" id="" class="w-full bg-red-500 text-gray-100 rounded hover:bg-red-400 px-4 py-2 focus:outline-none">削除</button></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 請求先 -->
                                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">請求先</div>

                                                    <div class="grid grid-cols-12 m-4">
                                                        <!-- 1段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_5_row1">顧客名</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type='text' id="t4_5_row1" name="t4_5_row1" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                                        </div>

                                                        <!-- 2段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_5_row2">郵便番号</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-2 mt-1">
                                                            <input type="text" id="t4_5_row2" name="t4_5_row2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                                        </div>
                                                        <div class="col-start-5 col-end-13 md:col-start-5 md:col-end-7 p-1">
                                                            <button type="button" id="t4_5_row2_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                                                郵便番号検索
                                                            </button>
                                                        </div>

                                                        <!-- 3段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_5_row3_1">都道府県</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="text" id="t4_5_row3_1" name="t4_5_row3_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                                        </div>
                                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_5_row3_2">市区町村</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="text" id="t4_5_row3_2" name="t4_5_row3_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                                        </div>

                                                        <!-- 4段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_5_row4_1">町域</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="text" id="t4_5_row4_1" name="t4_5_row4_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                                        </div>
                                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_5_row4_2">町域以下</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="text" id="t4_5_row4_2" name="t4_5_row4_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                                        </div>

                                                        <!-- 5段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_5_row5_1">建物名</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="text" id="t4_5_row5_1" name="t4_5_row5_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                                        </div>
                                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_5_row5_2">階数・号数</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="text" id="t4_5_row5_2" name="t4_5_row5_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                                        </div>

                                                        <!-- 6段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_5_row6_1">電話番号</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="text" id="t4_5_row6_1" name="t4_5_row6_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                                        </div>
                                                        <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_5_row6_2">担当者氏名</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type="text" id="t4_5_row6_2" name="t4_5_row6_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                                                        </div>

                                                        <!-- 7段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_5_row7">メールアドレス</label>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <input type='text' id="t4_5_row7" name="t4_5_row7" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- No2（2021/08/02）タブ -->
                                        <div class="hidden" id="tab2-2">
                                            <div class="grid grid-cols-12 gap-2 mx-2 mb-3">
                                                <!-- 基本情報 -->
                                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">基本情報</div>

                                                    <div class="grid grid-cols-12 m-4">
                                                        <!-- 1段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row1">案件種別</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <select id="t4_1_row1" name="t4_1_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                                <option value="1">定期</option>
                                                                <option value="2">日付指定</option>
                                                                <option value="3">持込定期（処分のみ）</option>
                                                                <option value="4">小口粗大</option>
                                                                <option value="5">臨時</option>
                                                                <option value="6">持込粗大（処分のみ）</option>
                                                                <option value="7">溜まり次第</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- No1（2021/08/01）タブ -->
                                        <div class="hidden" id="tab2-3">
                                            <div class="grid grid-cols-12 gap-2 mx-2 mb-3">
                                                <!-- 基本情報 -->
                                                <div id="card_regular" class="col-span-12 border border-gray-900 mt-6">

                                                    <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">基本情報</div>

                                                    <div class="grid grid-cols-12 m-4">
                                                        <!-- 1段目 -->
                                                        <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                                            <label class="leading-10" for="t4_1_row1">案件種別</label>
                                                            <span class="text-red-500">*</span>
                                                        </div>
                                                        <div class="col-span-8 md:col-span-4 mt-1">
                                                            <select id="t4_1_row1" name="t4_1_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                                                <option value="1">定期</option>
                                                                <option value="2">日付指定</option>
                                                                <option value="3">持込定期（処分のみ）</option>
                                                                <option value="4">小口粗大</option>
                                                                <option value="5">臨時</option>
                                                                <option value="6">持込粗大（処分のみ）</option>
                                                                <option value="7">溜まり次第</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 契約書作成タブ -->
                        <div class="hidden" id="tab-6">
                            <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

                                <!-- ボタンエリア -->
                                <div class="col-start-1 col-end-12 md:col-start-1 md:col-end-3 p-1">
                                    <button type="button" id="" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                        契約書作成
                                    </button>
                                </div>

                                <!-- 1段目 -->
                                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                    <label class="leading-10" for="t6_row1">ファイル</label>
                                </div>
                                <div class="col-span-8 md:col-span-4 mt-1">
                                    <input type="file" id="t6_row1" name="t6_row1" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded">
                                    <div id="t6_row1_preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mt-4">
                <div class="grid grid-cols-12 gap-2 items-center">
                    <div class="col-span-2">
                        <button type="button" class="w-full px-2 py-1 bg-blue-400 text-white font-semibold rounded hover:bg-blue-500" onclick="location.href='/propositions'">キャンセル</button>
                    </div>
                    <div class="col-span-2">
                        <!-- Submitボタン -->
                        <button type="submit" class="w-full px-2 py-1 bg-red-400 text-white font-semibold rounded hover:bg-red-500">登録</button>
                    </div>
                    <div class="col-span-2">
                        <button type="button" class="w-full px-2 py-1 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500" onclick="location.href='/propositions'">案件複製</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- 隠し項目 -->
   <input type="hidden" id="customers-id" name="customers-id" value="" />      <!-- 顧客マスタid --> 

    <!-- ダイアログ -->
    <!-- 顧客選択 -->
    <div id="propositions-customersSelectDialog-form">
        @include('dialogs.customers_select')
    </div>

    <!-- deferを付ける：後から読み込ませるため -->
    <script type="text/javascript" defer>

    $(function () {
        // dialogの設定
        // 顧客選択
        propositions_customersSelectDialog = $("#propositions-customersSelectDialog-form").dialog({
            autoOpen: false,
            height: 800,
            width: 1000,
            modal: true,
            title : "顧客検索"
        });

        // 顧客検索ボタン押下時
        $("#search_customer_button").click(function () {  
            propositions_customersSelectDialog.dialog("open");
            // 検索条件の初期化
            $("#search_customer_dialog_cond_code").val('').text('');
            $("#search_customer_dialog_cond_name").val('').text('');
            $("#search_customer_dialog_cond_kana").val('').text('');
            // DataTableの初期化
            var table = $("#search_customer_dialog-data_tables").DataTable();
            table
                .clear()
                .draw();
            // 返却先を設定
            $("#search_customer_dialog_return_field_customer_code").val("#t1_customer_code");
            $("#search_customer_dialog_return_field_customer_name").val("#t1_customer_name");
            $("#search_customer_dialog_return_field_customer_abbreviation").val("#t1_customer_abbreviation");
            $("#search_customer_dialog_return_field_customer_kana").val("#t1_customer_kana");
            $("#search_customer_dialog_return_field_postal_code").val("#t1_postal_code");
            $("#search_customer_dialog_return_field_prefecture").val("#t1_prefecture");
            $("#search_customer_dialog_return_field_municipality").val("#t1_municipality");
            $("#search_customer_dialog_return_field_town_area").val("#t1_town_area");
            $("#search_customer_dialog_return_field_following_town_area").val("#t1_following_town_area");
            $("#search_customer_dialog_return_field_building_name").val("#t1_building_name");
            $("#search_customer_dialog_return_field_floor_number").val("#t1_floor_number");
            $("#search_customer_dialog_return_field_department_name").val("#t1_department_name");
            $("#search_customer_dialog_return_field_contact_name").val("#t1_contact_name");
            $("#search_customer_dialog_return_field_contact_remarks").val("#t1_contact_remarks");
            $("#search_customer_dialog_return_field_tel").val("#t1_tel");
            $("#search_customer_dialog_return_field_extension_number").val("#t1_extension_number");
            $("#search_customer_dialog_return_field_fax").val("#t1_fax");
            $("#search_customer_dialog_return_field_mobile_number").val("#t1_mobile_number");
            $("#search_customer_dialog_return_field_email_address").val("#t1_email_address");
            $("#search_customer_dialog_return_field_sales_contact_id").val("#t1_sales_contact_id");
        });

        // dataTableの設定
        $(".data_tables").dataTable({
            dom: "Bfrtip",
            responsive: false,
            searching: false,
            ordering: false,
            paging: false,
            //info: false,
            buttons: [],
            columnDefs: [
            ],
            pageLength: 50,
            language: {
                emptyTable: "検索条件に合致するデータはありません。",
                info: "",
                infoEmpty: "",
                infoFiltered: "(_MAX_ 件からの絞り込み表示)",
                infoPostFix: "",
                thousands: ",",
                lengthMenu: "1ページあたりの表示件数: _MENU_",
                loadingRecords: "ロード中",
                processing: "処理中...",
                search: "検索",
                zeroRecords: "該当するデータが見つかりませんでした。",
                paginate: {
                    first: "先頭",
                    previous: "前へ",
                    next: "次へ",
                    last: "末尾"
                },
                select: {
                    rows: {
                        _: "",
                        0: ""
                    }
                }
            },
            select: {
            style: "single"
            }
        });
    });

    // ActiveTabの切り替え
    function changeAtiveTab(event, tabID){
        let element = event.target;
        while(element.nodeName !== "A"){
            element = element.parentNode;
        }
        ulElement = element.parentNode.parentNode;
        aElements = ulElement.querySelectorAll("li > a");
        tabContents = document.getElementById("tabs").querySelectorAll(".tab-content > div");
        
        for(let i = 0 ; i < aElements.length; i++){
            aElements[i].classList.remove("border-l");
            aElements[i].classList.remove("border-t");
            aElements[i].classList.remove("border-r");
            aElements[i].classList.remove("rounded-t");
            aElements[i].classList.remove("text-blue-700");
            aElements[i].classList.add("text-blue-500");
            aElements[i].classList.add("hover:text-blue-900");
            tabContents[i].classList.add("hidden");
            tabContents[i].classList.remove("block");
        }
        element.classList.remove("text-blue-500");
        element.classList.remove("hover:text-blue-900");
        element.classList.add("border-l");
        element.classList.add("border-t");
        element.classList.add("border-r");
        element.classList.add("rounded-t");
        element.classList.add("text-blue-700");
        document.getElementById(tabID).classList.remove("hidden");
        document.getElementById(tabID).classList.add("block");
    }

    // ActiveTabの切り替え
    function changeAtiveTab2(event, tabID){
        let element = event.target;
        while(element.nodeName !== "A"){
            element = element.parentNode;
        }
        ulElement = element.parentNode.parentNode;
        aElements = ulElement.querySelectorAll("li > a");
        tabContents = document.getElementById("tabs2").querySelectorAll(".tab-content2 > div");
        
        for(let i = 0 ; i < aElements.length; i++){
            aElements[i].classList.remove("border-l");
            aElements[i].classList.remove("border-t");
            aElements[i].classList.remove("border-r");
            aElements[i].classList.remove("rounded-t");
            aElements[i].classList.remove("text-blue-700");
            aElements[i].classList.add("text-blue-500");
            aElements[i].classList.add("hover:text-blue-900");
            tabContents[i].classList.add("hidden");
            tabContents[i].classList.remove("block");
        }
        element.classList.remove("text-blue-500");
        element.classList.remove("hover:text-blue-900");
        element.classList.add("border-l");
        element.classList.add("border-t");
        element.classList.add("border-r");
        element.classList.add("rounded-t");
        element.classList.add("text-blue-700");
        document.getElementById(tabID).classList.remove("hidden");
        document.getElementById(tabID).classList.add("block");
    }

    </script>

</x-app-layout>
