<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Review extends Model
{
    use HasFactory;



    public function seo(){
        return $this -> belongsTo(SEO::class, "id", "review_id");
    }
    public function owner()
    {
        return $this->hasOne(User::class, "id", "user_id");
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
