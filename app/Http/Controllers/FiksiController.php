<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fiksi;


class FiksiController extends Controller
{
    public function index(){
        return view('fiksi', [
            'title' => 'fiksi',
            'books' => Fiksi::all()
        ]);
    }

    public function show($slug){
        return view('fiksis',[
            "title" => "single post",
            "books_fiksi" => Fiksi::find($slug)
        ]);
    }    
}
