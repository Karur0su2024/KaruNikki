<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyEntry extends Model
{
    protected $fillable = ['date', 'content', 'icon'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
