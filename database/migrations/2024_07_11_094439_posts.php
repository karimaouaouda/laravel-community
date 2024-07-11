<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use LaravelCommunity\Facades\LaravelCommunityFeatures;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table(Config::get('community.posts_table', 'posts'), function (Blueprint $table) {

            $table->foreignId('publisher_id')
                    ->references('id')
                    ->on(\App\Models\User::class);

            $table->text('text_content')->nullable();

            if(LaravelCommunityFeatures::canPublishWith('image')){
                $table->string(
                    LaravelCommunityFeatures::canPublishWith('multi-images') ? 'images' : 'image'
                )->nullable();
            }

            if(LaravelCommunityFeatures::canPublishWith('file')){
                $table->string(
                    LaravelCommunityFeatures::canPublishWith('multi-files') ? 'files' : 'file'
                )->nullable();
            }

            if(LaravelCommunityFeatures::canPublishWith('video')){
                $table->string('video')->nullable();
            }

            if(LaravelCommunityFeatures::canPublishWith('feeling')){
                $table->string('feeling')->nullable();
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};
