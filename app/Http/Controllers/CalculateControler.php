<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateControler extends Controller
{
    public function perimeter(Request $request) {
        $val1 = $request->input('value1');
        $val2 = $request->input('value2');

        return $val1 * 2 + $val2 * 2;
    }

    public function cuboid(Request $request)
    {
        $l = $request->input('length');
        $w = $request->input('width');
        $h = $request->input('height');

        return $l * $w * $h;
    }

    public function area(Request $request)
    {
        $l = $request->input('value');

        return $l ** 2;
    }
}
