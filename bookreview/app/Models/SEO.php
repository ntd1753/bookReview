<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
    public function postId()
    {
        return $this -> hasOne(Review::class,   "id", "review_id");
    }
}
