<!-- タイトル -->
<title>配車データ更新</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            配車データ更新
        </h2>
    </x-slot>

    <form method="POST" action="">
        @csrf

        <div class="tab-content tab-space m-3">
            <div class="flex mx-2 mb-10">
                <div class="grid grid-cols-8 gap-2">
                    <div class="col-span-3">
                        <button type="button" style="width: 100px; padding: 10px; background-color: #87CEEB; color: #FFFFFF; border-radius: 0.5rem;" onclick="location.href='/allocation_vehicles/week'">週間</button>
                    </div>
                    <div class="col-span-5"></div>

                    <div class="col-span-1">
                        <label class="leading-10">収集日</label>
                    </div>
                    <div class="col-span-2">
                        <input type='text' placeholder="2021/07/05（月）" class="w-full border rounded focus:outline-none focus:border-green-500" id="#">
                    </div>
                    <div class="col-span-5"></div>

                    <div class="col-span-1">
                        <label class="leading-10">車両</label>
                    </div>
                    <div class="col-span-2">
                        <select class="w-full border rounded bg-white px-3 py-2 outline-none">
                            <option>307号車</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div>
                <div style="float: left; width: 300px;">
                    <!-- 未割当収集場所 -->
                    <div id="area1" class="connectedSortable text-center" data="area1-data" style="margin: 2px 3px 20px 20px; width: 200px; border: 1px #ccc solid;">
                        <h2 class="font-semibold text-blue-400">未割当収集場所</h2>
                        <!-- 未割当の場所を以下に列挙する -->
                        <div id="area1-data-1" class="area1-data" data="area1-data-1">場所ＡＡＡ</div>
                        <div id="area1-data-2" class="area1-data" data="area1-data-2">場所ＢＢＢ</div>
                        <div id="area1-data-3" class="area1-data" data="area1-data-3">場所ＣＣＣ</div>
                        <div id="area1-data-4" class="area1-data" data="area1-data-4">場所ＤＤＤ</div>
                    </div>

                    <!-- 処分場 -->
                    <div id="area2" class="connectedSortable text-center" data="area2-data" style="margin: 2px 3px 20px 20px; width: 200px; border: 1px #ccc solid;">
                        <div class="font-semibold text-blue-400">処分場</div>
                        <!-- 処分場を以下に列挙する -->
                        <div id="area2-data-1" class="area2-data" data="area2-data-1">処分場ＡＡＡ</div>
                        <div id="area2-data-2" class="area2-data" data="area2-data-2">処分場ＢＢＢ</div>
                    </div>
                    {{-- <button onclick="add();">追加</button> --}}

                    <!-- その他 -->
                    <div id="area3" class="connectedSortable text-center" data="area3-data" style="margin: 2px 3px 20px 20px; width: 200px; border: 1px #ccc solid;">
                        <div class="font-semibold text-blue-400">その他</div>
                        <!-- 積み替え保管などを以下に列挙する -->
                        <div id="area3-data-1" class="area3-data" data="area3-data-1">積み替え保管</div>
                    </div>
                </div>
                
                <div style="float: left; width: 400px;">
                    <!-- 右側 -->
                    <table class="table table-hover" style="width: 300px; border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td class="font-semibold text-blue-400 text-center">2021/07/05（月）</td>
                            </tr>
                            {{-- <tr>
                                <td>終日</td>
                                <td></td>
                            </tr> --}}
                            <tr style="border-bottom:1px double #ccc;">
                                <td class="font-semibold text-blue-400" height="50">終日</td>
                                <td id="all-data" class="all-data text-center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-blue-400" height="40">8:00</td>
                                <td class="connectedSortable text-center time-data" data="8:00" style="border-bottom:1px dashed #ccc;"></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc;">
                                <td height="40">&nbsp;</td>
                                <td class="connectedSortable text-center time-data" data="8:30"></td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-blue-400" height="40">9:00</td>
                                <td class="connectedSortable text-center time-data" data="9:00" style="border-bottom:1px dashed #ccc;"></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc;">
                                <td height="40">&nbsp;</td>
                                <td class="connectedSortable text-center time-data" data="9:30"></td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-blue-400" height="40">10:00</td>
                                <td class="connectedSortable text-center time-data" data="10:00" style="border-bottom:1px dashed #ccc;"></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc;">
                                <td height="40">&nbsp;</td>
                                <td class="connectedSortable text-center time-data" data="10:30"></td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-blue-400" height="40">11:00</td>
                                <td class="connectedSortable text-center time-data" data="11:00" style="border-bottom:1px dashed #ccc;"></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc;">
                                <td height="40">&nbsp;</td>
                                <td class="connectedSortable text-center time-data" data="11:30"></td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-blue-400" height="40">12:00</td>
                                <td class="connectedSortable text-center time-data" data="12:00" style="border-bottom:1px dashed #ccc;"></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc;">
                                <td height="40">&nbsp;</td>
                                <td class="connectedSortable text-center time-data" data="12:30"></td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-blue-400" height="40">13:00</td>
                                <td class="connectedSortable text-center time-data" data="13:00" style="border-bottom:1px dashed #ccc;"></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc;">
                                <td height="40">&nbsp;</td>
                                <td class="connectedSortable text-center time-data" data="13:30"></td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-blue-400" height="40">14:00</td>
                                <td class="connectedSortable text-center time-data" data="14:00" style="border-bottom:1px dashed #ccc;"></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc;">
                                <td height="40">&nbsp;</td>
                                <td class="connectedSortable text-center time-data" data="14:30"></td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-blue-400" height="40">15:00</td>
                                <td class="connectedSortable text-center time-data" data="15:00" style="border-bottom:1px dashed #ccc;"></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc;">
                                <td height="40">&nbsp;</td>
                                <td class="connectedSortable text-center time-data" data="15:30"></td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-blue-400" height="40">16:00</td>
                                <td class="connectedSortable text-center time-data" data="16:00" style="border-bottom:1px dashed #ccc;"></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc;">
                                <td height="40">&nbsp;</td>
                                <td class="connectedSortable text-center time-data" data="16:30"></td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-blue-400" height="40">17:00</td>
                                <td class="connectedSortable text-center time-data" data="17:00" style="border-bottom:1px dashed #ccc;"></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc;">
                                <td height="40">&nbsp;</td>
                                <td class="connectedSortable text-center time-data" data="17:30"></td>
                            </tr>
                            <tr>
                                <td class="font-semibold text-blue-400" height="40">18:00</td>
                                <td class="connectedSortable text-center time-data" data="18:00" style="border-bottom:1px dashed #ccc;"></td>
                            </tr>
                            <tr style="border-bottom:1px solid #ccc;">
                                <td height="40">&nbsp;</td>
                                <td class="connectedSortable text-center time-data" data="18:30"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>

        <!-- ボタン -->
        <div class="py-6 px-2 sm:px-6 lg:px-8">
            <div class="grid grid-cols-12 gap-2 items-center">
                <div class="col-span-2">
                    <button class="w-full px-2 py-1 bg-blue-400 text-white font-semibold rounded hover:bg-blue-500">キャンセル</button>
                </div>
                <div class="col-span-2">
                    <!-- Submitボタン -->
                    <button type="submit" class="w-full px-2 py-1 bg-red-400 text-white font-semibold rounded hover:bg-red-500">登録</button>
                </div>
            </div>
        </div>
    </form>
 
    <!-- ダイアログ -->
    <div id="all-data-dialog" style="display:none;">
        <div class="col-span-1">
            <label class="leading-10">車両予定</label>
        </div>
        <div class="col-span-2">
            <select id="all_status" class="w-full border rounded bg-white px-3 py-2 outline-none">
                <option>車検</option>
                <option>点検</option>
            </select>
        </div>
        <div>&nbsp;</div>
        <div class="col-span-1">
            <label class="align-top" for="inquiry_contents">メモ</label>
        </div>
        <div class="col-span-3">
            <textarea id="all_status_memo" class="w-full border rounded focus:outline-none focus:border-green-500" rows="4"></textarea>
        </div>
    </div>

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
        .area1-data {
            margin: 5px;
            background-color: #FFA500;
            color: #FFFFFF;
            width: 150px;
            text-align: center;
            border-radius: 0.5rem;
            display:inline-flex;
            align-items: center;
            justify-content: center;
        }
        .area2-data {
            margin: 5px;
            background-color: #808080;
            color: #FFFFFF;
            width: 150px;
            text-align: center;
            border-radius: 0.5rem;
            display:inline-flex;
            align-items: center;
            justify-content: center;
        }
        .area3-data {
            margin: 5px;
            background-color: #EE82EE;
            color: #FFFFFF;
            width: 150px;
            text-align: center;
            border-radius: 0.5rem;
            display:inline-flex;
            align-items: center;
            justify-content: center;
        }
        .all-data-add {
            margin: 5px;
            background-color: #ff0000;
            color: #FFFFFF;
            width: 150px;
            text-align: center;
            border-radius: 0.5rem;
            display:inline-flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <script defer>
        $(function () {
            var move_before;
            $('.connectedSortable').sortable({
                // このクラス間だけ相互移動できる。
                connectWith: '.connectedSortable',
                start: function( event, ui) {
                    // 移動開始
                    // 移動元
                    move_before = ui.item.closest('.connectedSortable').attr('data');
                },
                stop: function( event, ui ) {
                    // 移動完了
                    // 移動対象オブジェクト
                    var move_item = ui.item.attr('data');
            
                    // console.log(ui.item.closest('td').attr('data'));
                    // 移動先
                    var move_after = ui.item.closest('.connectedSortable').attr('data');
                    // console.log(ui.item.closest('.connectedSortable').attr('data'));
                    // console.log(move_before);

                    // 処分場、その他は移動したら同じの増やす
                    if ( move_before == "area2-data") {
                        if (move_after != "area1-data" && move_after != "area3-data"){
                            if (move_item == "area2-data-1") {
                                $("#area2").append("<div id='area2-data-1-add' class='area2-data' data='area2-data-1'>処分場ＡＡＡ</div>");
                            }
                            if (move_item == "area2-data-2") {
                                $("#area2").append("<div id='area2-data-2-add' class='area2-data' data='area2-data-2'>処分場ＢＢＢ</div>");
                            }
                        }
                    }
                    if ( move_before == "area3-data") {
                        if (move_after != "area1-data" && move_after != "area2-data"){
                            if (move_item == "area3-data-1") {
                                $("#area3").append("<div id='area3-data-1-add' class='area3-data' data='area3-data-1'>積み替え保管</div>");
                            }
                        }
                    }

                    // 未割当収集場所はそのエリアのみ移動可能にする
                    if (String(move_item).substr(0,5) == "area1") {
                        if (move_after == "area2-data" || move_after == "area3-data"){
                            // 移動不可とする
                            return false;
                        }
                    }

                    // 処分場はそのエリアのみ移動可能にする
                    if (String(move_item).substr(0,5) == "area2") {
                        if (move_after == "area1-data" || move_after == "area3-data"){
                            // 移動不可とする
                            return false;
                        }
                        else if (move_after == "area2-data"){
                            $('#' + move_item + '-add').remove();
                        }
                    }

                    // その他はそのエリアのみ移動可能にする
                    if (String(move_item).substr(0,5) == "area3") {
                        if (move_after == "area1-data" || move_after == "area2-data"){
                            // 移動不可とする
                            return false;
                        }
                        else if (move_after == "area3-data"){
                            $('#' + move_item + '-add').remove();
                        }
                    }
                }
            }).disableSelection();
        });

        // 終日エリアクリック
        $('.all-data').on('click', function() {
            // if(!$('#all-data-add-1').length && !$('#all-data-add-2').length){
                $("#all-data-dialog").dialog({ 
                    modal : true,
                    title : "終日スケジュール登録",
                    buttons: { 
                        "確認": function() {
                            // 終日予定
                            var all_status = $("#all_status").val();
                            var all_status_memo = $("#all_status_memo").val();
                            $(this).dialog("close");

                            if($('#all-data-add-1').length){
                                // 削除
                                $('#all-data-add-1').remove();
                            }
                            // 追加
                            $("#all-data").append("<div id='all-data-add-1' class='all-data-add' title='メモ：" + all_status_memo + "'>" + all_status + "</div>");
                        }
                    },
                    // ダイアログ表示イベント
                    open: function(event, ui) {
                        $("#all_status").val('');
                        $("#all_status_memo").val('');
                    }
                });
            // }
        });

        // 時間帯エリアクリック
        $('.time-data').on('click', function() {
            if($(this).find('.area1-data').length || $(this).find('.area2-data').length || $(this).find('.area3-data').length){
                // id取得
                var area1_id = '';
                var area2_id = '';
                var area3_id = '';

                if($(this).find('.area1-data').length){
                    area1_id = $(this).find('.area1-data').attr('id');
                }
                if($(this).find('.area2-data').length){
                    area2_id = $(this).find('.area2-data').attr('id');
                }
                if($(this).find('.area3-data').length){
                    area3_id = $(this).find('.area3-data').attr('id');
                }

                $("#time-data-dialog").dialog({ 
                    modal : true,
                    title : "運搬担当者登録",
                    buttons: { 
                        "確認": function() {
                            // 運搬担当者
                            var transporter = $("#transporter").val();
                            var transporter_memo = $("#transporter_memo").val();
                            $(this).dialog("close");

                            // ツールチップ設定
                            var obj_id = '';
                            if (area1_id != ''){
                                obj_id = document.querySelector('#' + area1_id);
                            }else if(area2_id != ''){
                                obj_id = document.querySelector('#' + area2_id);
                            }else{
                                obj_id = document.querySelector('#' + area3_id);
                            }
                            obj_id.title = '運搬担当者：' + transporter + '　メモ：' + transporter_memo;
                        }
                    },
                    // ダイアログ表示イベント
                    open: function(event, ui) {
                        $("#transporter").val('');
                        $("#transporter_memo").val('');
                    }
                });
            }
        });


    </script>
</x-app-layout>
