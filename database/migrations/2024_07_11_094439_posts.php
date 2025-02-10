<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use LaravelCommunity\CommunityFeatures;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Config::get('community.posts_table', 'posts'), function (Blueprint $table) {
            $table->id();
            $table->foreignId('publisher_id')
                    ->references('id')
                    ->on('users');

            $table->text('text_content')->nullable();

            if(CommunityFeatures::canPublishWith('image')){
                $table->string(
                    CommunityFeatures::canPublishWith('multi-images') ? 'images' : 'image'
                )->nullable();
            }

            if(CommunityFeatures::canPublishWith('file')){
                $table->string(
                    CommunityFeatures::canPublishWith('multi-files') ? 'files' : 'file'
                )->nullable();
            }

            if(CommunityFeatures::canPublishWith('video')){
                $table->string('video')->nullable();
            }

            if(CommunityFeatures::canPublishWith('feeling')){
                $table->string('feeling')->nullable();
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Config::get('community.posts_table', 'posts'));
    }
};
