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

            $table->string('storage_disk')->default('public');

            $table->text('text_content')->nullable();

            if(CommunityFeatures::canPublishWith(\LaravelCommunity\Enums\PostFeatures::IMAGE)){
                $table->string('image')->nullable();
            }

            if(CommunityFeatures::canPublishWith(\LaravelCommunity\Enums\PostFeatures::FILE)){
                $table->string('file')->nullable();
            }

            if(CommunityFeatures::canPublishWith(\LaravelCommunity\Enums\PostFeatures::VIDEO)){
                $table->string('video')->nullable();
            }

            if(CommunityFeatures::canPublishWith(\LaravelCommunity\Enums\PostFeatures::FEELING)){
                $table->string('feeling')->nullable();
            }

            $table->timestamps();

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
