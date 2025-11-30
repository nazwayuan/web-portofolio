<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $fillable = ['name', 'icon', 'description', 'type'];

    public function items()
    {
        return $this->hasMany(HobbyItem::class);
    }
}