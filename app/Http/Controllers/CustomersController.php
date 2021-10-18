<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
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
        return view('customers.create');
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
     * 顧客情報取得処理
     *
     * @param string $customer_code         [顧客コード]
     * @param string $customer_name         [顧客名]
     * @param string $customer_kana         [顧客カナ]
     * @return json[$data] [顧客情報]
     */
    public function ajaxGetCustomersData($customer_code = '', $customer_name = '', $customer_kana = '')
    {
        // 検索条件の組み立て
        // 「*」の場合は空白に置換する
        unset($cond);
        if ('*' == $customer_code)             $customer_code = '';
        if ('*' == $customer_name)             $customer_name = '';
        if ('*' == $customer_kana)             $customer_kana = '';
        $cond = array(
            'customer_code'         => $customer_code,
            'customer_name'         => $customer_name,
            'customer_kana'         => $customer_kana,
        );

        // 顧客一覧データ取得
        $customers = new Customer;
        $data = $customers->getCustomerData($cond);

        return response()->json($data);
    }
}
