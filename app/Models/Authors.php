<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;

    protected $table = 'authors';
    protected $guarded = false;

    public function books(){
        return $this->hasMany(Books::class, 'author_id', 'id');
    }

    public function getName(){
        return $this->name;
    }

}
