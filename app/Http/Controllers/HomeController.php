<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        try {
            return view('home');
        } catch (\Exception $e) {
            // エラーが発生した場合の処理を追加します
            return response()->view('errors.custom', ['message' => $e->getMessage()], 500);
        }
    }
}
