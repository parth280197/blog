<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //completely block mass assignment Post::create(['title'=>'title',......])
    //completely block mass assignment - use if we are creating/updating data from forms.
    protected $guarded = [];

//    protected $guarded = ['id']; id is not mass assignable here

//    protected $fillable = ['title', 'excerpt', 'body']; mentioned properties are mass assignable.
}
