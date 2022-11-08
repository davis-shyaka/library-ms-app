<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author_id', 'description', 'category_id', 'language', 'format', 'publisher', 'isbn', 'quantity'];

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function borrowedbook()
    {
        return $this->hasMany(BorrowedBook::class);
    }
}
