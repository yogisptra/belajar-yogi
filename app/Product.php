<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'brand', 'description', 'category_id', 'subcategory_id'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
    	return $this->belongsTo(Subcategory::class);
    }
    

}

