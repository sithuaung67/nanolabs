<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function getRank()
    {
        $sql6=DB::select("SELECT id,name,score, FIND_IN_SET( score, (
                                    SELECT GROUP_CONCAT( DISTINCT score
                                    ORDER BY score DESC ) FROM scores)
                                    ) AS rank
                                    FROM scores");
//        $sql6=Score::all();
        return response()->json($sql6);
    }
}
