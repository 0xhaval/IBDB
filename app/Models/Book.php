<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, $req)
    {
        $query->where(function ($query) use ($req) {
            $query->where('title', 'LIKE', '%' . $req . '%')
            ->orWhere('isbn', 'LIKE', '%' . $req . '%')
            ->orWhere('author', 'LIKE', '%' . $req . '%');
        });
    }

    public function getImagePathAttribute()
    {
        return asset("files/book_images/{$this->image}");
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
