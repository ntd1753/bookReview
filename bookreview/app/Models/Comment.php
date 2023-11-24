<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;
    public function parentComment(){
        return $this->belongsTo(Comment::class, "parent_id");
    }

    public function childs():HasMany{
        return $this->hasMany(Comment::class, "parent_id");
    }
}
