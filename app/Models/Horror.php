<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horror extends Model
{
    use HasFactory;
    // protected $fillable = ['title','author','excerpt','body', 'img'];
    protected $guarded = ['id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
