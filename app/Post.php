<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    /**
     * Get the author that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    /**
     * Get the category that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the image that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Get the video that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    /**
     * Get the tag that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get all of the comments for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function link()
    {
        return '/post/' . $this->id;
    }
}
