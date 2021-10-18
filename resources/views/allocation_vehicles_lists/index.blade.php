<!-- タイトル -->
<title>配車データ一覧</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            配車データ一覧
        </h2>
    </x-slot>

    <div class ="resultArea container mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <!-- ボタン -->
        <div class="tab-content tab-space m-3">
            <div class="flex mx-2 mb-2">
                <div class="grid grid-cols-12 gap-2">
                    <div class="col-span-2">
                        <button style="width: 100px;" class="bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">＜</button>
                    </div>
                    <div class="col-span-2">
                        <button style="width: 100px;" class="bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">＞</button>
                    </div>
                    <div class="col-span-2">
                        <button style="width: 100px;" class="bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">今日</button>
                    </div>
                    <div class="col-span-6">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            2021/07/04（日）～2021/07/10（土）
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class ="conditionArea container mx-auto border border-gray-600 max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <!-- 未割当収集場所 -->
        <h2 class="font-semibold text-base text-gray-800 leading-tight my-3">
            未割当収集場所
        </h2>
        <table class="data_tables">
            <thead>
                <tr>
                    <th style="display: none;">id</th>
                    <th style="width: 10%;"></th>
                    <th style="width: 13%;">7/4（日）</th>
                    <th style="width: 13%;">7/5（月）</th>
                    <th style="width: 13%;">7/6（火）</th>
                    <th style="width: 13%;">7/7（水）</th>
                    <th style="width: 13%;">7/8（木）</th>
                    <th style="width: 13%;">7/9（金）</th>
                    <th style="width: 13%;">7/10（土）</th>
                </tr>
            </thead>
            <tbody>
                <tr align="center">
                    <td>1</td>
                    <td valign="top">収集場所</td>
                    <td valign="top"></td>
                    <td valign="top"><a href="/allocation_vehicles" class="allocation_vehicles_link">場所ＡＡＡ</a><br><a href="/allocation_vehicles" class="allocation_vehicles_link">場所ＢＢＢ</a>
                    </td>
                    <td valign="top"><a href="/allocation_vehicles" class="allocation_vehicles_link">場所ＣＣＣ</a></td>
                    <td valign="top"></td>
                    <td valign="top"></td>
                    <td valign="top"><a href="/allocation_vehicles" class="allocation_vehicles_link">場所ＤＤＤ</a><br><a href="/allocation_vehicles" class="allocation_vehicles_link">場所ＥＥＥ</a><br><a href="/allocation_vehicles" class="allocation_vehicles_link">場所ＦＦＦ</a></td>
                    <td valign="top"></td>
                </tr>
            </tbody>
        </table>

        <br>
        <br>

        <!-- 配車一覧 -->
        <h2 class="font-semibold text-base text-gray-800 leading-tight my-3">
            配車一覧
        </h2>
        <div>〇：定期  ●：臨時  ▲：仮配車  ◇：定期込  ■車検  ×点検／修理  ―：空</div>
        <table class="data_tables">
            <thead>
                <tr>
                    <th style="display: none;">id</th>
                    <th style="width: 10%;">車両</th>
                    <th style="width: 13%;">7/4（日）</th>
                    <th style="width: 13%;">7/5（月）</th>
                    <th style="width: 13%;">7/6（火）</th>
                    <th style="width: 13%;">7/7（水）</th>
                    <th style="width: 13%;">7/8（木）</th>
                    <th style="width: 13%;">7/9（金）</th>
                    <th style="width: 13%;">7/10（土）</th>
                </tr>
            </thead>
            <tbody>
                <tr align="center">
                    <td>1</td>
                    <td class="popup_info" id="popup_carinfo_307" title="">307号車</td>
                    <td>―</td>
                    <td class="popup_scheduleinfo" title="">〇</td>
                    <td>―</td>
                    <td class="popup_scheduleinfo" title="">〇</td>
                    <td class="popup_scheduleinfo" title="">〇</td>
                    <td class="popup_scheduleinfo" title="">〇</td>
                    <td class="popup_scheduleinfo" title="" bgcolor="#ffff66">▲</td>
                </tr>
                <tr align="center">
                    <td>2</td>
                    <td class="popup_info" id="popup_carinfo_332" title="">332号車</td>
                    <td>―</td>
                    <td>―</td>
                    <td>―</td>
                    <td>―</td>
                    <td>―</td>
                    <td>―</td>
                    <td>―</td>
                </tr>
                <tr align="center">
                    <td>3</td>
                    <td class="popup_info" id="popup_carinfo_306" title="">306号車</td>
                    <td class="popup_scheduleinfo" title="">●</td>
                    <td>―</td>
                    <td>―</td>
                    <td>―</td>
                    <td>―</td>
                    <td>―</td>
                    <td>―</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- ボタン -->
    <div class ="resultArea container mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <!-- ボタン -->
        <div class="tab-content tab-space m-3">
            <div class="flex mx-2 mb-2">
                <button style="width: 300px;" class="bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">シフトデータ一覧表示</button>
            </div>
        </div>
    </div>

    <!-- ダイアログ -->
    <div id="time-data-dialog" style="display:none;">
        <div class="col-span-1">
            <label class="leading-10">運搬担当者</label>
        </div>
        <div class="col-span-2">
            <select id="transporter" class="w-full border rounded bg-white px-3 py-2 outline-none">
                <option>名倉</option>
                <option>岡田</option>
            </select>
        </div>
        <div>&nbsp;</div>
        <div class="col-span-1">
            <label class="align-top" for="inquiry_contents">メモ</label>
        </div>
        <div class="col-span-3">
            <textarea id="transporter_memo" class="w-full border rounded focus:outline-none focus:border-green-500" rows="4"></textarea>
        </div>
    </div>

    <style>
        .popup_info{
            position: relative;
            cursor: pointer;
        }
        .popup_scheduleinfo{
            position: relative;
            cursor: pointer; 
        }
        .allocation_vehicles_link {
            color:#0000ff;
            padding-top:10px;
            margin-bottom:10px;
        }
    </style>

    <script defer>
        $(function () {
            // dataTableの設定
            $(".data_tables").dataTable({
                dom: "Bfrtip",
                responsive: false,
                searching: false,
                ordering: false,
                //info: false,
                buttons: [],
                columnDefs: [
                    {targets: 0, visible: false}, // 非表示
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

        // 車両情報からツールチップを組み立て
            $('#popup_carinfo_307').tooltip({
                content: function() {
                    var car_data1 = '307';
                    var car_data2 = '産廃パッカー（８ｍ３）';
                    var car_data3 = '足立800せ 6082';
                    var car_data4 = 'FEB90-500235';

                    return '車両コード：' + car_data1 + '<br>車種：' + car_data2 + '<br>車両番号：' + car_data3 + '<br>車台番号/車体番号：' + car_data4;
                }
            });

            $('#popup_carinfo_332').tooltip({
                content: function() {
                    var car_data1 = '332';
                    var car_data2 = '産廃パッカー（８ｍ３）';
                    var car_data3 = '足立800そ 2592';
                    var car_data4 = 'FEB90-500235';

                    return '車両コード：' + car_data1 + '<br>車種：' + car_data2 + '<br>車両番号：' + car_data3 + '<br>車台番号/車体番号：' + car_data4;
                }
            });

            $('#popup_carinfo_306').tooltip({
                content: function() {
                    var car_data1 = '306';
                    var car_data2 = '２ｔ平車';
                    var car_data3 = '足立400あ 5785';
                    var car_data4 = 'FEB90-500235';

                    return '車両コード：' + car_data1 + '<br>車種：' + car_data2 + '<br>車両番号：' + car_data3 + '<br>車台番号/車体番号：' + car_data4;
                }
            });

            $('.popup_scheduleinfo').tooltip({
                content: function() {
                    var schedule_data1 = '定期';
                    var schedule_data2 = 'xxx';
                    var schedule_data3 = '2021/xx/xx（Ｎ）';
                    var schedule_data4 = '〇〇スーパー〇〇店';
                    var schedule_data5 = 'ＮＮＮＮＮ';

                    return '区分：' + schedule_data1 + '<br>車両番号：' + schedule_data2 + '<br>収集日：' + schedule_data3 + '<br>収集場所：' + schedule_data4 + '<br>運搬担当者：' + schedule_data5;
                }
            });
        });
    </script>
</x-app-layout>
