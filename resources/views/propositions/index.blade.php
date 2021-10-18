<!-- タイトル -->
<title>案件検索 - {{config('const.Product.NAME')}}</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            案件検索
        </h2>
    </x-slot>

    <form method="POST" action="">
        @csrf
        
        <div class ="mx-auto border border-gray-600 max-w-7xl py-2 px-4">
            <!-- 検索条件 -->
            <div class="grid md:grid-cols-12 gap-2 items-center m-2">

                <!-- 1段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="cond_customer_name">顧客名</label>
                </div>
                <div class="col-span-8 md:col-span-4 mt-1">
                    <input type="text" id="cond_customer_name" name="cond_customer_name" value="{{ $cond_customer_name }}" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 2段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="cond_emission_site_name">排出事業場</label>
                </div>
                <div class="col-span-8 md:col-span-4 mt-1">
                    <input type="text" id="cond_emission_site_name" name="cond_emission_site_name" value="{{ $cond_emission_site_name }}" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 3段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="cond_proposition_status_code">案件ステータス</label>
                </div>
                <div class="col-span-8 md:col-span-4 mt-1">
                    @foreach($proposition_status_segments as $code => $name)
                        <input type="checkbox" id="cond_proposition_status_code" name="cond_proposition_status_code" value="{{ $code }}" class="h-4 w-4 border rounded mr-1">
                        <label class="leading-10" for="cond_proposition_status_code_1">{{ $name }}</label>
                    @endforeach
                </div>

                <!-- 4段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="cond_order_date">受注日</label>
                </div>
                <div class="col-span-3 md:col-span-2 mt-1">
                    <input type='date' id="cond_order_date_start" name="cond_order_date_start" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                </div>
                <div class="col-span-1 text-center">
                    <label class="text-center">～</label>
                </div>
                <div class="col-span-3 md:col-span-2 mt-1">
                    <input type='date' id="cond_order_date_end" name="cond_order_date_end" value="" class="w-full border rounded text-gray-700 focus:outline-none focus:border-green-500"/>
                </div>

                <!-- 5段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="cond_sales_contact">営業担当者</label>
                </div>
                <div class="col-span-8 md:col-span-4 mt-1">
                    <select id="cond_sales_contact" name="cond_sales_contact" class="w-full border rounded bg-white px-3 py-2 outline-none">
                    <option value=""></option>
                        @foreach($sales_users as $id => $name)
                            <option value="{{ $id }}" {{ ($id == $cond_sales_contact) ? 'selected="selected"' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- 6段目 -->
                <div class="col-start-1 col-end-4 md:col-end-3">
                    <button id="submit_button" type="submit" class="w-full bg-gray-600 text-gray-100 rounded hover:bg-gray-500 px-4 py-2 focus:outline-none">検索
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg> -->
                    </button>
                </div>

                <!-- 7段目 -->
                <div class="col-start-1 col-end-13 text-current pl-3 m-1">
                    <small>※データ件数が1000件を超える場合は、適宜、抽出条件を設定してください</small> 
                </div>
            </div>
        </div>
        
        <!-- ボタンエリア -->
        <div class ="max-w-7xl mx-auto py-3 sm:px-6 lg:px-0">
            <div class="flex flex-row-reverse pr-px-30">
                <button type="button" class="bg-yellow-400 text-gray-100 rounded hover:bg-yellow-400 px-4 py-2 focus:outline-none" onclick="location.href='/propositions/search'">
                    {{ __('新規案件登録') }}
                </button>
            </div>
        </div>

        <!-- 一覧 -->
        <div class ="mx-8 my-4">
            <table id="data_tables" class="hover data_tables stripe row-border table-auto text-sm text-left border border-gray-900 m-4" style="width:100%;">
                <thead>
                    <tr>
                        <th style="display: none;">id</th>
                        <th style="width: 15%;">受注日</th>
                        <th style="width: 30%;">排出事業場</th>
                        <th style="width: 10%;">案件種別</th>
                        <th style="width: 15%;">案件ステータス</th>
                        <th style="width: 30%;">営業担当者</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($propositions as $item)
                        <td>{{ $item["id"] }}</td>
                        <td>{{ $item["order_date"] }}</td>
                        <td>{{ $item["proposition_emission_site_name"] }}</td>
                        <td>{{ $item["proposition_type_name"] }}</td>
                        <td>{{ $item["proposition_status_name"] }}</td>
                        <td>{{ $item["sales_contact_name"] }}</td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>

    <!-- deferを付ける：後から読み込ませるため -->
    <script type="text/javascript" defer>

        $(function () {
    
            // dataTableの設定
            $(".data_tables").dataTable({
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
    
        });
     
    </script>

</x-app-layout>
