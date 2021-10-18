<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Segment extends Model
{
    use HasFactory;

    // タイムスタンプを無効
    public $timestamps = false;
}
