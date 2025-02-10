<?php

namespace LaravelCommunity\Models\LaravelCommunity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use LaravelCommunity\Enums\CommunityColumns;
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
        $cols = [];

        foreach (LaravelCommunityFeatures::enabledFeatures() as $feature => $bool){
            $cols[] = strtolower( CommunityColumns::findByValue($feature)->name );
        }

        $this->fillable = array_merge($this->fillable, $cols);
    }

    protected $fillable = [
        'publisher_id',
        'text_content',
    ];
}
