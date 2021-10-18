<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class DialogsController extends Controller
{
    /**
     * 顧客情報取得処理
     *
     * @param string $customer_code         [顧客コード]
     * @param string $customer_name         [顧客名]
     * @return json[$data] [顧客情報]
     */
    public function ajaxGetCustomersData($customer_code = '', $customer_name = '')
    {
        $cond = array(
            'customer_code'         => $customer_code,
            'customer_name'         => $customer_name,
        );

        // 顧客一覧データ取得
        $customers = new Customer;
        $data = '';
        // $data = $customers->getInquiryPropositionData($cond);

        return response()->json($data);
    }

}
