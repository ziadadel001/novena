<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactmessage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','email','subject','phone','message'
    ];
    public $timestamps = false;
}
