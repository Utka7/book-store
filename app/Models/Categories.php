<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'category';
    protected $guarded = false;

    public function books(){
        return $this->hasMany(Book::class, 'category_id', 'id');
    }

}
