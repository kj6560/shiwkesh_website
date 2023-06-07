<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        return view('site.views.index', ['settings' => $request->get('settings')]);
    }
    public function fallback(Request $request)
    {
        echo "hmm looks like we don't have what you want";
    }
}
