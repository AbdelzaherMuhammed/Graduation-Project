<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{


    protected $fillable = ['name', 'type', 'choices', 'mark_when_correct', 'mark_when_false'];


    protected $casts = [
        'choices' => 'array'
    ];

}