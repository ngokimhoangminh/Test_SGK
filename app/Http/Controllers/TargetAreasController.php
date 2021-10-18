<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TargetArea;

class TargetAreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 郵便番号検索 住所情報取得処理
     *
     * @param string $postal_code [郵便番号]
     * @return json[$data] [住所情報]
     */
    public function ajaxGetAddressData($postal_code = '')
    {
        // 検索キー[郵便番号]設定
        $cond = array(
            'cond_postal_code' => $postal_code,
        );

        // 住所情報(対象エリア情報)取得
        $target_area = new TargetArea;
        $data = $target_area->getAddressData($cond);

        return response()->json($data);
    }
}
