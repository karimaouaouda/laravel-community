<?php

namespace LaravelCommunity;


use Illuminate\Contracts\Foundation\Application;
use Livewire\Livewire;

/**
 * @method public function hi()
*/

class CommunityFeatures
{
    protected array $features = [
        'post-with-feelings' => false,
        'post-with-image' => false,
        'post-with-video' => false,
        'post-with-multi-images' => false,
        'post-with-file' => false,
        'post-with-multi-files' => false,
    ];
   public function __construct(protected Application $app)
    {
    }

    public function postWithFeelings(): void
    {
       $this->features['post-with-feelings'] = true;
    }

    public function postWithImage(bool $multiImage = false): void
    {
        $this->features['post-with-image'] = true;

        if($multiImage){
            $this->features['post-with-multi-images'] = true;
        }
    }

    public function postWithFile(bool $multiFile = false): void
    {
        $this->features['post-with-file'] = true;

        if($multiFile){
            $this->features['post-with-multi-files'] = true;
        }
    }

    public function postWithVideo(): void
    {
        $this->features['post-with-video'] = true;
    }

    public function canPublishWith(string $feature){
       return $this->features['post-with-' . $feature];
    }
}
