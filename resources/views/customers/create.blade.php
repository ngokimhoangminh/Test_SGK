<!-- タイトル -->
<title>顧客登録 - {{config('const.Product.NAME')}}</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            顧客登録
        </h2>
    </x-slot>

    <div class="w-full mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-12 gap-2 mx-2 mb-3">

            <!-- 1段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row1_1">顧客役割</label>
                <span class="text-red-500">*</span>
            </div>
            <div class="col-span-8 md:col-span-10 mt-1">
                <input type="checkbox" id="row1_1" name="row1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                <label class="leading-10 mr-3" for="row1_1">契約先</label>
                <input type="checkbox" id="row1_2" name="row1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                <label class="leading-10 mr-3" for="row1_2">請求先</label>
                <input type="checkbox" id="row1_3" name="row1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                <label class="leading-10 mr-3" for="row1_3">入金元</label>
            </div>

            <!-- 2段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row2">顧客コード</label>
                <span class="text-red-500">*</span>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row2" name="row2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 3段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row3">顧客名</label>
                <span class="text-red-500">*</span>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row3" name="row3" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 4段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row4">顧客略称</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row4" name="row4" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 5段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row5">顧客カナ</label>
                <span class="text-red-500">*</span>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row5" name="row5" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 6段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row6">法人格コード</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <select id="row6" name="row6" class="w-full border rounded bg-white px-3 py-2 outline-none">
                    <option value=""></option>
                    <option value="1">テスト1</option>
                    <option value="2">テスト2</option>
                    <option value="3">テスト3</option>
                </select>
            </div>

            <!-- 7段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row7">ホームページ</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row7" name="row7" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 8段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row8">業種</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <label id="row8" name="row8" class="text-gray-600 font-light">大分類〇〇〇　中分類〇〇〇　小分類〇〇〇　細分類〇〇〇</label>
            </div>
            <div class="col-start-5 col-end-13 md:col-start-7 md:col-end-9 p-1">
                <button type="button" id="row8_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                    業種検索
                </button>
            </div>

            <!-- 9段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row9">営業担当者</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <select id="row9" name="row9" class="w-full border rounded bg-white px-3 py-2 outline-none">
                    <option value=""></option>
                    <option value="1">テスト1</option>
                    <option value="2">テスト2</option>
                    <option value="3">テスト3</option>
                </select>
            </div>

            <!-- 10段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row10_1">代表者役職</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row10_1" name="row10_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row10_2">代表者氏名</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row10_2" name="row10_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 11段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row11">信用情報</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="file" id="row11" name="row11" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded">
                <div id="row11_preview"></div>
            </div>

            <!-- 12段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row12">郵便番号</label>
            </div>
            <div class="col-span-8 md:col-span-2 mt-1">
                <input type="text" id="row12" name="row12" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-5 col-end-13 md:col-start-5 md:col-end-7 p-1">
                <button type="button" id="row12_btn" class="w-full bg-green-500 text-gray-100 rounded hover:bg-green-400 px-4 py-2 focus:outline-none">
                    郵便番号検索
                </button>
            </div>

            <!-- 13段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row13_1">都道府県</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row13_1" name="row13_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row13_2">市区町村</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row13_2" name="row13_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 14段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row14_1">町域</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row14_1" name="row14_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row14_2">町域以下</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row14_2" name="row14_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 15段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row15_1">建物名</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row15_1" name="row15_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row15_2">階数・号数</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row15_2" name="row15_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 16段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row16_1">電話番号</label>
                <span class="text-red-500">*</span>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row16_1" name="row16_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row16_2">内線番号</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row16_2" name="row16_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 17段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row17_1">FAX番号</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row17_1" name="row17_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row17_2">携帯番号</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row17_2" name="row17_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 18段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row18">メールアドレス</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row18" name="row18" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 19段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row19_1">郵便バーコード</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row19_1" name="row19_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 20段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row20">担当部署</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row20" name="row20" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 21段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row21_1">担当者役職</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row21_1" name="row21_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row21_2">担当者氏名</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row21_2" name="row21_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 22段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row22">担当者備考</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <textarea id="row22" name="row22" value="" class="w-full border rounded focus:outline-none focus:border-green-500" rows="4"></textarea>
            </div>

            <!-- 23段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row23_1">収集形態(契約前)コード</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row23_1" name="row23_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row23_2">収集形態(契約後)コード</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row23_2" name="row23_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 24段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row24">取引開始の経緯</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <textarea id="row24" name="row24" value="" class="w-full border rounded focus:outline-none focus:border-green-500" rows="4"></textarea>
            </div>

            <!-- 25段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row25_1">紹介者有無</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="radio" id="row25_1" name="row26" value="" class="h-2 w-2 px-2 py-2 mr-2">
                <label class="leading-10 mr-3" for="row25_1">有</label>
                <input type="radio" id="row25_1" name="row26" value="" class="h-2 w-2 px-2 py-2 mr-2">
                <label class="leading-10 mr-3" for="row25_1">無</label>
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row25_2">紹介者</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row25_2" name="row25_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 26段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row26">前業者</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row26" name="row26" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 27段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row27_1">交付担当部署</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row27_1" name="row27_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row27_2">交付担当者</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row27_2" name="row27_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 28段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row28">登録担当者</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row28" name="row28" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 29段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row29_1">特別管理産業廃棄物管理責任者</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row29_1" name="row29_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row29_2">産業廃棄物管理責任者</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row29_2" name="row29_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 30段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row30_1">加入者番号</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row30_1" name="row30_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row30_2">公開確認番号</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row30_2" name="row30_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 31段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row31_1">データ交換センターコード</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row31_1" name="row31_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row31_2">EDI利用確認キー</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row31_2" name="row31_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 32段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row32_1">入力代行要否コード</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row32_1" name="row32_1" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
            <div class="col-start-1 col-end-5 md:col-start-7 md:col-end-9 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row32_2">年次報告単位コード</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="row32_2" name="row32_2" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>

            <!-- 33段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row33_1">作業伝票有無</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="radio" id="row33_1" name="row33_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                <label class="leading-10 mr-3" for="row33_1">有</label>
                <input type="radio" id="row33_1" name="row33_1" value="" class="h-2 w-2 px-2 py-2 mr-2">
                <label class="leading-10 mr-3" for="row33_1">無</label>
            </div>

            <!-- 34段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row34">中間処理産業廃棄物情報管理方法</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <select id="row34" name="row34" class="w-full border rounded bg-white px-3 py-2 outline-none">
                    <option value=""></option>
                    <option value="1">テスト1</option>
                    <option value="2">テスト2</option>
                    <option value="3">テスト3</option>
                </select>
            </div>

            <!-- 35段目 -->
            <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="row35">最終処理事業場記載</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <select id="row35" name="row35" class="w-full border rounded bg-white px-3 py-2 outline-none">
                    <option value=""></option>
                    <option value="1">テスト1</option>
                    <option value="2">テスト2</option>
                    <option value="3">テスト3</option>
                </select>
            </div>

            <!-- 排出事業者 -->
            <div class="col-span-12 border border-gray-900 mt-12">
                <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">排出事業者</div>
                <div class="grid grid-cols-12 m-4">

                    <!-- 1段目 -->
                    <div class="col-start-1 col-end-13 md:col-end-7">
                        <input type="checkbox" id="row34" name="row34" value="" class="h-4 w-4 border rounded mr-1">
                        <label class="leading-10" for="row34">顧客と排出事業者が同じ</label>
                    </div>
                    <div class="col-start-1 md:col-start-11 col-end-13">
                        <button class="w-full px-2 py-1 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500">排出事業者登録</button>
                    </div>

                    <!-- 2段目 -->
                    <div class="col-span-12 mt-5">
                        <table class="data_tables stripe row-border table-auto text-sm text-left border border-gray-900">
                            <thead>
                                <tr>
                                    <th style="width: 20%;">排出事業者コード</th>
                                    <th style="width: 30%;">排出事業者名</th>
                                    <th style="width: 30%;">排出事業者略称</th>
                                    <th style="width: 20%;">排出事業者カナ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A10001</td>
                                    <td>××××××××××</td>
                                    <td>×××××</td>
                                    <td>〇〇〇〇〇〇〇〇〇〇</td>
                                </tr>
                                <tr>
                                    <td>A10002</td>
                                    <td>××××××××××</td>
                                    <td>×××××</td>
                                    <td>〇〇〇〇〇〇〇〇〇〇</td>
                                </tr>
                                <tr>
                                    <td>A10003</td>
                                    <td>××××××××××</td>
                                    <td>×××××</td>
                                    <td>〇〇〇〇〇〇〇〇〇〇</td>
                                </tr>
                                <tr>
                                    <td>A10004</td>
                                    <td>××××××××××</td>
                                    <td>×××××</td>
                                    <td>〇〇〇〇〇〇〇〇〇〇</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- 排出事業場 -->
            <div class="col-span-12 border border-gray-900 mt-12">
                <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">排出事業場</div>
                <div class="grid grid-cols-12 m-4">

                    <!-- 1段目 -->
                    <div class="col-start-1 col-end-13 md:col-end-7">
                        <input type="checkbox" id="row35" name="row35" value="" class="h-4 w-4 border rounded mr-1">
                        <label class="leading-10" for="row35">顧客と排出事業場が同じ</label>
                    </div>
                    <div class="col-start-1 md:col-start-11 col-end-13">
                        <button class="w-full px-2 py-1 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500">排出事業場登録</button>
                    </div>

                    <!-- 2段目 -->
                    <div class="col-span-12 mt-5">
                        <table class="data_tables stripe row-border table-auto text-sm text-left border border-gray-900">
                            <thead>
                                <tr>
                                    <th style="width: 20%;">排出事業場コード</th>
                                    <th style="width: 30%;">排出事業場名</th>
                                    <th style="width: 30%;">排出事業場略称</th>
                                    <th style="width: 20%;">排出事業場カナ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A10001</td>
                                    <td>××××××××××</td>
                                    <td>×××××</td>
                                    <td>〇〇〇〇〇〇〇〇〇〇</td>
                                </tr>
                                <tr>
                                    <td>A10002</td>
                                    <td>××××××××××</td>
                                    <td>×××××</td>
                                    <td>〇〇〇〇〇〇〇〇〇〇</td>
                                </tr>
                                <tr>
                                    <td>A10003</td>
                                    <td>××××××××××</td>
                                    <td>×××××</td>
                                    <td>〇〇〇〇〇〇〇〇〇〇</td>
                                </tr>
                                <tr>
                                    <td>A10004</td>
                                    <td>××××××××××</td>
                                    <td>×××××</td>
                                    <td>〇〇〇〇〇〇〇〇〇〇</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- 文書登録 -->
            <div class="col-span-12 border border-gray-900 mt-12">
                <div class="bg-gray-200 text-gray-700 text-lg px-2 py-2">文書登録</div>
                <div class="grid grid-cols-12 m-4">

                    <!-- 1段目 -->
                    <div class="col-start-1 col-end-5 md:col-end-2">
                        <label class="leading-10" for="row36">ファイル</label>
                    </div>
                    <div class="col-span-8 md:col-span-5">
                        <input type="file" id="row36" name="row36" class="w-full text-gray-700 px-3 py-2 border border-gray-500 rounded">
                    </div>

                    <!-- 2段目 -->
                    <div class="col-start-1 col-end-5 md:col-end-3 mt-3">
                        <button id="upload_btn" name="upload_btn" class="w-full px-2 py-1 bg-gray-400 text-white font-semibold rounded hover:bg-gray-500">アップロード</button>
                    </div>

                </div>
            </div>

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

    <script defer>
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
    </script>

</x-app-layout>
