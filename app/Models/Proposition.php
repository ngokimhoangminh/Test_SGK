<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Proposition extends Model
{
    use HasFactory;

    // タイムスタンプを無効
    public $timestamps = false;

    /**
     * 案件一覧データ取得
     * @param  [array] $cond [画面の検索条件]
     * @return $proposition [案件一覧データ]
     */
    public function getIndexData($cond)
    {
        // 抽出条件を付加してデータ取得
        $query = Proposition::query();

        // 顧客名 名前取得
        $query->leftJoin('customers as c1', 'propositions.customer_id', '=', 'c1.id');
        // 排出事業場 名前取得
        $query->leftJoin('emission_sites as e1', 'propositions.emission_site_id', '=', 'e1.id');
        // 案件種別 名称取得
        $query->leftjoin('segments as s1', function ($join) {
            $join->on('propositions.proposition_type_code', '=', 's1.code')
                 ->where('s1.segment_name_id', '=', 15);
        });
        // 案件ステータス 名称取得
        $query->leftjoin('segments as s2', function ($join) {
            $join->on('propositions.proposition_status_code', '=', 's2.code')
                 ->where('s2.segment_name_id', '=', 14);
        });
        // 営業担当者 名前取得
        $query->leftJoin('users as u1', 'propositions.sales_contact_id', '=', 'u1.id');
            
        /* --------------------
           取得項目
        ----------------------- */
        $query->select('propositions.*',
                        'c1.customer_name as proposition_customer_name',
                        'e1.emission_site_name as proposition_emission_site_name',
                        's1.name as proposition_type_name',
                        's2.name as proposition_status_name',
                        'u1.name as sales_contact_name'
        );

        /* --------------------
           条件指定
           ※SQL Serverの文字列は単一引用符で囲む必要がある
             例えばwhereでreplaceを使用する場合など要注意
        ----------------------- */
        // 顧客名
        if (isset($cond['cond_customer_name']) && ('' != $cond['cond_customer_name'])) {
            $query->where('c1.customer_name', 'like', '%' . $cond['cond_customer_name'] . '%');
        }

        // 排出事業場
        if (isset($cond['cond_emission_site_name']) && ('' != $cond['cond_emission_site_name'])) {
            $query->where('e1.emission_site_name', 'like', '%' . $cond['cond_emission_site_name'] . '%');
        }

        // // 問合せ日(開始日)
        // if (isset($cond['cond_st_Date']) && ('' != $cond['cond_st_Date'])) {
        //     $query->whereDate('inquiry_date', '>=', $cond['cond_st_Date']);
        // }
        // // 問合せ日(終了日)
        // if (isset($cond['cond_ed_date']) && ('' != $cond['cond_ed_date'])) {
        //     $query->whereDate('inquiry_date', '<=', $cond['cond_ed_date']);
        // }
        
        // // 顧客名カナ
        // if (isset($cond['cond_kana']) && ('' != $cond['cond_kana'])) {
        //     $query->where('inquirer_kana', 'like', '%' . $cond['cond_kana'] . '%');
        // }
        // // 問合せ概要
        // if (isset($cond['cond_summary']) && ('' != $cond['cond_summary'])) {
        //     $query->where('inquiry_summary_code', 'like', '%' . $cond['cond_summary'] . '%');
        // }
        // // 問合せ内容
        // if (isset($cond['cond_contents']) && ('' != $cond['cond_contents'])) {
        //     $query->where('inquiry_contents', 'like', '%' . $cond['cond_contents'] . '%');
        // }
        // // 問合せステータス
        // if (isset($cond['cond_status']) && ('' != $cond['cond_status'])) {
        //     $query->where('inquiry_status', $cond['cond_status']);
        // }
        // // 営業担当者
        // if (isset($cond['cond_sales_contact']) && ('' != $cond['cond_sales_contact'])) {
        //     $query->where('sales_contact_id', $cond['cond_sales_contact']);
        // }
        // sql実行文を確認
        // dd($query->toSql(), $query->getBindings());

        $proposition = $query->limit(1000)->get();

        return $proposition;
    }

    /**
     * 問合せ 顧客・案件検索 案件データ取得
     * 問合せ 
     * @param  [array] $cond [画面の検索条件]
     * @return $inquiries [問合せ一覧データ]
     */
    public function getInquiryPropositionData($cond)
    {

        // 条件を付加してデータ取得
        $query = Proposition::query();

        // 排出事業場 名前取得
        $query->leftJoin('emission_sites as es', 'propositions.emission_site_id', '=', 'es.id');

        // 案件ステータス 名称取得
        $query->leftjoin('segments as s1', function ($join) {
            $join->on('propositions.proposition_status_code', '=', 's1.code')
                 ->where('s1.segment_name_id', '=', 14);
        });

        // 案件種別 名称取得
        $query->leftjoin('segments as s2', function ($join) {
            $join->on('propositions.proposition_type_code', '=', 's2.code')
                 ->where('s2.segment_name_id', '=', 15);
        });

        // 収集形態(契約前) 名称取得
        $query->leftjoin('segments as s3', function ($join) {
            $join->on('propositions.before_contract_collection_form_code', '=', 's3.code')
                 ->where('s3.segment_name_id', '=', 17);
        });
 
        /* --------------------
           取得項目
        ----------------------- */
        $query->select('propositions.*',
                        'es.emission_site_name',
                        's1.name as proposition_status_name',
                        's2.name as proposition_type_name',
                        's3.name as before_contract_collection_form_name'
        );

        /* --------------------
           条件指定
           ※SQL Serverの文字列は単一引用符で囲む必要がある
             例えばwhereでreplaceを使用する場合など要注意
        ----------------------- */
        // 案件ID
        if (isset($cond['cond_id']) && ('' != $cond['cond_id'])) {
            $query->where('propositions.id', '=', $cond['cond_id']);
        }
        // 顧客ID
        if (isset($cond['cond_customer_id']) && ('' != $cond['cond_customer_id'])) {
            $query->where('propositions.customer_id', '=', $cond['cond_customer_id']);
        }
        // 排出事業者ID
        if (isset($cond['cond_emission_company_id']) && ('' != $cond['cond_emission_company_id'])) {
            $query->where('propositions.emission_company_id', '=', $cond['cond_emission_company_id']);
        }
        // sql実行文を確認
        // dd($query->toSql(), $query->getBindings());

        $propositions = $query->limit(1000)->get();

        return $propositions;
    }
}
