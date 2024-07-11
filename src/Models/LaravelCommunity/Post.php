<?php

namespace LaravelCommunity\Models\LaravelCommunity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use LaravelCommunity\Facades\LaravelCommunityFeatures;

class Post extends Model
{
    public function __construct(array $attributes = [])
    {
        $this->table = Config::get('community.posts_table', 'posts');

        $this->setupFillable();
        parent::__construct($attributes);
    }

    protected function setupFillable() : void
    {
        $features = [];

        foreach (LaravelCommunityFeatures::enabledFeatures() as $feature => $bool){
            dd($feature);
        }
    }

    protected $fillable = [
        'publisher_id',
        'text_content',
    ];
}
