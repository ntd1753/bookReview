<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function parentCategory(){
        return $this->belongsTo(Category::class, "category_parent_id");
    }

    public function childs():HasMany{
        return $this->hasMany(Category::class, "category_parent_id");
    }

}
