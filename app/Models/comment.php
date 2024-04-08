<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;


    protected $fillable = [
        'username', 'email', 'comment_text','blog_id'
    ];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
