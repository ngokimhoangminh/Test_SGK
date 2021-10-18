<!-- タイトル -->
<title>排出事業場登録 - {{config('const.Product.NAME')}}</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            排出事業場登録
        </h2>
    </x-slot>

    <div class="w-full mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">

        <div class="flex" id="tabs">
            <div class="w-full">
                <!-- Tabs -->
                <ul class="list-reset flex border-b">
                    <li class="-mb-px mr-1">
                        <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold" onclick="changeAtiveTab(event,'tab-1')">基本情報</a>
                    </li>
                    <li class="-mb-px mr-1">
                        <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab(event,'tab-2')">建物情報</a>
                    </li>
                    <li class="-mb-px mr-1">
                        <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab(event,'tab-3')">施錠情報</a>
                    </li>
                    <li class="-mb-px mr-1">
                        <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab(event,'tab-4')">駐車場</a>
                    </li>
                    <li class="-mb-px mr-1">
                        <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab(event,'tab-5')">廃棄場所</a>
                    </li>
                    <li class="-mb-px mr-1">
                        <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab(event,'tab-6')">荷捌場</a>
                    </li>
                    <li class="-mb-px mr-1">
                        <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-900 font-semibold" onclick="changeAtiveTab(event,'tab-7')">周辺道路事情</a>
                    </li>
                </ul>

                <!-- Tab Contents -->
                <div class="tab-content tab-space m-3">

                    <!-- 基本情報タブ -->
                    <div class="block" id="tab-1">
                        <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

                            <!-- 1段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row1">顧客</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <label id="t1_row1" name="t1_row1" class="text-gray-600 font-light">xxxxx</label>
                            </div>

                            <!-- 2段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row2">排出事業者</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <label id="t1_row2" name="t1_row2" class="text-gray-600 font-light">xxxxx</label>
                            </div>

                            <!-- 3段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row3">排出事業場コード</label>
                                <span class="text-red-500">*</span>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row3" name="t1_row3" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 4段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row4">排出事業場名称</label>
                                <span class="text-red-500">*</span>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row4" name="t1_row4" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 5段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row5">排出事業場略称</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row5" name="t1_row5" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 6段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row6">排出事業場カナ</label>
                                <span class="text-red-500">*</span>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row6" name="t1_row6" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 7段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row7">郵便番号</label>
                            </div>
                            <div class="col-span-8 md:col-span-2 mt-1">
                                <input type="text" id="t1_row7" name="t1_row7" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-start-5 col-end-13 md:col-start-5 md:col-end-7 p-1">
                                <button type="button" id="t1_row7_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                    郵便番号検索
                                </button>
                            </div>

                            <!-- 8段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row8_1">都道府県</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row8_1" name="t1_row8_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row8_2">市区町村</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row8_2" name="t1_row8_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 9段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row9_1">町域</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row9_1" name="t1_row9_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row9_2">町域以下</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row9_2" name="t1_row9_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 10段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row10_1">建物名</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row10_1" name="t1_row10_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row10_2">階数・号数</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row10_2" name="t1_row10_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 11段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row11">担当部署</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row11" name="t1_row11" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 12段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row12_1">担当者役職</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row12_1" name="t1_row12_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row12_2">担当者氏名</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row12_2" name="t1_row12_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 13段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row13">担当者備考</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <textarea id="t1_row13" name="t1_row13" value="" class="w-full border rounded focus:outline-none focus:border-green-500" rows="4"></textarea>
                            </div>

                            <!-- 14段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row14_1">電話番号</label>
                                <span class="text-red-500">*</span>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row14_1" name="t1_row14_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row14_2">内線番号</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row14_2" name="t1_row14_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 15段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row15_1">FAX番号</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row15_1" name="t1_row15_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row15_2">携帯番号</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row15_2" name="t1_row15_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 16段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row16">メールアドレス</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row16" name="t1_row16" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 17段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row17">地区</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <label id="t1_row17" name="t1_row17" class="text-gray-600 font-light"></label>
                            </div>
                            <div class="col-start-5 col-end-13 md:col-start-7 md:col-end-9 p-1">
                                <button type="button" id="t1_row17_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                    地区検索
                                </button>
                            </div>

                            <!-- 18段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row18">管轄自治体</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <label id="t1_row18" name="t1_row18" class="text-gray-600 font-light"></label>
                            </div>
                            <div class="col-start-5 col-end-13 md:col-start-7 md:col-end-9 p-1">
                                <button type="button" id="t1_row18_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                                    管轄自治体検索
                                </button>
                            </div>

                            <!-- 19段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t1_row19">管轄警察署</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t1_row19" name="t1_row19" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                        </div>
                    </div>

                    <!-- 建物情報タブ -->
                    <div class="hidden" id="tab-2">
                        <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

                            <!-- 1段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t2_row1">外観-画像</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="file" id="t2_row1" name="t2_row1" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded">
                                <div id="t2_row1_preview"></div>
                            </div>

                            <!-- 2段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t2_row2">備考</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <textarea id="t2_row2" name="t2_row2" value="" class="w-full border rounded focus:outline-none focus:border-green-500" rows="4"></textarea>
                            </div>

                            <!-- 3段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t2_row3">現場規模</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t2_row3" name="t2_row3" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                    <option value="1">戸</option>
                                    <option value="2">棟</option>
                                </select>
                            </div>

                            <!-- 4段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t2_row4_1">床面積</label>
                            </div>
                            <div class="col-span-7 md:col-span-2 mt-1">
                                <input type="text" id="t2_row4_1" name="t2_row4_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-span-1 md:col-span-2 mt-5">㎡</div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t2_row4_2">延べ床面積</label>
                            </div>
                            <div class="col-span-7 md:col-span-2 mt-1">
                                <input type="text" id="t2_row4_2" name="t2_row4_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-span-1 md:col-span-2 mt-5">㎡</div>

                            <!-- 5段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t2_row5_1">地上階数</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t2_row5_1" name="t2_row5_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t2_row5_2">地下階数</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t2_row5_2" name="t2_row5_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 6段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t2_row6">エレベーター使用可否</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t2_row6" name="t2_row6" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                    <option value="1">可</option>
                                    <option value="2">不可または無</option>
                                </select>
                            </div>

                            <!-- 7段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t2_row7_1">エレベーター種別</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t2_row6" name="t2_row6" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                    <option value="1">貨物用</option>
                                    <option value="2">乗用</option>
                                </select>
                            </div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t2_row7_2">エレベーター間口</label>
                            </div>
                            <div class="col-span-7 md:col-span-2 mt-1">
                                <input type="text" id="t2_row7_2" name="t2_row7_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-span-1 md:col-span-2 mt-5">㎝</div>

                        </div>
                    </div>

                    <!-- 施錠情報タブ -->
                    <div class="hidden" id="tab-3">
                        <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

                            <!-- 1段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t3_row1">施錠有無</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t3_row1" name="t3_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
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

                    <!-- 駐車場タブ -->
                    <div class="hidden" id="tab-4">
                        <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

                            <!-- 1段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t4_row1">駐車場有無</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t4_row1" name="t4_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                    <option value="1">無</option>
                                    <option value="2">有</option>
                                </select>
                            </div>

                            <!-- 2段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t4_row2_1">駐車場位置</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t4_row2_1" name="t4_row2_1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                    <option value="1">地上</option>
                                    <option value="2">地下</option>
                                </select>
                            </div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t4_row2_2">駐車場階数</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t4_row2_2" name="t4_row2_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 3段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t4_row3">駐車場種別</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t4_row3" name="t4_row3" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                    <option value="1">平面(屋根無)</option>
                                    <option value="2">平面(屋根有)</option>
                                    <option value="3">立体(自走式)</option>
                                    <option value="4">立体(機械式)</option>
                                </select>
                            </div>

                            <!-- 4段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t4_row4">駐車場-画像</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="file" id="t4_row4" name="t4_row4" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded">
                            </div>

                            <!-- 5段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t4_row5">備考</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <textarea id="t4_row5" name="t4_row5" value="" class="w-full border rounded focus:outline-none focus:border-green-500" rows="4"></textarea>
                            </div>

                            <!-- 6段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t4_row6_1">駐車制限-総重量</label>
                            </div>
                            <div class="col-span-7 md:col-span-2 mt-1">
                                <input type="text" id="t4_row6_1" name="t4_row6_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-span-1 md:col-span-2 mt-5">kg</div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t4_row6_2">駐車制限-全長</label>
                            </div>
                            <div class="col-span-7 md:col-span-2 mt-1">
                                <input type="text" id="t4_row6_2" name="t4_row6_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-span-1 md:col-span-2 mt-5">m</div>

                            <!-- 7段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t4_row7_1">駐車制限-全幅</label>
                            </div>
                            <div class="col-span-7 md:col-span-2 mt-1">
                                <input type="text" id="t4_row7_1" name="t4_row7_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-span-1 md:col-span-2 mt-5">m</div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t4_row7_2">駐車制限-全高</label>
                            </div>
                            <div class="col-span-7 md:col-span-2 mt-1">
                                <input type="text" id="t4_row7_2" name="t4_row7_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-span-1 md:col-span-2 mt-5">m</div>

                        </div>
                    </div>

                    <!-- 廃棄場所タブ -->
                    <div class="hidden" id="tab-5">
                        <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

                            <!-- 1段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t5_row1">集積所有無</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t5_row1" name="t5_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                    <option value="1">無（路上）</option>
                                    <option value="2">有（共用ごみ庫）</option>
                                    <option value="3">有（専用ごみ庫）</option>
                                </select>
                            </div>

                            <!-- 2段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t5_row2_1">廃棄位置</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t5_row2_1" name="t5_row2_1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                    <option value="1">車道接面</option>
                                    <option value="2">車道非接面</option>
                                </select>
                            </div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t5_row2_2">容器有無</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t5_row2_2" name="t5_row2_2" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                    <option value="1">無</option>
                                    <option value="2">有（記名有）</option>
                                    <option value="3">有（記名無）</option>
                                </select>
                            </div>

                            <!-- 3段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t5_row3">廃棄場所-画像</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="file" id="t5_row3" name="t5_row3" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded">
                            </div>

                            <!-- 4段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t5_row4">備考</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <textarea id="t5_row4" name="t5_row4" value="" class="w-full border rounded focus:outline-none focus:border-green-500" rows="4"></textarea>
                            </div>

                        </div>
                    </div>

                    <!-- 荷捌場タブ -->
                    <div class="hidden" id="tab-6">
                        <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

                            <!-- 1段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t6_row1">荷捌場有無</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t6_row1" name="t6_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                    <option value="1">無</option>
                                    <option value="2">有</option>
                                </select>
                            </div>

                            <!-- 2段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t6_row2_1">荷捌場位置</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t6_row2_1" name="t6_row2_1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                    <option value="1">地上</option>
                                    <option value="2">地下</option>
                                </select>
                            </div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t6_row2_2">荷捌場階数</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="text" id="t6_row2_2" name="t6_row2_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>

                            <!-- 3段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t6_row3">荷捌場-画像</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <input type="file" id="t6_row3" name="t6_row3" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded">
                            </div>

                            <!-- 4段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t6_row4">備考</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <textarea id="t6_row4" name="t6_row4" value="" class="w-full border rounded focus:outline-none focus:border-green-500" rows="4"></textarea>
                            </div>

                        </div>
                    </div>

                    <!-- 周辺道路事情タブ -->
                    <div class="hidden" id="tab-7">
                        <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

                            <!-- 1段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t7_row1">通行規制有無</label>
                            </div>
                            <div class="col-span-8 md:col-span-4 mt-1">
                                <select id="t7_row1" name="t7_row1" class="w-full border rounded bg-white px-3 py-2 outline-none">
                                    <option value="1">無</option>
                                    <option value="2">有</option>
                                </select>
                            </div>

                            <!-- 2段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t7_row2_1">通行規制-車体総重量</label>
                            </div>
                            <div class="col-span-7 md:col-span-2 mt-1">
                                <input type="text" id="t7_row2_1" name="t7_row2_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-span-1 md:col-span-2 mt-5">kg</div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t7_row2_2">通行規制-全長</label>
                            </div>
                            <div class="col-span-7 md:col-span-2 mt-1">
                                <input type="text" id="t7_row2_2" name="t7_row2_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-span-1 md:col-span-2 mt-5">m</div>

                            <!-- 3段目 -->
                            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t7_row3_1">通行規制-全幅</label>
                            </div>
                            <div class="col-span-7 md:col-span-2 mt-1">
                                <input type="text" id="t7_row3_1" name="t7_row3_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-span-1 md:col-span-2 mt-5">m</div>
                            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                                <label class="leading-10" for="t7_row3_2">通行規制-全高</label>
                            </div>
                            <div class="col-span-7 md:col-span-2 mt-1">
                                <input type="text" id="t7_row3_2" name="t7_row3_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                            </div>
                            <div class="col-span-1 md:col-span-2 mt-5">m</div>
                        </div>
                    </div>

                </div>

                <!-- ボタン -->
                <div class="grid grid-cols-12 gap-2 mx-2 mb-3">
                    <div class="col-span-4 md:col-span-2 mt-12">
                        <button class="w-full px-2 py-1 bg-blue-400 text-white font-semibold rounded hover:bg-blue-500">キャンセル</button>
                    </div>
                    <div class="col-span-4 md:col-span-2 mt-12">
                        <!-- Submitボタン -->
                        <button type="submit" class="w-full px-2 py-1 bg-red-400 text-white font-semibold rounded hover:bg-red-500">登録</button>
                    </div>
                    <div class="col-span-4 md:col-span-2 mt-12">
                        <button class="w-full px-2 py-1 bg-gray-400 text-white font-semibold rounded hover:bg-gray-500">削除</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- deferを付ける：後から読み込ませるため -->
    <script type="text/javascript" defer>

        $(function () {

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

        // 参考：https://code-kitchen.dev/html/input-file/
        // プレビュー画像を追加
        function previewFile(file) {
            const preview = document.getElementById('t2_row1_preview');

            // FileReaderオブジェクトを作成
            const reader = new FileReader();

            // URLとして読み込まれたときに実行する処理
            reader.onload = function (e) {
                const imageUrl = e.target.result; // URLはevent.target.resultで呼び出せる
                const img = document.createElement("img"); // img要素を作成
                img.src = imageUrl; // URLをimg要素にセット
                preview.appendChild(img); // #previewの中に追加
            }

            // ファイルをURLとして読み込む
            reader.readAsDataURL(file);
        }

        // <input>でファイルが選択されたときの処理
        const fileInput = document.getElementById('t2_row1');
        const handleFileSelect = () => {
          const files = fileInput.files;
          for (let i = 0; i < files.length; i++) {
            previewFile(files[i]);
          }
        }
        fileInput.addEventListener('change', handleFileSelect);

    </script>

</x-app-layout>
