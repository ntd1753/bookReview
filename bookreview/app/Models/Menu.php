<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Menu extends Model
{
    use HasFactory;
    public function parentMenu(){
        return $this->belongsTo(Menu::class, "menu_parent_id");
    }

    public function childs():HasMany{
        return $this->hasMany(Menu::class, "menu_parent_id");
    }
}
