<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HobbyItem extends Model
{
    protected $fillable = ['hobby_id', 'title', 'content', 'metadata'];

    protected $casts = [
        'metadata' => 'array'
    ];

    public function hobby()
    {
        return $this->belongsTo(Hobby::class);
    }
}