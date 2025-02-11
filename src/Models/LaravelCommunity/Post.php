<?php

namespace LaravelCommunity\Models\LaravelCommunity;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'publisher_id',
        'text_content',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'publisher_id');
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function shares(){
        return $this->hasMany(Share::class);
    }


    //functions

    public function like($user_id){
        $this->likes()->create([
           'user_id' => $user_id,
        ]);
    }

    public function dislike($user_id){
        $this->likes()->where('user_id', $user_id)->delete();
    }

    public function isLikedBy($user_id) : bool{
        return $this->likes()->where('user_id', $user_id)->exists();
    }

    public function addComment(string $comment, int $user_id) : void
    {
        $this->comments()->create([
           'user_id' => $user_id,
           'comment' => $comment,
        ]);
    }
}
