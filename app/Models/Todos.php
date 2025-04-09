<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todos extends Model
{
    protected $guarded = [];

    public function user (){
        $this->belongsTo(User::class);
    }
}
