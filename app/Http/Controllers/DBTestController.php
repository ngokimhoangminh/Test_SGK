<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBTestController extends Controller
{
    //

    public function index()
    {

        $cn = DB::connection('sqlsrv');
        $sql = 'select * from table1';
        $param = [];
        $query = $cn->select(DB::raw($sql), $param);
        return $query;

    }

}
