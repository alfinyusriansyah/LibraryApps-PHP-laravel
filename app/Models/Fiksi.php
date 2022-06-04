<?php

namespace App\Models;

class Fiksi
{
    private static $fiksi_book = [
        [
            "title" => "Buku 1",
            "author" => "reza darmawan",
            "slug" => "buku ke 1",
            "body" => "Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan 
            penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks 
            sejak tahun 1500an ......"
            ],
    
            [
            'title' => "Buku 2",
            'author' => "Alfin",
            "slug" => "buku ke 2",
            "body" => "Image captioning is a challenge in computer vision research. 
            This paper extends research on automatic image captioning generation in 
            the Indonesian dimension. Description in Indonesian sentences is generated 
            for unlabeled images. The dataset used is FEEH-ID, this is the first 
            Indonesian image captioning dataset ......"
            ]
    
            ];

    public static function all(){
        return collect(self::$fiksi_book);
    }   
    
    public static function find($slug){
        $book_fiksi = static::all();
        
        // $fiksis = [];
        // foreach($book_fiksi as $buku) {
        //     if($buku['slug'] == $slug){
        //     $fiksis = $buku;
        //     }
        // }

        return $book_fiksi-> firstWhere('slug', $slug);
    }
}
