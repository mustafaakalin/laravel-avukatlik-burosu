<?php

namespace App\Models;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'blog_post_id',
        'author',
        'content'];

    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }
}
