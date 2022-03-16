<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function postData(Request $request){
        $name = request('name');
        // $temp = request('temp');

        Test::create([
            'test' => $name,
            // 'temp' => $temp,
        ]);

        return response()->json([
            'data' => 'Data Saved Successfully'
        ]);
    }
}
