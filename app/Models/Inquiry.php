<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inquiry extends Model
{
    use HasFactory;

    // タイムスタンプを無効
    // public $timestamps = false;

    /**
     * 問合せ一覧データ取得
     * @param  [array] $cond [画面の検索条件]
     * @return $inquiries [問合せ一覧データ]
     */
    public function getIndexData($cond)
    {
        
        // 抽出条件を付加してデータ取得
        $query = Inquiry::query();

        // 問合せ概要 viewで名称に変換
        
        // 問合せステータス 名称取得
        $query->leftjoin('segments as s1', function ($join) {
            $join->on('inquiries.inquiry_status', '=', 's1.code')
                 ->where('s1.segment_name_id', '=', 2);
        });
        // 受付担当者 名前取得
        $query->leftJoin('users as u1', 'inquiries.reception_contact_id', '=', 'u1.id');
        // 営業担当者 名前取得
        $query->leftJoin('users as u2', 'inquiries.sales_contact_id', '=', 'u2.id');
            
        /* --------------------
           取得項目
        ----------------------- */
        $query->select('inquiries.*',
                        's1.name as inquiry_status_name',
                        'u1.name as reception_contact_name',
                        'u2.name as sales_contact_name'
        );

        /* --------------------
           条件指定
           ※SQL Serverの文字列は単一引用符で囲む必要がある
             例えばwhereでreplaceを使用する場合など要注意
        ----------------------- */
        // 問合せ日(開始日)
        if (isset($cond['cond_st_Date']) && ('' != $cond['cond_st_Date'])) {
            $query->whereDate('inquiry_date', '>=', $cond['cond_st_Date']);
        }
        // 問合せ日(終了日)
        if (isset($cond['cond_ed_date']) && ('' != $cond['cond_ed_date'])) {
            $query->whereDate('inquiry_date', '<=', $cond['cond_ed_date']);
        }
        // 顧客名
        if (isset($cond['cond_name']) && ('' != $cond['cond_name'])) {
            $cond_name = $cond['cond_name'];
            $query->where(function($query) use($cond_name) {
                $query->where('inquirer_name', 'like', '%' . $cond_name . '%')
                        ->orwhere('inquirer_abbreviation', 'like', '%' . $cond_name . '%');
            });
        }
        // 顧客名カナ
        if (isset($cond['cond_kana']) && ('' != $cond['cond_kana'])) {
            $query->where('inquirer_kana', 'like', '%' . $cond['cond_kana'] . '%');
        }
        // 問合せ概要
        if (isset($cond['cond_summary']) && ('' != $cond['cond_summary'])) {
            $query->where('inquiry_summary_code', 'like', '%' . $cond['cond_summary'] . '%');
        }
        // 問合せ内容
        if (isset($cond['cond_contents']) && ('' != $cond['cond_contents'])) {
            $query->where('inquiry_contents', 'like', '%' . $cond['cond_contents'] . '%');
        }
        // 問合せステータス
        if (isset($cond['cond_status']) && ('' != $cond['cond_status'])) {
            $query->where('inquiry_status', $cond['cond_status']);
        }
        // 営業担当者
        if (isset($cond['cond_sales_contact']) && ('' != $cond['cond_sales_contact'])) {
            $query->where('sales_contact_id', $cond['cond_sales_contact']);
        }
        // sql実行文を確認
        // dd($query->toSql(), $query->getBindings());

        $inquiries = $query->limit(1000)->get();

        return $inquiries;
    }
}
