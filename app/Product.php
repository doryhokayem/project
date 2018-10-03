<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 

class Product extends Model
{   
    use SoftDeletes;

    public function category()
    {
        return $this->hasOne(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    protected $dates = [ 'deleted_at' ];
    protected $fillable=['name', 'active','price'];
      
}
