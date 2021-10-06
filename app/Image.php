<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];
    /**
     * Get the post that owns the Image
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
