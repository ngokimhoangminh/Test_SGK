<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- <form method="POST" action=""> -->
        @csrf
        
        <!-- 検索条件 -->
        <div class ="mx-auto border border-gray-600 max-w-7xl py-2 px-4">
            <div class="grid md:grid-cols-12 gap-2 items-center m-2">
                <!-- 1段目 -->
                <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="search_customer_dialog_cond_code">顧客コード</label>
                </div>
                <div class="col-span-8 md:col-span-4 mt-1">
                    <input type="text" id="search_customer_dialog_cond_code" name="search_customer_dialog_cond_code" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 2段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="search_customer_dialog_cond_name">顧客名</label>
                </div>
                <div class="col-span-8 md:col-span-4 mt-1">
                    <input type="text" id="search_customer_dialog_cond_name" name="search_customer_dialog_cond_name" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 3段目 -->
                <div class="col-start-1 col-end-5 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                    <label class="leading-10" for="search_customer_dialog_cond_kana">顧客カナ</label>
                </div>
                <div class="col-span-8 md:col-span-4 mt-1">
                    <input type="text" id="search_customer_dialog_cond_kana" name="search_customer_dialog_cond_kana" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
                </div>

                <!-- 4段目 -->
                <div class="col-start-1 col-end-4 md:col-end-3">
                    <button id="search_customer_dialog_search_button" class="w-full bg-gray-500 text-gray-100 rounded hover:bg-gray-500 px-4 py-2 focus:outline-none">検索</button>
                </div>
            </div>
        </div>

        <!-- ボタンエリア -->
        <div class ="max-w-7xl mx-auto py-3 sm:px-6 lg:px-0">
            <div class="flex flex-row-reverse pr-px-30">
                <button type="button" class="bg-yellow-400 text-gray-100 rounded hover:bg-yellow-400 px-4 py-2 focus:outline-none" onclick="location.href='/customers'">
                    {{ __('顧客登録') }}
                </button>
            </div>
        </div>

        <!-- 隠し項目 -->
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_customer_code">顧客コード返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_customer_code" name="search_customer_dialog_return_field_customer_code" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_customer_name">顧客名返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_customer_name" name="search_customer_dialog_return_field_customer_name" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_customer_abbreviation">顧客略称返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_customer_abbreviation" name="search_customer_dialog_return_field_customer_abbreviation" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_customer_kana">顧客カナ返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_customer_kana" name="search_customer_dialog_return_field_customer_kana" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_postal_code">郵便番号返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_postal_code" name="search_customer_dialog_return_field_postal_code" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_prefecture">都道府県返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_prefecture" name="search_customer_dialog_return_field_prefecture" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_municipality">市区町村返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_municipality" name="search_customer_dialog_return_field_municipality" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_town_area">町域返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_town_area" name="search_customer_dialog_return_field_town_area" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_following_town_area">町域以下返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_following_town_area" name="search_customer_dialog_return_field_following_town_area" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_building_name">建物名返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_building_name" name="search_customer_dialog_return_field_building_name" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_floor_number">階数・号数返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_floor_number" name="search_customer_dialog_return_field_floor_number" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_department_name">担当部署返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_department_name" name="search_customer_dialog_return_field_department_name" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_contact_name">担当者氏名返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_contact_name" name="search_customer_dialog_return_field_contact_name" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_contact_remarks">担当者備考返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_contact_remarks" name="search_customer_dialog_return_field_contact_remarks" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_tel">電話番号返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_tel" name="search_customer_dialog_return_field_tel" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_extension_number">内線番号返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_extension_number" name="search_customer_dialog_return_field_extension_number" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_fax">FAX番号返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_fax" name="search_customer_dialog_return_field_fax" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_mobile_number">携帯番号返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_mobile_number" name="search_customer_dialog_return_field_mobile_number" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_email_address">メールアドレス返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_email_address" name="search_customer_dialog_return_field_email_address" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>
        <div class="form-group row"  style="display: none;">
            <div class="col-start-1 col-end-10 md:col-end-3 rounded bg-blue-400 text-gray-50 pl-3 m-1">
                <label class="leading-10" for="search_customer_dialog_return_field_sales_contact_id">営業担当者返却先</label>
            </div>
            <div class="col-span-8 md:col-span-4 mt-1">
                <input type="text" id="search_customer_dialog_return_field_sales_contact_id" name="search_customer_dialog_return_field_sales_contact_id" value="" class="w-full border rounded focus:outline-none focus:border-green-500">
            </div>
        </div>

        <!-- 一覧 -->
        <div class ="mx-8 my-4">
            <table id="search_customer_dialog_data_tables" class="hover search_customer_dialog_data_tables stripe row-border table-auto text-sm text-left border border-gray-900 m-4" style="width:100%;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>選択</th>
                        <th>顧客コード</th>
                        <th>顧客名</th>
                        <th>顧客略称</th>
                        <th>顧客カナ</th>
                        <th>郵便番号</th>
                        <th>都道府県</th>
                        <th>市区町村</th>
                        <th>町域</th>
                        <th>町域以下</th>
                        <th>建物名</th>
                        <th>階数・号数</th>
                        <th>担当部署</th>
                        <th>担当者氏名</th>
                        <th>担当者備考</th>
                        <th>電話番号</th>
                        <th>内線番号</th>
                        <th>FAX番号</th>
                        <th>携帯番号</th>
                        <th>メールアドレス</th>
                        <th>営業担当者</th>
                    </tr>
                </thead>
            </table>
        </div>
    <!-- </form> -->

    <!-- deferを付ける：後から読み込ませるため -->
    <script type="text/javascript" defer>
        $(function () {
            // dataTableの設定
            $("#search_customer_dialog_data_tables").dataTable({
                dom: "Bfrtip",
                responsive: false,
                searching: false,
                ordering: false,
                info: false,
                autoWidth: false,
                buttons: [],
                columnDefs: [
                    {"targets": 0, "visible": false},
                    {"targets": 1, "width"  : "10%"},
                    {"targets": 2, "width"  : "30%"},
                    {"targets": 3, "width"  : "30%"},
                    {"targets": 4, "visible": false},
                    {"targets": 5, "width"  : "30%"},
                    {"targets": 6, "visible": false},
                    {"targets": 7, "visible": false},
                    {"targets": 8, "visible": false},
                    {"targets": 9, "visible": false},
                    {"targets":10, "visible": false},
                    {"targets":11, "visible": false},
                    {"targets":12, "visible": false},
                    {"targets":13, "visible": false},
                    {"targets":14, "visible": false},
                    {"targets":15, "visible": false},
                    {"targets":16, "visible": false},
                    {"targets":17, "visible": false},
                    {"targets":18, "visible": false},
                    {"targets":19, "visible": false},
                    {"targets":20, "visible": false},
                    {"targets":21, "visible": false},
                ],
                sorting: [1, "asc"],
                paging: false,
                language: {
                    emptyTable: "検索条件に合致するデータはありません。"
                }
            });

            // Enter押下
            // 顧客コード
            $("#search_customer_dialog_cond_code").keypress(function(e){
                if(e.key == "Enter"){
                    // 検索処理
                    customersSearch();
                }
            });
             // 顧客名
             $("#search_customer_dialog_cond_name").keypress(function(e){
                if(e.key == "Enter"){
                    // 検索処理
                    customersSearch();
                }
            });
            // 顧客カナ
            $("#search_customer_dialog_cond_kana").keypress(function(e){
                if(e.key == "Enter"){
                    // 検索処理
                    customersSearch();
                }
            });

            // 検索ボタン押下
            $("#search_customer_dialog_search_button").click(function() {
                // 検索処理
                customersSearch();
            });

            // 検索ボタンクリック時
            function customersSearch() {
                var url = "";
                var cond_code = $("#search_customer_dialog_cond_code").val();
                var cond_name = $("#search_customer_dialog_cond_name").val();
                var cond_kana = $("#search_customer_dialog_cond_kana").val();

                // データ検索
                // 未入力の場合は「*」に変換する
                if (cond_code == "") cond_code = "*";
                if (cond_name == "") cond_name = "*";
                if (cond_kana == "") cond_kana = "*";
                url = "/customers/ajaxGetCustomersData/";
                url += encodeURIComponent(cond_code) + "/";
                url += encodeURIComponent(cond_name) + "/";
                url += encodeURIComponent(cond_kana);
                // console.log(url);
                $.ajax({
                    "type": "get",
                    "dataType": "json",
                    "url": url
                }).done((res)=>{
                    // 成功時
                    // console.log(res);
                    var html = "";
                    var table = $("#search_customer_dialog_data_tables").DataTable();
                    table.clear();
                    for (var i = 0; i < res.length; i++) {
                        html = "<button ";
                        html += "type='button' ";
                        html += "id='search_customer_dialog_data_select' class='bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none' ";
				        html += "row='" + i + "'>選択</button>";
                        table.row.add([
                                res[i].id,
                                html,
                                res[i].customer_code,
                                res[i].customer_name,
                                res[i].customer_abbreviation,
                                res[i].customer_kana,
                                res[i].postal_code,
                                res[i].prefecture,
                                res[i].municipality,
                                res[i].town_area,
                                res[i].following_town_area,
                                res[i].building_name,
                                res[i].floor_number,
                                res[i].department_name,
                                res[i].contact_name,
                                res[i].contact_remarks,
                                res[i].tel,
                                res[i].extension_number,
                                res[i].fax,
                                res[i].mobile_number,
                                res[i].email_address,
                                res[i].sales_contact_id
                        ]);
                    }
                    table.draw();
                }).fail((error)=>{
                    // 失敗時
                    console.log(error);
                });
            }

            // 選択ボタンクリック時
            $("body").on("click", "#search_customer_dialog_data_select", function() {

                var table                       = $("#search_customer_dialog_data_tables").DataTable();
                var row                         = $(this).attr("row");
                var field_customer_code         = $("#search_customer_dialog_return_field_customer_code").val();
                var field_customer_name         = $("#search_customer_dialog_return_field_customer_name").val();
                var field_customer_abbreviation = $("#search_customer_dialog_return_field_customer_abbreviation").val();
                var field_customer_kana         = $("#search_customer_dialog_return_field_customer_kana").val();
                var field_postal_code           = $("#search_customer_dialog_return_field_postal_code").val();
                var field_prefecture            = $("#search_customer_dialog_return_field_prefecture").val();
                var field_municipality          = $("#search_customer_dialog_return_field_municipality").val();
                var field_town_area             = $("#search_customer_dialog_return_field_town_area").val();
                var field_following_town_area   = $("#search_customer_dialog_return_field_following_town_area").val();
                var field_building_name         = $("#search_customer_dialog_return_field_building_name").val();
                var field_floor_number          = $("#search_customer_dialog_return_field_floor_number").val();
                var field_department_name       = $("#search_customer_dialog_return_field_department_name").val();
                var field_contact_name          = $("#search_customer_dialog_return_field_contact_name").val();
                var field_contact_remarks       = $("#search_customer_dialog_return_field_contact_remarks").val();
                var field_tel                   = $("#search_customer_dialog_return_field_tel").val();
                var field_extension_number      = $("#search_customer_dialog_return_field_extension_number").val();
                var field_fax                   = $("#search_customer_dialog_return_field_fax").val();
                var field_mobile_number         = $("#search_customer_dialog_return_field_mobile_number").val();
                var field_email_address         = $("#search_customer_dialog_return_field_email_address").val();
                var field_sales_contact_id      = $("#search_customer_dialog_return_field_sales_contact_id").val();

                var data_customer_code         = table.data()[row][2];
                var data_customer_name         = table.data()[row][3];
                var data_customer_abbreviation = table.data()[row][4];
                var data_customer_kana         = table.data()[row][5];
                var data_postal_code           = table.data()[row][6];
                var data_prefecture            = table.data()[row][7];
                var data_municipality          = table.data()[row][8];
                var data_town_area             = table.data()[row][9];
                var data_following_town_area   = table.data()[row][10];
                var data_building_name         = table.data()[row][11];
                var data_floor_number          = table.data()[row][12];
                var data_department_name       = table.data()[row][13];
                var data_contact_name          = table.data()[row][14];
                var data_contact_remarks       = table.data()[row][15];
                var data_tel                   = table.data()[row][16];
                var data_extension_number      = table.data()[row][17];
                var data_fax                   = table.data()[row][18];
                var data_mobile_number         = table.data()[row][19];
                var data_email_address         = table.data()[row][20];
                var data_sales_contact_id      = table.data()[row][21];

                // データを親画面に返却
                if (field_customer_code != "") $(field_customer_code).html(data_customer_code).change();
                if (field_customer_name != "") $(field_customer_name).html(data_customer_name).change();
                if (field_customer_abbreviation != "") $(field_customer_abbreviation).html(data_customer_abbreviation).change();
                if (field_customer_kana != "") $(field_customer_kana).html(data_customer_kana).change();
                if (field_postal_code != "") $(field_postal_code).html(data_postal_code).change();
                if (field_prefecture != "") $(field_prefecture).html(data_prefecture).change();
                if (field_municipality != "") $(field_municipality).html(data_municipality).change();
                if (field_town_area != "") $(field_town_area).html(data_town_area).change();
                if (field_following_town_area != "") $(field_following_town_area).html(data_following_town_area).change();
                if (field_building_name != "") $(field_building_name).html(data_building_name).change();
                if (field_floor_number != "") $(field_floor_number).html(data_floor_number).change();
                if (field_department_name != "") $(field_department_name).html(data_department_name).change();
                if (field_contact_name != "") $(field_contact_name).html(data_contact_name).change();
                if (field_contact_remarks != "") $(field_contact_remarks).html(data_contact_remarks).change();
                if (field_tel != "") $(field_tel).html(data_tel).change();
                if (field_extension_number != "") $(field_extension_number).html(data_extension_number).change();
                if (field_fax != "") $(field_fax).html(data_fax).change();
                if (field_mobile_number != "") $(field_mobile_number).html(data_mobile_number).change();
                if (field_email_address != "") $(field_email_address).html(data_email_address).change();
                if (field_sales_contact_id != "") $(field_sales_contact_id).html(data_sales_contact_id).change();

                // モーダルダイアログを閉じる
                propositions_customersSelectDialog.dialog( "close" );
            });
        });
    </script>
</nav>
