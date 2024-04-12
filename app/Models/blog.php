<?php

namespace App\Models;

use App\Models\comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class blog extends Model
{
    use HasFactory;
    protected $guarded=[] ;
    function comments (){ return $this->hasMany(comment::class , 'blog_id') ; }
}
