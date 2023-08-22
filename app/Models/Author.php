<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable=[
        'authorName',
    ];
    // belong to many relationship with author
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
