<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        // return 'ok';
        return view('welcome');
    }

    public function about($abc = '')
    {
        return view('pages.about',compact('abc'));
    }


    public function contact(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => 'required|min:3',
            'message' => 'required|min:10|max:256'
        ]);

        return 'ok';
    }
}
