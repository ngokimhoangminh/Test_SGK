<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;

    // タイムスタンプを無効
    public $timestamps = false;

    /**
     * 問合せ 顧客・案件検索
     * @param  [type] $cond [description]
     * @return [type]       [description]
     */
    public function getInquiryCustomerData($cond)
    {
        // 抽出条件を付加してデータ取得
        $query = Customer::query();

        /* --------------------
           取得項目
        ----------------------- */
        $query->select('customers.*');

        // 検索対象が[排出事業者]or[すべて]の場合
        if ($cond['cond_search_target'] =="2" || $cond['cond_search_target'] =="4") {
            // [排出事業者]をleftjoin
            $query->leftJoin('emission_companies as ec', 'customers.id', '=', 'ec.customer_id');
        }

        // 検索対象が[排出事業場]or[すべて]の場合
        if ($cond['cond_search_target'] =="3" || $cond['cond_search_target'] =="4") {
            // [排出事業者]をleftjoin
            $query->leftJoin('emission_companies', 'customers.id', '=', 'emission_companies.customer_id');
            // [排出事業場]を[排出事業者]にleftjoin
            $query->leftJoin('emission_sites', 'emission_companies.id', '=', 'emission_sites.emission_company_id');
        }

        /* --------------------
           条件指定
           ※SQL Serverの文字列は単一引用符で囲む必要がある
             例えばwhereでreplaceを使用する場合など要注意
        ----------------------- */
        // -- 検索対象の選択によって条件を指定するテーブルが異なる --
        // 電話番号・FAX
        if (isset($cond['cond_tel']) && ('' != $cond['cond_tel'])) {
            $cond_search_target = $cond['cond_search_target'];
            $cond_tel = str_replace(array(' ', '　', '-'), '', $cond['cond_tel']);
            $query->where(function($query) use($cond_search_target, $cond_tel) {
                switch ($cond_search_target) {
                    case "1":   // 顧客
                        $query->whereRaw("replace(customers.tel, '-', '') like ?", ['%' . $cond_tel . '%'])
                              ->orWhereRaw("rplace(customers.fax, '-', '') like ?", ['%' . $cond_tel . '%']);
                        break;
                    case "2":   // 排出事業者
                        $query->whereRaw("replace(emission_companies.tel, '-', '') like ?", ['%' . $cond_tel . '%'])
                              ->orWhereRaw("rplace(emission_companies.fax, '-', '') like ?", ['%' . $cond_tel . '%']);
                        break;
                    case "3":   // 排出事業場
                        $query->whereRaw("replace(emission_sites.tel, '-', '') like ?", ['%' . $cond_tel . '%'])
                              ->orWhereRaw("rplace(emission_sites.fax, '-', '') like ?", ['%' . $cond_tel . '%']);
                        break;
                    case "4":   // すべて
                        $query->whereRaw("replace(customers.tel, '-', '') like ?", ['%' . $cond_tel . '%'])
                              ->orWhereRaw("rplace(customers.fax, '-', '') like ?", ['%' . $cond_tel . '%'])
                              ->orWhereRaw("rplace(emission_companies.tel, '-', '') like ?", ['%' . $cond_tel . '%'])
                              ->orWhereRaw("rplace(emission_companies.fax, '-', '') like ?", ['%' . $cond_tel . '%'])
                              ->orWhereRaw("rplace(emission_sites.tel, '-', '') like ?", ['%' . $cond_tel . '%'])
                              ->orWhereRaw("rplace(emission_sites.fax, '-', '') like ?", ['%' . $cond_tel . '%']);
                        break;
                }
            });
        }

        // 郵便番号
        if (isset($cond['cond_postal_code']) && ('' != $cond['cond_postal_code'])) {
            $cond_postal_code = str_replace(array(' ', '　', '-', 'ー', '−', '―', '‐'), '', $cond['cond_postal_code']);
            switch ($cond['cond_search_target']) {
                case "1":   // 顧客
                    $query->whereRaw("replace(customers.postal_code, '-', '') like ?", ['%' . $cond_postal_code . '%']);
                    break;
                case "2":   // 排出事業者
                    $query->whereRaw("replace(emission_companies.postal_code, '-', '') like ?", ['%' . $cond_postal_code . '%']);
                    break;
                case "3":   // 排出事業場
                    $query->whereRaw("replace(emission_sites.postal_code, '-', '') like ?", ['%' . $cond_postal_code . '%']);
                    break;
                case "4":   // すべて
                    $query->where(function($query) use($cond_postal_code) {
                        $query->whereRaw("replace(customers.postal_code, '-', '') like ?", ['%' . $cond_postal_code . '%'])
                              ->orWhereRaw("rplace(emission_companies.postal_code, '-', '') like ?", ['%' . $cond_postal_code . '%'])
                              ->orWhereRaw("rplace(emission_sites.postal_code, '-', '') like ?", ['%' . $cond_postal_code . '%']);
                    });
                    break;
            }
        }
        // 顧客コード
        if (isset($cond['cond_customer_code']) && ('' != $cond['cond_customer_code'])) {
            $cond_code = str_replace(array(' ', '　'), '', $cond['cond_customer_code']);
            switch ($cond['cond_search_target']) {
                case "1":   // 顧客
                    $query->where('customers.customer_code', 'like', '%' . $cond_code . '%');
                    break;
                case "2":   // 排出事業者
                    // $query->where('emission_companies.emission_company_code', 'like', '%' . $cond_code . '%');
                    break;
                case "3":   // 排出事業場
                    // $query->where('emission_sites.emission_site_code', 'like', '%' . $cond_code . '%');
                    break;
                case "4":   // すべて
                    // $query->where(function($query) use($cond_code) {
                    //     $query->where('customers.customer_code', 'like', '%' . $cond_code . '%');
                    //           ->orWhere('emission_companies.emission_company_code', 'like', '%' . $cond_code . '%')
                    //           ->orWhere('emission_sites.emission_site_code', 'like', '%' . $cond_code . '%');
                    // }
                    break;
            }
        }

        // 顧客名
        if (isset($cond['cond_customer_name']) && ('' != $cond['cond_customer_name'])) {
            $cond_search_target = $cond['cond_search_target'];
            $cond_name = str_replace(array(' ', '　'), '', $cond['cond_customer_name']);
            $query->where(function($query) use($cond_search_target, $cond_name) {
                switch ($cond_search_target) {
                    case "1":   // 顧客
                        $query->where('customers.customer_name', 'like', '%' . $cond_name . '%')
                              ->orwhere('customers.customer_abbreviation', 'like', '%' . $cond_name . '%');
                        break;
                    case "2":   // 排出事業者
                        $query->where('emission_companies.emission_company_name', 'like', '%' . $cond_name . '%')
                              ->orwhere('emission_companies.emission_company_abbreviation', 'like', '%' . $cond_name . '%');
                        break;
                    case "3":   // 排出事業場
                        $query->where('emission_sites.emission_site_name', 'like', '%' . $cond_name . '%')
                              ->orwhere('emission_sites.emission_site_abbreviation', 'like', '%' . $cond_name . '%');
                        break;
                    case "4":   // すべて
                        $query->where('customers.customer_name', 'like', '%' . $cond_name . '%')
                              ->orwhere('customers.customer_abbreviation', 'like', '%' . $cond_name . '%')
                              ->orwhere('emission_companies.emission_company_name', 'like', '%' . $cond_name . '%')
                              ->orwhere('emission_companies.emission_company_abbreviation', 'like', '%' . $cond_name . '%')
                              ->orwhere('emission_sites.emission_site_name', 'like', '%' . $cond_name . '%')
                              ->orwhere('emission_sites.emission_site_abbreviation', 'like', '%' . $cond_name . '%');
                        break;
                }
            });
        }
        // sql実行文を確認
        // dd($query->toSql(), $query->getBindings());

        $customers = $query->distinct()->limit(1000)->get();

        return $customers;
    }

    /**
     * 顧客データ取得
     * 顧客検索子画面 
     * @param  [array] $cond [画面の検索条件]
     * @return $customers [顧客一覧データ]
     */
    public function getCustomerData($cond)
    {

        // 条件を付加してデータ取得
        $query = Customer::query();

        /* --------------------
           取得項目
        ----------------------- */
        $query->select('customers.*');

        /* --------------------
           条件指定
           ※SQL Serverの文字列は単一引用符で囲む必要がある
             例えばwhereでreplaceを使用する場合など要注意
        ----------------------- */
        // 顧客コード
        if (isset($cond['customer_code']) && ('' != $cond['customer_code'])) {
            $query->where('customer_code', 'like', '%' . $cond['customer_code'] . '%');
        }
        // 顧客名
        if (isset($cond['customer_name']) && ('' != $cond['customer_name'])) {
            $query->where('customer_name', 'like', '%' . $cond['customer_name'] . '%');
        }
        // 顧客カナ
        if (isset($cond['customer_kana']) && ('' != $cond['customer_kana'])) {
            $query->where('customer_kana', 'like', '%' . $cond['customer_kana'] . '%');
        }

        $customers = $query->limit(1000)->get();

        return $customers;
    }
}
