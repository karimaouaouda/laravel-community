<?php

namespace LaravelCommunity\Models\LaravelCommunity;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $fillable = [
        'user_id',
        'post_id'
    ];
}
