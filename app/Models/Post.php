<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //use Post::without(['category','author'])->all() if you dont want it to load eagerly.
    //but rest if we set with property it will fetch all associated data.
    protected $with = ['category','author'];

    //completely allow mass assignment Post::create(['title'=>'title',......])
    //completely block mass assignment - use if we are creating/updating data from forms.
    protected $guarded = [];

    public function getRouteKey()
    {
        return 'slug';
    }
//    protected $guarded = ['id']; id is not mass assignable here

//    protected $fillable = ['title', 'excerpt', 'body']; mentioned properties are mass assignable.

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class,'user_id');
    }
}
