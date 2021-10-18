<!-- タイトル -->
<title>顧客・排出事業者・排出事業場検索 - {{config('const.Product.NAME')}}</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            顧客・排出事業者・排出事業場検索
        </h2>
    </x-slot>

    <form method="POST" action="">
        @csrf

        <div class ="mx-auto border border-gray-600 max-w-7xl py-2 px-4">
            <!-- 検索条件 -->
            <div class="grid grid-cols-12 gap-2 items-center m-2">

                <!-- 1段目 -->
                <div class="col-start-1 col-end-4 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="row1">顧客コード</label>
                </div>
                <div class="col-span-9 md:col-span-4 mt-1">
                    <input type='text' id="row1" name="row1" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                </div>
                
                <!-- 2段目 -->
                <div class="col-start-1 col-end-4 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="row2">顧客名</label>
                </div>
                <div class="col-span-9 md:col-span-4 mt-1">
                    <input type='text' id="row2" name="row2" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                </div>

                <!-- 3段目 -->
                <div class="col-start-1 col-end-4 md:col-end-3  rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="row3">顧客カナ</label>
                </div>
                <div class="col-span-9  md:col-span-4 mt-1">
                    <input type='text' id="row3" name="row3" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                </div>
            </div>
        </div>

        <!-- 顧客選択一覧 -->
        <div class ="mx-8 my-4">
            <h4 class="border-l-8 border-blue-400 p-2 font-semibold mb-2">顧客選択</h4>
            <!-- ボタンエリア -->
            <div class ="max-w-7xl mx-auto py-3 sm:px-6 lg:px-0">
                <div class="flex flex-row-reverse pr-px-30">
                    <button type="button" class="bg-yellow-400 text-gray-100 rounded hover:bg-yellow-400 px-4 py-2 focus:outline-none" onclick="location.href='/customers'">
                        {{ __('顧客登録') }}
                    </button>
                </div>
            </div>
            <table id="data_tables1" class="hover data_tables1 stripe row-border table-auto text-sm text-left border border-gray-900 m-4" style="width:100%;">
                <thead>
                    <tr>
                        <th style="display: none;">id</th>
                        <th style="width: 10%;">顧客コード</th>
                        <th style="width: 15%;">顧客名</th>
                        <th style="width: 15%;">顧客略称</th>
                        <th style="width: 15%;">顧客カナ</th>
                        <th style="width: 10%;">都道府県</th>
                        <th style="width: 10%;">市区町村</th>
                        <th style="width: 10%;">町域</th>
                        <th style="width: 15%;">町域以下</th>
                    </tr>
                </thead>
            </table>
        </div>

        <!-- 排出事業者選択一覧 -->
        <div class ="mx-8 my-4">
            <h4 id="table_title2" class="border-l-8 border-blue-400 p-2 font-semibold mb-2" style="display:none;">排出事業者選択</h4>
            <table id="data_tables2" class="hover data_tables2 stripe row-border table-auto text-sm text-left border border-gray-900 m-4" style="width:100%; display:none;">
                <thead>
                    <tr>
                        <th style="display: none;">排出事業者ID</th>
                        <th style="display: none;">顧客ID</th>
                        <th style="width: 20%;">排出事業者コード</th>
                        <th style="width: 80%;">排出事業者名</th>
                    </tr>
                </thead>
            </table>
        </div>

        <!-- 排出事業場選択一覧 -->
        <div class ="mx-8 my-4">
            <h4 id="table_title3" class="border-l-8 border-blue-400 p-2 font-semibold mb-2" style="display:none;">排出事業場選択</h4>
            <table id="data_tables3" class="hover data_tables3 stripe row-border table-auto text-sm text-left border border-gray-900 m-4" style="width:100%; display:none;">
                <thead>
                    <tr>
                        <th style="display: none;">排出事業場ID</th>
                        <th style="display: none;">顧客ID</th>
                        <th style="display: none;">排出事業者ID</th>
                        <th style="width: 20%;">排出事業場コード</th>
                        <th style="width: 80%;">排出事業場名</th>
                    </tr>
                </thead>
            </table>
        </div>

        <!-- ボタンエリア -->
        <div class ="max-w-7xl mx-auto py-3 sm:px-6 lg:px-0">
            <button type="button" class="bg-yellow-400 text-gray-100 rounded hover:bg-yellow-400 px-4 py-2 focus:outline-none" onclick="location.href='/propositions/create'">
                {{ __('（仮）登録画面') }}
            </button>
        </div>
    </form>

    <!-- deferを付ける：後から読み込ませるため -->
    <script type="text/javascript" defer>

        $(function () {
    
            // dataTable1の設定
            $(".data_tables1").dataTable({
                dom: "Bfrtip",
                responsive: false,
                searching: false,
                ordering: false,
                info: false,
                autoWidth: false,
                buttons: [],
                columnDefs: [
                    {"targets": 0, "visible": false}
                ],
                sorting: [1, "asc"],
                paging: false,
                // pageLength: 50,
                language: {
                    emptyTable: "検索条件に合致するデータはありません。"
/*
                    info: "_TOTAL_ 件中 _START_ 件から _END_ 件までを表示",
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
                            _: "%d 行選択中",
                            0: ""
                        }
                    }
*/
                }
            });

            $(".data_tables2").dataTable({
                dom: "Bfrtip",
                responsive: false,
                searching: false,
                ordering: false,
                info: false,
                autoWidth: false,
                buttons: [],
                columnDefs: [
                    {"targets": 0, "visible": false},
                    {"targets": 1, "visible": false}
                ],
                sorting: [1, "asc"],
                paging: false,
                language: {
                    emptyTable: "検索条件に合致するデータはありません。"
                }
            });
        });
     
    </script>

</x-app-layout>
