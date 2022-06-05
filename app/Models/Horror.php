<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horror
{
    private static $horror_book = [
        [
            "title" => "Misteri Boneka Okiku Asal Jepang yang Rambutnya Terus Tumbuh",
            "img" => "2842657401.jpg",
            "author" => "reza darmawan",
            "slug" => "horor 1",
            "body" => "Boneka Okiku merupakan sebuah boneka menyeramkan yang berada di sebuah kuil
            di Iwamizawa, Jepang. Ada kisah menarik sekaligus misterius dari boneka yang sudah 
            ada sejak 1 abad yang lalu ini. Melansir dari laman odditycentral.com, boneka 
            Okiku merupakan boneka yang dijuluki sebagai boneka hantu dan begitu ditakuti di Hokaido."
            ],
    
            [
            'title' => "Lampor, Si Pembawa Keranda",
            'img' => "963530898.jpg",
            'author' => "Alfin",
            "slug" => "horor 2",
            "body" => " Indonesia memiliki berbagai cerita yang identik 
            dengan kisah mistis dan horor, namun cerita ini konon adalah kisah nyata. Bahkan ada cerita yang terdengar hanya fiktif belaka.
            Bukan hanya memiliki tempat yang membuat merinding sekujur tubuh, tapi Indonesia ini juga memiliki cerita seram yang bisa diturunkan untuk beberapa generasi setelah kita.."
            ]
    ];

    # collect bisa dijadikan sebagai sebuah penyimpanan dari kumpulan sebuah data.
    public static function all(){
        return collect(self::$horror_book);
    }

    public static function find($slug){
        $book_horror = static::all();
        return $book_horror -> firstWhere('slug', $slug);
    } 
}
