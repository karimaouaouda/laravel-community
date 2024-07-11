<?php

namespace LaravelCommunity\Models\LaravelCommunity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Post extends Model
{
    public function __construct(array $attributes = [])
    {
        $this->table = Config::get('community.posts_table', 'posts');
        parent::__construct($attributes);
    }
}
