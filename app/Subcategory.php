<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
   protected $fillable = ['parent', 'category_id'];

   public function product()
    {
    	return $this->hasOne(Produk::class);
    }
    
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
