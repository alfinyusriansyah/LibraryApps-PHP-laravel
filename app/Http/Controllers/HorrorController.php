<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Horror;

class HorrorController extends Controller
{
    public function index(){
        return view('horror', [
            'title' => 'horror',
            'books_horror' => Horror::all()
        ]);
    }

    public function show(Horror $horror){
        return view('horrors',[
            "title" => "single post",
            "book_horror" => $horror
        ]);
    }
}
