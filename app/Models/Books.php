<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $guarded = false;

    public function category(){

        return  $this->belongsTo(Categories::class, 'category_id', 'id');
    }

    public function author(){
        return  $this->belongsTo(Authors::class, 'author_id', 'id');
    }



}
