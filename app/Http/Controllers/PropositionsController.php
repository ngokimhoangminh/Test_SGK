<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposition;
use App\Models\Segment;
use App\Models\User;

class PropositionsController extends Controller
{
    /**
     * グローバル変数
     */
    protected $seg_proposition_status;          // 案件ステータス
    protected $user_sales;                      // 営業担当者


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // コード値・ユーザー情報取得
        $this->_get_master_data();

        $proposition_status_segments = $this->seg_proposition_status; // 案件ステータス
        $sales_users = $this->user_sales;                             // 営業担当者

        // 変数の初期化
        $cond = [];
        $data = [];

        // POSTで呼ばれたとき
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // POSTデータを変数に格納
            $cond = $request->input();
            // dd($cond);

            // 案件一覧データ取得
            $proposition = new Proposition;
            $data = $proposition->getIndexData($cond);
        }
        
        // ビューに渡す値
        $param = [
            'propositions' => $data,
            'cond_customer_name'             => isset($cond['cond_customer_name']) ? $cond['cond_customer_name'] : '',
            'cond_emission_site_name'        => isset($cond['cond_emission_site_name']) ? $cond['cond_emission_site_name'] : '',
            'cond_proposition_status_code_1' => isset($cond['cond_proposition_status_code_1']) ? $cond['cond_proposition_status_code_1'] : '',
            'cond_proposition_status_code_2' => isset($cond['cond_proposition_status_code_2']) ? $cond['cond_proposition_status_code_2'] : '',
            'cond_order_date_start'          => isset($cond['cond_order_date_start']) ? $cond['cond_order_date_start'] : '',
            'cond_order_date_end'            => isset($cond['cond_order_date_end']) ? $cond['cond_order_date_end'] : '',
            'cond_sales_contact'             => isset($cond['cond_sales_contact']) ? $cond['cond_sales_contact'] : '',
        ];

        return view('propositions.index', $param, 
                    compact('proposition_status_segments', 'sales_users'));
    }

    /**
     * Search and determine the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        return view('propositions.search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('propositions.create');
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
     * 選択肢データをグローバル変数に設定
     * 
     */
    private function _get_master_data()
    {
        // コード値取得
        $segments = new Segment;
        // [案件ステータス]
        $wk_proposition_status = $segments::select('code', 'name')
                                    ->where('segment_name_id', 14)
                                    ->orderBy('id')
                                    ->get();
        // キーを[code]に変更
        $this->seg_proposition_status = $wk_proposition_status->pluck('name', 'code');

        // 担当者マスタ取得[営業担当者(自社担当者)]
        $users = new User;
        $wk_sales_users = $users::select('id', 'name')
                        ->where('department_id', 3)
                        ->orderBy('id')
                        ->get();
        // キーを[id]に変更
        $this->user_sales = $wk_sales_users->pluck('name', 'id');

    }
}
