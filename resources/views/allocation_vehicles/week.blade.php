<!-- タイトル -->
<title>配車データ週間データ表示</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            配車データ週間データ表示
        </h2>
    </x-slot>

    <!-- ヘッダー -->
    <div class="tab-content tab-space m-3">
        <div class="flex mx-2 mb-10">
            <div class="grid grid-cols-8 gap-2">
                <div class="col-span-3">
                    <button style="width: 100px; padding: 10px; background-color: #87CEEB; color: #FFFFFF; border-radius: 0.5rem;" onclick="location.href='/allocation_vehicles'">更新画面</button>
                </div>
                <div class="col-span-5"></div>

                <div class="col-span-3">
                    <label class="leading-10">車両</label>
                </div>
                <div class="col-span-5">
                    <select class="w-full border rounded bg-white px-3 py-2 outline-none">
                        <option>307号車</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- ボタン -->
    <div class="tab-content tab-space m-3">
        <div class="flex mx-2 mb-2">
            <div class="grid grid-cols-8 gap-2">
                <div class="col-span-2">
                    <button style="width: 100px;" class="bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">＜</button>
                </div>
                <div class="col-span-2">
                    <button style="width: 100px;" class="bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">＞</button>
                </div>
                <div class="col-span-2">
                    <button style="width: 100px;" class="bg-blue-500 text-gray-100 rounded hover:bg-blue-400 px-4 py-2 focus:outline-none">今日</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div>
            <!-- 時間帯表示列 -->
            <div style="margin: 2px 0px 20px 20px; float: left; width: 50px;">
                <table class="table table-hover" style="width: 50px; border-collapse:collapse;">
                    <tbody>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-blue-400" height="50">終日</td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-blue-400" height="40">8:00</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-blue-400" height="40">9:00</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-blue-400" height="40">10:00</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-blue-400" height="40">11:00</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-blue-400" height="40">12:00</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-blue-400" height="40">13:00</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-blue-400" height="40">14:00</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-blue-400" height="40">15:00</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-blue-400" height="40">16:00</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-blue-400" height="40">17:00</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-blue-400" height="40">18:00</td>
                        </tr>
                        <tr>
                            <td height="40">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- 日曜日 -->
            <div style="margin: 2px 0px 20px 0px; float: left; width: 200px;">
                <table class="table table-hover" style="width: 200px; border-collapse:collapse;">
                    <tbody>
                        <tr>
                            <td class="font-semibold text-blue-400 text-center">2021/07/05（日）</td>
                        </tr>
                        <tr style="border-bottom:1px double #ccc;">
                            <td id="all-data" class="all-data text-center" height="50"><div id='all-data-add-1' class='all-data-add'>車検</div></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="8:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="8:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="9:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="9:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="10:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="10:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="11:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="11:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="12:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="12:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="13:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="13:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="14:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="14:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="15:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="15:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="16:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="16:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="17:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="17:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="18:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="18:30" height="40"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- 月曜日 -->
            <div style="margin: 2px 0px 20px 0px; float: left; width: 200px;">
                <table class="table table-hover" style="width: 200px; border-collapse:collapse;">
                    <tbody>
                        <tr>
                            <td class="font-semibold text-blue-400 text-center">2021/07/06（月）</td>
                        </tr>
                        <tr style="border-bottom:1px double #ccc;">
                            <td id="all-data" class="all-data text-center" height="50"><div id='all-data-add-1' class='all-data-add'>車検</div></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="8:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="8:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="9:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="9:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="10:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="10:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="11:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="11:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="12:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="12:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="13:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="13:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="14:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="14:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="15:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="15:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="16:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="16:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="17:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="17:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="18:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="18:30" height="40"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- 火曜日 -->
            <div style="margin: 2px 0px 20px 0px; float: left; width: 200px;">
                <table class="table table-hover" style="width: 200px; border-collapse:collapse;">
                    <tbody>
                        <tr>
                            <td class="font-semibold text-blue-400 text-center">2021/07/07（火）</td>
                        </tr>
                        <tr style="border-bottom:1px double #ccc;">
                            <td id="all-data" class="all-data text-center" height="50"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="8:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area1-data" data="area1-data-1">(定期)場所ＡＡＡ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="8:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="9:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="9:30" height="40"><div class="area1-data" data="area1-data-1">(臨時)場所ＢＢＢ</div></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="10:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="10:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="11:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area1-data" data="area1-data-1">(臨時)場所ＣＣＣ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="11:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="12:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area2-data" data="area2-data-1">処分場ＡＡＡ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="12:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="13:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="13:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="14:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="14:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="15:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="15:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="16:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="16:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="17:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="17:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="18:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="18:30" height="40"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- 水曜日 -->
            <div style="margin: 2px 0px 20px 0px; float: left; width: 200px;">
                <table class="table table-hover" style="width: 200px; border-collapse:collapse;">
                    <tbody>
                        <tr>
                            <td class="font-semibold text-blue-400 text-center">2021/07/08（水）</td>
                        </tr>
                        <tr style="border-bottom:1px double #ccc;">
                            <td id="all-data" class="all-data text-center" height="50"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="8:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area1-data" data="area1-data-1">(定期)場所ＡＡＡ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="8:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="9:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="9:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="10:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area1-data" data="area1-data-1">(臨時)場所ＤＤＤ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="10:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="11:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area3-data" data="area3-data-1">積み替え保管</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="11:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="12:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area1-data" data="area1-data-1">(定期)場所ＥＥＥ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="12:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="13:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="13:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="14:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area1-data" data="area1-data-1">(臨時)場所ＦＦＦ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="14:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="15:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area2-data" data="area2-data-2">処分場ＢＢＢ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="15:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="16:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="16:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="17:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="17:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="18:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="18:30" height="40"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- 木曜日 -->
            <div style="margin: 2px 0px 20px 0px; float: left; width: 200px;">
                <table class="table table-hover" style="width: 200px; border-collapse:collapse;">
                    <tbody>
                        <tr>
                            <td class="font-semibold text-blue-400 text-center">2021/07/09（木）</td>
                        </tr>
                        <tr style="border-bottom:1px double #ccc;">
                            <td id="all-data" class="all-data text-center" height="50"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="8:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area1-data" data="area1-data-1">(定期)場所ＡＡＡ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="8:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="9:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="9:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="10:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="10:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="11:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="11:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="12:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area1-data" data="area1-data-1">(定期)場所ＥＥＥ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="12:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="13:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area2-data" data="area2-data-2">処分場ＢＢＢ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="13:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="14:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="14:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="15:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="15:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="16:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="16:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="17:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="17:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="18:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="18:30" height="40"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- 金曜日 -->
            <div style="margin: 2px 0px 20px 0px; float: left; width: 200px;">
                <table class="table table-hover" style="width: 200px; border-collapse:collapse;">
                    <tbody>
                        <tr>
                            <td class="font-semibold text-blue-400 text-center">2021/07/10（金）</td>
                        </tr>
                        <tr style="border-bottom:1px double #ccc;">
                            <td id="all-data" class="all-data text-center" height="50"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="8:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area1-data" data="area1-data-1">(定期)場所ＡＡＡ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="8:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="9:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="9:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="10:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="10:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="11:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="11:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="12:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area1-data" data="area1-data-1">(定期)場所ＥＥＥ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="12:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="13:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area2-data" data="area2-data-2">処分場ＢＢＢ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="13:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="14:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="14:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="15:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="15:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="16:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="16:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="17:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="17:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="18:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="18:30" height="40"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- 土曜日 -->
            <div style="margin: 2px 0px 20px 0px; float: left; width: 200px;">
                <table class="table table-hover" style="width: 200px; border-collapse:collapse;">
                    <tbody>
                        <tr>
                            <td class="font-semibold text-blue-400 text-center">2021/07/11（土）</td>
                        </tr>
                        <tr style="border-bottom:1px double #ccc;">
                            <td id="all-data" class="all-data text-center" height="50"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="8:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area1-data" data="area1-data-1">(定期)場所ＡＡＡ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="8:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="9:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="9:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="10:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="10:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="11:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="11:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="12:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area1-data" data="area1-data-1">(定期)場所ＥＥＥ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="12:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="13:00" style="border-bottom:1px dashed #ccc;" height="40"><div class="area2-data" data="area2-data-2">処分場ＢＢＢ</div></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="13:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="14:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="14:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="15:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="15:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="16:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="16:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="17:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="17:30" height="40"></td>
                        </tr>
                        <tr>
                            <td class="text-center" data="18:00" style="border-bottom:1px dashed #ccc;" height="40"></td>
                        </tr>
                        <tr style="border-bottom:1px solid #ccc;">
                            <td class="text-center" data="18:30" height="40"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="clear: both;"></div>
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
        });
    </script>
</x-app-layout>
