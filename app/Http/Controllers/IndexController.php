<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello World!',
        ]);
    }
}
