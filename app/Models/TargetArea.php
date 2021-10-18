<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TargetArea extends Model
{
    use HasFactory;

    // タイムスタンプを無効
    public $timestamps = false;

    /**
     * 住所情報取得
     * @param  [array] $cond [検索条件]
     * @return $address_data [住所情報(対象エリア情報)]
     */
    public function getAddressData($cond)
    {

        // 条件を付加してデータ取得
        $query = TargetArea::query();
 
        /* --------------------
           取得項目
        ----------------------- */
        // $query->select('target_areas.*');

        /* --------------------
           条件指定
           ※SQL Serverの文字列は単一引用符で囲む必要がある
             例えばwhereでreplaceを使用する場合など要注意
        ----------------------- */
        // 郵便番号
        if (isset($cond['cond_postal_code']) && ('' != $cond['cond_postal_code'])) {
            $cond_postal_code = str_replace(array(' ', '　', '-', 'ー', '−', '―', '‐'), '', $cond['cond_postal_code']);
            $query->whereRaw("replace(postal_code, '-', '') = ?", [$cond_postal_code]);
        }
        // sql実行文を確認
        // dd($query->toSql(), $query->getBindings());

        $address_data = $query->get();

        return $address_data;
    }
}
